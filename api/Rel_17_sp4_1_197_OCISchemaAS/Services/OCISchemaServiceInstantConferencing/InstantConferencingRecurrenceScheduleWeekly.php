<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingRecurrenceWeekInterval;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Weekly recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleWeekly extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $recurrenceWeekInterval,
             $dayOfWeek=null
    ) {
        $this->recurrenceWeekInterval = $recurrenceWeekInterval;
        $this->dayOfWeek              = new DayOfWeek($dayOfWeek);
        $this->args                   = func_get_args();
    }

    public function setRecurrenceWeekInterval($recurrenceWeekInterval)
    {
        $recurrenceWeekInterval and $this->recurrenceWeekInterval = new InstantConferencingRecurrenceWeekInterval($recurrenceWeekInterval);
    }

    public function getRecurrenceWeekInterval()
    {
        return (!$this->recurrenceWeekInterval) ?: $this->recurrenceWeekInterval->value();
    }

    public function setDayOfWeek($dayOfWeek)
    {
        $dayOfWeek and $this->dayOfWeek = new DayOfWeek($dayOfWeek);
    }

    public function getDayOfWeek()
    {
        return (!$this->dayOfWeek) ?: $this->dayOfWeek->value();
    }
}
