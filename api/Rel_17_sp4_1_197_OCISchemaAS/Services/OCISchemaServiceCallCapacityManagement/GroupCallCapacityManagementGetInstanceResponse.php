<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement\CallCapacityCallLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCapacityManagementGetInstanceRequest.
 *         Contains a table with column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupCallCapacityManagementGetInstanceResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCapacityManagementGetInstanceResponse';
    protected $name;
    protected $maxActiveCallsAllowed;
    protected $maxIncomingActiveCallsAllowed;
    protected $maxOutgoingActiveCallsAllowed;
    protected $defaultGroupForNewUsers;
    protected $userTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement\GroupCallCapacityManagementGetInstanceResponse $response
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
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceName $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed = null)
    {
        $this->maxActiveCallsAllowed = ($maxActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxActiveCallsAllowed
             : new CallCapacityCallLimit($maxActiveCallsAllowed);
        $this->maxActiveCallsAllowed->setName('maxActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit $maxActiveCallsAllowed
     */
    public function getMaxActiveCallsAllowed()
    {
        return ($this->maxActiveCallsAllowed) ? $this->maxActiveCallsAllowed->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed = null)
    {
        $this->maxIncomingActiveCallsAllowed = ($maxIncomingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxIncomingActiveCallsAllowed
             : new CallCapacityCallLimit($maxIncomingActiveCallsAllowed);
        $this->maxIncomingActiveCallsAllowed->setName('maxIncomingActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit $maxIncomingActiveCallsAllowed
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return ($this->maxIncomingActiveCallsAllowed) ? $this->maxIncomingActiveCallsAllowed->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed = null)
    {
        $this->maxOutgoingActiveCallsAllowed = ($maxOutgoingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxOutgoingActiveCallsAllowed
             : new CallCapacityCallLimit($maxOutgoingActiveCallsAllowed);
        $this->maxOutgoingActiveCallsAllowed->setName('maxOutgoingActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit $maxOutgoingActiveCallsAllowed
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return ($this->maxOutgoingActiveCallsAllowed) ? $this->maxOutgoingActiveCallsAllowed->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultGroupForNewUsers($defaultGroupForNewUsers = null)
    {
        $this->defaultGroupForNewUsers = new PrimitiveType($defaultGroupForNewUsers);
        $this->defaultGroupForNewUsers->setName('defaultGroupForNewUsers');
        return $this;
    }

    /**
     * 
     * @return boolean $defaultGroupForNewUsers
     */
    public function getDefaultGroupForNewUsers()
    {
        return ($this->defaultGroupForNewUsers) ? $this->defaultGroupForNewUsers->getValue() : null;
    }

    /**
     * 
     */
    public function setUserTable(TableType $userTable = null)
    {
        $this->userTable = $userTable;
        $this->userTable->setName('userTable');
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
