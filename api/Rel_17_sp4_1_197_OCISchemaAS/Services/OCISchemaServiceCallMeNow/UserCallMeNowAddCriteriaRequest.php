<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallMeNowToDnCriteria;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a criterion to the user's call me now service.  The criterion added is automatically active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallMeNowAddCriteriaRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $criteriaName,
             TimeSchedule $timeSchedule=null,
             HolidaySchedule $holidaySchedule=null,
             $rejectCall,
             $toDnCriteria
    ) {
        $this->userId          = new UserId($userId);
        $this->criteriaName    = new CriteriaName($criteriaName);
        $this->timeSchedule    = $timeSchedule;
        $this->holidaySchedule = $holidaySchedule;
        $this->rejectCall      = $rejectCall;
        $this->toDnCriteria    = $toDnCriteria;
        $this->args            = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setCriteriaName($criteriaName)
    {
        $criteriaName and $this->criteriaName = new CriteriaName($criteriaName);
    }

    public function getCriteriaName()
    {
        return (!$this->criteriaName) ?: $this->criteriaName->value();
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
