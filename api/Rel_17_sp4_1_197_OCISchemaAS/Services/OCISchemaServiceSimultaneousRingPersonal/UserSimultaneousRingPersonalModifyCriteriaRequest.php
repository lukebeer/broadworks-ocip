<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSimultaneousRingPersonal; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDnModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a criteria for the user's simultaneous ring personal service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSimultaneousRingPersonalModifyCriteriaRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $criteriaName,
             $newCriteriaName=null,
             TimeSchedule $timeSchedule=null,
             HolidaySchedule $holidaySchedule=null,
             $blacklisted=null,
             CriteriaFromDnModify $fromDnCriteria=null
    ) {
        $this->userId          = new UserId($userId);
        $this->criteriaName    = new CriteriaName($criteriaName);
        $this->newCriteriaName = new CriteriaName($newCriteriaName);
        $this->timeSchedule    = $timeSchedule;
        $this->holidaySchedule = $holidaySchedule;
        $this->blacklisted     = $blacklisted;
        $this->fromDnCriteria  = $fromDnCriteria;
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

    public function setNewCriteriaName($newCriteriaName)
    {
        $newCriteriaName and $this->newCriteriaName = new CriteriaName($newCriteriaName);
    }

    public function getNewCriteriaName()
    {
        return (!$this->newCriteriaName) ?: $this->newCriteriaName->value();
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

    public function setBlacklisted($blacklisted)
    {
        $blacklisted and $this->blacklisted = new xs:boolean($blacklisted);
    }

    public function getBlacklisted()
    {
        return (!$this->blacklisted) ?: $this->blacklisted->value();
    }

    public function setFromDnCriteria($fromDnCriteria)
    {
        $fromDnCriteria and $this->fromDnCriteria = new CriteriaFromDnModify($fromDnCriteria);
    }

    public function getFromDnCriteria()
    {
        return (!$this->fromDnCriteria) ?: $this->fromDnCriteria->value();
    }
}
