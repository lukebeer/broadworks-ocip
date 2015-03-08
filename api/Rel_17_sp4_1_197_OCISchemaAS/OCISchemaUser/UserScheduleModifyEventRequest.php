<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify an event of a user schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserScheduleModifyEventRequest extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $userId       = null;
    protected $scheduleKey  = null;
    protected $eventName    = null;
    protected $newEventName = null;
    protected $startDate    = null;
    protected $endDate      = null;
    protected $recurrence   = null;

    public function __construct(
         $userId,
         ScheduleKey $scheduleKey,
         $eventName,
         $newEventName = null,
         $startDate = null,
         $endDate = null,
         Recurrence $recurrence = null
    ) {
        $this->setUserId($userId);
        $this->setScheduleKey($scheduleKey);
        $this->setEventName($eventName);
        $this->setNewEventName($newEventName);
        $this->setStartDate($startDate);
        $this->setEndDate($endDate);
        $this->setRecurrence($recurrence);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * Uniquely identifies Holiday and Time Schedules within a level(System, Service Provider, Group or User level).
     */
    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
        $this->scheduleKey = ScheduleKey $scheduleKey;
    }

    /**
     * Uniquely identifies Holiday and Time Schedules within a level(System, Service Provider, Group or User level).
     */
    public function getScheduleKey()
    {
        return (!$this->scheduleKey) ?: $this->scheduleKey->getValue();
    }

    /**
     * Event name.
     */
    public function setEventName($eventName = null)
    {
        $this->eventName = ($eventName InstanceOf EventName)
             ? $eventName
             : new EventName($eventName);
    }

    /**
     * Event name.
     */
    public function getEventName()
    {
        return (!$this->eventName) ?: $this->eventName->getValue();
    }

    /**
     * Event name.
     */
    public function setNewEventName($newEventName = null)
    {
        $this->newEventName = ($newEventName InstanceOf EventName)
             ? $newEventName
             : new EventName($newEventName);
    }

    /**
     * Event name.
     */
    public function getNewEventName()
    {
        return (!$this->newEventName) ?: $this->newEventName->getValue();
    }

    /**
     * 
     */
    public function setStartDate(xs:date $startDate = null)
    {
        $this->startDate = xs:date $startDate;
    }

    /**
     * 
     */
    public function getStartDate()
    {
        return (!$this->startDate) ?: $this->startDate->getValue();
    }

    /**
     * 
     */
    public function setEndDate(xs:date $endDate = null)
    {
        $this->endDate = xs:date $endDate;
    }

    /**
     * 
     */
    public function getEndDate()
    {
        return (!$this->endDate) ?: $this->endDate->getValue();
    }

    /**
     * Defines recurrence.
     */
    public function setRecurrence(Recurrence $recurrence = null)
    {
        $this->recurrence = Recurrence $recurrence;
    }

    /**
     * Defines recurrence.
     */
    public function getRecurrence()
    {
        return (!$this->recurrence) ?: $this->recurrence->getValue();
    }
}
