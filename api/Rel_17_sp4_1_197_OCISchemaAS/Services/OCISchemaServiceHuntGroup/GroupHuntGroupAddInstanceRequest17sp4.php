<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHuntGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a Hunt Group instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 *         The following elements are only used in AS data mode:
 *            useSystemHuntGroupCLIDSetting, use value "true" in HSS data mode
 *            includeHuntGroupNameInCLID, use value "true" in HSS data mode
 *            enableNotReachableForwarding, use value "false" in HSS data mode
 *            notReachableForwardToPhoneNumber
 *            makeBusyWhenNotReachable, use value "false" in HSS data mode
 */
class GroupHuntGroupAddInstanceRequest17sp4 extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $serviceProviderId                = null;
    protected $groupId                          = null;
    protected $serviceUserId                    = null;
    protected $serviceInstanceProfile           = null;
    protected $policy                           = null;
    protected $huntAfterNoAnswer                = null;
    protected $noAnswerNumberOfRings            = null;
    protected $forwardAfterTimeout              = null;
    protected $forwardTimeoutSeconds            = null;
    protected $forwardToPhoneNumber             = null;
    protected $agentUserId                      = null;
    protected $allowCallWaitingForAgents        = null;
    protected $useSystemHuntGroupCLIDSetting    = null;
    protected $includeHuntGroupNameInCLID       = null;
    protected $enableNotReachableForwarding     = null;
    protected $notReachableForwardToPhoneNumber = null;
    protected $makeBusyWhenNotReachable         = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $serviceUserId,
         ServiceInstanceAddProfile $serviceInstanceProfile,
         $policy,
         $huntAfterNoAnswer,
         $noAnswerNumberOfRings,
         $forwardAfterTimeout,
         $forwardTimeoutSeconds,
         $forwardToPhoneNumber = null,
         $agentUserId = null,
         $allowCallWaitingForAgents,
         $useSystemHuntGroupCLIDSetting,
         $includeHuntGroupNameInCLID,
         $enableNotReachableForwarding,
         $notReachableForwardToPhoneNumber = null,
         $makeBusyWhenNotReachable
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
        $this->setEnableNotReachableForwarding($enableNotReachableForwarding);
        $this->setNotReachableForwardToPhoneNumber($notReachableForwardToPhoneNumber);
        $this->setMakeBusyWhenNotReachable($makeBusyWhenNotReachable);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
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
     * Service Profile Information for group service.
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ServiceInstanceAddProfile $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service.
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
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setAgentUserId($agentUserId = null)
    {
        $this->agentUserId = ($agentUserId InstanceOf UserId)
             ? $agentUserId
             : new UserId($agentUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getAgentUserId()
    {
        return (!$this->agentUserId) ?: $this->agentUserId->getValue();
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
