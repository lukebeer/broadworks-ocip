<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


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
    public    $elementName = 'SystemPreferredCarrierGetGroupListResponse';
    protected $groupsUsingCarrierTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePreferredCarrier\SystemPreferredCarrierGetGroupListResponse $response
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
        $this->groupsUsingCarrierTable = $groupsUsingCarrierTable;
        $this->groupsUsingCarrierTable->setElementName('groupsUsingCarrierTable');
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
