<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:date;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserScheduleGetEventRequest.
 *         The response contains the event of the user schedule.
 */
class UserScheduleGetEventResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $startDate,
             $endDate,
             Recurrence $recurrence=null
    ) {
        $this->startDate  = $startDate;
        $this->endDate    = $endDate;
        $this->recurrence = $recurrence;
        $this->args       = func_get_args();
    }

    public function setStartDate($startDate)
    {
        $startDate and $this->startDate = new xs:date($startDate);
    }

    public function getStartDate()
    {
        return (!$this->startDate) ?: $this->startDate->value();
    }

    public function setEndDate($endDate)
    {
        $endDate and $this->endDate = new xs:date($endDate);
    }

    public function getEndDate()
    {
        return (!$this->endDate) ?: $this->endDate->value();
    }

    public function setRecurrence($recurrence)
    {
        $recurrence and $this->recurrence = new Recurrence($recurrence);
    }

    public function getRecurrence()
    {
        return (!$this->recurrence) ?: $this->recurrence->value();
    }
}
