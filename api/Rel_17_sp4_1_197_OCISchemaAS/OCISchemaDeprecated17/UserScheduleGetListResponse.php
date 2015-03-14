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
 * Response to UserScheduleGetListRequest.
 *         The response contains a list of system schedules.
 */
class UserScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name          = 'UserScheduleGetListResponse';
    protected $scheduleName  = null;
    protected $scheduleType  = null;
    protected $scheduleLevel = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\UserScheduleGetListResponse $response
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
        if (!$scheduleName) return $this;
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
        return $this->scheduleName->getValue();
    }

    /**
     * 
     */
    public function setScheduleType($scheduleType = null)
    {
        if (!$scheduleType) return $this;
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
        return $this->scheduleType->getValue();
    }

    /**
     * 
     */
    public function setScheduleLevel($scheduleLevel = null)
    {
        if (!$scheduleLevel) return $this;
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
        return $this->scheduleLevel->getValue();
    }
}
