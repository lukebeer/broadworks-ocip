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
 * Response to SystemSIPDeviceTypeFileGetListRequest14sp8.
 *         Contains a table of device files managed by the Device Management System on a per-device type basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access URL", "Repository URL", "Template URL".
 */
class SystemSIPDeviceTypeFileGetListResponse14sp8 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSIPDeviceTypeFileGetListResponse14sp8';
    protected $deviceTypeFilesTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemSIPDeviceTypeFileGetListResponse14sp8 $response
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
