<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingSelective; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingSelective\CallForwardingSelectiveNumberSelection16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaFromDn;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a criteria to the user's call forwarding selective service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallForwardingSelectiveAddCriteriaRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                     = 'UserCallForwardingSelectiveAddCriteriaRequest16';
    protected $userId                   = null;
    protected $criteriaName             = null;
    protected $timeSchedule             = null;
    protected $holidaySchedule          = null;
    protected $forwardToNumberSelection = null;
    protected $forwardToPhoneNumber     = null;
    protected $fromDnCriteria           = null;

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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setCriteriaName($criteriaName = null)
    {
        if (!$criteriaName) return $this;
        $this->criteriaName = ($criteriaName InstanceOf CriteriaName)
             ? $criteriaName
             : new CriteriaName($criteriaName);
        $this->criteriaName->setName('criteriaName');
        return $this;
    }

    /**
     * 
     * @return CriteriaName $criteriaName
     */
    public function getCriteriaName()
    {
        return $this->criteriaName->getValue();
    }

    /**
     * 
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        if (!$timeSchedule) return $this;
        $this->timeSchedule = $timeSchedule;
        $this->timeSchedule->setName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return TimeSchedule $timeSchedule
     */
    public function getTimeSchedule()
    {
        return $this->timeSchedule;
    }

    /**
     * 
     */
    public function setHolidaySchedule(HolidaySchedule $holidaySchedule = null)
    {
        if (!$holidaySchedule) return $this;
        $this->holidaySchedule = $holidaySchedule;
        $this->holidaySchedule->setName('holidaySchedule');
        return $this;
    }

    /**
     * 
     * @return HolidaySchedule $holidaySchedule
     */
    public function getHolidaySchedule()
    {
        return $this->holidaySchedule;
    }

    /**
     * 
     */
    public function setForwardToNumberSelection($forwardToNumberSelection = null)
    {
        if (!$forwardToNumberSelection) return $this;
        $this->forwardToNumberSelection = ($forwardToNumberSelection InstanceOf CallForwardingSelectiveNumberSelection16)
             ? $forwardToNumberSelection
             : new CallForwardingSelectiveNumberSelection16($forwardToNumberSelection);
        $this->forwardToNumberSelection->setName('forwardToNumberSelection');
        return $this;
    }

    /**
     * 
     * @return CallForwardingSelectiveNumberSelection16 $forwardToNumberSelection
     */
    public function getForwardToNumberSelection()
    {
        return $this->forwardToNumberSelection->getValue();
    }

    /**
     * 
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        if (!$forwardToPhoneNumber) return $this;
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $forwardToPhoneNumber
             : new OutgoingDNorSIPURI($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $forwardToPhoneNumber
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setFromDnCriteria(CriteriaFromDn $fromDnCriteria = null)
    {
        if (!$fromDnCriteria) return $this;
        $this->fromDnCriteria = $fromDnCriteria;
        $this->fromDnCriteria->setName('fromDnCriteria');
        return $this;
    }

    /**
     * 
     * @return CriteriaFromDn $fromDnCriteria
     */
    public function getFromDnCriteria()
    {
        return $this->fromDnCriteria;
    }
}
