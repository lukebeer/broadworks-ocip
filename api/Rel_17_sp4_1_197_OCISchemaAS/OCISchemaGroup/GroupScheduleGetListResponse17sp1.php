<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleGlobalKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupScheduleGetListRequest17sp1.
 *         The response contains a list of group schedules. If the group belongs to an enterprise, 
 *         it also contains the schedules for the enterprise.
 */
class GroupScheduleGetListResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             ScheduleGlobalKey $scheduleGlobalKey=null
    ) {
        $this->scheduleGlobalKey = $scheduleGlobalKey;
        $this->args              = func_get_args();
    }

    public function setScheduleGlobalKey($scheduleGlobalKey)
    {
        $scheduleGlobalKey and $this->scheduleGlobalKey = new ScheduleGlobalKey($scheduleGlobalKey);
    }

    public function getScheduleGlobalKey()
    {
        return (!$this->scheduleGlobalKey) ?: $this->scheduleGlobalKey->value();
    }
}
