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
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemScheduleGetEventListResponse';
    public    $name        = __CLASS__;
    protected $scheduleKey = null;

    public function __construct(
          $scheduleKey
    ) {
        $this->setScheduleKey($scheduleKey);
    }

    /**
     * Uniquely identifies Holiday and Time Schedules within a level(System, Service Provider, Group or User level).
     */
    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
        $this->scheduleKey =  $scheduleKey;
    }

    /**
     * Uniquely identifies Holiday and Time Schedules within a level(System, Service Provider, Group or User level).
     */
    public function getScheduleKey()
    {
        return (!$this->scheduleKey) ?: $this->scheduleKey->getValue();
    }
}
