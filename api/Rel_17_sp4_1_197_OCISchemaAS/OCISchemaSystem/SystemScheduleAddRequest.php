<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a system schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemScheduleAddRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $scheduleName  = null;
    protected $scheduleType  = null;

    public function __construct(
         $scheduleName,
         $scheduleType
    ) {
        $this->setScheduleName($scheduleName);
        $this->setScheduleType($scheduleType);
    }

    public function setScheduleName($scheduleName = null)
    {
        $this->scheduleName = ($scheduleName InstanceOf ScheduleName)
             ? $scheduleName
             : new ScheduleName($scheduleName);
    }

    public function getScheduleName()
    {
        return (!$this->scheduleName) ?: $this->scheduleName->value();
    }

    public function setScheduleType($scheduleType = null)
    {
        $this->scheduleType = ($scheduleType InstanceOf ScheduleType)
             ? $scheduleType
             : new ScheduleType($scheduleType);
    }

    public function getScheduleType()
    {
        return (!$this->scheduleType) ?: $this->scheduleType->value();
    }
}
