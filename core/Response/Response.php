<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Response;

use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Serializer\XMLSerializer;
use Broadworks_OCIP\core\Logging\ErrorControl;
use Broadworks_OCIP\core\Builder\Builder;


class Response
{
    private $response = false;
    private $responseBody = null;


    public function __construct($response, $responseType, $outputType, $appends)
    {
        $this->response = $response;
        $this->responseBody = $response;
        if (preg_match('/SuccessResponse/', $this->response)) return $this->SuccessResponse();
        if (preg_match('/ErrorResponse/', $this->response)) return $this->ErrorResponse();
        if (preg_match('/<command .*>(.*)<\/command>/', $this->response, $cmdResponse)) {
            $this->OCIResponse($cmdResponse[0], $responseType, $outputType, $appends);
            return true;
        }
        return false;
    }

    private function SuccessResponse()
    {
        $this->response = true;
        return true;
    }

    private function ErrorResponse()
    {
        $errorControl = new ErrorControl();
        if (preg_match('/<summaryEnglish>(.*)<\/summaryEnglish>/', $this->response, $summaryEnglish)) {
            $errorControl->addError($summaryEnglish[1]);
        }
        if (preg_match('/<detail>(.*)/', $this->response, $detail)) {
            $errorControl->addError($detail[1]);
        }
        $this->response = false;
        return false;
    }

    private function OCIResponse($cmdResponse, $responseType, $outputType, $appends)
    {
        $cmdResponse = str_replace('xsi:type', 'type', $cmdResponse);
        if (count($appends) >= 1) {
            $cmdResponse = str_replace("</command>", '', $cmdResponse);
            foreach ($appends as $element) {
                if ($element InstanceOf ComplexType) {
                    $cmdResponse .= Builder::buildComplex($element);
                } elseif ($element InstanceOf SimpleType) {
                    $cmdResponse .= Builder::buildSimple($element);
                }
            }
            $cmdResponse .= "</command>";
        }
        switch ($outputType) {
            case ResponseOutput::STD:
                $serializer = new XMLSerializer();
                $object = $serializer->serialize($responseType, $cmdResponse);
                $this->response = $object;
                break;
            case ResponseOutput::XML:
                $this->response = $cmdResponse;
                break;
            case ResponseOutput::JSON:
                $this->response = json_encode(simplexml_load_string($cmdResponse, 'SimpleXMLElement', 0, "", true), JSON_PRETTY_PRINT);
                break;
            case ResponseOutput::SIMPLEXML:
                $this->response = simplexml_load_string($cmdResponse, 'SimpleXMLElement', 0, "", true);
                break;
            case ResponseOutput::PRETTY:
                $response = (object)json_decode(json_encode((array)simplexml_load_string($cmdResponse, 'SimpleXMLElement', 0, "", true)), 1);
                $this->response = $response;
                break;
        }
    }

    public function pdump($data, $indent = 0)
    {
        $retval = '';
        $prefix = \str_repeat('    ', $indent);
        if (\is_numeric($data)) $retval .= "Number: $data";
        elseif (\is_string($data)) $retval .= "String: '$data'";
        elseif (\is_null($data)) $retval .= "NULL";
        elseif ($data === true) $retval .= "TRUE";
        elseif ($data === false) $retval .= "FALSE";
        elseif (is_array($data)) {
            $retval .= "Array (" . count($data) . ')';
            $indent++;
            foreach ($data AS $key => $value) {
                $retval .= "\n$prefix [$key] = ";
                $retval .= $this->pdump($value, $indent);
            }
        } elseif (is_object($data)) {
            $retval .= "Object (" . get_class($data) . ")";
            $indent++;
            foreach ($data AS $key => $value) {
                $retval .= "\n$prefix $key -> ";
                $retval .= $this->pdump($value, $indent);
            }
        }
        return $retval;
    }

    public function UnknownResponse()
    {
        $errorControl = new ErrorControl();
        $errorControl->addError("Unable to parse: {$this->response}");
        $this->response = false;
        return null;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function getResponseBody()
    {
        return $this->responseBody;
    }
}