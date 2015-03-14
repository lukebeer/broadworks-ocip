<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderOfficeZoneGetAssignedGroupListRequest.  Contains a table of groups that have the Office Zone assigned. The column headings are: "Group Id" and "Group Name".
 */
class ServiceProviderOfficeZoneGetAssignedGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = 'ServiceProviderOfficeZoneGetAssignedGroupListResponse';
    protected $groupTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderOfficeZoneGetAssignedGroupListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupTable(TableType $groupTable = null)
    {
        if (!$groupTable) return $this;
        $this->groupTable = $groupTable;
        $this->groupTable->setName('groupTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupTable()
    {
        return $this->groupTable;
    }
}
