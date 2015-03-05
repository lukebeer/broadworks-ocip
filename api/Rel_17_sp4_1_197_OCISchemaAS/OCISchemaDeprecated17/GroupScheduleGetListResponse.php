<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleLevel;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupScheduleGetListRequest.
 *         The response contains a list of system schedules.
 */
class GroupScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $scheduleName=null,
             $scheduleType=null,
             $scheduleLevel=null
    ) {
        $this->scheduleName  = new ScheduleName($scheduleName);
        $this->scheduleType  = new ScheduleType($scheduleType);
        $this->scheduleLevel = new ScheduleLevel($scheduleLevel);
        $this->args          = func_get_args();
    }

    public function setScheduleName($scheduleName)
    {
        $scheduleName and $this->scheduleName = new ScheduleName($scheduleName);
    }

    public function getScheduleName()
    {
        return (!$this->scheduleName) ?: $this->scheduleName->value();
    }

    public function setScheduleType($scheduleType)
    {
        $scheduleType and $this->scheduleType = new ScheduleType($scheduleType);
    }

    public function getScheduleType()
    {
        return (!$this->scheduleType) ?: $this->scheduleType->value();
    }

    public function setScheduleLevel($scheduleLevel)
    {
        $scheduleLevel and $this->scheduleLevel = new ScheduleLevel($scheduleLevel);
    }

    public function getScheduleLevel()
    {
        return (!$this->scheduleLevel) ?: $this->scheduleLevel->value();
    }
}
