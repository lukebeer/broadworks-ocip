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
 * Response to SystemAccessDeviceFileGetListRequest.
 *           Contains a table of device files managed by the Device Management System on a per-device profile basis.
 *           The column headings are: "File Type", "File Format", "Is Authenticated".
 *           Replaced By: SystemAccessDeviceFileGetListResponse14sp8
 */
class SystemAccessDeviceFileGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccessDeviceFileGetListResponse';
    protected $deviceFilesTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemAccessDeviceFileGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDeviceFilesTable(TableType $deviceFilesTable = null)
    {
        $this->deviceFilesTable = $deviceFilesTable;
        $this->deviceFilesTable->setElementName('deviceFilesTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDeviceFilesTable()
    {
        return $this->deviceFilesTable;
    }
}
