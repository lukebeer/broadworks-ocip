<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderRoutePointExternalSystemGetAssignedGroupListRequest.
 *         Contains a table with column headings: "Group Id", "Group Name"
 *         and a row for each group.
 */
class ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $name       = 'ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse';
    protected $groupTable = null;

    /**
     * @return ServiceProviderRoutePointExternalSystemGetAssignedGroupListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupTable(core:OCITable $groupTable = null)
    {
        if (!$groupTable) return $this;
        $this->groupTable->setName('groupTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getGroupTable()
    {
        return $this->groupTable->getValue();
    }
}
