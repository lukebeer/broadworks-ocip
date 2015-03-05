<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:time;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:duration;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * One time conference schedule used in the context of a conference add.
 */
class InstantConferencingScheduleOneTime extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $startTime,
             $duration
    ) {
        $this->startTime = $startTime;
        $this->duration  = $duration;
        $this->args      = func_get_args();
    }

    public function setStartTime($startTime)
    {
        $startTime and $this->startTime = new xs:time($startTime);
    }

    public function getStartTime()
    {
        return (!$this->startTime) ?: $this->startTime->value();
    }

    public function setDuration($duration)
    {
        $duration and $this->duration = new xs:duration($duration);
    }

    public function getDuration()
    {
        return (!$this->duration) ?: $this->duration->value();
    }
}
