<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterForceDeliveryWaitTimeSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterWrapUpSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueLength16;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AgentACDAutomaticState;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AudioFileCodec;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DtmfDigit;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify a Call Center instance.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupCallCenterModifyInstanceRequest17sp1 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterModifyInstanceRequest17sp1';
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $type;
    protected $policy;
    protected $enableVideo;
    protected $queueLength;
    protected $enableReporting;
    protected $reportingServerName;
    protected $allowCallerToDialEscapeDigit;
    protected $escapeDigit;
    protected $resetCallStatisticsUponEntryInQueue;
    protected $allowAgentLogoff;
    protected $allowCallWaitingForAgents;
    protected $allowCallsToAgentsInWrapUp;
    protected $overrideAgentWrapUpTime;
    protected $wrapUpSeconds;
    protected $forceDeliveryOfCalls;
    protected $forceDeliveryWaitTimeSeconds;
    protected $enableAutomaticStateChangeForAgents;
    protected $agentStateAfterCall;
    protected $agentUnavailableCode;
    protected $externalPreferredAudioCodec;
    protected $internalPreferredAudioCodec;
    protected $playRingingWhenOfferingCall;

    public function __construct(
         $serviceUserId = '',
         $serviceInstanceProfile = null,
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
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceModifyProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceModifyProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
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
        $this->type = ($type InstanceOf CallCenterType)
             ? $type
             : new CallCenterType($type);
        $this->type->setElementName('type');
        return $this;
    }

    /**
     * 
     * @return CallCenterType $type
     */
    public function getType()
    {
        return ($this->type)
            ? $this->type->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPolicy($policy = null)
    {
        $this->policy = ($policy InstanceOf HuntPolicy)
             ? $policy
             : new HuntPolicy($policy);
        $this->policy->setElementName('policy');
        return $this;
    }

    /**
     * 
     * @return HuntPolicy $policy
     */
    public function getPolicy()
    {
        return ($this->policy)
            ? $this->policy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableVideo($enableVideo = null)
    {
        $this->enableVideo = new PrimitiveType($enableVideo);
        $this->enableVideo->setElementName('enableVideo');
        return $this;
    }

    /**
     * 
     * @return boolean $enableVideo
     */
    public function getEnableVideo()
    {
        return ($this->enableVideo)
            ? $this->enableVideo->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setQueueLength($queueLength = null)
    {
        $this->queueLength = ($queueLength InstanceOf CallCenterQueueLength16)
             ? $queueLength
             : new CallCenterQueueLength16($queueLength);
        $this->queueLength->setElementName('queueLength');
        return $this;
    }

    /**
     * 
     * @return CallCenterQueueLength16 $queueLength
     */
    public function getQueueLength()
    {
        return ($this->queueLength)
            ? $this->queueLength->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableReporting($enableReporting = null)
    {
        $this->enableReporting = new PrimitiveType($enableReporting);
        $this->enableReporting->setElementName('enableReporting');
        return $this;
    }

    /**
     * 
     * @return boolean $enableReporting
     */
    public function getEnableReporting()
    {
        return ($this->enableReporting)
            ? $this->enableReporting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReportingServerName($reportingServerName = null)
    {
        $this->reportingServerName = ($reportingServerName InstanceOf CallCenterReportingServerName)
             ? $reportingServerName
             : new CallCenterReportingServerName($reportingServerName);
        $this->reportingServerName->setElementName('reportingServerName');
        return $this;
    }

    /**
     * 
     * @return CallCenterReportingServerName $reportingServerName
     */
    public function getReportingServerName()
    {
        return ($this->reportingServerName)
            ? $this->reportingServerName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowCallerToDialEscapeDigit($allowCallerToDialEscapeDigit = null)
    {
        $this->allowCallerToDialEscapeDigit = new PrimitiveType($allowCallerToDialEscapeDigit);
        $this->allowCallerToDialEscapeDigit->setElementName('allowCallerToDialEscapeDigit');
        return $this;
    }

    /**
     * 
     * @return boolean $allowCallerToDialEscapeDigit
     */
    public function getAllowCallerToDialEscapeDigit()
    {
        return ($this->allowCallerToDialEscapeDigit)
            ? $this->allowCallerToDialEscapeDigit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEscapeDigit($escapeDigit = null)
    {
        $this->escapeDigit = ($escapeDigit InstanceOf DtmfDigit)
             ? $escapeDigit
             : new DtmfDigit($escapeDigit);
        $this->escapeDigit->setElementName('escapeDigit');
        return $this;
    }

    /**
     * 
     * @return DtmfDigit $escapeDigit
     */
    public function getEscapeDigit()
    {
        return ($this->escapeDigit)
            ? $this->escapeDigit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setResetCallStatisticsUponEntryInQueue($resetCallStatisticsUponEntryInQueue = null)
    {
        $this->resetCallStatisticsUponEntryInQueue = new PrimitiveType($resetCallStatisticsUponEntryInQueue);
        $this->resetCallStatisticsUponEntryInQueue->setElementName('resetCallStatisticsUponEntryInQueue');
        return $this;
    }

    /**
     * 
     * @return boolean $resetCallStatisticsUponEntryInQueue
     */
    public function getResetCallStatisticsUponEntryInQueue()
    {
        return ($this->resetCallStatisticsUponEntryInQueue)
            ? $this->resetCallStatisticsUponEntryInQueue->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowAgentLogoff($allowAgentLogoff = null)
    {
        $this->allowAgentLogoff = new PrimitiveType($allowAgentLogoff);
        $this->allowAgentLogoff->setElementName('allowAgentLogoff');
        return $this;
    }

    /**
     * 
     * @return boolean $allowAgentLogoff
     */
    public function getAllowAgentLogoff()
    {
        return ($this->allowAgentLogoff)
            ? $this->allowAgentLogoff->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowCallWaitingForAgents($allowCallWaitingForAgents = null)
    {
        $this->allowCallWaitingForAgents = new PrimitiveType($allowCallWaitingForAgents);
        $this->allowCallWaitingForAgents->setElementName('allowCallWaitingForAgents');
        return $this;
    }

    /**
     * 
     * @return boolean $allowCallWaitingForAgents
     */
    public function getAllowCallWaitingForAgents()
    {
        return ($this->allowCallWaitingForAgents)
            ? $this->allowCallWaitingForAgents->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp = null)
    {
        $this->allowCallsToAgentsInWrapUp = new PrimitiveType($allowCallsToAgentsInWrapUp);
        $this->allowCallsToAgentsInWrapUp->setElementName('allowCallsToAgentsInWrapUp');
        return $this;
    }

    /**
     * 
     * @return boolean $allowCallsToAgentsInWrapUp
     */
    public function getAllowCallsToAgentsInWrapUp()
    {
        return ($this->allowCallsToAgentsInWrapUp)
            ? $this->allowCallsToAgentsInWrapUp->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOverrideAgentWrapUpTime($overrideAgentWrapUpTime = null)
    {
        $this->overrideAgentWrapUpTime = new PrimitiveType($overrideAgentWrapUpTime);
        $this->overrideAgentWrapUpTime->setElementName('overrideAgentWrapUpTime');
        return $this;
    }

    /**
     * 
     * @return boolean $overrideAgentWrapUpTime
     */
    public function getOverrideAgentWrapUpTime()
    {
        return ($this->overrideAgentWrapUpTime)
            ? $this->overrideAgentWrapUpTime->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWrapUpSeconds($wrapUpSeconds = null)
    {
        $this->wrapUpSeconds = ($wrapUpSeconds InstanceOf CallCenterWrapUpSeconds)
             ? $wrapUpSeconds
             : new CallCenterWrapUpSeconds($wrapUpSeconds);
        $this->wrapUpSeconds->setElementName('wrapUpSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterWrapUpSeconds $wrapUpSeconds
     */
    public function getWrapUpSeconds()
    {
        return ($this->wrapUpSeconds)
            ? $this->wrapUpSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForceDeliveryOfCalls($forceDeliveryOfCalls = null)
    {
        $this->forceDeliveryOfCalls = new PrimitiveType($forceDeliveryOfCalls);
        $this->forceDeliveryOfCalls->setElementName('forceDeliveryOfCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $forceDeliveryOfCalls
     */
    public function getForceDeliveryOfCalls()
    {
        return ($this->forceDeliveryOfCalls)
            ? $this->forceDeliveryOfCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds = null)
    {
        $this->forceDeliveryWaitTimeSeconds = ($forceDeliveryWaitTimeSeconds InstanceOf CallCenterForceDeliveryWaitTimeSeconds)
             ? $forceDeliveryWaitTimeSeconds
             : new CallCenterForceDeliveryWaitTimeSeconds($forceDeliveryWaitTimeSeconds);
        $this->forceDeliveryWaitTimeSeconds->setElementName('forceDeliveryWaitTimeSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterForceDeliveryWaitTimeSeconds $forceDeliveryWaitTimeSeconds
     */
    public function getForceDeliveryWaitTimeSeconds()
    {
        return ($this->forceDeliveryWaitTimeSeconds)
            ? $this->forceDeliveryWaitTimeSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableAutomaticStateChangeForAgents($enableAutomaticStateChangeForAgents = null)
    {
        $this->enableAutomaticStateChangeForAgents = new PrimitiveType($enableAutomaticStateChangeForAgents);
        $this->enableAutomaticStateChangeForAgents->setElementName('enableAutomaticStateChangeForAgents');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutomaticStateChangeForAgents
     */
    public function getEnableAutomaticStateChangeForAgents()
    {
        return ($this->enableAutomaticStateChangeForAgents)
            ? $this->enableAutomaticStateChangeForAgents->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAgentStateAfterCall($agentStateAfterCall = null)
    {
        $this->agentStateAfterCall = ($agentStateAfterCall InstanceOf AgentACDAutomaticState)
             ? $agentStateAfterCall
             : new AgentACDAutomaticState($agentStateAfterCall);
        $this->agentStateAfterCall->setElementName('agentStateAfterCall');
        return $this;
    }

    /**
     * 
     * @return AgentACDAutomaticState $agentStateAfterCall
     */
    public function getAgentStateAfterCall()
    {
        return ($this->agentStateAfterCall)
            ? $this->agentStateAfterCall->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAgentUnavailableCode($agentUnavailableCode = null)
    {
        $this->agentUnavailableCode = ($agentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $agentUnavailableCode
             : new CallCenterAgentUnavailableCode($agentUnavailableCode);
        $this->agentUnavailableCode->setElementName('agentUnavailableCode');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $agentUnavailableCode
     */
    public function getAgentUnavailableCode()
    {
        return ($this->agentUnavailableCode)
            ? $this->agentUnavailableCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExternalPreferredAudioCodec($externalPreferredAudioCodec = null)
    {
        $this->externalPreferredAudioCodec = ($externalPreferredAudioCodec InstanceOf AudioFileCodec)
             ? $externalPreferredAudioCodec
             : new AudioFileCodec($externalPreferredAudioCodec);
        $this->externalPreferredAudioCodec->setElementName('externalPreferredAudioCodec');
        return $this;
    }

    /**
     * 
     * @return AudioFileCodec $externalPreferredAudioCodec
     */
    public function getExternalPreferredAudioCodec()
    {
        return ($this->externalPreferredAudioCodec)
            ? $this->externalPreferredAudioCodec->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInternalPreferredAudioCodec($internalPreferredAudioCodec = null)
    {
        $this->internalPreferredAudioCodec = ($internalPreferredAudioCodec InstanceOf AudioFileCodec)
             ? $internalPreferredAudioCodec
             : new AudioFileCodec($internalPreferredAudioCodec);
        $this->internalPreferredAudioCodec->setElementName('internalPreferredAudioCodec');
        return $this;
    }

    /**
     * 
     * @return AudioFileCodec $internalPreferredAudioCodec
     */
    public function getInternalPreferredAudioCodec()
    {
        return ($this->internalPreferredAudioCodec)
            ? $this->internalPreferredAudioCodec->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayRingingWhenOfferingCall($playRingingWhenOfferingCall = null)
    {
        $this->playRingingWhenOfferingCall = new PrimitiveType($playRingingWhenOfferingCall);
        $this->playRingingWhenOfferingCall->setElementName('playRingingWhenOfferingCall');
        return $this;
    }

    /**
     * 
     * @return boolean $playRingingWhenOfferingCall
     */
    public function getPlayRingingWhenOfferingCall()
    {
        return ($this->playRingingWhenOfferingCall)
            ? $this->playRingingWhenOfferingCall->getElementValue()
            : null;
    }
}
