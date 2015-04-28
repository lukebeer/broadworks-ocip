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
 * Response to GroupServiceGetAuthorizationListRequest.
 *         Contains three tables, one for the service packs, one for the group services, and one for
 *         the user services.
 *         The user table has the following column headings:
 *           "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Usage", "Licensed", "Allowed", "User Assignable", "Group Service Assignable".
 *         The group service table has the following column headings:
 *           "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Usage", "Licensed", "Allowed".
 *         The service pack table's column headings are:
 *           "Service Pack Name", "Authorized", "Assigned", "Limited", "Allocated", "Allowed", "Usage", "Description".
 */
class GroupServiceGetAuthorizationListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupServiceGetAuthorizationListResponse';
    protected $servicePacksAuthorizationTable;
    protected $groupServicesAuthorizationTable;
    protected $userServicesAuthorizationTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupServiceGetAuthorizationListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServicePacksAuthorizationTable(TableType $servicePacksAuthorizationTable = null)
    {
        $this->servicePacksAuthorizationTable = $servicePacksAuthorizationTable;
        $this->servicePacksAuthorizationTable->setElementName('servicePacksAuthorizationTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getServicePacksAuthorizationTable()
    {
        return $this->servicePacksAuthorizationTable;
    }

    /**
     * 
     */
    public function setGroupServicesAuthorizationTable(TableType $groupServicesAuthorizationTable = null)
    {
        $this->groupServicesAuthorizationTable = $groupServicesAuthorizationTable;
        $this->groupServicesAuthorizationTable->setElementName('groupServicesAuthorizationTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getGroupServicesAuthorizationTable()
    {
        return $this->groupServicesAuthorizationTable;
    }

    /**
     * 
     */
    public function setUserServicesAuthorizationTable(TableType $userServicesAuthorizationTable = null)
    {
        $this->userServicesAuthorizationTable = $userServicesAuthorizationTable;
        $this->userServicesAuthorizationTable->setElementName('userServicesAuthorizationTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUserServicesAuthorizationTable()
    {
        return $this->userServicesAuthorizationTable;
    }
}
