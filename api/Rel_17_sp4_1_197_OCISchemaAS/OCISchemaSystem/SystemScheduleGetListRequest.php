<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the list of a system schedules. The list can be filtered by schedule type.
 *         The response is either a SystemScheduleGetListResponse or an ErrorResponse.
 */
class SystemScheduleGetListRequest extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $scheduleType  = null;

    public function __construct(
         $scheduleType = null
    ) {
        $this->setScheduleType($scheduleType);
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
