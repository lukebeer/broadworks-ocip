<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleGlobalKey;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupScheduleGetListRequest17sp1.
 *         The response contains a list of group schedules. If the group belongs to an enterprise, 
 *         it also contains the schedules for the enterprise.
 */
class GroupScheduleGetListResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupScheduleGetListResponse17sp1';
    protected $scheduleGlobalKey;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupScheduleGetListResponse17sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setScheduleGlobalKey(ScheduleGlobalKey $scheduleGlobalKey = null)
    {
        $this->scheduleGlobalKey = ($scheduleGlobalKey InstanceOf ScheduleGlobalKey)
             ? $scheduleGlobalKey
             : new ScheduleGlobalKey($scheduleGlobalKey);
        $this->scheduleGlobalKey->setElementName('scheduleGlobalKey');
        return $this;
    }

    /**
     * 
     * @return ScheduleGlobalKey $scheduleGlobalKey
     */
    public function getScheduleGlobalKey()
    {
        return $this->scheduleGlobalKey;
    }
}
