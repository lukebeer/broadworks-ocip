<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Delete a list of events from a user schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserScheduleDeleteEventListRequest extends ComplexType implements ComplexInterface
{
    public    $name        = 'UserScheduleDeleteEventListRequest';
    protected $userId      = null;
    protected $scheduleKey = null;
    protected $eventName   = null;

    public function __construct(
         $userId,
         ScheduleKey $scheduleKey,
         $eventName
    ) {
        $this->setUserId($userId);
        $this->setScheduleKey($scheduleKey);
        $this->setEventName($eventName);
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
