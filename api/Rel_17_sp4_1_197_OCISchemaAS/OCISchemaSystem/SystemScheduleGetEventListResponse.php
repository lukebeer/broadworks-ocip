<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EventName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemScheduleGetEventListRequest.
 *         The response contains a list of events.
 */
class SystemScheduleGetEventListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemScheduleGetEventListResponse';
    public    $name      = __CLASS__;
    protected $eventName = null;


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
}
