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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a criterion to the user's call me now service.  The criterion added is automatically active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallMeNowAddCriteriaRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $userId           = null;
    protected $criteriaName     = null;
    protected $timeSchedule     = null;
    protected $holidaySchedule  = null;
    protected $rejectCall       = null;
    protected $toDnCriteria     = null;

    public function __construct(
         $userId,
         $criteriaName,
         TimeSchedule $timeSchedule = null,
         HolidaySchedule $holidaySchedule = null,
         $rejectCall,
         CallMeNowToDnCriteria $toDnCriteria
    ) {
        $this->setUserId($userId);
        $this->setCriteriaName($criteriaName);
        $this->setTimeSchedule($timeSchedule);
        $this->setHolidaySchedule($holidaySchedule);
        $this->setRejectCall($rejectCall);
        $this->setToDnCriteria($toDnCriteria);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setCriteriaName($criteriaName = null)
    {
        $this->criteriaName = ($criteriaName InstanceOf CriteriaName)
             ? $criteriaName
             : new CriteriaName($criteriaName);
    }

    public function getCriteriaName()
    {
        return (!$this->criteriaName) ?: $this->criteriaName->value();
    }

    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
    }

    public function getTimeSchedule()
    {
        return (!$this->timeSchedule) ?: $this->timeSchedule->value();
    }

    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
    }

    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->value();
    }

    public function setRejectCall(xs:boolean $rejectCall = null)
    {
    }

    public function getRejectCall()
    {
        return (!$this->rejectCall) ?: $this->rejectCall->value();
    }

    public function setToDnCriteria(CallMeNowToDnCriteria $toDnCriteria = null)
    {
    }

    public function getToDnCriteria()
    {
        return (!$this->toDnCriteria) ?: $this->toDnCriteria->value();
    }
}
