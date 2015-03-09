<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleGlobalKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupScheduleGetListResponse17sp1;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupScheduleGetListRequest17sp1.
 *         The response contains a list of group schedules. If the group belongs to an enterprise, 
 *         it also contains the schedules for the enterprise.
 */
class GroupScheduleGetListResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $scheduleGlobalKey = null;

    /**
     * @return GroupScheduleGetListResponse17sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Uniquely identifies Holiday and Time Schedules throughout all System, Service Provider, Group and User level.
     */
    public function setScheduleGlobalKey(ScheduleGlobalKey $scheduleGlobalKey = null)
    {
        $this->scheduleGlobalKey =  $scheduleGlobalKey;
    }

    /**
     * Uniquely identifies Holiday and Time Schedules throughout all System, Service Provider, Group and User level.
     */
    public function getScheduleGlobalKey()
    {
        return (!$this->scheduleGlobalKey) ?: $this->scheduleGlobalKey->getValue();
    }
}
