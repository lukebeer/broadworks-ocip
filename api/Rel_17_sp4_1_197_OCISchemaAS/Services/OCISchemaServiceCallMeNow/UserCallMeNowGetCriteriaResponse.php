<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallMeNowToDnCriteria;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCallMeNowGetCriteriaRequest.
 */
class UserCallMeNowGetCriteriaResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             TimeSchedule $timeSchedule=null,
             HolidaySchedule $holidaySchedule=null,
             $rejectCall,
             $toDnCriteria
    ) {
        $this->timeSchedule    = $timeSchedule;
        $this->holidaySchedule = $holidaySchedule;
        $this->rejectCall      = $rejectCall;
        $this->toDnCriteria    = $toDnCriteria;
        $this->args            = func_get_args();
    }

    public function setTimeSchedule($timeSchedule)
    {
        $timeSchedule and $this->timeSchedule = new TimeSchedule($timeSchedule);
    }

    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->value();
    }

    public function setHolidaySchedule($holidaySchedule)
    {
        $holidaySchedule and $this->holidaySchedule = new HolidaySchedule($holidaySchedule);
    }

    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->value();
    }

    public function setRejectCall($rejectCall)
    {
        $rejectCall and $this->rejectCall = new xs:boolean($rejectCall);
    }

    public function getRejectCall()
    {
        return (!$this->rejectCall) ?: $this->rejectCall->value();
    }

    public function setToDnCriteria($toDnCriteria)
    {
        $toDnCriteria and $this->toDnCriteria = new CallMeNowToDnCriteria($toDnCriteria);
    }

    public function getToDnCriteria()
    {
        return (!$this->toDnCriteria) ?: $this->toDnCriteria->value();
    }
}
