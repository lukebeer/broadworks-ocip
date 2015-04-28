<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemSIPDeviceTypeFileGetListRequest.
 *           Contains a table of device files managed by the Device Management System on a per-device type basis.
 *           The column headings are: "File Type", "File Format", "Is Authenticated".
 *           Replaced By: SystemSIPDeviceTypeFileGetListResponse14sp8
 */
class SystemSIPDeviceTypeFileGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSIPDeviceTypeFileGetListResponse';
    protected $deviceTypeFilesTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemSIPDeviceTypeFileGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceTypeFilesTable(TableType $deviceTypeFilesTable = null)
    {
        $this->deviceTypeFilesTable = $deviceTypeFilesTable;
        $this->deviceTypeFilesTable->setElementName('deviceTypeFilesTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDeviceTypeFilesTable()
    {
        return $this->deviceTypeFilesTable;
    }
}
