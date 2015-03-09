<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServiceGetAuthorizationListResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $name                            = __CLASS__;
    protected $groupServicesAuthorizationTable = null;
    protected $userServicesAuthorizationTable  = null;

    /**
     * @return ServiceProviderServiceGetAuthorizationListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupServicesAuthorizationTable(core:OCITable $groupServicesAuthorizationTable = null)
    {
        $this->groupServicesAuthorizationTable =  $groupServicesAuthorizationTable;
    }

    /**
     * 
     */
    public function getGroupServicesAuthorizationTable()
    {
        return (!$this->groupServicesAuthorizationTable) ?: $this->groupServicesAuthorizationTable->getValue();
    }

    /**
     * 
     */
    public function setUserServicesAuthorizationTable(core:OCITable $userServicesAuthorizationTable = null)
    {
        $this->userServicesAuthorizationTable =  $userServicesAuthorizationTable;
    }

    /**
     * 
     */
    public function getUserServicesAuthorizationTable()
    {
        return (!$this->userServicesAuthorizationTable) ?: $this->userServicesAuthorizationTable->getValue();
    }
}
