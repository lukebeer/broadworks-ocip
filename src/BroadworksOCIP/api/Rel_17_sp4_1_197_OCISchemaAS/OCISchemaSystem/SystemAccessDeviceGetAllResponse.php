<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemAccessDeviceGetAllRequest.
 *         Contains a table of devices configured in the entire system.
 *         The column headings are: "Service Provider Id", "Is Enterprise", "Group Id",
 *         "Device Name", "Device Type", "Net Address", "MAC Address", "Status".
 */
class SystemAccessDeviceGetAllResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccessDeviceGetAllResponse';
    protected $accessDeviceTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceGetAllResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAccessDeviceTable(TableType $accessDeviceTable = null)
    {
        $this->accessDeviceTable = $accessDeviceTable;
        $this->accessDeviceTable->setElementName('accessDeviceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAccessDeviceTable()
    {
        return $this->accessDeviceTable;
    }
}
