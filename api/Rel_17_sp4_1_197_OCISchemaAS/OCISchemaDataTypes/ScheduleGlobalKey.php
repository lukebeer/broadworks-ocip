<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Uniquely identifies Holiday and Time Schedules throughout all System, Service Provider, Group and User level.
 */
class ScheduleGlobalKey extends ComplexType implements ComplexInterface
{
    public    $name = 'ScheduleGlobalKey';
    protected $scheduleKey;
    protected $scheduleLevel;

    public function __construct(
         $scheduleKey = '',
         $scheduleLevel = ''
    ) {
        $this->setScheduleKey($scheduleKey);
        $this->setScheduleLevel($scheduleLevel);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setScheduleKey($scheduleKey = null)
    {
        $this->scheduleKey = new SimpleContent($scheduleKey);
        $this->scheduleKey->setName('scheduleKey');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $scheduleKey
     */
    public function getScheduleKey()
    {
        return ($this->scheduleKey) ? $this->scheduleKey->getValue() : null;
    }

    /**
     * 
     */
    public function setScheduleLevel($scheduleLevel = null)
    {
        $this->scheduleLevel = new SimpleContent($scheduleLevel);
        $this->scheduleLevel->setName('scheduleLevel');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $scheduleLevel
     */
    public function getScheduleLevel()
    {
        return ($this->scheduleLevel) ? $this->scheduleLevel->getValue() : null;
    }
}
