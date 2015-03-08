<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceWeekInterval;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Weekly recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleWeekly extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceScheduleWeekly';
    public    $name                   = __CLASS__;
    protected $recurrenceWeekInterval = null;
    protected $dayOfWeek              = null;

    public function __construct(
         $recurrenceWeekInterval,
         $dayOfWeek = null
    ) {
        $this->setRecurrenceWeekInterval($recurrenceWeekInterval);
        $this->setDayOfWeek($dayOfWeek);
    }

    /**
     * The recurrence interval for weekly schedule.
     */
    public function setRecurrenceWeekInterval($recurrenceWeekInterval = null)
    {
        $this->recurrenceWeekInterval = ($recurrenceWeekInterval InstanceOf InstantConferencingRecurrenceWeekInterval)
             ? $recurrenceWeekInterval
             : new InstantConferencingRecurrenceWeekInterval($recurrenceWeekInterval);
    }

    /**
     * The recurrence interval for weekly schedule.
     */
    public function getRecurrenceWeekInterval()
    {
        return (!$this->recurrenceWeekInterval) ?: $this->recurrenceWeekInterval->getValue();
    }

    /**
     * Days of the week (Sunday-Saturday).
     */
    public function setDayOfWeek($dayOfWeek = null)
    {
        $this->dayOfWeek = ($dayOfWeek InstanceOf DayOfWeek)
             ? $dayOfWeek
             : new DayOfWeek($dayOfWeek);
    }

    /**
     * Days of the week (Sunday-Saturday).
     */
    public function getDayOfWeek()
    {
        return (!$this->dayOfWeek) ?: $this->dayOfWeek->getValue();
    }
}
