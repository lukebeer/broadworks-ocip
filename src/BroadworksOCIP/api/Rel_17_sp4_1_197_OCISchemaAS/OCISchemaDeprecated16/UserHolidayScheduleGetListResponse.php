<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserHolidayScheduleGetListRequest.
 *         The response contains all the user's personal and user's group holiday schedule names.
 */
class UserHolidayScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserHolidayScheduleGetListResponse';
    protected $holidayScheduleTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserHolidayScheduleGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setHolidayScheduleTable(TableType $holidayScheduleTable = null)
    {
        $this->holidayScheduleTable = $holidayScheduleTable;
        $this->holidayScheduleTable->setElementName('holidayScheduleTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getHolidayScheduleTable()
    {
        return $this->holidayScheduleTable;
    }
}
