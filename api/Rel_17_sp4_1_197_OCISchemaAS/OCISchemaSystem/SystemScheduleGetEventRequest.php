<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get an event from a system schedule.
 *         The response is either a SystemScheduleGetEventResponse or an ErrorResponse.
 */
class SystemScheduleGetEventRequest extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $scheduleKey  = null;
    protected $eventName    = null;

    public function __construct(
         ScheduleKey $scheduleKey,
         $eventName
    ) {
        $this->setScheduleKey($scheduleKey);
        $this->setEventName($eventName);
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
}
