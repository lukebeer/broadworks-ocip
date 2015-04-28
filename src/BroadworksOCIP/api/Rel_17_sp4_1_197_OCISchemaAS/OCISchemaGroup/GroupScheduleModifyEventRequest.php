<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify an event of a group schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupScheduleModifyEventRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupScheduleModifyEventRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $scheduleKey;
    protected $eventName;
    protected $newEventName;
    protected $startDate;
    protected $endDate;
    protected $recurrence;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $scheduleKey = '',
         $eventName = '',
         $newEventName = null,
         $startDate = null,
         $endDate = null,
         $recurrence = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setScheduleKey($scheduleKey);
        $this->setEventName($eventName);
        $this->setNewEventName($newEventName);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
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
    public function setNewEventName($newEventName = null)
    {
        $this->newEventName = ($newEventName InstanceOf EventName)
             ? $newEventName
             : new EventName($newEventName);
        $this->newEventName->setElementName('newEventName');
        return $this;
    }

    /**
     * 
     * @return EventName $newEventName
     */
    public function getNewEventName()
    {
        return ($this->newEventName)
            ? $this->newEventName->getElementValue()
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
