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
 * Response to ServiceProviderAccessDeviceFileGetListRequest.
 *           Contains a table of device files managed by the Device Management System on a per-device profile basis.
 *           The column headings are: "File Type", "File Format", "Is Authenticated".
 *           Replaced By: ServiceProviderAccessDeviceFileGetListResponse14sp8
 */
class ServiceProviderAccessDeviceFileGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = 'ServiceProviderAccessDeviceFileGetListResponse';
    protected $deviceFilesTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\ServiceProviderAccessDeviceFileGetListResponse $response
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
        if (!$deviceFilesTable) return $this;
        $this->deviceFilesTable = $deviceFilesTable;
        $this->deviceFilesTable->setName('deviceFilesTable');
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
