<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/Broadworks_OCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder;

use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Session\Session;

/**
 * Class Builder - Takes a ComplexType and converts to XML or XML string then wraps it in an envelope ready for shipping.
 *
 * @package Broadworks_OCIP\core\Builder
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
        $oci .= '<command xsi:type="' . $command->getName() . '" xmlns="">';
        foreach ($command->getElements() as $element) {
            if ($element InstanceOf ComplexType) {
                $oci .= self::buildComplex($element);
            } elseif ($element InstanceOf SimpleType) {
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
        $oci = "<{$complex->getName()}>";
        foreach ($complex->getElements() as $element) {
            $oci .= ($element InstanceOf ComplexType)
                ? self::buildComplex($element)
                : self::buildSimple($element);
        }
        $oci .= "</{$complex->getName()}>";
        return $oci;
    }

    /**
     * Builds a SimpleType, single key=>value pair into XML.
     *
     * @param SimpleType $simple
     * @return string
     */
    public static function buildSimple(SimpleType $simple)
    {
        if (empty($simple->getValue())) return '';
        return "<{$simple->getName()}>{$simple->getValue()}</{$simple->getName()}>";
    }
}
