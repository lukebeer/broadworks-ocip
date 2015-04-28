<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Builder;

use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Session\Session;

/**
 * Class Builder - Takes a ComplexType and converts to XML or XML string then wraps it in an envelope ready for shipping.
 *
 * @package BroadworksOCIP\Builder
 */
class Builder
{
    const XML_HEAD = '<?xml version="1.0" encoding="UTF-8"?>';
    const SOAP_HEAD = '
<soapenv:Envelope
 xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"
 xmlns:xsd="http://www.w3.org/2001/XMLSchema"
 xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
<soapenv:Body>
<processOCIMessage soapenv:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
<arg0 xsi:type="soapenc:string" xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/">';
    const SOAP_TAIL = '</arg0></processOCIMessage></soapenv:Body></soapenv:Envelope>';
    const BROADSOFT_DOC_HEAD = '<BroadsoftDocument protocol="OCI" xmlns="C" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">';
    const BROADSOFT_DOC_TAIL = '</BroadsoftDocument>';
    public $session;

    /**
     * Constructor.
     *
     * @param null $session
     */
    public function __construct(Session &$session)
    {
        $this->session = &$session;
    }

    /**
     * Generates XML from a ComplexType
     *
     * @param ComplexType $command
     * @return string
     */
    public function build(ComplexType $command)
    {
        $oci = self::BROADSOFT_DOC_HEAD;
        $oci .= '<sessionId xmlns="">' . $this->session->getSessionId() . '</sessionId>';
        $oci .= '<command xsi:type="' . $command->getElementName() . '" xmlns="">';
        foreach ($command->getElements() as $element) {
            if ($element InstanceOf ComplexType) {
                $oci .= self::buildComplex($element);
            } elseif (
                ($element InstanceOf SimpleType)
                || ($element InstanceOf SimpleContent)
                || ($element InstanceOf PrimitiveType)
            ) {
                $oci .= self::buildSimple($element);
            }
        }
        $oci .= '</command>';
        $oci .= self::BROADSOFT_DOC_TAIL;
        switch ($this->session->getTransport()) {
            case 'SOAP':
                return Builder::XML_HEAD
                . str_replace("\n", '', self::SOAP_HEAD)
                . htmlentities($oci)
                . self::SOAP_TAIL;
            case 'TCP':
                return self::XML_HEAD . $oci;
            default:
                return '';

        }
    }

    /**
     * Builds ComplexType recursively into XML.
     *
     * @param ComplexType $complex
     * @return string
     */
    public static function buildComplex(ComplexType $complex)
    {
        $oci = '';
        foreach ($complex->getElements() as $element) {
            if ($element InstanceOf ComplexType) {
                $oci .= self::buildComplex($element);
            } elseif (
                ($element InstanceOf SimpleType)
                || ($element InstanceOf SimpleContent)
                || ($element InstanceOf PrimitiveType)
            ) {
                $oci .= self::buildSimple($element);
            }
        }
        return ($oci) ? "<{$complex->getElementName()}>$oci</{$complex->getElementName()}>" : '';
    }

    /**
     * Builds a SimpleType, single key=>value pair into XML.
     *
     * @param SimpleType $simple
     * @return string
     */
    public static function buildSimple(SimpleType $simple)
    {
        if (empty($simple->getElementValue())) return '';
        return "<{$simple->getElementName()}>{$simple->getElementValue()}</{$simple->getElementName()}>";
    }
}
