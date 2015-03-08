<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfileCallCenter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntForwardTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterQueueLength;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntNoAnswerRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a Call Center instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 *         Replaced By: GroupCallCenterAddInstanceRequest14sp3
 */
class GroupCallCenterAddInstanceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $serviceProviderId                 = null;
    protected $groupId                           = null;
    protected $serviceUserId                     = null;
    protected $serviceInstanceProfile            = null;
    protected $policy                            = null;
    protected $huntAfterNoAnswer                 = null;
    protected $noAnswerNumberOfRings             = null;
    protected $forwardAfterTimeout               = null;
    protected $forwardTimeoutSeconds             = null;
    protected $forwardToPhoneNumber              = null;
    protected $enableVideo                       = null;
    protected $queueLength                       = null;
    protected $allowAgentLogoff                  = null;
    protected $playMusicOnHold                   = null;
    protected $playComfortMessage                = null;
    protected $timeBetweenComfortMessagesSeconds = null;
    protected $enableGuardTimer                  = null;
    protected $guardTimerSeconds                 = null;
    protected $agentUserId                       = null;
    protected $allowCallWaitingForAgents         = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $serviceUserId,
          $serviceInstanceProfile,
         $policy,
         $huntAfterNoAnswer,
         $noAnswerNumberOfRings,
         $forwardAfterTimeout,
         $forwardTimeoutSeconds,
         $forwardToPhoneNumber = null,
         $enableVideo,
         $queueLength,
         $allowAgentLogoff,
         $playMusicOnHold,
         $playComfortMessage,
         $timeBetweenComfortMessagesSeconds,
         $enableGuardTimer,
         $guardTimerSeconds,
         $agentUserId = null,
         $allowCallWaitingForAgents
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
        $this->setEnableVideo($enableVideo);
        $this->setQueueLength($queueLength);
        $this->setAllowAgentLogoff($allowAgentLogoff);
        $this->setPlayMusicOnHold($playMusicOnHold);
        $this->setPlayComfortMessage($playComfortMessage);
        $this->setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->setEnableGuardTimer($enableGuardTimer);
        $this->setGuardTimerSeconds($guardTimerSeconds);
        $this->setAgentUserId($agentUserId);
        $this->setAllowCallWaitingForAgents($allowCallWaitingForAgents);
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
     * Service Profile Information for a call center.
     *         Password is required.
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfileCallCenter $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile =  $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for a call center.
     *         Password is required.
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
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        $this->enableVideo = (boolean) $enableVideo;
    }

    /**
     * 
     */
    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->getValue();
    }

    /**
     * The limit for the number of calls the system will keep in queue, waiting for an available agent.
     */
    public function setQueueLength($queueLength = null)
    {
        $this->queueLength = ($queueLength InstanceOf CallCenterQueueLength)
             ? $queueLength
             : new CallCenterQueueLength($queueLength);
    }

    /**
     * The limit for the number of calls the system will keep in queue, waiting for an available agent.
     */
    public function getQueueLength()
    {
        return (!$this->queueLength) ?: $this->queueLength->getValue();
    }

    /**
     * 
     */
    public function setAllowAgentLogoff($allowAgentLogoff = null)
    {
        $this->allowAgentLogoff = (boolean) $allowAgentLogoff;
    }

    /**
     * 
     */
    public function getAllowAgentLogoff()
    {
        return (!$this->allowAgentLogoff) ?: $this->allowAgentLogoff->getValue();
    }

    /**
     * 
     */
    public function setPlayMusicOnHold($playMusicOnHold = null)
    {
        $this->playMusicOnHold = (boolean) $playMusicOnHold;
    }

    /**
     * 
     */
    public function getPlayMusicOnHold()
    {
        return (!$this->playMusicOnHold) ?: $this->playMusicOnHold->getValue();
    }

    /**
     * 
     */
    public function setPlayComfortMessage($playComfortMessage = null)
    {
        $this->playComfortMessage = (boolean) $playComfortMessage;
    }

    /**
     * 
     */
    public function getPlayComfortMessage()
    {
        return (!$this->playComfortMessage) ?: $this->playComfortMessage->getValue();
    }

    /**
     * The interval in seconds between each repetition of the comfort message played to queued users.
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
    }

    /**
     * The interval in seconds between each repetition of the comfort message played to queued users.
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return (!$this->timeBetweenComfortMessagesSeconds) ?: $this->timeBetweenComfortMessagesSeconds->getValue();
    }

    /**
     * 
     */
    public function setEnableGuardTimer($enableGuardTimer = null)
    {
        $this->enableGuardTimer = (boolean) $enableGuardTimer;
    }

    /**
     * 
     */
    public function getEnableGuardTimer()
    {
        return (!$this->enableGuardTimer) ?: $this->enableGuardTimer->getValue();
    }

    /**
     * The timer determines how long the system will wait before routing a call to a free agent.
     */
    public function setGuardTimerSeconds($guardTimerSeconds = null)
    {
        $this->guardTimerSeconds = ($guardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $guardTimerSeconds
             : new CallCenterGuardTimerSeconds($guardTimerSeconds);
    }

    /**
     * The timer determines how long the system will wait before routing a call to a free agent.
     */
    public function getGuardTimerSeconds()
    {
        return (!$this->guardTimerSeconds) ?: $this->guardTimerSeconds->getValue();
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
}
