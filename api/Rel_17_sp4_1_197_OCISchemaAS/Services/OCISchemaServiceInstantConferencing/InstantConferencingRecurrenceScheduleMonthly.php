<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingRecurrenceMonthInterval;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Monthly recurrence conference schedule used in the context of a conference add.
 *         This type is extended by:
 *           InstantConferencingRecurrenceScheduleMonthlyByDay,
 *           InstantConferencingRecurrenceScheduleMonthlyByWeek.
 */
class InstantConferencingRecurrenceScheduleMonthly extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $recurrenceMonthInterval
    ) {
        $this->recurrenceMonthInterval = $recurrenceMonthInterval;
        $this->args                    = func_get_args();
    }

    public function setRecurrenceMonthInterval($recurrenceMonthInterval)
    {
        $recurrenceMonthInterval and $this->recurrenceMonthInterval = new InstantConferencingRecurrenceMonthInterval($recurrenceMonthInterval);
    }

    public function getRecurrenceMonthInterval()
    {
        return (!$this->recurrenceMonthInterval) ?: $this->recurrenceMonthInterval->value();
    }
}
