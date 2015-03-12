<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemSIPDeviceTypeFileGetListRequest.
 *           Contains a table of device files managed by the Device Management System on a per-device type basis.
 *           The column headings are: "File Type", "File Format", "Is Authenticated".
 *           Replaced By: SystemSIPDeviceTypeFileGetListResponse14sp8
 */
class SystemSIPDeviceTypeFileGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = 'SystemSIPDeviceTypeFileGetListResponse';
    protected $deviceTypeFilesTable = null;

    /**
     * @return SystemSIPDeviceTypeFileGetListResponse
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
        if (!$deviceTypeFilesTable) return $this;
        $this->deviceTypeFilesTable = $deviceTypeFilesTable;
        $this->deviceTypeFilesTable->setName('deviceTypeFilesTable');
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
