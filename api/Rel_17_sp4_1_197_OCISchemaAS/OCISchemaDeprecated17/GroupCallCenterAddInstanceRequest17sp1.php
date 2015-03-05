<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfileCallCenter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueLength16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DtmfDigit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterWrapUpSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterForceDeliveryWaitTimeSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AgentACDAutomaticState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AudioFileCodec;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Call Center instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         Replaced by: GroupCallCenterAddInstanceRequest17sp3
 */
class GroupCallCenterAddInstanceRequest17sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $serviceUserId,
             ServiceInstanceAddProfileCallCenter $serviceInstanceProfile,
             $type,
             $policy,
             $enableVideo,
             $queueLength,
             $enableReporting=null,
             $reportingServerName=null,
             $allowCallerToDialEscapeDigit,
             $escapeDigit,
             $resetCallStatisticsUponEntryInQueue=null,
             $allowAgentLogoff,
             $allowCallWaitingForAgents,
             $allowCallsToAgentsInWrapUp=null,
             $overrideAgentWrapUpTime=null,
             $wrapUpSeconds=null,
             $forceDeliveryOfCalls=null,
             $forceDeliveryWaitTimeSeconds=null,
             $enableAutomaticStateChangeForAgents=null,
             $agentStateAfterCall=null,
             $agentUnavailableCode=null,
             $externalPreferredAudioCodec,
             $internalPreferredAudioCodec,
             $playRingingWhenOfferingCall
    ) {
        $this->serviceProviderId                   = new ServiceProviderId($serviceProviderId);
        $this->groupId                             = new GroupId($groupId);
        $this->serviceUserId                       = new UserId($serviceUserId);
        $this->serviceInstanceProfile              = $serviceInstanceProfile;
        $this->type                                = $type;
        $this->policy                              = new HuntPolicy($policy);
        $this->enableVideo                         = $enableVideo;
        $this->queueLength                         = new CallCenterQueueLength16($queueLength);
        $this->enableReporting                     = $enableReporting;
        $this->reportingServerName                 = new CallCenterReportingServerName($reportingServerName);
        $this->allowCallerToDialEscapeDigit        = $allowCallerToDialEscapeDigit;
        $this->escapeDigit                         = new DtmfDigit($escapeDigit);
        $this->resetCallStatisticsUponEntryInQueue = $resetCallStatisticsUponEntryInQueue;
        $this->allowAgentLogoff                    = $allowAgentLogoff;
        $this->allowCallWaitingForAgents           = $allowCallWaitingForAgents;
        $this->allowCallsToAgentsInWrapUp          = $allowCallsToAgentsInWrapUp;
        $this->overrideAgentWrapUpTime             = $overrideAgentWrapUpTime;
        $this->wrapUpSeconds                       = new CallCenterWrapUpSeconds($wrapUpSeconds);
        $this->forceDeliveryOfCalls                = $forceDeliveryOfCalls;
        $this->forceDeliveryWaitTimeSeconds        = new CallCenterForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds);
        $this->enableAutomaticStateChangeForAgents = $enableAutomaticStateChangeForAgents;
        $this->agentStateAfterCall                 = new AgentACDAutomaticState($agentStateAfterCall);
        $this->agentUnavailableCode                = new CallCenterAgentUnavailableCode($agentUnavailableCode);
        $this->externalPreferredAudioCodec         = new AudioFileCodec($externalPreferredAudioCodec);
        $this->internalPreferredAudioCodec         = new AudioFileCodec($internalPreferredAudioCodec);
        $this->playRingingWhenOfferingCall         = $playRingingWhenOfferingCall;
        $this->args                                = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
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
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceAddProfileCallCenter($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setType($type)
    {
        $type and $this->type = new CallCenterType($type);
    }

    public function getType()
    {
        return (!$this->type) ?: $this->type->value();
    }

    public function setPolicy($policy)
    {
        $policy and $this->policy = new HuntPolicy($policy);
    }

    public function getPolicy()
    {
        return (!$this->policy) ?: $this->policy->value();
    }

    public function setEnableVideo($enableVideo)
    {
        $enableVideo and $this->enableVideo = new xs:boolean($enableVideo);
    }

    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->value();
    }

    public function setQueueLength($queueLength)
    {
        $queueLength and $this->queueLength = new CallCenterQueueLength16($queueLength);
    }

    public function getQueueLength()
    {
        return (!$this->queueLength) ?: $this->queueLength->value();
    }

    public function setEnableReporting($enableReporting)
    {
        $enableReporting and $this->enableReporting = new xs:boolean($enableReporting);
    }

    public function getEnableReporting()
    {
        return (!$this->enableReporting) ?: $this->enableReporting->value();
    }

    public function setReportingServerName($reportingServerName)
    {
        $reportingServerName and $this->reportingServerName = new CallCenterReportingServerName($reportingServerName);
    }

    public function getReportingServerName()
    {
        return (!$this->reportingServerName) ?: $this->reportingServerName->value();
    }

    public function setAllowCallerToDialEscapeDigit($allowCallerToDialEscapeDigit)
    {
        $allowCallerToDialEscapeDigit and $this->allowCallerToDialEscapeDigit = new xs:boolean($allowCallerToDialEscapeDigit);
    }

    public function getAllowCallerToDialEscapeDigit()
    {
        return (!$this->allowCallerToDialEscapeDigit) ?: $this->allowCallerToDialEscapeDigit->value();
    }

    public function setEscapeDigit($escapeDigit)
    {
        $escapeDigit and $this->escapeDigit = new DtmfDigit($escapeDigit);
    }

    public function getEscapeDigit()
    {
        return (!$this->escapeDigit) ?: $this->escapeDigit->value();
    }

    public function setResetCallStatisticsUponEntryInQueue($resetCallStatisticsUponEntryInQueue)
    {
        $resetCallStatisticsUponEntryInQueue and $this->resetCallStatisticsUponEntryInQueue = new xs:boolean($resetCallStatisticsUponEntryInQueue);
    }

    public function getResetCallStatisticsUponEntryInQueue()
    {
        return (!$this->resetCallStatisticsUponEntryInQueue) ?: $this->resetCallStatisticsUponEntryInQueue->value();
    }

    public function setAllowAgentLogoff($allowAgentLogoff)
    {
        $allowAgentLogoff and $this->allowAgentLogoff = new xs:boolean($allowAgentLogoff);
    }

    public function getAllowAgentLogoff()
    {
        return (!$this->allowAgentLogoff) ?: $this->allowAgentLogoff->value();
    }

    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents)
    {
        $allowCallWaitingForAgents and $this->allowCallWaitingForAgents = new xs:boolean($allowCallWaitingForAgents);
    }

    public function getAllowCallWaitingForAgents()
    {
        return (!$this->allowCallWaitingForAgents) ?: $this->allowCallWaitingForAgents->value();
    }

    public function setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp)
    {
        $allowCallsToAgentsInWrapUp and $this->allowCallsToAgentsInWrapUp = new xs:boolean($allowCallsToAgentsInWrapUp);
    }

    public function getAllowCallsToAgentsInWrapUp()
    {
        return (!$this->allowCallsToAgentsInWrapUp) ?: $this->allowCallsToAgentsInWrapUp->value();
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

    public function setPlayRingingWhenOfferingCall($playRingingWhenOfferingCall)
    {
        $playRingingWhenOfferingCall and $this->playRingingWhenOfferingCall = new xs:boolean($playRingingWhenOfferingCall);
    }

    public function getPlayRingingWhenOfferingCall()
    {
        return (!$this->playRingingWhenOfferingCall) ?: $this->playRingingWhenOfferingCall->value();
    }
}
