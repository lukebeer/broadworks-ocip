<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:int;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:string;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * The ErrorResponse is concrete response sent whenever a transaction fails and does not return any data.
 */
class ErrorResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $errorCode=null,
             $summary,
             $summaryEnglish,
             $detail=null
    ) {
        $this->errorCode      = $errorCode;
        $this->summary        = $summary;
        $this->summaryEnglish = $summaryEnglish;
        $this->detail         = $detail;
        $this->args           = func_get_args();
    }

    public function setErrorCode($errorCode)
    {
        $errorCode and $this->errorCode = new xs:int($errorCode);
    }

    public function getErrorCode()
    {
        return (!$this->errorCode) ?: $this->errorCode->value();
    }

    public function setSummary($summary)
    {
        $summary and $this->summary = new xs:string($summary);
    }

    public function getSummary()
    {
        return (!$this->summary) ?: $this->summary->value();
    }

    public function setSummaryEnglish($summaryEnglish)
    {
        $summaryEnglish and $this->summaryEnglish = new xs:string($summaryEnglish);
    }

    public function getSummaryEnglish()
    {
        return (!$this->summaryEnglish) ?: $this->summaryEnglish->value();
    }

    public function setDetail($detail)
    {
        $detail and $this->detail = new xs:string($detail);
    }

    public function getDetail()
    {
        return (!$this->detail) ?: $this->detail->value();
    }
}
