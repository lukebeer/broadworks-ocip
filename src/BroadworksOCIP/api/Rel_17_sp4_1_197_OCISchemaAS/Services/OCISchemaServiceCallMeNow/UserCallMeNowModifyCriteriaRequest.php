<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowToDnCriteriaModify;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a criteria for the user's call me now service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallMeNowModifyCriteriaRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallMeNowModifyCriteriaRequest';
    protected $userId;
    protected $criteriaName;
    protected $newCriteriaName;
    protected $timeSchedule;
    protected $holidaySchedule;
    protected $rejectCall;
    protected $toDnCriteria;

    public function __construct(
         $userId = '',
         $criteriaName = '',
         $newCriteriaName = null,
         $timeSchedule = null,
         $holidaySchedule = null,
         $rejectCall = null,
         $toDnCriteria = null
    ) {
        $this->setUserId($userId);
        $this->setCriteriaName($criteriaName);
        $this->setNewCriteriaName($newCriteriaName);
        $this->setTimeSchedule($timeSchedule);
        $this->setHolidaySchedule($holidaySchedule);
        $this->setRejectCall($rejectCall);
        $this->setToDnCriteria($toDnCriteria);
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
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCriteriaName($criteriaName = null)
    {
        $this->criteriaName = ($criteriaName InstanceOf CriteriaName)
             ? $criteriaName
             : new CriteriaName($criteriaName);
        $this->criteriaName->setElementName('criteriaName');
        return $this;
    }

    /**
     * 
     * @return CriteriaName $criteriaName
     */
    public function getCriteriaName()
    {
        return ($this->criteriaName)
            ? $this->criteriaName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewCriteriaName($newCriteriaName = null)
    {
        $this->newCriteriaName = ($newCriteriaName InstanceOf CriteriaName)
             ? $newCriteriaName
             : new CriteriaName($newCriteriaName);
        $this->newCriteriaName->setElementName('newCriteriaName');
        return $this;
    }

    /**
     * 
     * @return CriteriaName $newCriteriaName
     */
    public function getNewCriteriaName()
    {
        return ($this->newCriteriaName)
            ? $this->newCriteriaName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        $this->timeSchedule = ($timeSchedule InstanceOf TimeSchedule)
             ? $timeSchedule
             : new TimeSchedule($timeSchedule);
        $this->timeSchedule->setElementName('timeSchedule');
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
        $this->holidaySchedule = ($holidaySchedule InstanceOf HolidaySchedule)
             ? $holidaySchedule
             : new HolidaySchedule($holidaySchedule);
        $this->holidaySchedule->setElementName('holidaySchedule');
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
    public function setRejectCall($rejectCall = null)
    {
        $this->rejectCall = new PrimitiveType($rejectCall);
        $this->rejectCall->setElementName('rejectCall');
        return $this;
    }

    /**
     * 
     * @return boolean $rejectCall
     */
    public function getRejectCall()
    {
        return ($this->rejectCall)
            ? $this->rejectCall->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setToDnCriteria(CallMeNowToDnCriteriaModify $toDnCriteria = null)
    {
        $this->toDnCriteria = ($toDnCriteria InstanceOf CallMeNowToDnCriteriaModify)
             ? $toDnCriteria
             : new CallMeNowToDnCriteriaModify($toDnCriteria);
        $this->toDnCriteria->setElementName('toDnCriteria');
        return $this;
    }

    /**
     * 
     * @return CallMeNowToDnCriteriaModify $toDnCriteria
     */
    public function getToDnCriteria()
    {
        return $this->toDnCriteria;
    }
}
