<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Builder;

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Builder\Types\SimpleType;


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
    public $session = null;

    public function __construct(&$session = null)
    {
        $this->session = &$session;
    }

    public static function buildSearch($search)
    {
        $result = null;
        foreach ($search[OCIDataTypes::OCI_PARAMS] as $key => $value) {
            if ($value) {
                $result .= "<$key>$value</$key>";
            }
        }
        return $result;
    }

    public static function mapTable($response, $request)
    {
        $response = (array)$response;
        $headings = $requests = [];
        foreach ($response as $k => $v) {
            if ((substr($k, -5) == 'Table') && (array_key_exists('row', $response[$k]))) {
                foreach ($response[$k]['colHeading'] as $heading) {
                    // 'line/port' to 'linePort'
                    if (preg_match('/\//', $heading)) {
                        $heading = str_replace('/', ' ', $heading);
                    }
                    // 'Primary Line Port' to 'is Primary Line Port'
                    if ($heading == 'Primary Line Port') {
                        $heading = "is $heading";
                    }
                    // 'First Name' to 'firstName' etc...
                    $camelCased = lcfirst(str_replace(' ', '', ucwords(strtolower($heading))));
                    $headings[$camelCased] = null;
                }
                foreach ($response[$k]['row'] as $item) {
                    $map = array_combine(array_keys($headings), array_values($item));
                    $requests[] = OCIBuilder::map($map, $request);
                }
            }
        }
        return $requests;
    }

    public static function map($response, $request)
    {
        $response = (array)$response;
        foreach ($response as $k => $v) {
            if (array_key_exists($k, $request[OCIDataTypes::OCI_PARAMS])) {
                $request[OCIDataTypes::OCI_PARAMS][$k] = $v;
            }
        }
        return $request;
    }

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
                . str_replace("\n", "", self::SOAP_HEAD)
                . htmlentities($oci)
                . self::SOAP_TAIL;
            case 'TCP':
                return self::XML_HEAD . $oci;
            default:
                return '';

        }
    }

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

    public static function buildSimple(SimpleType $simple)
    {
        if (empty($simple->getValue())) return '';
        return "<{$simple->getName()}>{$simple->getValue()}</{$simple->getName()}>";
    }
}
