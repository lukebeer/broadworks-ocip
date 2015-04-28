<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the SystemTimeScheduleGetListRequest.
 *         The response contains all the system time schedule names.
 */
class SystemTimeScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemTimeScheduleGetListResponse';
    protected $timeSchedule;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemTimeScheduleGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTimeSchedule($timeSchedule = null)
    {
        $this->timeSchedule = ($timeSchedule InstanceOf ScheduleName)
             ? $timeSchedule
             : new ScheduleName($timeSchedule);
        $this->timeSchedule->setElementName('timeSchedule');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $timeSchedule
     */
    public function getTimeSchedule()
    {
        return ($this->timeSchedule)
            ? $this->timeSchedule->getElementValue()
            : null;
    }
}
