<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAccessDeviceFileGetListRequest14sp8.
 *         Contains a table of device files managed by the Device Management System on a per-device profile basis.
 *         The column headings are: "File Format", "Is Authenticated", "Access URL", "Repository URL", "Template URL".
 */
class SystemAccessDeviceFileGetListResponse14sp8 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccessDeviceFileGetListResponse14sp8';
    protected $deviceFilesTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemAccessDeviceFileGetListResponse14sp8 $response
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
