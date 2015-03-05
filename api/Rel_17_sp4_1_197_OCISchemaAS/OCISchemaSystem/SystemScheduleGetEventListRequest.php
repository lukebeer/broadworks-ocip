<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get the list of events of a system schedule.
 *         The response is either a SystemScheduleGetResponse or an ErrorResponse.
 */
class SystemScheduleGetEventListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             ScheduleKey $scheduleKey
    ) {
        $this->scheduleKey = $scheduleKey;
        $this->args        = func_get_args();
    }

    public function setScheduleKey($scheduleKey)
    {
        $scheduleKey and $this->scheduleKey = new ScheduleKey($scheduleKey);
    }

    public function getScheduleKey()
    {
        return (!$this->scheduleKey) ?: $this->scheduleKey->value();
    }
}
