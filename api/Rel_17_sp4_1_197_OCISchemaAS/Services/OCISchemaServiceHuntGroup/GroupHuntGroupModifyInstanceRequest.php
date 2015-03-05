<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHuntGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


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
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             ServiceInstanceModifyProfile $serviceInstanceProfile=null,
             $policy=null,
             $huntAfterNoAnswer=null,
             $noAnswerNumberOfRings=null,
             $forwardAfterTimeout=null,
             $forwardTimeoutSeconds=null,
             $forwardToPhoneNumber=null,
             ReplacementUserIdList $agentUserIdList=null,
             $allowCallWaitingForAgents=null,
             $useSystemHuntGroupCLIDSetting=null,
             $includeHuntGroupNameInCLID=null,
             $enableNotReachableForwarding=null,
             $notReachableForwardToPhoneNumber=null,
             $makeBusyWhenNotReachable=null
    ) {
        $this->serviceUserId                    = new UserId($serviceUserId);
        $this->serviceInstanceProfile           = $serviceInstanceProfile;
        $this->policy                           = new HuntPolicy($policy);
        $this->huntAfterNoAnswer                = $huntAfterNoAnswer;
        $this->noAnswerNumberOfRings            = new HuntNoAnswerRings($noAnswerNumberOfRings);
        $this->forwardAfterTimeout              = $forwardAfterTimeout;
        $this->forwardTimeoutSeconds            = new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
        $this->forwardToPhoneNumber             = new OutgoingDN($forwardToPhoneNumber);
        $this->agentUserIdList                  = $agentUserIdList;
        $this->allowCallWaitingForAgents        = $allowCallWaitingForAgents;
        $this->useSystemHuntGroupCLIDSetting    = $useSystemHuntGroupCLIDSetting;
        $this->includeHuntGroupNameInCLID       = $includeHuntGroupNameInCLID;
        $this->enableNotReachableForwarding     = $enableNotReachableForwarding;
        $this->notReachableForwardToPhoneNumber = new OutgoingDNorSIPURI($notReachableForwardToPhoneNumber);
        $this->makeBusyWhenNotReachable         = $makeBusyWhenNotReachable;
        $this->args                             = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceModifyProfile($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setPolicy($policy)
    {
        $policy and $this->policy = new HuntPolicy($policy);
    }

    public function getPolicy()
    {
        return (!$this->policy) ?: $this->policy->value();
    }

    public function setHuntAfterNoAnswer($huntAfterNoAnswer)
    {
        $huntAfterNoAnswer and $this->huntAfterNoAnswer = new xs:boolean($huntAfterNoAnswer);
    }

    public function getHuntAfterNoAnswer()
    {
        return (!$this->huntAfterNoAnswer) ?: $this->huntAfterNoAnswer->value();
    }

    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $noAnswerNumberOfRings and $this->noAnswerNumberOfRings = new HuntNoAnswerRings($noAnswerNumberOfRings);
    }

    public function getNoAnswerNumberOfRings()
    {
        return (!$this->noAnswerNumberOfRings) ?: $this->noAnswerNumberOfRings->value();
    }

    public function setForwardAfterTimeout($forwardAfterTimeout)
    {
        $forwardAfterTimeout and $this->forwardAfterTimeout = new xs:boolean($forwardAfterTimeout);
    }

    public function getForwardAfterTimeout()
    {
        return (!$this->forwardAfterTimeout) ?: $this->forwardAfterTimeout->value();
    }

    public function setForwardTimeoutSeconds($forwardTimeoutSeconds)
    {
        $forwardTimeoutSeconds and $this->forwardTimeoutSeconds = new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
    }

    public function getForwardTimeoutSeconds()
    {
        return (!$this->forwardTimeoutSeconds) ?: $this->forwardTimeoutSeconds->value();
    }

    public function setForwardToPhoneNumber($forwardToPhoneNumber)
    {
        $forwardToPhoneNumber and $this->forwardToPhoneNumber = new OutgoingDN($forwardToPhoneNumber);
    }

    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->value();
    }

    public function setAgentUserIdList($agentUserIdList)
    {
        $agentUserIdList and $this->agentUserIdList = new ReplacementUserIdList($agentUserIdList);
    }

    public function getAgentUserIdList()
    {
        return (!$this->agentUserIdList) ?: $this->agentUserIdList->value();
    }

    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents)
    {
        $allowCallWaitingForAgents and $this->allowCallWaitingForAgents = new xs:boolean($allowCallWaitingForAgents);
    }

    public function getAllowCallWaitingForAgents()
    {
        return (!$this->allowCallWaitingForAgents) ?: $this->allowCallWaitingForAgents->value();
    }

    public function setUseSystemHuntGroupCLIDSetting($useSystemHuntGroupCLIDSetting)
    {
        $useSystemHuntGroupCLIDSetting and $this->useSystemHuntGroupCLIDSetting = new xs:boolean($useSystemHuntGroupCLIDSetting);
    }

    public function getUseSystemHuntGroupCLIDSetting()
    {
        return (!$this->useSystemHuntGroupCLIDSetting) ?: $this->useSystemHuntGroupCLIDSetting->value();
    }

    public function setIncludeHuntGroupNameInCLID($includeHuntGroupNameInCLID)
    {
        $includeHuntGroupNameInCLID and $this->includeHuntGroupNameInCLID = new xs:boolean($includeHuntGroupNameInCLID);
    }

    public function getIncludeHuntGroupNameInCLID()
    {
        return (!$this->includeHuntGroupNameInCLID) ?: $this->includeHuntGroupNameInCLID->value();
    }

    public function setEnableNotReachableForwarding($enableNotReachableForwarding)
    {
        $enableNotReachableForwarding and $this->enableNotReachableForwarding = new xs:boolean($enableNotReachableForwarding);
    }

    public function getEnableNotReachableForwarding()
    {
        return (!$this->enableNotReachableForwarding) ?: $this->enableNotReachableForwarding->value();
    }

    public function setNotReachableForwardToPhoneNumber($notReachableForwardToPhoneNumber)
    {
        $notReachableForwardToPhoneNumber and $this->notReachableForwardToPhoneNumber = new OutgoingDNorSIPURI($notReachableForwardToPhoneNumber);
    }

    public function getNotReachableForwardToPhoneNumber()
    {
        return (!$this->notReachableForwardToPhoneNumber) ?: $this->notReachableForwardToPhoneNumber->value();
    }

    public function setMakeBusyWhenNotReachable($makeBusyWhenNotReachable)
    {
        $makeBusyWhenNotReachable and $this->makeBusyWhenNotReachable = new xs:boolean($makeBusyWhenNotReachable);
    }

    public function getMakeBusyWhenNotReachable()
    {
        return (!$this->makeBusyWhenNotReachable) ?: $this->makeBusyWhenNotReachable->value();
    }
}
