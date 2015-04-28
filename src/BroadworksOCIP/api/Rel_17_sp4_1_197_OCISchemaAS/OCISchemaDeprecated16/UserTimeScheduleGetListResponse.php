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
 * Response to the UserTimeScheduleGetListRequest. The column headings are "Time Schedule" and
 *         "Type".
 *         The response contains user's personal and user's group's schedule names.
 */
class UserTimeScheduleGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserTimeScheduleGetListResponse';
    protected $timeScheduleTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserTimeScheduleGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTimeScheduleTable(TableType $timeScheduleTable = null)
    {
        $this->timeScheduleTable = $timeScheduleTable;
        $this->timeScheduleTable->setElementName('timeScheduleTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getTimeScheduleTable()
    {
        return $this->timeScheduleTable;
    }
}
