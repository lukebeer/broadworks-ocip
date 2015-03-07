<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterForceDeliveryWaitTimeSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueLength16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterWrapUpSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AgentACDAutomaticState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AudioFileCodec;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DtmfDigit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a Call Center instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterModifyInstanceRequest17sp1 extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $serviceUserId                        = null;
    protected $serviceInstanceProfile               = null;
    protected $type                                 = null;
    protected $policy                               = null;
    protected $enableVideo                          = null;
    protected $queueLength                          = null;
    protected $enableReporting                      = null;
    protected $reportingServerName                  = null;
    protected $allowCallerToDialEscapeDigit         = null;
    protected $escapeDigit                          = null;
    protected $resetCallStatisticsUponEntryInQueue  = null;
    protected $allowAgentLogoff                     = null;
    protected $allowCallWaitingForAgents            = null;
    protected $allowCallsToAgentsInWrapUp           = null;
    protected $overrideAgentWrapUpTime              = null;
    protected $wrapUpSeconds                        = null;
    protected $forceDeliveryOfCalls                 = null;
    protected $forceDeliveryWaitTimeSeconds         = null;
    protected $enableAutomaticStateChangeForAgents  = null;
    protected $agentStateAfterCall                  = null;
    protected $agentUnavailableCode                 = null;
    protected $externalPreferredAudioCodec          = null;
    protected $internalPreferredAudioCodec          = null;
    protected $playRingingWhenOfferingCall          = null;

    public function __construct(
         $serviceUserId,
         ServiceInstanceModifyProfile $serviceInstanceProfile = null,
         $type = null,
         $policy = null,
         $enableVideo = null,
         $queueLength = null,
         $enableReporting = null,
         $reportingServerName = null,
         $allowCallerToDialEscapeDigit = null,
         $escapeDigit = null,
         $resetCallStatisticsUponEntryInQueue = null,
         $allowAgentLogoff = null,
         $allowCallWaitingForAgents = null,
         $allowCallsToAgentsInWrapUp = null,
         $overrideAgentWrapUpTime = null,
         $wrapUpSeconds = null,
         $forceDeliveryOfCalls = null,
         $forceDeliveryWaitTimeSeconds = null,
         $enableAutomaticStateChangeForAgents = null,
         $agentStateAfterCall = null,
         $agentUnavailableCode = null,
         $externalPreferredAudioCodec = null,
         $internalPreferredAudioCodec = null,
         $playRingingWhenOfferingCall = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setType($type);
        $this->setPolicy($policy);
        $this->setEnableVideo($enableVideo);
        $this->setQueueLength($queueLength);
        $this->setEnableReporting($enableReporting);
        $this->setReportingServerName($reportingServerName);
        $this->setAllowCallerToDialEscapeDigit($allowCallerToDialEscapeDigit);
        $this->setEscapeDigit($escapeDigit);
        $this->setResetCallStatisticsUponEntryInQueue($resetCallStatisticsUponEntryInQueue);
        $this->setAllowAgentLogoff($allowAgentLogoff);
        $this->setAllowCallWaitingForAgents($allowCallWaitingForAgents);
        $this->setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp);
        $this->setOverrideAgentWrapUpTime($overrideAgentWrapUpTime);
        $this->setWrapUpSeconds($wrapUpSeconds);
        $this->setForceDeliveryOfCalls($forceDeliveryOfCalls);
        $this->setForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds);
        $this->setEnableAutomaticStateChangeForAgents($enableAutomaticStateChangeForAgents);
        $this->setAgentStateAfterCall($agentStateAfterCall);
        $this->setAgentUnavailableCode($agentUnavailableCode);
        $this->setExternalPreferredAudioCodec($externalPreferredAudioCodec);
        $this->setInternalPreferredAudioCodec($internalPreferredAudioCodec);
        $this->setPlayRingingWhenOfferingCall($playRingingWhenOfferingCall);
    }

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setType($type = null)
    {
        $this->type = ($type InstanceOf CallCenterType)
             ? $type
             : new CallCenterType($type);
    }

    public function getType()
    {
        return (!$this->type) ?: $this->type->value();
    }

    public function setPolicy($policy = null)
    {
        $this->policy = ($policy InstanceOf HuntPolicy)
             ? $policy
             : new HuntPolicy($policy);
    }

    public function getPolicy()
    {
        return (!$this->policy) ?: $this->policy->value();
    }

    public function setEnableVideo(xs:boolean $enableVideo = null)
    {
    }

    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo->value();
    }

    public function setQueueLength($queueLength = null)
    {
        $this->queueLength = ($queueLength InstanceOf CallCenterQueueLength16)
             ? $queueLength
             : new CallCenterQueueLength16($queueLength);
    }

    public function getQueueLength()
    {
        return (!$this->queueLength) ?: $this->queueLength->value();
    }

    public function setEnableReporting(xs:boolean $enableReporting = null)
    {
    }

    public function getEnableReporting()
    {
        return (!$this->enableReporting) ?: $this->enableReporting->value();
    }

    public function setReportingServerName($reportingServerName = null)
    {
        $this->reportingServerName = ($reportingServerName InstanceOf CallCenterReportingServerName)
             ? $reportingServerName
             : new CallCenterReportingServerName($reportingServerName);
    }

    public function getReportingServerName()
    {
        return (!$this->reportingServerName) ?: $this->reportingServerName->value();
    }

    public function setAllowCallerToDialEscapeDigit(xs:boolean $allowCallerToDialEscapeDigit = null)
    {
    }

    public function getAllowCallerToDialEscapeDigit()
    {
        return (!$this->allowCallerToDialEscapeDigit) ?: $this->allowCallerToDialEscapeDigit->value();
    }

    public function setEscapeDigit($escapeDigit = null)
    {
        $this->escapeDigit = ($escapeDigit InstanceOf DtmfDigit)
             ? $escapeDigit
             : new DtmfDigit($escapeDigit);
    }

    public function getEscapeDigit()
    {
        return (!$this->escapeDigit) ?: $this->escapeDigit->value();
    }

    public function setResetCallStatisticsUponEntryInQueue(xs:boolean $resetCallStatisticsUponEntryInQueue = null)
    {
    }

    public function getResetCallStatisticsUponEntryInQueue()
    {
        return (!$this->resetCallStatisticsUponEntryInQueue) ?: $this->resetCallStatisticsUponEntryInQueue->value();
    }

    public function setAllowAgentLogoff(xs:boolean $allowAgentLogoff = null)
    {
    }

    public function getAllowAgentLogoff()
    {
        return (!$this->allowAgentLogoff) ?: $this->allowAgentLogoff->value();
    }

    public function setAllowCallWaitingForAgents(xs:boolean $allowCallWaitingForAgents = null)
    {
    }

    public function getAllowCallWaitingForAgents()
    {
        return (!$this->allowCallWaitingForAgents) ?: $this->allowCallWaitingForAgents->value();
    }

    public function setAllowCallsToAgentsInWrapUp(xs:boolean $allowCallsToAgentsInWrapUp = null)
    {
    }

    public function getAllowCallsToAgentsInWrapUp()
    {
        return (!$this->allowCallsToAgentsInWrapUp) ?: $this->allowCallsToAgentsInWrapUp->value();
    }

    public function setOverrideAgentWrapUpTime(xs:boolean $overrideAgentWrapUpTime = null)
    {
    }

    public function getOverrideAgentWrapUpTime()
    {
        return (!$this->overrideAgentWrapUpTime) ?: $this->overrideAgentWrapUpTime->value();
    }

    public function setWrapUpSeconds($wrapUpSeconds = null)
    {
        $this->wrapUpSeconds = ($wrapUpSeconds InstanceOf CallCenterWrapUpSeconds)
             ? $wrapUpSeconds
             : new CallCenterWrapUpSeconds($wrapUpSeconds);
    }

    public function getWrapUpSeconds()
    {
        return (!$this->wrapUpSeconds) ?: $this->wrapUpSeconds->value();
    }

    public function setForceDeliveryOfCalls(xs:boolean $forceDeliveryOfCalls = null)
    {
    }

    public function getForceDeliveryOfCalls()
    {
        return (!$this->forceDeliveryOfCalls) ?: $this->forceDeliveryOfCalls->value();
    }

    public function setForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds = null)
    {
        $this->forceDeliveryWaitTimeSeconds = ($forceDeliveryWaitTimeSeconds InstanceOf CallCenterForceDeliveryWaitTimeSeconds)
             ? $forceDeliveryWaitTimeSeconds
             : new CallCenterForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds);
    }

    public function getForceDeliveryWaitTimeSeconds()
    {
        return (!$this->forceDeliveryWaitTimeSeconds) ?: $this->forceDeliveryWaitTimeSeconds->value();
    }

    public function setEnableAutomaticStateChangeForAgents(xs:boolean $enableAutomaticStateChangeForAgents = null)
    {
    }

    public function getEnableAutomaticStateChangeForAgents()
    {
        return (!$this->enableAutomaticStateChangeForAgents) ?: $this->enableAutomaticStateChangeForAgents->value();
    }

    public function setAgentStateAfterCall($agentStateAfterCall = null)
    {
        $this->agentStateAfterCall = ($agentStateAfterCall InstanceOf AgentACDAutomaticState)
             ? $agentStateAfterCall
             : new AgentACDAutomaticState($agentStateAfterCall);
    }

    public function getAgentStateAfterCall()
    {
        return (!$this->agentStateAfterCall) ?: $this->agentStateAfterCall->value();
    }

    public function setAgentUnavailableCode($agentUnavailableCode = null)
    {
        $this->agentUnavailableCode = ($agentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $agentUnavailableCode
             : new CallCenterAgentUnavailableCode($agentUnavailableCode);
    }

    public function getAgentUnavailableCode()
    {
        return (!$this->agentUnavailableCode) ?: $this->agentUnavailableCode->value();
    }

    public function setExternalPreferredAudioCodec($externalPreferredAudioCodec = null)
    {
        $this->externalPreferredAudioCodec = ($externalPreferredAudioCodec InstanceOf AudioFileCodec)
             ? $externalPreferredAudioCodec
             : new AudioFileCodec($externalPreferredAudioCodec);
    }

    public function getExternalPreferredAudioCodec()
    {
        return (!$this->externalPreferredAudioCodec) ?: $this->externalPreferredAudioCodec->value();
    }

    public function setInternalPreferredAudioCodec($internalPreferredAudioCodec = null)
    {
        $this->internalPreferredAudioCodec = ($internalPreferredAudioCodec InstanceOf AudioFileCodec)
             ? $internalPreferredAudioCodec
             : new AudioFileCodec($internalPreferredAudioCodec);
    }

    public function getInternalPreferredAudioCodec()
    {
        return (!$this->internalPreferredAudioCodec) ?: $this->internalPreferredAudioCodec->value();
    }

    public function setPlayRingingWhenOfferingCall(xs:boolean $playRingingWhenOfferingCall = null)
    {
    }

    public function getPlayRingingWhenOfferingCall()
    {
        return (!$this->playRingingWhenOfferingCall) ?: $this->playRingingWhenOfferingCall->value();
    }
}
