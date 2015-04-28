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
 * Response to GroupDepartmentAdminGetListRequest.
 *         Contains a 5 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Department", "Language".
 */
class GroupDepartmentAdminGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupDepartmentAdminGetListResponse';
    protected $departmentAdminTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDepartmentAdminGetListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDepartmentAdminTable(TableType $departmentAdminTable = null)
    {
        $this->departmentAdminTable = $departmentAdminTable;
        $this->departmentAdminTable->setElementName('departmentAdminTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getDepartmentAdminTable()
    {
        return $this->departmentAdminTable;
    }
}
