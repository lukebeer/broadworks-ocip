<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a Hunt Group instance.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *            useSystemHuntGroupCLIDSetting
 *            includeHuntGroupNameInCLID
 *            enableNotReachableForwarding
 *            notReachableForwardToPhoneNumber
 *            makeBusyWhenNotReachable
 */
class GroupHuntGroupModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupHuntGroupModifyInstanceRequest';
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $policy;
    protected $huntAfterNoAnswer;
    protected $noAnswerNumberOfRings;
    protected $forwardAfterTimeout;
    protected $forwardTimeoutSeconds;
    protected $forwardToPhoneNumber;
    protected $agentUserIdList;
    protected $allowCallWaitingForAgents;
    protected $useSystemHuntGroupCLIDSetting;
    protected $includeHuntGroupNameInCLID;
    protected $enableNotReachableForwarding;
    protected $notReachableForwardToPhoneNumber;
    protected $makeBusyWhenNotReachable;

    public function __construct(
         $serviceUserId = '',
         $serviceInstanceProfile = null,
         $policy = null,
         $huntAfterNoAnswer = null,
         $noAnswerNumberOfRings = null,
         $forwardAfterTimeout = null,
         $forwardTimeoutSeconds = null,
         $forwardToPhoneNumber = null,
         $agentUserIdList = null,
         $allowCallWaitingForAgents = null,
         $useSystemHuntGroupCLIDSetting = null,
         $includeHuntGroupNameInCLID = null,
         $enableNotReachableForwarding = null,
         $notReachableForwardToPhoneNumber = null,
         $makeBusyWhenNotReachable = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setPolicy($policy);
        $this->setHuntAfterNoAnswer($huntAfterNoAnswer);
        $this->setNoAnswerNumberOfRings($noAnswerNumberOfRings);
        $this->setForwardAfterTimeout($forwardAfterTimeout);
        $this->setForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->setForwardToPhoneNumber($forwardToPhoneNumber);
        $this->setAgentUserIdList($agentUserIdList);
        $this->setAllowCallWaitingForAgents($allowCallWaitingForAgents);
        $this->setUseSystemHuntGroupCLIDSetting($useSystemHuntGroupCLIDSetting);
        $this->setIncludeHuntGroupNameInCLID($includeHuntGroupNameInCLID);
        $this->setEnableNotReachableForwarding($enableNotReachableForwarding);
        $this->setNotReachableForwardToPhoneNumber($notReachableForwardToPhoneNumber);
        $this->setMakeBusyWhenNotReachable($makeBusyWhenNotReachable);
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
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceModifyProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceModifyProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceModifyProfile $serviceInstanceProfile
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
    public function setAgentUserIdList(ReplacementUserIdList $agentUserIdList = null)
    {
        $this->agentUserIdList = ($agentUserIdList InstanceOf ReplacementUserIdList)
             ? $agentUserIdList
             : new ReplacementUserIdList($agentUserIdList);
        $this->agentUserIdList->setName('agentUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $agentUserIdList
     */
    public function getAgentUserIdList()
    {
        return $this->agentUserIdList;
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
