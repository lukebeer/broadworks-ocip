<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceMonthInterval;
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
    const     RESPONSE_TYPE            = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\InstantConferencingRecurrenceScheduleMonthly';
    public    $name                    = __CLASS__;
    protected $recurrenceMonthInterval = null;

    public function __construct(
         $recurrenceMonthInterval
    ) {
        $this->setRecurrenceMonthInterval($recurrenceMonthInterval);
    }

    /**
     * The recurrence interval for monthly schedule.
     */
    public function setRecurrenceMonthInterval($recurrenceMonthInterval = null)
    {
        $this->recurrenceMonthInterval = ($recurrenceMonthInterval InstanceOf InstantConferencingRecurrenceMonthInterval)
             ? $recurrenceMonthInterval
             : new InstantConferencingRecurrenceMonthInterval($recurrenceMonthInterval);
    }

    /**
     * The recurrence interval for monthly schedule.
     */
    public function getRecurrenceMonthInterval()
    {
        return (!$this->recurrenceMonthInterval) ?: $this->recurrenceMonthInterval->getValue();
    }
}
