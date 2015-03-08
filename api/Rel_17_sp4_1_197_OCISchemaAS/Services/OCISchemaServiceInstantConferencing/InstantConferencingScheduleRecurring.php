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
    const     RESPONSE_TYPE        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\InstantConferencingScheduleRecurring';
    public    $name                = __CLASS__;
    protected $startTime           = null;
    protected $duration            = null;
    protected $recurrenceTimeFrame = null;
    protected $recurrenceSchedule  = null;

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

    /**
     * 
     */
    public function setStartTime(xs:time $startTime = null)
    {
        $this->startTime = xs:time $startTime;
    }

    /**
     * 
     */
    public function getStartTime()
    {
        return (!$this->startTime) ?: $this->startTime->getValue();
    }

    /**
     * 
     */
    public function setDuration(xs:duration $duration = null)
    {
        $this->duration = xs:duration $duration;
    }

    /**
     * 
     */
    public function getDuration()
    {
        return (!$this->duration) ?: $this->duration->getValue();
    }

    /**
     * The period of recurring conference.
     */
    public function setRecurrenceTimeFrame($recurrenceTimeFrame = null)
    {
        $this->recurrenceTimeFrame = ($recurrenceTimeFrame InstanceOf InstantConferencingRecurrenceTimeFrame)
             ? $recurrenceTimeFrame
             : new InstantConferencingRecurrenceTimeFrame($recurrenceTimeFrame);
    }

    /**
     * The period of recurring conference.
     */
    public function getRecurrenceTimeFrame()
    {
        return (!$this->recurrenceTimeFrame) ?: $this->recurrenceTimeFrame->getValue();
    }

    /**
     * Recurrence schedule used in the context of a conference add.
     *         This type is extended by:
     *           InstantConferencingRecurrenceScheduleDaily,
     *           InstantConferencingRecurrenceScheduleWeekly,
     *           InstantConferencingRecurrenceScheduleMonthly.
     */
    public function setRecurrenceSchedule(InstantConferencingRecurrenceSchedule $recurrenceSchedule = null)
    {
        $this->recurrenceSchedule = InstantConferencingRecurrenceSchedule $recurrenceSchedule;
    }

    /**
     * Recurrence schedule used in the context of a conference add.
     *         This type is extended by:
     *           InstantConferencingRecurrenceScheduleDaily,
     *           InstantConferencingRecurrenceScheduleWeekly,
     *           InstantConferencingRecurrenceScheduleMonthly.
     */
    public function getRecurrenceSchedule()
    {
        return (!$this->recurrenceSchedule) ?: $this->recurrenceSchedule->getValue();
    }
}
