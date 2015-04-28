<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to ServiceProviderServiceGetAuthorizationListRequest.
 *         Contains two tables, one for the group services and one for the user services.
 *         The Group Service table has column headings:
 *         "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Allocated", "Licensed", "Service Pack Allocation"
 *         The User Service table has column headings:
 *         "Service Name", "Authorized", "Assigned", "Limited", "Quantity", "Allocated", "Licensed", "Service Pack Allocation", "User Assignable", "Service Pack Assignable".
 */
class ServiceProviderServiceGetAuthorizationListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderServiceGetAuthorizationListResponse';
    protected $groupServicesAuthorizationTable;
    protected $userServicesAuthorizationTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServiceGetAuthorizationListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
