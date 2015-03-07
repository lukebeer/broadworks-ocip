<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallForwardingSelective; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingSelective\CallForwardingSelectiveNumberSelection16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a criteria to the user's call forwarding selective service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallForwardingSelectiveAddCriteriaRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $userId                    = null;
    protected $criteriaName              = null;
    protected $timeSchedule              = null;
    protected $holidaySchedule           = null;
    protected $forwardToNumberSelection  = null;
    protected $forwardToPhoneNumber      = null;
    protected $fromDnCriteria            = null;

    public function __construct(
         $userId,
         $criteriaName,
         TimeSchedule $timeSchedule = null,
         HolidaySchedule $holidaySchedule = null,
         $forwardToNumberSelection = null,
         $forwardToPhoneNumber = null,
         CriteriaFromDn $fromDnCriteria
    ) {
        $this->setUserId($userId);
        $this->setCriteriaName($criteriaName);
        $this->setTimeSchedule($timeSchedule);
        $this->setHolidaySchedule($holidaySchedule);
        $this->setForwardToNumberSelection($forwardToNumberSelection);
        $this->setForwardToPhoneNumber($forwardToPhoneNumber);
        $this->setFromDnCriteria($fromDnCriteria);
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

    public function setForwardToNumberSelection($forwardToNumberSelection = null)
    {
        $this->forwardToNumberSelection = ($forwardToNumberSelection InstanceOf CallForwardingSelectiveNumberSelection16)
             ? $forwardToNumberSelection
             : new CallForwardingSelectiveNumberSelection16($forwardToNumberSelection);
    }

    public function getForwardToNumberSelection()
    {
        return (!$this->forwardToNumberSelection) ?: $this->forwardToNumberSelection->value();
    }

    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $forwardToPhoneNumber
             : new OutgoingDNorSIPURI($forwardToPhoneNumber);
    }

    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->value();
    }

    public function setFromDnCriteria(CriteriaFromDn $fromDnCriteria = null)
    {
    }

    public function getFromDnCriteria()
    {
        return (!$this->fromDnCriteria) ?: $this->fromDnCriteria->value();
    }
}
