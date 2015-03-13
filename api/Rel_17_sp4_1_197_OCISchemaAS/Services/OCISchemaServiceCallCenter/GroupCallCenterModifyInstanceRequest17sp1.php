<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterForceDeliveryWaitTimeSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterWrapUpSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueLength16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AgentACDAutomaticState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AudioFileCodec;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DtmfDigit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a Call Center instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterModifyInstanceRequest17sp1 extends ComplexType implements ComplexInterface
{
    public    $name                                = 'GroupCallCenterModifyInstanceRequest17sp1';
    protected $serviceUserId                       = null;
    protected $serviceInstanceProfile              = null;
    protected $type                                = null;
    protected $policy                              = null;
    protected $enableVideo                         = null;
    protected $queueLength                         = null;
    protected $enableReporting                     = null;
    protected $reportingServerName                 = null;
    protected $allowCallerToDialEscapeDigit        = null;
    protected $escapeDigit                         = null;
    protected $resetCallStatisticsUponEntryInQueue = null;
    protected $allowAgentLogoff                    = null;
    protected $allowCallWaitingForAgents           = null;
    protected $allowCallsToAgentsInWrapUp          = null;
    protected $overrideAgentWrapUpTime             = null;
    protected $wrapUpSeconds                       = null;
    protected $forceDeliveryOfCalls                = null;
    protected $forceDeliveryWaitTimeSeconds        = null;
    protected $enableAutomaticStateChangeForAgents = null;
    protected $agentStateAfterCall                 = null;
    protected $agentUnavailableCode                = null;
    protected $externalPreferredAudioCodec         = null;
    protected $internalPreferredAudioCodec         = null;
    protected $playRingingWhenOfferingCall         = null;

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
        if (!$serviceUserId) return $this;
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
     * @return ServiceInstanceModifyProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setType($type = null)
    {
        if (!$type) return $this;
        $this->type = ($type InstanceOf CallCenterType)
             ? $type
             : new CallCenterType($type);
        $this->type->setName('type');
        return $this;
    }

    /**
     * 
     * @return CallCenterType $type
     */
    public function getType()
    {
        return $this->type->getValue();
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
     * @return HuntPolicy $policy
     */
    public function getPolicy()
    {
        return $this->policy->getValue();
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        if (!$enableVideo) return $this;
        $this->enableVideo = new PrimitiveType($enableVideo);
        $this->enableVideo->setName('enableVideo');
        return $this;
    }

    /**
     * 
     * @return boolean $enableVideo
     */
    public function getEnableVideo()
    {
        return $this->enableVideo->getValue();
    }

    /**
     * 
     */
    public function setQueueLength($queueLength = null)
    {
        if (!$queueLength) return $this;
        $this->queueLength = ($queueLength InstanceOf CallCenterQueueLength16)
             ? $queueLength
             : new CallCenterQueueLength16($queueLength);
        $this->queueLength->setName('queueLength');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueLength16 $queueLength
     */
    public function getQueueLength()
    {
        return $this->queueLength->getValue();
    }

    /**
     * 
     */
    public function setEnableReporting($enableReporting = null)
    {
        if (!$enableReporting) return $this;
        $this->enableReporting = new PrimitiveType($enableReporting);
        $this->enableReporting->setName('enableReporting');
        return $this;
    }

    /**
     * 
     * @return boolean $enableReporting
     */
    public function getEnableReporting()
    {
        return $this->enableReporting->getValue();
    }

    /**
     * 
     */
    public function setReportingServerName($reportingServerName = null)
    {
        if (!$reportingServerName) return $this;
        $this->reportingServerName = ($reportingServerName InstanceOf CallCenterReportingServerName)
             ? $reportingServerName
             : new CallCenterReportingServerName($reportingServerName);
        $this->reportingServerName->setName('reportingServerName');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportingServerName $reportingServerName
     */
    public function getReportingServerName()
    {
        return $this->reportingServerName->getValue();
    }

    /**
     * 
     */
    public function setAllowCallerToDialEscapeDigit($allowCallerToDialEscapeDigit = null)
    {
        if (!$allowCallerToDialEscapeDigit) return $this;
        $this->allowCallerToDialEscapeDigit = new PrimitiveType($allowCallerToDialEscapeDigit);
        $this->allowCallerToDialEscapeDigit->setName('allowCallerToDialEscapeDigit');
        return $this;
    }

    /**
     * 
     * @return boolean $allowCallerToDialEscapeDigit
     */
    public function getAllowCallerToDialEscapeDigit()
    {
        return $this->allowCallerToDialEscapeDigit->getValue();
    }

    /**
     * 
     */
    public function setEscapeDigit($escapeDigit = null)
    {
        if (!$escapeDigit) return $this;
        $this->escapeDigit = ($escapeDigit InstanceOf DtmfDigit)
             ? $escapeDigit
             : new DtmfDigit($escapeDigit);
        $this->escapeDigit->setName('escapeDigit');
        return $this;
    }

    /**
     * 
     * @return DtmfDigit $escapeDigit
     */
    public function getEscapeDigit()
    {
        return $this->escapeDigit->getValue();
    }

    /**
     * 
     */
    public function setResetCallStatisticsUponEntryInQueue($resetCallStatisticsUponEntryInQueue = null)
    {
        if (!$resetCallStatisticsUponEntryInQueue) return $this;
        $this->resetCallStatisticsUponEntryInQueue = new PrimitiveType($resetCallStatisticsUponEntryInQueue);
        $this->resetCallStatisticsUponEntryInQueue->setName('resetCallStatisticsUponEntryInQueue');
        return $this;
    }

    /**
     * 
     * @return boolean $resetCallStatisticsUponEntryInQueue
     */
    public function getResetCallStatisticsUponEntryInQueue()
    {
        return $this->resetCallStatisticsUponEntryInQueue->getValue();
    }

    /**
     * 
     */
    public function setAllowAgentLogoff($allowAgentLogoff = null)
    {
        if (!$allowAgentLogoff) return $this;
        $this->allowAgentLogoff = new PrimitiveType($allowAgentLogoff);
        $this->allowAgentLogoff->setName('allowAgentLogoff');
        return $this;
    }

    /**
     * 
     * @return boolean $allowAgentLogoff
     */
    public function getAllowAgentLogoff()
    {
        return $this->allowAgentLogoff->getValue();
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
     * @return boolean $allowCallWaitingForAgents
     */
    public function getAllowCallWaitingForAgents()
    {
        return $this->allowCallWaitingForAgents->getValue();
    }

    /**
     * 
     */
    public function setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp = null)
    {
        if (!$allowCallsToAgentsInWrapUp) return $this;
        $this->allowCallsToAgentsInWrapUp = new PrimitiveType($allowCallsToAgentsInWrapUp);
        $this->allowCallsToAgentsInWrapUp->setName('allowCallsToAgentsInWrapUp');
        return $this;
    }

    /**
     * 
     * @return boolean $allowCallsToAgentsInWrapUp
     */
    public function getAllowCallsToAgentsInWrapUp()
    {
        return $this->allowCallsToAgentsInWrapUp->getValue();
    }

    /**
     * 
     */
    public function setOverrideAgentWrapUpTime($overrideAgentWrapUpTime = null)
    {
        if (!$overrideAgentWrapUpTime) return $this;
        $this->overrideAgentWrapUpTime = new PrimitiveType($overrideAgentWrapUpTime);
        $this->overrideAgentWrapUpTime->setName('overrideAgentWrapUpTime');
        return $this;
    }

    /**
     * 
     * @return boolean $overrideAgentWrapUpTime
     */
    public function getOverrideAgentWrapUpTime()
    {
        return $this->overrideAgentWrapUpTime->getValue();
    }

    /**
     * 
     */
    public function setWrapUpSeconds($wrapUpSeconds = null)
    {
        if (!$wrapUpSeconds) return $this;
        $this->wrapUpSeconds = ($wrapUpSeconds InstanceOf CallCenterWrapUpSeconds)
             ? $wrapUpSeconds
             : new CallCenterWrapUpSeconds($wrapUpSeconds);
        $this->wrapUpSeconds->setName('wrapUpSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterWrapUpSeconds $wrapUpSeconds
     */
    public function getWrapUpSeconds()
    {
        return $this->wrapUpSeconds->getValue();
    }

    /**
     * 
     */
    public function setForceDeliveryOfCalls($forceDeliveryOfCalls = null)
    {
        if (!$forceDeliveryOfCalls) return $this;
        $this->forceDeliveryOfCalls = new PrimitiveType($forceDeliveryOfCalls);
        $this->forceDeliveryOfCalls->setName('forceDeliveryOfCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $forceDeliveryOfCalls
     */
    public function getForceDeliveryOfCalls()
    {
        return $this->forceDeliveryOfCalls->getValue();
    }

    /**
     * 
     */
    public function setForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds = null)
    {
        if (!$forceDeliveryWaitTimeSeconds) return $this;
        $this->forceDeliveryWaitTimeSeconds = ($forceDeliveryWaitTimeSeconds InstanceOf CallCenterForceDeliveryWaitTimeSeconds)
             ? $forceDeliveryWaitTimeSeconds
             : new CallCenterForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds);
        $this->forceDeliveryWaitTimeSeconds->setName('forceDeliveryWaitTimeSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterForceDeliveryWaitTimeSeconds $forceDeliveryWaitTimeSeconds
     */
    public function getForceDeliveryWaitTimeSeconds()
    {
        return $this->forceDeliveryWaitTimeSeconds->getValue();
    }

    /**
     * 
     */
    public function setEnableAutomaticStateChangeForAgents($enableAutomaticStateChangeForAgents = null)
    {
        if (!$enableAutomaticStateChangeForAgents) return $this;
        $this->enableAutomaticStateChangeForAgents = new PrimitiveType($enableAutomaticStateChangeForAgents);
        $this->enableAutomaticStateChangeForAgents->setName('enableAutomaticStateChangeForAgents');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutomaticStateChangeForAgents
     */
    public function getEnableAutomaticStateChangeForAgents()
    {
        return $this->enableAutomaticStateChangeForAgents->getValue();
    }

    /**
     * 
     */
    public function setAgentStateAfterCall($agentStateAfterCall = null)
    {
        if (!$agentStateAfterCall) return $this;
        $this->agentStateAfterCall = ($agentStateAfterCall InstanceOf AgentACDAutomaticState)
             ? $agentStateAfterCall
             : new AgentACDAutomaticState($agentStateAfterCall);
        $this->agentStateAfterCall->setName('agentStateAfterCall');
        return $this;
    }

    /**
     * 
     * @return AgentACDAutomaticState $agentStateAfterCall
     */
    public function getAgentStateAfterCall()
    {
        return $this->agentStateAfterCall->getValue();
    }

    /**
     * 
     */
    public function setAgentUnavailableCode($agentUnavailableCode = null)
    {
        if (!$agentUnavailableCode) return $this;
        $this->agentUnavailableCode = ($agentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $agentUnavailableCode
             : new CallCenterAgentUnavailableCode($agentUnavailableCode);
        $this->agentUnavailableCode->setName('agentUnavailableCode');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $agentUnavailableCode
     */
    public function getAgentUnavailableCode()
    {
        return $this->agentUnavailableCode->getValue();
    }

    /**
     * 
     */
    public function setExternalPreferredAudioCodec($externalPreferredAudioCodec = null)
    {
        if (!$externalPreferredAudioCodec) return $this;
        $this->externalPreferredAudioCodec = ($externalPreferredAudioCodec InstanceOf AudioFileCodec)
             ? $externalPreferredAudioCodec
             : new AudioFileCodec($externalPreferredAudioCodec);
        $this->externalPreferredAudioCodec->setName('externalPreferredAudioCodec');
        return $this;
    }

    /**
     * 
     * @return AudioFileCodec $externalPreferredAudioCodec
     */
    public function getExternalPreferredAudioCodec()
    {
        return $this->externalPreferredAudioCodec->getValue();
    }

    /**
     * 
     */
    public function setInternalPreferredAudioCodec($internalPreferredAudioCodec = null)
    {
        if (!$internalPreferredAudioCodec) return $this;
        $this->internalPreferredAudioCodec = ($internalPreferredAudioCodec InstanceOf AudioFileCodec)
             ? $internalPreferredAudioCodec
             : new AudioFileCodec($internalPreferredAudioCodec);
        $this->internalPreferredAudioCodec->setName('internalPreferredAudioCodec');
        return $this;
    }

    /**
     * 
     * @return AudioFileCodec $internalPreferredAudioCodec
     */
    public function getInternalPreferredAudioCodec()
    {
        return $this->internalPreferredAudioCodec->getValue();
    }

    /**
     * 
     */
    public function setPlayRingingWhenOfferingCall($playRingingWhenOfferingCall = null)
    {
        if (!$playRingingWhenOfferingCall) return $this;
        $this->playRingingWhenOfferingCall = new PrimitiveType($playRingingWhenOfferingCall);
        $this->playRingingWhenOfferingCall->setName('playRingingWhenOfferingCall');
        return $this;
    }

    /**
     * 
     * @return boolean $playRingingWhenOfferingCall
     */
    public function getPlayRingingWhenOfferingCall()
    {
        return $this->playRingingWhenOfferingCall->getValue();
    }
}
