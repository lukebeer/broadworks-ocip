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
    public    $name                          = 'GroupCallCapacityManagementGetInstanceResponse';
    protected $name                          = null;
    protected $maxActiveCallsAllowed         = null;
    protected $maxIncomingActiveCallsAllowed = null;
    protected $maxOutgoingActiveCallsAllowed = null;
    protected $defaultGroupForNewUsers       = null;
    protected $userTable                     = null;

    /**
     * @return GroupCallCapacityManagementGetInstanceResponse
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
        if (!$name) return $this;
        $this->name = ($name InstanceOf ServiceInstanceName)
             ? $name
             : new ServiceInstanceName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceName
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed = null)
    {
        if (!$maxActiveCallsAllowed) return $this;
        $this->maxActiveCallsAllowed = ($maxActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxActiveCallsAllowed
             : new CallCapacityCallLimit($maxActiveCallsAllowed);
        $this->maxActiveCallsAllowed->setName('maxActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit
     */
    public function getMaxActiveCallsAllowed()
    {
        return $this->maxActiveCallsAllowed->getValue();
    }

    /**
     * 
     */
    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed = null)
    {
        if (!$maxIncomingActiveCallsAllowed) return $this;
        $this->maxIncomingActiveCallsAllowed = ($maxIncomingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxIncomingActiveCallsAllowed
             : new CallCapacityCallLimit($maxIncomingActiveCallsAllowed);
        $this->maxIncomingActiveCallsAllowed->setName('maxIncomingActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return $this->maxIncomingActiveCallsAllowed->getValue();
    }

    /**
     * 
     */
    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed = null)
    {
        if (!$maxOutgoingActiveCallsAllowed) return $this;
        $this->maxOutgoingActiveCallsAllowed = ($maxOutgoingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxOutgoingActiveCallsAllowed
             : new CallCapacityCallLimit($maxOutgoingActiveCallsAllowed);
        $this->maxOutgoingActiveCallsAllowed->setName('maxOutgoingActiveCallsAllowed');
        return $this;
    }

    /**
     * 
     * @return CallCapacityCallLimit
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return $this->maxOutgoingActiveCallsAllowed->getValue();
    }

    /**
     * 
     */
    public function setDefaultGroupForNewUsers($defaultGroupForNewUsers = null)
    {
        if (!$defaultGroupForNewUsers) return $this;
        $this->defaultGroupForNewUsers = new PrimitiveType($defaultGroupForNewUsers);
        $this->defaultGroupForNewUsers->setName('defaultGroupForNewUsers');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDefaultGroupForNewUsers()
    {
        return $this->defaultGroupForNewUsers->getValue();
    }

    /**
     * 
     */
    public function setUserTable(TableType $userTable = null)
    {
        if (!$userTable) return $this;
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
        return $this->userTable->getValue();
    }
}
