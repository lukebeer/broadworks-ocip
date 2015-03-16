<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupHuntGroupGetInstanceRequest17sp4.
 *         Contains the service profile information and a table of assigned users.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 *         "Hiragana Last Name", "Hiragana First Name", "Weight".
 *         The following elements are only used in AS data mode:
 *            useSystemHuntGroupCLIDSetting
 * 	         includeHuntGroupNameInCLID
 *            enableNotReachableForwarding
 *            notReachableForwardToPhoneNumber
 *            makeBusyWhenNotReachable
 */
class GroupHuntGroupGetInstanceResponse17sp4 extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupHuntGroupGetInstanceResponse17sp4';
    protected $serviceInstanceProfile;
    protected $policy;
    protected $huntAfterNoAnswer;
    protected $noAnswerNumberOfRings;
    protected $forwardAfterTimeout;
    protected $forwardTimeoutSeconds;
    protected $forwardToPhoneNumber;
    protected $agentUserTable;
    protected $allowCallWaitingForAgents;
    protected $useSystemHuntGroupCLIDSetting;
    protected $includeHuntGroupNameInCLID;
    protected $enableNotReachableForwarding;
    protected $notReachableForwardToPhoneNumber;
    protected $makeBusyWhenNotReachable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup\GroupHuntGroupGetInstanceResponse17sp4 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile17 $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceReadProfile17)
             ? $serviceInstanceProfile
             : new ServiceInstanceReadProfile17($serviceInstanceProfile);
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile17 $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setPolicy($policy = null)
    {
        $this->policy = ($policy InstanceOf HuntPolicy)
             ? $policy
             : new HuntPolicy($policy);
        $this->policy->setName('policy');
        return $this;
    }

    /**
     * 
     * @return HuntPolicy $policy
     */
    public function getPolicy()
    {
        return ($this->policy) ? $this->policy->getValue() : null;
    }

    /**
     * 
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer = null)
    {
        $this->huntAfterNoAnswer = new PrimitiveType($huntAfterNoAnswer);
        $this->huntAfterNoAnswer->setName('huntAfterNoAnswer');
        return $this;
    }

    /**
     * 
     * @return boolean $huntAfterNoAnswer
     */
    public function getHuntAfterNoAnswer()
    {
        return ($this->huntAfterNoAnswer) ? $this->huntAfterNoAnswer->getValue() : null;
    }

    /**
     * 
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf HuntNoAnswerRings)
             ? $noAnswerNumberOfRings
             : new HuntNoAnswerRings($noAnswerNumberOfRings);
        $this->noAnswerNumberOfRings->setName('noAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return HuntNoAnswerRings $noAnswerNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return ($this->noAnswerNumberOfRings) ? $this->noAnswerNumberOfRings->getValue() : null;
    }

    /**
     * 
     */
    public function setForwardAfterTimeout($forwardAfterTimeout = null)
    {
        $this->forwardAfterTimeout = new PrimitiveType($forwardAfterTimeout);
        $this->forwardAfterTimeout->setName('forwardAfterTimeout');
        return $this;
    }

    /**
     * 
     * @return boolean $forwardAfterTimeout
     */
    public function getForwardAfterTimeout()
    {
        return ($this->forwardAfterTimeout) ? $this->forwardAfterTimeout->getValue() : null;
    }

    /**
     * 
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds = null)
    {
        $this->forwardTimeoutSeconds = ($forwardTimeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $forwardTimeoutSeconds
             : new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->forwardTimeoutSeconds->setName('forwardTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return HuntForwardTimeoutSeconds $forwardTimeoutSeconds
     */
    public function getForwardTimeoutSeconds()
    {
        return ($this->forwardTimeoutSeconds) ? $this->forwardTimeoutSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDN)
             ? $forwardToPhoneNumber
             : new OutgoingDN($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $forwardToPhoneNumber
     */
    public function getForwardToPhoneNumber()
    {
        return ($this->forwardToPhoneNumber) ? $this->forwardToPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setAgentUserTable(TableType $agentUserTable = null)
    {
        $this->agentUserTable = $agentUserTable;
        $this->agentUserTable->setName('agentUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getAgentUserTable()
    {
        return $this->agentUserTable;
    }

    /**
     * 
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents = null)
    {
        $this->allowCallWaitingForAgents = new PrimitiveType($allowCallWaitingForAgents);
        $this->allowCallWaitingForAgents->setName('allowCallWaitingForAgents');
        return $this;
    }

    /**
     * 
     * @return boolean $allowCallWaitingForAgents
     */
    public function getAllowCallWaitingForAgents()
    {
        return ($this->allowCallWaitingForAgents) ? $this->allowCallWaitingForAgents->getValue() : null;
    }

    /**
     * 
     */
    public function setUseSystemHuntGroupCLIDSetting($useSystemHuntGroupCLIDSetting = null)
    {
        $this->useSystemHuntGroupCLIDSetting = new PrimitiveType($useSystemHuntGroupCLIDSetting);
        $this->useSystemHuntGroupCLIDSetting->setName('useSystemHuntGroupCLIDSetting');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemHuntGroupCLIDSetting
     */
    public function getUseSystemHuntGroupCLIDSetting()
    {
        return ($this->useSystemHuntGroupCLIDSetting) ? $this->useSystemHuntGroupCLIDSetting->getValue() : null;
    }

    /**
     * 
     */
    public function setIncludeHuntGroupNameInCLID($includeHuntGroupNameInCLID = null)
    {
        $this->includeHuntGroupNameInCLID = new PrimitiveType($includeHuntGroupNameInCLID);
        $this->includeHuntGroupNameInCLID->setName('includeHuntGroupNameInCLID');
        return $this;
    }

    /**
     * 
     * @return boolean $includeHuntGroupNameInCLID
     */
    public function getIncludeHuntGroupNameInCLID()
    {
        return ($this->includeHuntGroupNameInCLID) ? $this->includeHuntGroupNameInCLID->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableNotReachableForwarding($enableNotReachableForwarding = null)
    {
        $this->enableNotReachableForwarding = new PrimitiveType($enableNotReachableForwarding);
        $this->enableNotReachableForwarding->setName('enableNotReachableForwarding');
        return $this;
    }

    /**
     * 
     * @return boolean $enableNotReachableForwarding
     */
    public function getEnableNotReachableForwarding()
    {
        return ($this->enableNotReachableForwarding) ? $this->enableNotReachableForwarding->getValue() : null;
    }

    /**
     * 
     */
    public function setNotReachableForwardToPhoneNumber($notReachableForwardToPhoneNumber = null)
    {
        $this->notReachableForwardToPhoneNumber = ($notReachableForwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $notReachableForwardToPhoneNumber
             : new OutgoingDNorSIPURI($notReachableForwardToPhoneNumber);
        $this->notReachableForwardToPhoneNumber->setName('notReachableForwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $notReachableForwardToPhoneNumber
     */
    public function getNotReachableForwardToPhoneNumber()
    {
        return ($this->notReachableForwardToPhoneNumber) ? $this->notReachableForwardToPhoneNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setMakeBusyWhenNotReachable($makeBusyWhenNotReachable = null)
    {
        $this->makeBusyWhenNotReachable = new PrimitiveType($makeBusyWhenNotReachable);
        $this->makeBusyWhenNotReachable->setName('makeBusyWhenNotReachable');
        return $this;
    }

    /**
     * 
     * @return boolean $makeBusyWhenNotReachable
     */
    public function getMakeBusyWhenNotReachable()
    {
        return ($this->makeBusyWhenNotReachable) ? $this->makeBusyWhenNotReachable->getValue() : null;
    }
}
