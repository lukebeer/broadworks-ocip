<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingRecurrenceDayInterval;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Daily recurrence conference schedule used in the context of a conference add.
 */
class InstantConferencingRecurrenceScheduleDaily extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $recurrenceDayInterval
    ) {
        $this->recurrenceDayInterval = $recurrenceDayInterval;
        $this->args                  = func_get_args();
    }

    public function setRecurrenceDayInterval($recurrenceDayInterval)
    {
        $recurrenceDayInterval and $this->recurrenceDayInterval = new InstantConferencingRecurrenceDayInterval($recurrenceDayInterval);
    }

    public function getRecurrenceDayInterval()
    {
        return (!$this->recurrenceDayInterval) ?: $this->recurrenceDayInterval->value();
    }
}
