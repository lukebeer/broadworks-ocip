<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AssignedGroupServicesEntry;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AssignedUserServicesEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserAssignedServicesGetListRequest.
 *         A user can have both user services and group services because of music on hold.
 */
class UserAssignedServicesGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name              = 'UserAssignedServicesGetListResponse';
    protected $groupServiceEntry = null;
    protected $userServiceEntry  = null;

    /**
     * @return UserAssignedServicesGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setGroupServiceEntry(AssignedGroupServicesEntry $groupServiceEntry = null)
    {
        if (!$groupServiceEntry) return $this;
        $this->groupServiceEntry = $groupServiceEntry;
        $this->groupServiceEntry->setName('groupServiceEntry');
        return $this;
    }

    /**
     * 
     * @return AssignedGroupServicesEntry
     */
    public function getGroupServiceEntry()
    {
        return $this->groupServiceEntry;
    }

    /**
     * 
     */
    public function setUserServiceEntry(AssignedUserServicesEntry $userServiceEntry = null)
    {
        if (!$userServiceEntry) return $this;
        $this->userServiceEntry = $userServiceEntry;
        $this->userServiceEntry->setName('userServiceEntry');
        return $this;
    }

    /**
     * 
     * @return AssignedUserServicesEntry
     */
    public function getUserServiceEntry()
    {
        return $this->userServiceEntry;
    }
}
