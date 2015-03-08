<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 *
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\core\Response;

use Broadworks_OCIP\core\Logging\ErrorControl;

class Response
{
    private $response = false;
    private $responseBody = null;


    public function __construct($response, $outputType)
    {
        $this->response = $response;
        $this->responseBody = $response;
        if (preg_match('/SuccessResponse/', $this->response)) return $this->SuccessResponse();
        if (preg_match('/ErrorResponse/', $this->response)) return $this->ErrorResponse();
        if (preg_match('/<command .*>(.*)<\/command>/', $this->response, $cmdResponse)) {
            $this->OCIResponse($cmdResponse[0], $outputType);
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

    private function OCIResponse($cmdResponse, $outputType)
    {   $cmdResponse = str_replace('xsi:type', 'type', $cmdResponse);
        switch ($outputType) {
            case ResponseOutput::STD:
                $this->response = (object)json_decode(json_encode((array)simplexml_load_string($cmdResponse, 'SimpleXMLElement', 0, "", true)), 1);
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
            case ResponseOutput::TABLE:
                require_once 'Console/Table.php';
                $tbl = new Console_Table();
                $data = simplexml_load_string($cmdResponse, 'SimpleXMLElement', 0, "", true);
                $table = $data->children()[0];
                if (strpos($table->getName(), 'Table')) {
                    $headers = (array)$table->children()->colHeading;
                    $tbl->setHeaders($headers);
                    foreach ($table->children()->row as $row) {
                        $tbl->addRow((array)$row->col);
                    }
                } else {
                    $data = (array)$data;
                    unset($data{"@attributes"});
                    $tbl->setHeaders(array_keys($data));
                    $tbl->addRow(array_values($data));
                }
                $this->response = $tbl->getTable();
                break;
            case ResponseOutput::PRETTY:
                $response = (object)json_decode(json_encode((array)simplexml_load_string($cmdResponse, 'SimpleXMLElement', 0, "", true)), 1);
                //$this->response = $this->pdump($response);
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