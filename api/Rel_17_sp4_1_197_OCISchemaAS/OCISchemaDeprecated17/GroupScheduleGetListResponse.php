<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleLevel;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupScheduleGetListRequest.
 *         The response contains a list of system schedules.
 */
class GroupScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupScheduleGetListResponse';
    protected $scheduleName;
    protected $scheduleType;
    protected $scheduleLevel;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupScheduleGetListResponse $response
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
        $this->scheduleName->setName('scheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $scheduleName
     */
    public function getScheduleName()
    {
        return ($this->scheduleName) ? $this->scheduleName->getValue() : null;
    }

    /**
     * 
     */
    public function setScheduleType($scheduleType = null)
    {
        $this->scheduleType = ($scheduleType InstanceOf ScheduleType)
             ? $scheduleType
             : new ScheduleType($scheduleType);
        $this->scheduleType->setName('scheduleType');
        return $this;
    }

    /**
     * 
     * @return ScheduleType $scheduleType
     */
    public function getScheduleType()
    {
        return ($this->scheduleType) ? $this->scheduleType->getValue() : null;
    }

    /**
     * 
     */
    public function setScheduleLevel($scheduleLevel = null)
    {
        $this->scheduleLevel = ($scheduleLevel InstanceOf ScheduleLevel)
             ? $scheduleLevel
             : new ScheduleLevel($scheduleLevel);
        $this->scheduleLevel->setName('scheduleLevel');
        return $this;
    }

    /**
     * 
     * @return ScheduleLevel $scheduleLevel
     */
    public function getScheduleLevel()
    {
        return ($this->scheduleLevel) ? $this->scheduleLevel->getValue() : null;
    }
}
