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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallMeNowGetCriteriaRequest.
 */
class UserCallMeNowGetCriteriaResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserCallMeNowGetCriteriaResponse';
    protected $timeSchedule    = null;
    protected $holidaySchedule = null;
    protected $rejectCall      = null;
    protected $toDnCriteria    = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\UserCallMeNowGetCriteriaResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setRejectCall($rejectCall = null)
    {
        if (!$rejectCall) return $this;
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
     * @return CallMeNowToDnCriteria $toDnCriteria
     */
    public function getToDnCriteria()
    {
        return $this->toDnCriteria;
    }
}
