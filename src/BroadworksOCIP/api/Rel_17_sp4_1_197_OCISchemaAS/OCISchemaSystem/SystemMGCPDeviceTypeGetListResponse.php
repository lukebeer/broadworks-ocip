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
 * Response to SystemMGCPDeviceTypeGetListRequest.
 *         Contains a table of identity/ device profile types configured in the system.
 *         The column headings are: "Device Type", "Profile", "Is Obsolete".
 */
class SystemMGCPDeviceTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemMGCPDeviceTypeGetListResponse';
    protected $deviceTypeTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemMGCPDeviceTypeGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceTypeTable(TableType $deviceTypeTable = null)
    {
        $this->deviceTypeTable = $deviceTypeTable;
        $this->deviceTypeTable->setElementName('deviceTypeTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDeviceTypeTable()
    {
        return $this->deviceTypeTable;
    }
}
