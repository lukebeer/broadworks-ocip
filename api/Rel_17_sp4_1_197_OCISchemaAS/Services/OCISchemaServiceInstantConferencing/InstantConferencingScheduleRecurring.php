<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceTimeFrame;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceSchedule;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Recurring conference schedule used in the context of a conference add.
 */
class InstantConferencingScheduleRecurring extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $startTime            = null;
    protected $duration             = null;
    protected $recurrenceTimeFrame  = null;
    protected $recurrenceSchedule   = null;

    public function __construct(
         $startTime,
         $duration,
         $recurrenceTimeFrame,
         InstantConferencingRecurrenceSchedule $recurrenceSchedule
    ) {
        $this->setStartTime($startTime);
        $this->setDuration($duration);
        $this->setRecurrenceTimeFrame($recurrenceTimeFrame);
        $this->setRecurrenceSchedule($recurrenceSchedule);
    }

    public function setStartTime(xs:time $startTime = null)
    {
    }

    public function getStartTime()
    {
        return (!$this->startTime) ?: $this->startTime->value();
    }

    public function setDuration(xs:duration $duration = null)
    {
    }

    public function getDuration()
    {
        return (!$this->duration) ?: $this->duration->value();
    }

    public function setRecurrenceTimeFrame($recurrenceTimeFrame = null)
    {
        $this->recurrenceTimeFrame = ($recurrenceTimeFrame InstanceOf InstantConferencingRecurrenceTimeFrame)
             ? $recurrenceTimeFrame
             : new InstantConferencingRecurrenceTimeFrame($recurrenceTimeFrame);
    }

    public function getRecurrenceTimeFrame()
    {
        return (!$this->recurrenceTimeFrame) ?: $this->recurrenceTimeFrame->value();
    }

    public function setRecurrenceSchedule(InstantConferencingRecurrenceSchedule $recurrenceSchedule = null)
    {
    }

    public function getRecurrenceSchedule()
    {
        return (!$this->recurrenceSchedule) ?: $this->recurrenceSchedule->value();
    }
}
