<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AudioFileCodec;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueLength16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NoAnswerTimeoutRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterWrapUpSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AgentACDAutomaticState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterForceDeliveryWaitTimeSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupRoutePointGetInstanceRequest.
 */
class GroupRoutePointGetInstanceResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             ServiceInstanceReadProfile17 $serviceInstanceProfile,
             $networkClassOfService=null,
             $externalPreferredAudioCodec,
             $internalPreferredAudioCodec,
             $queueLength,
             $noAnswerTimeoutRings,
             $enableVideo,
             $playRingingWhenOfferingCall,
             $overrideAgentWrapUpTime,
             $wrapUpSeconds=null,
             $enableAutomaticStateChangeForAgents,
             $agentStateAfterCall,
             $agentUnavailableCode=null,
             $forceDeliveryOfCalls,
             $forceDeliveryWaitTimeSeconds=null
    ) {
        $this->serviceInstanceProfile              = $serviceInstanceProfile;
        $this->networkClassOfService               = new NetworkClassOfServiceName($networkClassOfService);
        $this->externalPreferredAudioCodec         = new AudioFileCodec($externalPreferredAudioCodec);
        $this->internalPreferredAudioCodec         = new AudioFileCodec($internalPreferredAudioCodec);
        $this->queueLength                         = new CallCenterQueueLength16($queueLength);
        $this->noAnswerTimeoutRings                = $noAnswerTimeoutRings;
        $this->enableVideo                         = $enableVideo;
        $this->playRingingWhenOfferingCall         = $playRingingWhenOfferingCall;
        $this->overrideAgentWrapUpTime             = $overrideAgentWrapUpTime;
        $this->wrapUpSeconds                       = new CallCenterWrapUpSeconds($wrapUpSeconds);
        $this->enableAutomaticStateChangeForAgents = $enableAutomaticStateChangeForAgents;
        $this->agentStateAfterCall                 = new AgentACDAutomaticState($agentStateAfterCall);
        $this->agentUnavailableCode                = new CallCenterAgentUnavailableCode($agentUnavailableCode);
        $this->forceDeliveryOfCalls                = $forceDeliveryOfCalls;
        $this->forceDeliveryWaitTimeSeconds        = new CallCenterForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds);
        $this->args                                = func_get_args();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceReadProfile17($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setNetworkClassOfService($networkClassOfService)
    {
        $networkClassOfService and $this->networkClassOfService = new NetworkClassOfServiceName($networkClassOfService);
    }

    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->value();
    }

    public function setExternalPreferredAudioCodec($externalPreferredAudioCodec)
    {
        $externalPreferredAudioCodec and $this->externalPreferredAudioCodec = new AudioFileCodec($externalPreferredAudioCodec);
    }

    public function getExternalPreferredAudioCodec()
    {
        return (!$this->externalPreferredAudioCodec) ?: $this->externalPreferredAudioCodec->value();
    }

    public function setInternalPreferredAudioCodec($internalPreferredAudioCodec)
    {
        $internalPreferredAudioCodec and $this->internalPreferredAudioCodec = new AudioFileCodec($internalPreferredAudioCodec);
    }

    public function getInternalPreferredAudioCodec()
    {
        return (!$this->internalPreferredAudioCodec) ?: $this->internalPreferredAudioCodec->value();
    }

    public function setQueueLength($queueLength)
    {
        $queueLength and $this->queueLength = new CallCenterQueueLength16($queueLength);
    }

    public function getQueueLength()
    {
        return (!$this->queueLength) ?: $this->queueLength->value();
    }

    public function setNoAnswerTimeoutRings($noAnswerTimeoutRings)
    {
        $noAnswerTimeoutRings and $this->noAnswerTimeoutRings = new NoAnswerTimeoutRings($noAnswerTimeoutRings);
    }

    public function getNoAnswerTimeoutRings()
    {
        return (!$this->noAnswerTimeoutRings) ?: $this->noAnswerTimeoutRings->value();
    }

    public function setEnableVideo($enableVideo)
    {
        $enableVideo and $this->enableVideo = new xs:boolean($enableVideo);
    }

    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->value();
    }

    public function setPlayRingingWhenOfferingCall($playRingingWhenOfferingCall)
    {
        $playRingingWhenOfferingCall and $this->playRingingWhenOfferingCall = new xs:boolean($playRingingWhenOfferingCall);
    }

    public function getPlayRingingWhenOfferingCall()
    {
        return (!$this->playRingingWhenOfferingCall) ?: $this->playRingingWhenOfferingCall->value();
    }

    public function setOverrideAgentWrapUpTime($overrideAgentWrapUpTime)
    {
        $overrideAgentWrapUpTime and $this->overrideAgentWrapUpTime = new xs:boolean($overrideAgentWrapUpTime);
    }

    public function getOverrideAgentWrapUpTime()
    {
        return (!$this->overrideAgentWrapUpTime) ?: $this->overrideAgentWrapUpTime->value();
    }

    public function setWrapUpSeconds($wrapUpSeconds)
    {
        $wrapUpSeconds and $this->wrapUpSeconds = new CallCenterWrapUpSeconds($wrapUpSeconds);
    }

    public function getWrapUpSeconds()
    {
        return (!$this->wrapUpSeconds) ?: $this->wrapUpSeconds->value();
    }

    public function setEnableAutomaticStateChangeForAgents($enableAutomaticStateChangeForAgents)
    {
        $enableAutomaticStateChangeForAgents and $this->enableAutomaticStateChangeForAgents = new xs:boolean($enableAutomaticStateChangeForAgents);
    }

    public function getEnableAutomaticStateChangeForAgents()
    {
        return (!$this->enableAutomaticStateChangeForAgents) ?: $this->enableAutomaticStateChangeForAgents->value();
    }

    public function setAgentStateAfterCall($agentStateAfterCall)
    {
        $agentStateAfterCall and $this->agentStateAfterCall = new AgentACDAutomaticState($agentStateAfterCall);
    }

    public function getAgentStateAfterCall()
    {
        return (!$this->agentStateAfterCall) ?: $this->agentStateAfterCall->value();
    }

    public function setAgentUnavailableCode($agentUnavailableCode)
    {
        $agentUnavailableCode and $this->agentUnavailableCode = new CallCenterAgentUnavailableCode($agentUnavailableCode);
    }

    public function getAgentUnavailableCode()
    {
        return (!$this->agentUnavailableCode) ?: $this->agentUnavailableCode->value();
    }

    public function setForceDeliveryOfCalls($forceDeliveryOfCalls)
    {
        $forceDeliveryOfCalls and $this->forceDeliveryOfCalls = new xs:boolean($forceDeliveryOfCalls);
    }

    public function getForceDeliveryOfCalls()
    {
        return (!$this->forceDeliveryOfCalls) ?: $this->forceDeliveryOfCalls->value();
    }

    public function setForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds)
    {
        $forceDeliveryWaitTimeSeconds and $this->forceDeliveryWaitTimeSeconds = new CallCenterForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds);
    }

    public function getForceDeliveryWaitTimeSeconds()
    {
        return (!$this->forceDeliveryWaitTimeSeconds) ?: $this->forceDeliveryWaitTimeSeconds->value();
    }
}
