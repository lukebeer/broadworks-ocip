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
 * Response to the SystemHolidayScheduleGetListRequest.
 *         The response contains all the system holiday schedule names.
 */
class SystemHolidayScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemHolidayScheduleGetListResponse';
    protected $holidayScheduleName;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemHolidayScheduleGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHolidayScheduleName($holidayScheduleName = null)
    {
        $this->holidayScheduleName = ($holidayScheduleName InstanceOf ScheduleName)
             ? $holidayScheduleName
             : new ScheduleName($holidayScheduleName);
        $this->holidayScheduleName->setElementName('holidayScheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $holidayScheduleName
     */
    public function getHolidayScheduleName()
    {
        return ($this->holidayScheduleName)
            ? $this->holidayScheduleName->getElementValue()
            : null;
    }
}
