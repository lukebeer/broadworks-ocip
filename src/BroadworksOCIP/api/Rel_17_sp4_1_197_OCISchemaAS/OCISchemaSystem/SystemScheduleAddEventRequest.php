<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add an event to system schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemScheduleAddEventRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemScheduleAddEventRequest';
    protected $scheduleKey;
    protected $eventName;
    protected $startDate;
    protected $endDate;
    protected $recurrence;

    public function __construct(
         $scheduleKey = '',
         $eventName = '',
         $startDate = '',
         $endDate = '',
         $recurrence = null
    ) {
        $this->setScheduleKey($scheduleKey);
        $this->setEventName($eventName);
        $this->setStartDate($startDate);
        $this->setEndDate($endDate);
        $this->setRecurrence($recurrence);
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
    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
        $this->scheduleKey = ($scheduleKey InstanceOf ScheduleKey)
             ? $scheduleKey
             : new ScheduleKey($scheduleKey);
        $this->scheduleKey->setElementName('scheduleKey');
        return $this;
    }

    /**
     * 
     * @return ScheduleKey $scheduleKey
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey;
    }

    /**
     * 
     */
    public function setEventName($eventName = null)
    {
        $this->eventName = ($eventName InstanceOf EventName)
             ? $eventName
             : new EventName($eventName);
        $this->eventName->setElementName('eventName');
        return $this;
    }

    /**
     * 
     * @return EventName $eventName
     */
    public function getEventName()
    {
        return ($this->eventName)
            ? $this->eventName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStartDate($startDate = null)
    {
        $this->startDate = new PrimitiveType($startDate);
        $this->startDate->setElementName('startDate');
        return $this;
    }

    /**
     * 
     * @return string $startDate
     */
    public function getStartDate()
    {
        return ($this->startDate)
            ? $this->startDate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEndDate($endDate = null)
    {
        $this->endDate = new PrimitiveType($endDate);
        $this->endDate->setElementName('endDate');
        return $this;
    }

    /**
     * 
     * @return string $endDate
     */
    public function getEndDate()
    {
        return ($this->endDate)
            ? $this->endDate->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecurrence(Recurrence $recurrence = null)
    {
        $this->recurrence = ($recurrence InstanceOf Recurrence)
             ? $recurrence
             : new Recurrence($recurrence);
        $this->recurrence->setElementName('recurrence');
        return $this;
    }

    /**
     * 
     * @return Recurrence $recurrence
     */
    public function getRecurrence()
    {
        return $this->recurrence;
    }
}
