<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleLevel;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupScheduleGetListRequest.
 *         The response contains a list of system schedules.
 */
class GroupScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupScheduleGetListResponse';
    protected $scheduleName;
    protected $scheduleType;
    protected $scheduleLevel;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupScheduleGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setScheduleName($scheduleName = null)
    {
        $this->scheduleName = ($scheduleName InstanceOf ScheduleName)
             ? $scheduleName
             : new ScheduleName($scheduleName);
        $this->scheduleName->setElementName('scheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $scheduleName
     */
    public function getScheduleName()
    {
        return ($this->scheduleName)
            ? $this->scheduleName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScheduleType($scheduleType = null)
    {
        $this->scheduleType = ($scheduleType InstanceOf ScheduleType)
             ? $scheduleType
             : new ScheduleType($scheduleType);
        $this->scheduleType->setElementName('scheduleType');
        return $this;
    }

    /**
     * 
     * @return ScheduleType $scheduleType
     */
    public function getScheduleType()
    {
        return ($this->scheduleType)
            ? $this->scheduleType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScheduleLevel($scheduleLevel = null)
    {
        $this->scheduleLevel = ($scheduleLevel InstanceOf ScheduleLevel)
             ? $scheduleLevel
             : new ScheduleLevel($scheduleLevel);
        $this->scheduleLevel->setElementName('scheduleLevel');
        return $this;
    }

    /**
     * 
     * @return ScheduleLevel $scheduleLevel
     */
    public function getScheduleLevel()
    {
        return ($this->scheduleLevel)
            ? $this->scheduleLevel->getElementValue()
            : null;
    }
}
