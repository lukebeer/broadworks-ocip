<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to a SystemPreferredCarrierGetGroupListRequest.
 *         Contains a table with one row per group.
 *         The table columns are: "Group Id", "Group Name", "Organization Id", "Organization Type".
 *         The "Organization Id" column is populated with either a service provider Id or an enterprise Id.
 *         The "Organization Type" column is populated with one of the enumerated strings defined in the
 *         OrganizationType OCI data type.  Please see OCISchemaDataTypes.xsd for details on OrganizationType.
 */
class SystemPreferredCarrierGetGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = 'SystemPreferredCarrierGetGroupListResponse';
    protected $groupsUsingCarrierTable = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\SystemPreferredCarrierGetGroupListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupsUsingCarrierTable(TableType $groupsUsingCarrierTable = null)
    {
        if (!$groupsUsingCarrierTable) return $this;
        $this->groupsUsingCarrierTable = $groupsUsingCarrierTable;
        $this->groupsUsingCarrierTable->setName('groupsUsingCarrierTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupsUsingCarrierTable()
    {
        return $this->groupsUsingCarrierTable;
    }
}
