<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowToDnCriteria;
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
 * Add a criterion to the user's call me now service.  The criterion added is automatically active.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallMeNowAddCriteriaRequest extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserCallMeNowAddCriteriaRequest';
    protected $userId          = null;
    protected $criteriaName    = null;
    protected $timeSchedule    = null;
    protected $holidaySchedule = null;
    protected $rejectCall      = null;
    protected $toDnCriteria    = null;

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

    /**
     * @return 
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
     * @return UserId
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
     * @return CriteriaName
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
     * @return TimeSchedule
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
     * @return HolidaySchedule
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
        if (!$rejectCall) return $this;
        $this->rejectCall = new PrimitiveType($rejectCall);
        $this->rejectCall->setName('rejectCall');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getRejectCall()
    {
        return $this->rejectCall->getValue();
    }

    /**
     * 
     */
    public function setToDnCriteria(CallMeNowToDnCriteria $toDnCriteria = null)
    {
        if (!$toDnCriteria) return $this;
        $this->toDnCriteria = $toDnCriteria;
        $this->toDnCriteria->setName('toDnCriteria');
        return $this;
    }

    /**
     * 
     * @return CallMeNowToDnCriteria
     */
    public function getToDnCriteria()
    {
        return $this->toDnCriteria;
    }
}
