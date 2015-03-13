<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get an event from a group schedule.
 *         The response is either a GroupScheduleGetEventResponse or an ErrorResponse.
 */
class GroupScheduleGetEventRequest extends ComplexType implements ComplexInterface
{
    public    $responseType      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupScheduleGetEventResponse';
    public    $name              = 'GroupScheduleGetEventRequest';
    protected $serviceProviderId = null;
    protected $groupId           = null;
    protected $scheduleKey       = null;
    protected $eventName         = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         ScheduleKey $scheduleKey,
         $eventName
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setScheduleKey($scheduleKey);
        $this->setEventName($eventName);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupScheduleGetEventResponse $response
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
        if (!$scheduleKey) return $this;
        $this->scheduleKey = $scheduleKey;
        $this->scheduleKey->setName('scheduleKey');
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
        if (!$eventName) return $this;
        $this->eventName = ($eventName InstanceOf EventName)
             ? $eventName
             : new EventName($eventName);
        $this->eventName->setName('eventName');
        return $this;
    }

    /**
     * 
     * @return EventName $eventName
     */
    public function getEventName()
    {
        return $this->eventName->getValue();
    }
}
