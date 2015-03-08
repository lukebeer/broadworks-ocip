<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowToDnCriteria;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the UserCallMeNowGetCriteriaRequest.
 */
class UserCallMeNowGetCriteriaResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallMeNow\UserCallMeNowGetCriteriaResponse';
    public    $name            = __CLASS__;
    protected $timeSchedule    = null;
    protected $holidaySchedule = null;
    protected $rejectCall      = null;
    protected $toDnCriteria    = null;


    /**
     * The from dn criteria.
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        $this->timeSchedule = TimeSchedule $timeSchedule;
    }

    /**
     * The from dn criteria.
     */
    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->getValue();
    }

    /**
     * Holiday Schedule.
     */
    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
        $this->holidaySchedule = HolidaySchedule $holidaySchedule;
    }

    /**
     * Holiday Schedule.
     */
    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->getValue();
    }

    /**
     * 
     */
    public function setRejectCall($rejectCall = null)
    {
        $this->rejectCall = (boolean) $rejectCall;
    }

    /**
     * 
     */
    public function getRejectCall()
    {
        return (!$this->rejectCall) ?: $this->rejectCall->getValue();
    }

    /**
     * The To dn criteria used on the call me now external number.
     */
    public function setToDnCriteria(CallMeNowToDnCriteria $toDnCriteria = null)
    {
        $this->toDnCriteria = CallMeNowToDnCriteria $toDnCriteria;
    }

    /**
     * The To dn criteria used on the call me now external number.
     */
    public function getToDnCriteria()
    {
        return (!$this->toDnCriteria) ?: $this->toDnCriteria->getValue();
    }
}
