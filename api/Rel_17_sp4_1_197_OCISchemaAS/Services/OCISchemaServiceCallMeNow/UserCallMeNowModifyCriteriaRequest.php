<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowToDnCriteriaModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CriteriaName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a criteria for the user's call me now service.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallMeNowModifyCriteriaRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserCallMeNowModifyCriteriaRequest';
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
         TimeSchedule $timeSchedule = null,
         HolidaySchedule $holidaySchedule = null,
         $rejectCall = null,
         CallMeNowToDnCriteriaModify $toDnCriteria = null
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
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setCriteriaName($criteriaName = null)
    {
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
        return ($this->criteriaName) ? $this->criteriaName->getValue() : null;
    }

    /**
     * 
     */
    public function setNewCriteriaName($newCriteriaName = null)
    {
        $this->newCriteriaName = ($newCriteriaName InstanceOf CriteriaName)
             ? $newCriteriaName
             : new CriteriaName($newCriteriaName);
        $this->newCriteriaName->setName('newCriteriaName');
        return $this;
    }

    /**
     * 
     * @return CriteriaName $newCriteriaName
     */
    public function getNewCriteriaName()
    {
        return ($this->newCriteriaName) ? $this->newCriteriaName->getValue() : null;
    }

    /**
     * 
     */
    public function setTimeSchedule(TimeSchedule $timeSchedule = null)
    {
        $this->timeSchedule = ($timeSchedule InstanceOf TimeSchedule)
             ? $timeSchedule
             : new TimeSchedule($timeSchedule);
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
        $this->holidaySchedule = ($holidaySchedule InstanceOf HolidaySchedule)
             ? $holidaySchedule
             : new HolidaySchedule($holidaySchedule);
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
    public function setRejectCall($rejectCall = null)
    {
        $this->rejectCall = new PrimitiveType($rejectCall);
        $this->rejectCall->setName('rejectCall');
        return $this;
    }

    /**
     * 
     * @return boolean $rejectCall
     */
    public function getRejectCall()
    {
        return ($this->rejectCall) ? $this->rejectCall->getValue() : null;
    }

    /**
     * 
     */
    public function setToDnCriteria(CallMeNowToDnCriteriaModify $toDnCriteria = null)
    {
        $this->toDnCriteria = ($toDnCriteria InstanceOf CallMeNowToDnCriteriaModify)
             ? $toDnCriteria
             : new CallMeNowToDnCriteriaModify($toDnCriteria);
        $this->toDnCriteria->setName('toDnCriteria');
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
