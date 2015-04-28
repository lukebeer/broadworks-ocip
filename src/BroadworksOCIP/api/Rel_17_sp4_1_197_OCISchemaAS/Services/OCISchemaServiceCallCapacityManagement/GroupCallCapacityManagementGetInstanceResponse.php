<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement\CallCapacityCallLimit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the GroupCallCapacityManagementGetInstanceRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallCapacityManagementGetInstanceResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCapacityManagementGetInstanceResponse';
    protected $name;
    protected $maxActiveCallsAllowed;
    protected $maxIncomingActiveCallsAllowed;
    protected $maxOutgoingActiveCallsAllowed;
    protected $defaultGroupForNewUsers;
    protected $userTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement\GroupCallCapacityManagementGetInstanceResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf ServiceInstanceName)
             ? $name
             : new ServiceInstanceName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed = null)
    {
        $this->maxActiveCallsAllowed = ($maxActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxActiveCallsAllowed
             : new CallCapacityCallLimit($maxActiveCallsAllowed);
        $this->maxActiveCallsAllowed->setElementName('maxActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit $maxActiveCallsAllowed
     */
    public function getMaxActiveCallsAllowed()
    {
        return ($this->maxActiveCallsAllowed)
            ? $this->maxActiveCallsAllowed->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed = null)
    {
        $this->maxIncomingActiveCallsAllowed = ($maxIncomingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxIncomingActiveCallsAllowed
             : new CallCapacityCallLimit($maxIncomingActiveCallsAllowed);
        $this->maxIncomingActiveCallsAllowed->setElementName('maxIncomingActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit $maxIncomingActiveCallsAllowed
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return ($this->maxIncomingActiveCallsAllowed)
            ? $this->maxIncomingActiveCallsAllowed->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed = null)
    {
        $this->maxOutgoingActiveCallsAllowed = ($maxOutgoingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxOutgoingActiveCallsAllowed
             : new CallCapacityCallLimit($maxOutgoingActiveCallsAllowed);
        $this->maxOutgoingActiveCallsAllowed->setElementName('maxOutgoingActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit $maxOutgoingActiveCallsAllowed
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return ($this->maxOutgoingActiveCallsAllowed)
            ? $this->maxOutgoingActiveCallsAllowed->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultGroupForNewUsers($defaultGroupForNewUsers = null)
    {
        $this->defaultGroupForNewUsers = new PrimitiveType($defaultGroupForNewUsers);
        $this->defaultGroupForNewUsers->setElementName('defaultGroupForNewUsers');
        return $this;
    }

    /**
     * 
     * @return boolean $defaultGroupForNewUsers
     */
    public function getDefaultGroupForNewUsers()
    {
        return ($this->defaultGroupForNewUsers)
            ? $this->defaultGroupForNewUsers->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserTable(TableType $userTable = null)
    {
        $this->userTable = $userTable;
        $this->userTable->setElementName('userTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUserTable()
    {
        return $this->userTable;
    }
}
