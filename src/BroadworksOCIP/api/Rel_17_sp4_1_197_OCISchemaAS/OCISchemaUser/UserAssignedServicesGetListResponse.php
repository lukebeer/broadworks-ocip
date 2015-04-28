<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AssignedGroupServicesEntry;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AssignedUserServicesEntry;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserAssignedServicesGetListRequest.
 *         A user can have both user services and group services because of music on hold.
 */
class UserAssignedServicesGetListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserAssignedServicesGetListResponse';
    protected $groupServiceEntry;
    protected $userServiceEntry;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserAssignedServicesGetListResponse $response
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
        $this->groupServiceEntry = ($groupServiceEntry InstanceOf AssignedGroupServicesEntry)
             ? $groupServiceEntry
             : new AssignedGroupServicesEntry($groupServiceEntry);
        $this->groupServiceEntry->setElementName('groupServiceEntry');
        return $this;
    }

    /**
     * 
     * @return AssignedGroupServicesEntry $groupServiceEntry
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
        $this->userServiceEntry = ($userServiceEntry InstanceOf AssignedUserServicesEntry)
             ? $userServiceEntry
             : new AssignedUserServicesEntry($userServiceEntry);
        $this->userServiceEntry->setElementName('userServiceEntry');
        return $this;
    }

    /**
     * 
     * @return AssignedUserServicesEntry $userServiceEntry
     */
    public function getUserServiceEntry()
    {
        return $this->userServiceEntry;
    }
}
