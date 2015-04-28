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
 * Represents a specific time with hour and minute granularity
 */
class HourMinute extends ComplexType implements ComplexInterface
{
    public    $elementName = 'HourMinute';
    protected $hour;
    protected $minute;

    public function __construct(
         $hour = '',
         $minute = ''
    ) {
        $this->setHour($hour);
        $this->setMinute($minute);
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
    public function setHour($hour = null)
    {
        $this->hour = new SimpleContent($hour);
        $this->hour->setElementName('hour');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $hour
     */
    public function getHour()
    {
        return ($this->hour)
            ? $this->hour->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMinute($minute = null)
    {
        $this->minute = new SimpleContent($minute);
        $this->minute->setElementName('minute');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $minute
     */
    public function getMinute()
    {
        return ($this->minute)
            ? $this->minute->getElementValue()
            : null;
    }
}
