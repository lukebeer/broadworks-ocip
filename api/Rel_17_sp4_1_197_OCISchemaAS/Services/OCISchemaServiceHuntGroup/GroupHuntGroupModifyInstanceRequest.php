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
    public    $name                             = 'GroupHuntGroupModifyInstanceRequest';
    protected $serviceUserId                    = null;
    protected $serviceInstanceProfile           = null;
    protected $policy                           = null;
    protected $huntAfterNoAnswer                = null;
    protected $noAnswerNumberOfRings            = null;
    protected $forwardAfterTimeout              = null;
    protected $forwardTimeoutSeconds            = null;
    protected $forwardToPhoneNumber             = null;
    protected $agentUserIdList                  = null;
    protected $allowCallWaitingForAgents        = null;
    protected $useSystemHuntGroupCLIDSetting    = null;
    protected $includeHuntGroupNameInCLID       = null;
    protected $enableNotReachableForwarding     = null;
    protected $notReachableForwardToPhoneNumber = null;
    protected $makeBusyWhenNotReachable         = null;

    public function __construct(
         $serviceUserId,
         ServiceInstanceModifyProfile $serviceInstanceProfile = null,
         $policy = null,
         $huntAfterNoAnswer = null,
         $noAnswerNumberOfRings = null,
         $forwardAfterTimeout = null,
         $forwardTimeoutSeconds = null,
         $forwardToPhoneNumber = null,
         ReplacementUserIdList $agentUserIdList = null,
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
     * @return 
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
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceModifyProfile
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
        if (!$policy) return $this;
        $this->policy = ($policy InstanceOf HuntPolicy)
             ? $policy
             : new HuntPolicy($policy);
        $this->policy->setName('policy');
        return $this;
    }

    /**
     * 
     * @return HuntPolicy
     */
    public function getPolicy()
    {
        return $this->policy->getValue();
    }

    /**
     * 
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer = null)
    {
        if (!$huntAfterNoAnswer) return $this;
        $this->huntAfterNoAnswer = new PrimitiveType($huntAfterNoAnswer);
        $this->huntAfterNoAnswer->setName('huntAfterNoAnswer');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getHuntAfterNoAnswer()
    {
        return $this->huntAfterNoAnswer->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        if (!$noAnswerNumberOfRings) return $this;
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf HuntNoAnswerRings)
             ? $noAnswerNumberOfRings
             : new HuntNoAnswerRings($noAnswerNumberOfRings);
        $this->noAnswerNumberOfRings->setName('noAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return HuntNoAnswerRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return $this->noAnswerNumberOfRings->getValue();
    }

    /**
     * 
     */
    public function setForwardAfterTimeout($forwardAfterTimeout = null)
    {
        if (!$forwardAfterTimeout) return $this;
        $this->forwardAfterTimeout = new PrimitiveType($forwardAfterTimeout);
        $this->forwardAfterTimeout->setName('forwardAfterTimeout');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getForwardAfterTimeout()
    {
        return $this->forwardAfterTimeout->getValue();
    }

    /**
     * 
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds = null)
    {
        if (!$forwardTimeoutSeconds) return $this;
        $this->forwardTimeoutSeconds = ($forwardTimeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $forwardTimeoutSeconds
             : new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->forwardTimeoutSeconds->setName('forwardTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return HuntForwardTimeoutSeconds
     */
    public function getForwardTimeoutSeconds()
    {
        return $this->forwardTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        if (!$forwardToPhoneNumber) return $this;
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDN)
             ? $forwardToPhoneNumber
             : new OutgoingDN($forwardToPhoneNumber);
        $this->forwardToPhoneNumber->setName('forwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN
     */
    public function getForwardToPhoneNumber()
    {
        return $this->forwardToPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setAgentUserIdList(ReplacementUserIdList $agentUserIdList = null)
    {
        if (!$agentUserIdList) return $this;
        $this->agentUserIdList = $agentUserIdList;
        $this->agentUserIdList->setName('agentUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
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
        if (!$allowCallWaitingForAgents) return $this;
        $this->allowCallWaitingForAgents = new PrimitiveType($allowCallWaitingForAgents);
        $this->allowCallWaitingForAgents->setName('allowCallWaitingForAgents');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getAllowCallWaitingForAgents()
    {
        return $this->allowCallWaitingForAgents->getValue();
    }

    /**
     * 
     */
    public function setUseSystemHuntGroupCLIDSetting($useSystemHuntGroupCLIDSetting = null)
    {
        if (!$useSystemHuntGroupCLIDSetting) return $this;
        $this->useSystemHuntGroupCLIDSetting = new PrimitiveType($useSystemHuntGroupCLIDSetting);
        $this->useSystemHuntGroupCLIDSetting->setName('useSystemHuntGroupCLIDSetting');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseSystemHuntGroupCLIDSetting()
    {
        return $this->useSystemHuntGroupCLIDSetting->getValue();
    }

    /**
     * 
     */
    public function setIncludeHuntGroupNameInCLID($includeHuntGroupNameInCLID = null)
    {
        if (!$includeHuntGroupNameInCLID) return $this;
        $this->includeHuntGroupNameInCLID = new PrimitiveType($includeHuntGroupNameInCLID);
        $this->includeHuntGroupNameInCLID->setName('includeHuntGroupNameInCLID');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIncludeHuntGroupNameInCLID()
    {
        return $this->includeHuntGroupNameInCLID->getValue();
    }

    /**
     * 
     */
    public function setEnableNotReachableForwarding($enableNotReachableForwarding = null)
    {
        if (!$enableNotReachableForwarding) return $this;
        $this->enableNotReachableForwarding = new PrimitiveType($enableNotReachableForwarding);
        $this->enableNotReachableForwarding->setName('enableNotReachableForwarding');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableNotReachableForwarding()
    {
        return $this->enableNotReachableForwarding->getValue();
    }

    /**
     * 
     */
    public function setNotReachableForwardToPhoneNumber($notReachableForwardToPhoneNumber = null)
    {
        if (!$notReachableForwardToPhoneNumber) return $this;
        $this->notReachableForwardToPhoneNumber = ($notReachableForwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $notReachableForwardToPhoneNumber
             : new OutgoingDNorSIPURI($notReachableForwardToPhoneNumber);
        $this->notReachableForwardToPhoneNumber->setName('notReachableForwardToPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getNotReachableForwardToPhoneNumber()
    {
        return $this->notReachableForwardToPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setMakeBusyWhenNotReachable($makeBusyWhenNotReachable = null)
    {
        if (!$makeBusyWhenNotReachable) return $this;
        $this->makeBusyWhenNotReachable = new PrimitiveType($makeBusyWhenNotReachable);
        $this->makeBusyWhenNotReachable->setName('makeBusyWhenNotReachable');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMakeBusyWhenNotReachable()
    {
        return $this->makeBusyWhenNotReachable->getValue();
    }
}
