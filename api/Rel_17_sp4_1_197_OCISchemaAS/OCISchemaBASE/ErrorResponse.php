<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE\ErrorResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The ErrorResponse is concrete response sent whenever a transaction fails and does not return any data.
 */
class ErrorResponse extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $errorCode      = null;
    protected $summary        = null;
    protected $summaryEnglish = null;
    protected $detail         = null;

    /**
     * @return ErrorResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setErrorCode($errorCode = null)
    {
        $this->errorCode = (int) $errorCode;
    }

    /**
     * 
     */
    public function getErrorCode()
    {
        return (!$this->errorCode) ?: $this->errorCode;
    }

    /**
     * 
     */
    public function setSummary($summary = null)
    {
        $this->summary = (string) $summary;
    }

    /**
     * 
     */
    public function getSummary()
    {
        return (!$this->summary) ?: $this->summary;
    }

    /**
     * 
     */
    public function setSummaryEnglish($summaryEnglish = null)
    {
        $this->summaryEnglish = (string) $summaryEnglish;
    }

    /**
     * 
     */
    public function getSummaryEnglish()
    {
        return (!$this->summaryEnglish) ?: $this->summaryEnglish;
    }

    /**
     * 
     */
    public function setDetail($detail = null)
    {
        $this->detail = (string) $detail;
    }

    /**
     * 
     */
    public function getDetail()
    {
        return (!$this->detail) ?: $this->detail;
    }
}
