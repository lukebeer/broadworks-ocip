<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The ErrorResponse is concrete response sent whenever a transaction fails and does not return any data.
 */
class ErrorResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'ErrorResponse';
    protected $errorCode      = null;
    protected $summary        = null;
    protected $summaryEnglish = null;
    protected $detail         = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE\ErrorResponse $response
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
        if (!$errorCode) return $this;
        $this->errorCode = new PrimitiveType($errorCode);
        $this->errorCode->setName('errorCode');
        return $this;
    }

    /**
     * 
     * @return int $errorCode
     */
    public function getErrorCode()
    {
        return $this->errorCode->getValue();
    }

    /**
     * 
     */
    public function setSummary($summary = null)
    {
        if (!$summary) return $this;
        $this->summary = new PrimitiveType($summary);
        $this->summary->setName('summary');
        return $this;
    }

    /**
     * 
     * @return string $summary
     */
    public function getSummary()
    {
        return $this->summary->getValue();
    }

    /**
     * 
     */
    public function setSummaryEnglish($summaryEnglish = null)
    {
        if (!$summaryEnglish) return $this;
        $this->summaryEnglish = new PrimitiveType($summaryEnglish);
        $this->summaryEnglish->setName('summaryEnglish');
        return $this;
    }

    /**
     * 
     * @return string $summaryEnglish
     */
    public function getSummaryEnglish()
    {
        return $this->summaryEnglish->getValue();
    }

    /**
     * 
     */
    public function setDetail($detail = null)
    {
        if (!$detail) return $this;
        $this->detail = new PrimitiveType($detail);
        $this->detail->setName('detail');
        return $this;
    }

    /**
     * 
     * @return string $detail
     */
    public function getDetail()
    {
        return $this->detail->getValue();
    }
}
