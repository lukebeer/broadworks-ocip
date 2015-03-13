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
 * Response to GroupDeviceTypeFileGetListRequest.
 *         Contains a table of device type files managed by the Device Management System, on a per-group basis.
 *         The column headings are: "File Type", "File Format", "Is Authenticated".
 *         Replaced By: GroupDeviceTypeFileGetListResponse14sp8
 */
class GroupDeviceTypeFileGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = 'GroupDeviceTypeFileGetListResponse';
    protected $groupDeviceTypeFilesTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupDeviceTypeFileGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupDeviceTypeFilesTable(TableType $groupDeviceTypeFilesTable = null)
    {
        if (!$groupDeviceTypeFilesTable) return $this;
        $this->groupDeviceTypeFilesTable = $groupDeviceTypeFilesTable;
        $this->groupDeviceTypeFilesTable->setName('groupDeviceTypeFilesTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupDeviceTypeFilesTable()
    {
        return $this->groupDeviceTypeFilesTable;
    }
}
