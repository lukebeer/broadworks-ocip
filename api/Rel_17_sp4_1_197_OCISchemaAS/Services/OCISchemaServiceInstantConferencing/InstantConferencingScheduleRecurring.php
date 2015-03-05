<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:time;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:duration;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingRecurrenceTimeFrame;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingRecurrenceSchedule;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Recurring conference schedule used in the context of a conference add.
 */
class InstantConferencingScheduleRecurring extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $startTime,
             $duration,
             $recurrenceTimeFrame,
             $recurrenceSchedule
    ) {
        $this->startTime           = $startTime;
        $this->duration            = $duration;
        $this->recurrenceTimeFrame = $recurrenceTimeFrame;
        $this->recurrenceSchedule  = $recurrenceSchedule;
        $this->args                = func_get_args();
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

    public function setRecurrenceTimeFrame($recurrenceTimeFrame)
    {
        $recurrenceTimeFrame and $this->recurrenceTimeFrame = new InstantConferencingRecurrenceTimeFrame($recurrenceTimeFrame);
    }

    public function getRecurrenceTimeFrame()
    {
        return (!$this->recurrenceTimeFrame) ?: $this->recurrenceTimeFrame->value();
    }

    public function setRecurrenceSchedule($recurrenceSchedule)
    {
        $recurrenceSchedule and $this->recurrenceSchedule = new InstantConferencingRecurrenceSchedule($recurrenceSchedule);
    }

    public function getRecurrenceSchedule()
    {
        return (!$this->recurrenceSchedule) ?: $this->recurrenceSchedule->value();
    }
}
