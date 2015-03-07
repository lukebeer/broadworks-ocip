<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSelectiveCallRejection; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSelectiveCallRejection\SelectiveCallRejectionCriteriaCallType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a criteria to the user's selective call rejection service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserSelectiveCallRejectionAddCriteriaRequest16 extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $userId           = null;
    protected $criteriaName     = null;
    protected $timeSchedule     = null;
    protected $fromDnCriteria   = null;
    protected $holidaySchedule  = null;
    protected $blacklisted      = null;

    public function __construct(
         $userId,
         $criteriaName,
         TimeSchedule $timeSchedule = null,
         SelectiveCallRejectionCriteriaCallType $fromDnCriteria,
         HolidaySchedule $holidaySchedule = null,
         $blacklisted
    ) {
        $this->setUserId($userId);
        $this->setCriteriaName($criteriaName);
        $this->setTimeSchedule($timeSchedule);
        $this->setFromDnCriteria($fromDnCriteria);
        $this->setHolidaySchedule($holidaySchedule);
        $this->setBlacklisted($blacklisted);
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

    public function setFromDnCriteria(SelectiveCallRejectionCriteriaCallType $fromDnCriteria = null)
    {
    }

    public function getFromDnCriteria()
    {
        return (!$this->fromDnCriteria) ?: $this->fromDnCriteria->value();
    }

    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
    }

    public function getHolidaySchedule()
    {
        return (!$this->holidaySchedule) ?: $this->holidaySchedule->value();
    }

    public function setBlacklisted(xs:boolean $blacklisted = null)
    {
    }

    public function getBlacklisted()
    {
        return (!$this->blacklisted) ?: $this->blacklisted->value();
    }
}
