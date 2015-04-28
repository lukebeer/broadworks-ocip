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
 * Response to SystemDeviceManagementTagGetListRequest.
 *         Contains a table of custom configuration tags managed by the Device Management System.
 *         The column headings are: "Tag Name", "Tag Value".
 */
class SystemDeviceManagementTagGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemDeviceManagementTagGetListResponse';
    protected $tagsTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDeviceManagementTagGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTagsTable(TableType $tagsTable = null)
    {
        $this->tagsTable = $tagsTable;
        $this->tagsTable->setElementName('tagsTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getTagsTable()
    {
        return $this->tagsTable;
    }
}
