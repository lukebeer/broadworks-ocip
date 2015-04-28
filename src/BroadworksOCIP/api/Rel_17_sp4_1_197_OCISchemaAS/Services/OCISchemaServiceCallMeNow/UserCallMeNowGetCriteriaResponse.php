<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\CallMeNowToDnCriteria;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HolidaySchedule;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TimeSchedule;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserCallMeNowGetCriteriaRequest.
 */
class UserCallMeNowGetCriteriaResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallMeNowGetCriteriaResponse';
    protected $timeSchedule;
    protected $holidaySchedule;
    protected $rejectCall;
    protected $toDnCriteria;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallMeNow\UserCallMeNowGetCriteriaResponse $response
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
    public function setToDnCriteria(CallMeNowToDnCriteria $toDnCriteria = null)
    {
        $this->toDnCriteria = ($toDnCriteria InstanceOf CallMeNowToDnCriteria)
             ? $toDnCriteria
             : new CallMeNowToDnCriteria($toDnCriteria);
        $this->toDnCriteria->setElementName('toDnCriteria');
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
