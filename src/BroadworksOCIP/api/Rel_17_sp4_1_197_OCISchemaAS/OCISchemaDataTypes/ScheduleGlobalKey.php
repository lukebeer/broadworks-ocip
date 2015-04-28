<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Uniquely identifies Holiday and Time Schedules throughout all System, Service Provider, Group and User level.
 */
class ScheduleGlobalKey extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ScheduleGlobalKey';
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
        $this->scheduleKey->setElementName('scheduleKey');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $scheduleKey
     */
    public function getScheduleKey()
    {
        return ($this->scheduleKey)
            ? $this->scheduleKey->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScheduleLevel($scheduleLevel = null)
    {
        $this->scheduleLevel = new SimpleContent($scheduleLevel);
        $this->scheduleLevel->setElementName('scheduleLevel');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $scheduleLevel
     */
    public function getScheduleLevel()
    {
        return ($this->scheduleLevel)
            ? $this->scheduleLevel->getElementValue()
            : null;
    }
}
