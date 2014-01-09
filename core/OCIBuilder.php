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
        if ($command[OCIDataTypes::OCI_PARAMS] != null) {
            foreach ($command[OCIDataTypes::OCI_PARAMS] as $key => $value) {
                if (is_string($value)) {
                    $oci .= $this->buildElement($key, $value);
                } elseif (is_array($value)) {
                    $oci .= $this->buildArray($key, $value);
                }
            }
        }
        $oci .= '</command>';
        $oci .= OCIBuilder::BROADSOFT_DOC_TAIL;
        return str_replace("\n", "", OCIBuilder::SOAP_HEAD) . htmlentities($oci) . OCIBuilder::SOAP_TAIL;
    }

    private function buildElement($key, $value) {
        $return = ($value === OCIDataTypes::XSI_NIL)
            ? "<$key ".OCIDataTypes::XSI_NIL.'="true"/>'
            : "<$key>$value</$key>";
        return $return;
    }

    private function buildArray($key, $value) {
        $oci = "<$key>";
        foreach ($value as $k => $v) {
            $oci .= (is_array($v))
                ? $this->buildArray($k, $v)
                : $this->buildElement($k, $v);
        }
        $oci .= "</$key>";
        return $oci;
    }

    public static function buildSearch($search) {
        $result = null;
        foreach ($search[OCIDataTypes::OCI_PARAMS] as $key => $value) {
            if ($value) {
                $result .= "<$key>$value</$key>";
            }
        }
        return $result;
    }

    // Maps OCITable into an array of requests, cheat code.
    //  $device_parmas = $this->mapTable($device['device'], OCISchemaGroup::GroupAccessDeviceModifyUserRequest())[0];
    //  $user_command  = $this->mapTable($device['userList'], $device_parmas)[0];
    //  $output       .= $this->createConfigCSV(['schema' => 'OCISchemaGroup', 'command' => $user_command])."\r\n";
    public static function mapTable($response, $request) {
        $response = (array) $response;
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
                    $map['Params'] = array_combine(array_keys($headings), array_values($item));
                    $requests[] = OCIBuilder::map($map, $request);
                }
            }
        }
        return $requests;
    }

    // Maps response into a new request
    public static function map($response, $request) {
        $response = (array) $response;
        foreach ($response[OCIDataTypes::OCI_PARAMS] as $k => $v) {
            if (array_key_exists($k, $request[OCIDataTypes::OCI_PARAMS])) {
                $request[OCIDataTypes::OCI_PARAMS][$k] = $v;
            }
        }
        return $request;
    }
}
