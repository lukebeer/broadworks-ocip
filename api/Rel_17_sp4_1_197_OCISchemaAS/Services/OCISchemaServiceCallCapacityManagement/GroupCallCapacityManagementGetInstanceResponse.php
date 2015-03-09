<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCapacityManagement; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCapacityManagement\CallCapacityCallLimit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCapacityManagement\GroupCallCapacityManagementGetInstanceResponse;
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
    public    $name                          = __CLASS__;
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
     * Service Instance Name for a service without a user id.
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf ServiceInstanceName)
             ? $name
             : new ServiceInstanceName($name);
    }

    /**
     * Service Instance Name for a service without a user id.
     */
    public function getName()
    {
        return (!$this->name) ?: $this->name->getValue();
    }

    /**
     * Range of values for the call capacity of a capacity group.
     */
    public function setMaxActiveCallsAllowed($maxActiveCallsAllowed = null)
    {
        $this->maxActiveCallsAllowed = ($maxActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxActiveCallsAllowed
             : new CallCapacityCallLimit($maxActiveCallsAllowed);
    }

    /**
     * Range of values for the call capacity of a capacity group.
     */
    public function getMaxActiveCallsAllowed()
    {
        return (!$this->maxActiveCallsAllowed) ?: $this->maxActiveCallsAllowed->getValue();
    }

    /**
     * Range of values for the call capacity of a capacity group.
     */
    public function setMaxIncomingActiveCallsAllowed($maxIncomingActiveCallsAllowed = null)
    {
        $this->maxIncomingActiveCallsAllowed = ($maxIncomingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxIncomingActiveCallsAllowed
             : new CallCapacityCallLimit($maxIncomingActiveCallsAllowed);
    }

    /**
     * Range of values for the call capacity of a capacity group.
     */
    public function getMaxIncomingActiveCallsAllowed()
    {
        return (!$this->maxIncomingActiveCallsAllowed) ?: $this->maxIncomingActiveCallsAllowed->getValue();
    }

    /**
     * Range of values for the call capacity of a capacity group.
     */
    public function setMaxOutgoingActiveCallsAllowed($maxOutgoingActiveCallsAllowed = null)
    {
        $this->maxOutgoingActiveCallsAllowed = ($maxOutgoingActiveCallsAllowed InstanceOf CallCapacityCallLimit)
             ? $maxOutgoingActiveCallsAllowed
             : new CallCapacityCallLimit($maxOutgoingActiveCallsAllowed);
    }

    /**
     * Range of values for the call capacity of a capacity group.
     */
    public function getMaxOutgoingActiveCallsAllowed()
    {
        return (!$this->maxOutgoingActiveCallsAllowed) ?: $this->maxOutgoingActiveCallsAllowed->getValue();
    }

    /**
     * 
     */
    public function setDefaultGroupForNewUsers($defaultGroupForNewUsers = null)
    {
        $this->defaultGroupForNewUsers = (boolean) $defaultGroupForNewUsers;
    }

    /**
     * 
     */
    public function getDefaultGroupForNewUsers()
    {
        return (!$this->defaultGroupForNewUsers) ?: $this->defaultGroupForNewUsers;
    }

    /**
     * 
     */
    public function setUserTable(core:OCITable $userTable = null)
    {
        $this->userTable =  $userTable;
    }

    /**
     * 
     */
    public function getUserTable()
    {
        return (!$this->userTable) ?: $this->userTable->getValue();
    }
}
