<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemScheduleGetEventRequest.
 *         The response contains the event of the system schedulable.
 */
class SystemScheduleGetEventResponse extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $startDate   = null;
    protected $endDate     = null;
    protected $recurrence  = null;


    public function setStartDate(xs:date $startDate = null)
    {
    }

    public function getStartDate()
    {
        return (!$this->startDate) ?: $this->startDate->value();
    }

    public function setEndDate(xs:date $endDate = null)
    {
    }

    public function getEndDate()
    {
        return (!$this->endDate) ?: $this->endDate->value();
    }

    public function setRecurrence(Recurrence $recurrence = null)
    {
    }

    public function getRecurrence()
    {
        return (!$this->recurrence) ?: $this->recurrence->value();
    }
}
