<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHuntGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
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
    public    $name                             = __CLASS__;
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
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ServiceInstanceModifyProfile $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * Policy for distributing calls within a hunt group or call center.
     */
    public function setPolicy($policy = null)
    {
        $this->policy = ($policy InstanceOf HuntPolicy)
             ? $policy
             : new HuntPolicy($policy);
    }

    /**
     * Policy for distributing calls within a hunt group or call center.
     */
    public function getPolicy()
    {
        return (!$this->policy) ?: $this->policy->getValue();
    }

    /**
     * 
     */
    public function setHuntAfterNoAnswer($huntAfterNoAnswer = null)
    {
        $this->huntAfterNoAnswer = (boolean) $huntAfterNoAnswer;
    }

    /**
     * 
     */
    public function getHuntAfterNoAnswer()
    {
        return (!$this->huntAfterNoAnswer) ?: $this->huntAfterNoAnswer->getValue();
    }

    /**
     * Number of rings to wait for the currently hunted agent to answer before
     *         hunting to the next available agent.
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf HuntNoAnswerRings)
             ? $noAnswerNumberOfRings
             : new HuntNoAnswerRings($noAnswerNumberOfRings);
    }

    /**
     * Number of rings to wait for the currently hunted agent to answer before
     *         hunting to the next available agent.
     */
    public function getNoAnswerNumberOfRings()
    {
        return (!$this->noAnswerNumberOfRings) ?: $this->noAnswerNumberOfRings->getValue();
    }

    /**
     * 
     */
    public function setForwardAfterTimeout($forwardAfterTimeout = null)
    {
        $this->forwardAfterTimeout = (boolean) $forwardAfterTimeout;
    }

    /**
     * 
     */
    public function getForwardAfterTimeout()
    {
        return (!$this->forwardAfterTimeout) ?: $this->forwardAfterTimeout->getValue();
    }

    /**
     * Time to wait for any agent to answer before forwarding the caller elsewhere.
     */
    public function setForwardTimeoutSeconds($forwardTimeoutSeconds = null)
    {
        $this->forwardTimeoutSeconds = ($forwardTimeoutSeconds InstanceOf HuntForwardTimeoutSeconds)
             ? $forwardTimeoutSeconds
             : new HuntForwardTimeoutSeconds($forwardTimeoutSeconds);
    }

    /**
     * Time to wait for any agent to answer before forwarding the caller elsewhere.
     */
    public function getForwardTimeoutSeconds()
    {
        return (!$this->forwardTimeoutSeconds) ?: $this->forwardTimeoutSeconds->getValue();
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function setForwardToPhoneNumber($forwardToPhoneNumber = null)
    {
        $this->forwardToPhoneNumber = ($forwardToPhoneNumber InstanceOf OutgoingDN)
             ? $forwardToPhoneNumber
             : new OutgoingDN($forwardToPhoneNumber);
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function getForwardToPhoneNumber()
    {
        return (!$this->forwardToPhoneNumber) ?: $this->forwardToPhoneNumber->getValue();
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setAgentUserIdList(ReplacementUserIdList $agentUserIdList = null)
    {
        $this->agentUserIdList = ReplacementUserIdList $agentUserIdList;
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getAgentUserIdList()
    {
        return (!$this->agentUserIdList) ?: $this->agentUserIdList->getValue();
    }

    /**
     * 
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents = null)
    {
        $this->allowCallWaitingForAgents = (boolean) $allowCallWaitingForAgents;
    }

    /**
     * 
     */
    public function getAllowCallWaitingForAgents()
    {
        return (!$this->allowCallWaitingForAgents) ?: $this->allowCallWaitingForAgents->getValue();
    }

    /**
     * 
     */
    public function setUseSystemHuntGroupCLIDSetting($useSystemHuntGroupCLIDSetting = null)
    {
        $this->useSystemHuntGroupCLIDSetting = (boolean) $useSystemHuntGroupCLIDSetting;
    }

    /**
     * 
     */
    public function getUseSystemHuntGroupCLIDSetting()
    {
        return (!$this->useSystemHuntGroupCLIDSetting) ?: $this->useSystemHuntGroupCLIDSetting->getValue();
    }

    /**
     * 
     */
    public function setIncludeHuntGroupNameInCLID($includeHuntGroupNameInCLID = null)
    {
        $this->includeHuntGroupNameInCLID = (boolean) $includeHuntGroupNameInCLID;
    }

    /**
     * 
     */
    public function getIncludeHuntGroupNameInCLID()
    {
        return (!$this->includeHuntGroupNameInCLID) ?: $this->includeHuntGroupNameInCLID->getValue();
    }

    /**
     * 
     */
    public function setEnableNotReachableForwarding($enableNotReachableForwarding = null)
    {
        $this->enableNotReachableForwarding = (boolean) $enableNotReachableForwarding;
    }

    /**
     * 
     */
    public function getEnableNotReachableForwarding()
    {
        return (!$this->enableNotReachableForwarding) ?: $this->enableNotReachableForwarding->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setNotReachableForwardToPhoneNumber($notReachableForwardToPhoneNumber = null)
    {
        $this->notReachableForwardToPhoneNumber = ($notReachableForwardToPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $notReachableForwardToPhoneNumber
             : new OutgoingDNorSIPURI($notReachableForwardToPhoneNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getNotReachableForwardToPhoneNumber()
    {
        return (!$this->notReachableForwardToPhoneNumber) ?: $this->notReachableForwardToPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setMakeBusyWhenNotReachable($makeBusyWhenNotReachable = null)
    {
        $this->makeBusyWhenNotReachable = (boolean) $makeBusyWhenNotReachable;
    }

    /**
     * 
     */
    public function getMakeBusyWhenNotReachable()
    {
        return (!$this->makeBusyWhenNotReachable) ?: $this->makeBusyWhenNotReachable->getValue();
    }
}
