<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleGlobalKey;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserScheduleGetListRequest17sp1.
 *         The response contains a list of schedules viewable by the user. It contains the schedules 
 *         defined for the user and the group the user belongs to. If the user belongs to an enterprise, 
 *         the list also contains the schedules defined for the enterprise.
 */
class UserScheduleGetListResponse17sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserScheduleGetListResponse17sp1';
    protected $scheduleGlobalKey;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserScheduleGetListResponse17sp1 $response
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
