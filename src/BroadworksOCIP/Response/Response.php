<?php

/*
 * This file is part of the Broadworks OCIP package https://github.com/LukeBeer/BroadworksOCIP
 *
 * Copyright (c) 2015 Luke Berezynskyj (aka Luke Beer)
 *
 * @author Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\Response;

use BroadworksOCIP\Builder\Builder;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Logging\ErrorControl;
use BroadworksOCIP\Serializer\XMLSerializer;

/**
 * Class Response - Takes XML input and returns response object specified or false if error.
 *
 * @package BroadworksOCIP\Response
 */
class Response
{
    private $response = false;
    private $responseBody;


    /**
     * Constructor.
     *
     * @param string $response
     * @param string $responseType
     * @param int $outputType
     * @param array $appends
     */
    public function __construct($response, $responseType, $outputType, $appends)
    {
        $this->response = $response;
        $this->responseBody = $response;
        if (preg_match('/SuccessResponse/', $this->response)) {
            $this->SuccessResponse();
        }
        if (preg_match('/ErrorResponse/', $this->response)) {
            $this->ErrorResponse();
        }
        if (preg_match('/<command (?:echo|xsi).*>(.*)<\/command>/', $this->response, $cmdResponse)) {
            $this->Response($cmdResponse[0], $responseType, $outputType, $appends);
        }
    }

    /**
     * Command executed fine, that's all folks.
     *
     * @return bool
     */
    private function SuccessResponse()
    {
        $this->response = true;
        return true;
    }

    /**
     * Oh noes, fire zee missiles! ..But I am le' tired.
     * Returns false, adds detail into ErrorControl
     *
     * @return bool
     */
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

    /**
     * Called by the constructor, generates the requested response.
     *
     * @param string $cmdResponse
     * @param string $responseType
     * @param int $outputType
     * @param array $appends
     */
    private function Response($cmdResponse, $responseType, $outputType, $appends)
    {
        $cmdResponse = str_replace('xsi:type', 'type', $cmdResponse);
        if (count($appends) >= 1) {
            $cmdResponse = str_replace('</command>', '', $cmdResponse);
            foreach ($appends as $element) {
                if ($element InstanceOf ComplexType) {
                    $cmdResponse .= Builder::buildComplex($element);
                } elseif ($element InstanceOf SimpleType) {
                    $cmdResponse .= Builder::buildSimple($element);
                }
            }
            $cmdResponse .= '</command>';
        }
        switch ($outputType) {
            case ResponseOutput::STD:
                $serializer = new XMLSerializer();
                $object = $serializer->serialize($responseType, utf8_encode($cmdResponse));
                $this->response = $object;
                break;
            case ResponseOutput::XML:
                $this->response = $cmdResponse;
                break;
            case ResponseOutput::JSON:
                $this->response = json_encode(simplexml_load_string($cmdResponse, 'SimpleXMLElement', 0, '', true), JSON_PRETTY_PRINT);
                break;
            case ResponseOutput::SIMPLEXML:
                $this->response = simplexml_load_string($cmdResponse, 'SimpleXMLElement', 0, '', true);
                break;
            case ResponseOutput::PRETTY:
                $response = (object)json_decode(json_encode((array)simplexml_load_string($cmdResponse, 'SimpleXMLElement', 0, '', true)), 1);
                $this->response = $response;
                break;
        }
    }

    /**
     * Used for debugging, will probably get rid of this mess soon.
     *
     * @param $data
     * @param int $indent
     * @return string
     */
    public function pdump($data, $indent = 0)
    {
        $retval = '';
        $prefix = \str_repeat('    ', $indent);
        if (\is_numeric($data)) $retval .= "Number: $data";
        elseif (\is_string($data)) $retval .= "String: '$data'";
        elseif (\is_null($data)) $retval .= 'NULL';
        elseif ($data === true) $retval .= 'TRUE';
        elseif ($data === false) $retval .= 'FALSE';
        elseif (is_array($data)) {
            $retval .= 'Array (' . count($data) . ')';
            $indent++;
            foreach ($data AS $key => $value) {
                $retval .= "\n$prefix [$key] = ";
                $retval .= $this->pdump($value, $indent);
            }
        } elseif (is_object($data)) {
            $retval .= 'Object (' . get_class($data) . ')';
            $indent++;
            foreach ($data AS $key => $value) {
                $retval .= "\n$prefix $key -> ";
                $retval .= $this->pdump($value, $indent);
            }
        }
        return $retval;
    }

    /**
     * WTF?
     *
     * @return null
     */
    public function UnknownResponse()
    {
        $errorControl = new ErrorControl();
        $errorControl->addError("Unable to parse: {$this->response}");
        $this->response = false;
        return null;
    }

    /**
     * Returns whatever the response is.
     *
     * @return ComplexType|bool|string
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * The Virgin, un-fiddled-with response body from Broadworks.
     *
     * @return null|string
     */
    public function getResponseBody()
    {
        return $this->responseBody;
    }
}
