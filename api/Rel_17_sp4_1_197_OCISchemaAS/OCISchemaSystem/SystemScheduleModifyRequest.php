<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify a system schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemScheduleModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $scheduleKey     = null;
    protected $newScheduleName = null;

    public function __construct(
         ScheduleKey $scheduleKey,
         $newScheduleName = null
    ) {
        $this->setScheduleKey($scheduleKey);
        $this->setNewScheduleName($newScheduleName);
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
     * Schedule name.
     */
    public function setNewScheduleName($newScheduleName = null)
    {
        $this->newScheduleName = ($newScheduleName InstanceOf ScheduleName)
             ? $newScheduleName
             : new ScheduleName($newScheduleName);
    }

    /**
     * Schedule name.
     */
    public function getNewScheduleName()
    {
        return (!$this->newScheduleName) ?: $this->newScheduleName->getValue();
    }
}
