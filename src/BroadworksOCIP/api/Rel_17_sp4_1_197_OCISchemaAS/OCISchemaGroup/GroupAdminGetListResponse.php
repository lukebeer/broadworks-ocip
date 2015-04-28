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
 * Response to GroupAdminGetListRequest.
 *         Contains a 5 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Department", "Language".
 */
class GroupAdminGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupAdminGetListResponse';
    protected $groupAdminTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupAdminGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupAdminTable(TableType $groupAdminTable = null)
    {
        $this->groupAdminTable = $groupAdminTable;
        $this->groupAdminTable->setElementName('groupAdminTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupAdminTable()
    {
        return $this->groupAdminTable;
    }
}
