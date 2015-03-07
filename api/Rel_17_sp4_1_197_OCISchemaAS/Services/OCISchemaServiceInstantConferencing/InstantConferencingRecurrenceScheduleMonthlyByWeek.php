<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingWeekOfMonth;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DayOfWeek;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Monthly by week recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleMonthlyByWeek extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $weekOfMonth  = null;
    protected $dayOfWeek    = null;

    public function __construct(
         $weekOfMonth,
         $dayOfWeek
    ) {
        $this->setWeekOfMonth($weekOfMonth);
        $this->setDayOfWeek($dayOfWeek);
    }

    public function setWeekOfMonth($weekOfMonth = null)
    {
        $this->weekOfMonth = ($weekOfMonth InstanceOf InstantConferencingWeekOfMonth)
             ? $weekOfMonth
             : new InstantConferencingWeekOfMonth($weekOfMonth);
    }

    public function getWeekOfMonth()
    {
        return (!$this->weekOfMonth) ?: $this->weekOfMonth->value();
    }

    public function setDayOfWeek($dayOfWeek = null)
    {
        $this->dayOfWeek = ($dayOfWeek InstanceOf DayOfWeek)
             ? $dayOfWeek
             : new DayOfWeek($dayOfWeek);
    }

    public function getDayOfWeek()
    {
        return (!$this->dayOfWeek) ?: $this->dayOfWeek->value();
    }
}
