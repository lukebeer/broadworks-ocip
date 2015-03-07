<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserTimeScheduleGetListRequest. The column headings are "Time Schedule" and
 *         "Type".
 *         The response contains user's personal and user's group's schedule names.
 */
class UserTimeScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $timeScheduleTable  = null;


    public function setTimeScheduleTable(core:OCITable $timeScheduleTable = null)
    {
    }

    public function getTimeScheduleTable()
    {
        return (!$this->timeScheduleTable) ?: $this->timeScheduleTable->value();
    }
}
