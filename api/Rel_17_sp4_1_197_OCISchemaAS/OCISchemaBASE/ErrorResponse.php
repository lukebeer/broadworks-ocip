<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaBASE; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * The ErrorResponse is concrete response sent whenever a transaction fails and does not return any data.
 */
class ErrorResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $errorCode       = null;
    protected $summary         = null;
    protected $summaryEnglish  = null;
    protected $detail          = null;


    public function setErrorCode(xs:int $errorCode = null)
    {
    }

    public function getErrorCode()
    {
        return (!$this->errorCode) ?: $this->errorCode->value();
    }

    public function setSummary(xs:string $summary = null)
    {
    }

    public function getSummary()
    {
        return (!$this->summary) ?: $this->summary->value();
    }

    public function setSummaryEnglish(xs:string $summaryEnglish = null)
    {
    }

    public function getSummaryEnglish()
    {
        return (!$this->summaryEnglish) ?: $this->summaryEnglish->value();
    }

    public function setDetail(xs:string $detail = null)
    {
    }

    public function getDetail()
    {
        return (!$this->detail) ?: $this->detail->value();
    }
}
