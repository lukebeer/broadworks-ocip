<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $name                            = 'GroupServiceGetAuthorizationListResponse';
    protected $servicePacksAuthorizationTable  = null;
    protected $groupServicesAuthorizationTable = null;
    protected $userServicesAuthorizationTable  = null;

    /**
     * @return GroupServiceGetAuthorizationListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServicePacksAuthorizationTable(core:OCITable $servicePacksAuthorizationTable = null)
    {
        if (!$servicePacksAuthorizationTable) return $this;
        $this->servicePacksAuthorizationTable->setName('servicePacksAuthorizationTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getServicePacksAuthorizationTable()
    {
        return $this->servicePacksAuthorizationTable->getValue();
    }

    /**
     * 
     */
    public function setGroupServicesAuthorizationTable(core:OCITable $groupServicesAuthorizationTable = null)
    {
        if (!$groupServicesAuthorizationTable) return $this;
        $this->groupServicesAuthorizationTable->setName('groupServicesAuthorizationTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getGroupServicesAuthorizationTable()
    {
        return $this->groupServicesAuthorizationTable->getValue();
    }

    /**
     * 
     */
    public function setUserServicesAuthorizationTable(core:OCITable $userServicesAuthorizationTable = null)
    {
        if (!$userServicesAuthorizationTable) return $this;
        $this->userServicesAuthorizationTable->setName('userServicesAuthorizationTable');
        return $this;
    }

    /**
     * 
     * @return core:OCITable
     */
    public function getUserServicesAuthorizationTable()
    {
        return $this->userServicesAuthorizationTable->getValue();
    }
}
