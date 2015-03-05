<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingWeekOfMonth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Monthly by week recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleMonthlyByWeek extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $weekOfMonth,
             $dayOfWeek
    ) {
        $this->weekOfMonth = $weekOfMonth;
        $this->dayOfWeek   = new DayOfWeek($dayOfWeek);
        $this->args        = func_get_args();
    }

    public function setWeekOfMonth($weekOfMonth)
    {
        $weekOfMonth and $this->weekOfMonth = new InstantConferencingWeekOfMonth($weekOfMonth);
    }

    public function getWeekOfMonth()
    {
        return (!$this->weekOfMonth) ?: $this->weekOfMonth->value();
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
