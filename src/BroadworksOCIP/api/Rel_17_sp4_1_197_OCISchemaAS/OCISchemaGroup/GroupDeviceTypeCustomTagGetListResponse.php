<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupDeviceTypeCustomTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device Management System on a per-device type basis for a group.
 *         The column headings are: "Tag Name", "Tag Value"
 */
class GroupDeviceTypeCustomTagGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDeviceTypeCustomTagGetListResponse';
    protected $groupDeviceTypeCustomTagsTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDeviceTypeCustomTagGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupDeviceTypeCustomTagsTable(TableType $groupDeviceTypeCustomTagsTable = null)
    {
        $this->groupDeviceTypeCustomTagsTable = $groupDeviceTypeCustomTagsTable;
        $this->groupDeviceTypeCustomTagsTable->setElementName('groupDeviceTypeCustomTagsTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupDeviceTypeCustomTagsTable()
    {
        return $this->groupDeviceTypeCustomTagsTable;
    }
}
