<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterForceDeliveryWaitTimeSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\NoAnswerTimeoutRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfileCallCenter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterWrapUpSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueLength16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AgentACDAutomaticState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AudioFileCodec;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a Route Point instance to a group.
 *         The Route Point is a Call Center queue that performs the same function but 
 *         allows an external system to perform the distribution of calls instead of making 
 *         those decisions itself.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupRoutePointAddInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $serviceProviderId                   = null;
    protected $groupId                             = null;
    protected $serviceUserId                       = null;
    protected $serviceInstanceProfile              = null;
    protected $networkClassOfService               = null;
    protected $externalPreferredAudioCodec         = null;
    protected $internalPreferredAudioCodec         = null;
    protected $queueLength                         = null;
    protected $noAnswerTimeoutRings                = null;
    protected $enableVideo                         = null;
    protected $playRingingWhenOfferingCall         = null;
    protected $overrideAgentWrapUpTime             = null;
    protected $wrapUpSeconds                       = null;
    protected $enableAutomaticStateChangeForAgents = null;
    protected $agentStateAfterCall                 = null;
    protected $agentUnavailableCode                = null;
    protected $forceDeliveryOfCalls                = null;
    protected $forceDeliveryWaitTimeSeconds        = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $serviceUserId,
         ServiceInstanceAddProfileCallCenter $serviceInstanceProfile,
         $networkClassOfService = null,
         $externalPreferredAudioCodec,
         $internalPreferredAudioCodec,
         $queueLength,
         $noAnswerTimeoutRings,
         $enableVideo,
         $playRingingWhenOfferingCall,
         $overrideAgentWrapUpTime,
         $wrapUpSeconds = null,
         $enableAutomaticStateChangeForAgents,
         $agentStateAfterCall,
         $agentUnavailableCode = null,
         $forceDeliveryOfCalls,
         $forceDeliveryWaitTimeSeconds = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setNetworkClassOfService($networkClassOfService);
        $this->setExternalPreferredAudioCodec($externalPreferredAudioCodec);
        $this->setInternalPreferredAudioCodec($internalPreferredAudioCodec);
        $this->setQueueLength($queueLength);
        $this->setNoAnswerTimeoutRings($noAnswerTimeoutRings);
        $this->setEnableVideo($enableVideo);
        $this->setPlayRingingWhenOfferingCall($playRingingWhenOfferingCall);
        $this->setOverrideAgentWrapUpTime($overrideAgentWrapUpTime);
        $this->setWrapUpSeconds($wrapUpSeconds);
        $this->setEnableAutomaticStateChangeForAgents($enableAutomaticStateChangeForAgents);
        $this->setAgentStateAfterCall($agentStateAfterCall);
        $this->setAgentUnavailableCode($agentUnavailableCode);
        $this->setForceDeliveryOfCalls($forceDeliveryOfCalls);
        $this->setForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds);
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
        $this->serviceInstanceProfile = ServiceInstanceAddProfileCallCenter $serviceInstanceProfile;
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
     * Network Class of Service name.
     */
    public function setNetworkClassOfService($networkClassOfService = null)
    {
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
    }

    /**
     * Network Class of Service name.
     */
    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->getValue();
    }

    /**
     * Audio file codec.
     */
    public function setExternalPreferredAudioCodec($externalPreferredAudioCodec = null)
    {
        $this->externalPreferredAudioCodec = ($externalPreferredAudioCodec InstanceOf AudioFileCodec)
             ? $externalPreferredAudioCodec
             : new AudioFileCodec($externalPreferredAudioCodec);
    }

    /**
     * Audio file codec.
     */
    public function getExternalPreferredAudioCodec()
    {
        return (!$this->externalPreferredAudioCodec) ?: $this->externalPreferredAudioCodec->getValue();
    }

    /**
     * Audio file codec.
     */
    public function setInternalPreferredAudioCodec($internalPreferredAudioCodec = null)
    {
        $this->internalPreferredAudioCodec = ($internalPreferredAudioCodec InstanceOf AudioFileCodec)
             ? $internalPreferredAudioCodec
             : new AudioFileCodec($internalPreferredAudioCodec);
    }

    /**
     * Audio file codec.
     */
    public function getInternalPreferredAudioCodec()
    {
        return (!$this->internalPreferredAudioCodec) ?: $this->internalPreferredAudioCodec->getValue();
    }

    /**
     * The limit for the number of calls the system will keep in queue, waiting for an available agent.
     */
    public function setQueueLength($queueLength = null)
    {
        $this->queueLength = ($queueLength InstanceOf CallCenterQueueLength16)
             ? $queueLength
             : new CallCenterQueueLength16($queueLength);
    }

    /**
     * The limit for the number of calls the system will keep in queue, waiting for an available agent.
     */
    public function getQueueLength()
    {
        return (!$this->queueLength) ?: $this->queueLength->getValue();
    }

    /**
     * Number of rings to wait before timeout the outgoing call.
     */
    public function setNoAnswerTimeoutRings($noAnswerTimeoutRings = null)
    {
        $this->noAnswerTimeoutRings = ($noAnswerTimeoutRings InstanceOf NoAnswerTimeoutRings)
             ? $noAnswerTimeoutRings
             : new NoAnswerTimeoutRings($noAnswerTimeoutRings);
    }

    /**
     * Number of rings to wait before timeout the outgoing call.
     */
    public function getNoAnswerTimeoutRings()
    {
        return (!$this->noAnswerTimeoutRings) ?: $this->noAnswerTimeoutRings->getValue();
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
     * 
     */
    public function setPlayRingingWhenOfferingCall($playRingingWhenOfferingCall = null)
    {
        $this->playRingingWhenOfferingCall = (boolean) $playRingingWhenOfferingCall;
    }

    /**
     * 
     */
    public function getPlayRingingWhenOfferingCall()
    {
        return (!$this->playRingingWhenOfferingCall) ?: $this->playRingingWhenOfferingCall->getValue();
    }

    /**
     * 
     */
    public function setOverrideAgentWrapUpTime($overrideAgentWrapUpTime = null)
    {
        $this->overrideAgentWrapUpTime = (boolean) $overrideAgentWrapUpTime;
    }

    /**
     * 
     */
    public function getOverrideAgentWrapUpTime()
    {
        return (!$this->overrideAgentWrapUpTime) ?: $this->overrideAgentWrapUpTime->getValue();
    }

    /**
     * The ACD wrap up time in seconds.
     */
    public function setWrapUpSeconds($wrapUpSeconds = null)
    {
        $this->wrapUpSeconds = ($wrapUpSeconds InstanceOf CallCenterWrapUpSeconds)
             ? $wrapUpSeconds
             : new CallCenterWrapUpSeconds($wrapUpSeconds);
    }

    /**
     * The ACD wrap up time in seconds.
     */
    public function getWrapUpSeconds()
    {
        return (!$this->wrapUpSeconds) ?: $this->wrapUpSeconds->getValue();
    }

    /**
     * 
     */
    public function setEnableAutomaticStateChangeForAgents($enableAutomaticStateChangeForAgents = null)
    {
        $this->enableAutomaticStateChangeForAgents = (boolean) $enableAutomaticStateChangeForAgents;
    }

    /**
     * 
     */
    public function getEnableAutomaticStateChangeForAgents()
    {
        return (!$this->enableAutomaticStateChangeForAgents) ?: $this->enableAutomaticStateChangeForAgents->getValue();
    }

    /**
     * Agent Automatic Call Distribution (ACD) State.
     *         States available for Wrap-Up agent state management.
     */
    public function setAgentStateAfterCall($agentStateAfterCall = null)
    {
        $this->agentStateAfterCall = ($agentStateAfterCall InstanceOf AgentACDAutomaticState)
             ? $agentStateAfterCall
             : new AgentACDAutomaticState($agentStateAfterCall);
    }

    /**
     * Agent Automatic Call Distribution (ACD) State.
     *         States available for Wrap-Up agent state management.
     */
    public function getAgentStateAfterCall()
    {
        return (!$this->agentStateAfterCall) ?: $this->agentStateAfterCall->getValue();
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function setAgentUnavailableCode($agentUnavailableCode = null)
    {
        $this->agentUnavailableCode = ($agentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $agentUnavailableCode
             : new CallCenterAgentUnavailableCode($agentUnavailableCode);
    }

    /**
     * Call Center Agent Unavailable Code Value.
     */
    public function getAgentUnavailableCode()
    {
        return (!$this->agentUnavailableCode) ?: $this->agentUnavailableCode->getValue();
    }

    /**
     * 
     */
    public function setForceDeliveryOfCalls($forceDeliveryOfCalls = null)
    {
        $this->forceDeliveryOfCalls = (boolean) $forceDeliveryOfCalls;
    }

    /**
     * 
     */
    public function getForceDeliveryOfCalls()
    {
        return (!$this->forceDeliveryOfCalls) ?: $this->forceDeliveryOfCalls->getValue();
    }

    /**
     * Call center force delivery wait time in seconds.
     */
    public function setForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds = null)
    {
        $this->forceDeliveryWaitTimeSeconds = ($forceDeliveryWaitTimeSeconds InstanceOf CallCenterForceDeliveryWaitTimeSeconds)
             ? $forceDeliveryWaitTimeSeconds
             : new CallCenterForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds);
    }

    /**
     * Call center force delivery wait time in seconds.
     */
    public function getForceDeliveryWaitTimeSeconds()
    {
        return (!$this->forceDeliveryWaitTimeSeconds) ?: $this->forceDeliveryWaitTimeSeconds->getValue();
    }
}
