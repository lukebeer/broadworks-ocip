<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Recurrence;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify an event of a system schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemScheduleModifyEventRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $scheduleKey   = null;
    protected $eventName     = null;
    protected $newEventName  = null;
    protected $startDate     = null;
    protected $endDate       = null;
    protected $recurrence    = null;

    public function __construct(
         ScheduleKey $scheduleKey,
         $eventName,
         $newEventName = null,
         $startDate = null,
         $endDate = null,
         Recurrence $recurrence = null
    ) {
        $this->setScheduleKey($scheduleKey);
        $this->setEventName($eventName);
        $this->setNewEventName($newEventName);
        $this->setStartDate($startDate);
        $this->setEndDate($endDate);
        $this->setRecurrence($recurrence);
    }

    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
    }

    public function getScheduleKey()
    {
        return (!$this->scheduleKey) ?: $this->scheduleKey->value();
    }

    public function setEventName($eventName = null)
    {
        $this->eventName = ($eventName InstanceOf EventName)
             ? $eventName
             : new EventName($eventName);
    }

    public function getEventName()
    {
        return (!$this->eventName) ?: $this->eventName->value();
    }

    public function setNewEventName($newEventName = null)
    {
        $this->newEventName = ($newEventName InstanceOf EventName)
             ? $newEventName
             : new EventName($newEventName);
    }

    public function getNewEventName()
    {
        return (!$this->newEventName) ?: $this->newEventName->value();
    }

    public function setStartDate(xs:date $startDate = null)
    {
    }

    public function getStartDate()
    {
        return (!$this->startDate) ?: $this->startDate->value();
    }

    public function setEndDate(xs:date $endDate = null)
    {
    }

    public function getEndDate()
    {
        return (!$this->endDate) ?: $this->endDate->value();
    }

    public function setRecurrence(Recurrence $recurrence = null)
    {
    }

    public function getRecurrence()
    {
        return (!$this->recurrence) ?: $this->recurrence->value();
    }
}
