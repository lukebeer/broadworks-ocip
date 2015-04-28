<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a Hunt Group instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *            useSystemHuntGroupCLIDSetting, use value "true" in HSS data mode
 *            includeHuntGroupNameInCLID, use value "true" in HSS data mode
 */
class GroupHuntGroupAddInstanceRequest17sp3 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupHuntGroupAddInstanceRequest17sp3';
    protected $serviceProviderId;
    protected $groupId;
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $policy;
    protected $huntAfterNoAnswer;
    protected $noAnswerNumberOfRings;
    protected $forwardAfterTimeout;
    protected $forwardTimeoutSeconds;
    protected $forwardToPhoneNumber;
    protected $agentUserId;
    protected $allowCallWaitingForAgents;
    protected $useSystemHuntGroupCLIDSetting;
    protected $includeHuntGroupNameInCLID;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $serviceUserId = '',
         $serviceInstanceProfile = '',
         $policy = '',
         $huntAfterNoAnswer = '',
         $noAnswerNumberOfRings = '',
         $forwardAfterTimeout = '',
         $forwardTimeoutSeconds = '',
         $forwardToPhoneNumber = null,
         $agentUserId = null,
         $allowCallWaitingForAgents = '',
         $useSystemHuntGroupCLIDSetting = '',
         $includeHuntGroupNameInCLID = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setPolicy($policy);
        $this->setHuntAfterNoAnswer($huntAfterNoAnswer);
        $this->setNoAnswerNumberOfRings($noAnswerNumberOfRings);
        $this->setForwardAfterTimeout($forwardAfterTimeout);
        $this->setForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->setForwardToPhoneNumber($forwardToPhoneNumber);
        $this->setAgentUserId($agentUserId);
        $this->setAllowCallWaitingForAgents($allowCallWaitingForAgents);
        $this->setUseSystemHuntGroupCLIDSetting($useSystemHuntGroupCLIDSetting);
        $this->setIncludeHuntGroupNameInCLID($includeHuntGroupNameInCLID);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceAddProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceAddProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceAddProfile $serviceInstanceProfile
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
        $this->policy->setElementName('policy');
        return $this;
    }

    /**
     * 
     * @return HuntPolicy $policy
     */
    public function getPolicy()
    {
        return ($this->policy)
            ? $this->policy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer = null)
    {
        $this->huntAfterNoAnswer = new PrimitiveType($huntAfterNoAnswer);
        $this->huntAfterNoAnswer->setElementName('huntAfterNoAnswer');
        return $this;
    }

    /**
     * 
     * @return boolean $huntAfterNoAnswer
     */
    public function getHuntAfterNoAnswer()
    {
        return ($this->huntAfterNoAnswer)
            ? $this->huntAfterNoAnswer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf HuntNoAnswerRings)
             ? $noAnswerNumberOfRings
             : new HuntNoAnswerRings($noAnswerNumberOfRings);
        $this->noAnswerNumberOfRings->setElementName('noAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return HuntNoAnswerRings $noAnswerNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return ($this->noAnswerNumberOfRings)
            ? $this->noAnswerNumberOfRings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForwardAfterTimeout($forwardAfterTimeout = null)
    {
        $this->forwardAfterTimeout = new PrimitiveType($forwardAfterTimeout);
        $this->forwardAfterTimeout->setElementName('forwardAfterTimeout');
        return $this;
    }

    /**
     * 
     * @return boolean $forwardAfterTimeout
     */
    public function getForwardAfterTimeout()
    {
        return ($this->forwardAfterTimeout)
            ? $this->forwardAfterTimeout->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds = null)
    {
        $this->forwardTimeoutSeconds = ($forwardTimeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $forwardTimeoutSeconds
             : new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->forwardTimeoutSeconds->setElementName('forwardTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return HuntForwardTimeoutSeconds $forwardTimeoutSeconds
     */
    public function getForwardTimeoutSeconds()
    {
        return ($this->forwardTimeoutSeconds)
            ? $this->forwardTimeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDN)
             ? $forwardToPhoneNumber
             : new OutgoingDN($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setElementName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $forwardToPhoneNumber
     */
    public function getForwardToPhoneNumber()
    {
        return ($this->forwardToPhoneNumber)
            ? $this->forwardToPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAgentUserId($agentUserId = null)
    {
        $this->agentUserId = ($agentUserId InstanceOf UserId)
             ? $agentUserId
             : new UserId($agentUserId);
        $this->agentUserId->setElementName('agentUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $agentUserId
     */
    public function getAgentUserId()
    {
        return ($this->agentUserId)
            ? $this->agentUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents = null)
    {
        $this->allowCallWaitingForAgents = new PrimitiveType($allowCallWaitingForAgents);
        $this->allowCallWaitingForAgents->setElementName('allowCallWaitingForAgents');
        return $this;
    }

    /**
     * 
     * @return boolean $allowCallWaitingForAgents
     */
    public function getAllowCallWaitingForAgents()
    {
        return ($this->allowCallWaitingForAgents)
            ? $this->allowCallWaitingForAgents->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseSystemHuntGroupCLIDSetting($useSystemHuntGroupCLIDSetting = null)
    {
        $this->useSystemHuntGroupCLIDSetting = new PrimitiveType($useSystemHuntGroupCLIDSetting);
        $this->useSystemHuntGroupCLIDSetting->setElementName('useSystemHuntGroupCLIDSetting');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemHuntGroupCLIDSetting
     */
    public function getUseSystemHuntGroupCLIDSetting()
    {
        return ($this->useSystemHuntGroupCLIDSetting)
            ? $this->useSystemHuntGroupCLIDSetting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeHuntGroupNameInCLID($includeHuntGroupNameInCLID = null)
    {
        $this->includeHuntGroupNameInCLID = new PrimitiveType($includeHuntGroupNameInCLID);
        $this->includeHuntGroupNameInCLID->setElementName('includeHuntGroupNameInCLID');
        return $this;
    }

    /**
     * 
     * @return boolean $includeHuntGroupNameInCLID
     */
    public function getIncludeHuntGroupNameInCLID()
    {
        return ($this->includeHuntGroupNameInCLID)
            ? $this->includeHuntGroupNameInCLID->getElementValue()
            : null;
    }
}
