<?php
require_once 'OCIDataTypes.php';

class OCIBuilder {
    public $sessionId = null;

    const SOAP_HEAD = '<?xml version="1.0" encoding="UTF-8"?>
<soapenv:Envelope
 xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/"
 xmlns:xsd="http://www.w3.org/2001/XMLSchema"
 xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">
<soapenv:Body>
<processOCIMessage soapenv:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
<arg0 xsi:type="soapenc:string" xmlns:soapenc="http://schemas.xmlsoap.org/soap/encoding/">';

    const SOAP_TAIL          = '</arg0></processOCIMessage></soapenv:Body></soapenv:Envelope>';
    const BROADSOFT_DOC_HEAD = '<BroadsoftDocument protocol="OCI" xmlns="C" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance">';
    const BROADSOFT_DOC_TAIL = '</BroadsoftDocument>';

    public function __construct($sessionId) {
        $this->sessionId = $sessionId;
    }

    public function build($command) {
        $oci = OCIBuilder::BROADSOFT_DOC_HEAD;
        $oci .= '<sessionId xmlns="">'.$this->sessionId.'</sessionId>';
        $oci .= '<command xsi:type="'.$command[OCIDataTypes::OCI_NAME].'" xmlns="">';
        foreach ($command[OCIDataTypes::OCI_PARAMS] as $key => $value) {
            $oci .= "<$key>$value</$key>";
        }
        $oci .= '</command>';
        $oci .= OCIBuilder::BROADSOFT_DOC_TAIL;
        return str_replace("\n", "", OCIBuilder::SOAP_HEAD) . htmlentities($oci) . OCIBuilder::SOAP_TAIL;
    }
}