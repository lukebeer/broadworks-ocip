<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderScheduleGetListRequest.
 *         The response contains a list of service provider schedules.
 */
class ServiceProviderScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $scheduleKey  = null;


    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
    }

    public function getScheduleKey()
    {
        return (!$this->scheduleKey) ?: $this->scheduleKey->value();
    }
}
