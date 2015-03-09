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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\GroupCallCenterModifyInstanceResponse17sp1;
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
    public    $name                                = __CLASS__;
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
     * @return GroupCallCenterModifyInstanceResponse17sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
        $this->serviceInstanceProfile =  $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * Call center type.
     */
    public function setType($type = null)
    {
        $this->type = ($type InstanceOf CallCenterType)
             ? $type
             : new CallCenterType($type);
    }

    /**
     * Call center type.
     */
    public function getType()
    {
        return (!$this->type) ?: $this->type->getValue();
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
    public function setEnableVideo($enableVideo = null)
    {
        $this->enableVideo = (boolean) $enableVideo;
    }

    /**
     * 
     */
    public function getEnableVideo()
    {
        return (!$this->enableVideo) ?: $this->enableVideo;
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
     * 
     */
    public function setEnableReporting($enableReporting = null)
    {
        $this->enableReporting = (boolean) $enableReporting;
    }

    /**
     * 
     */
    public function getEnableReporting()
    {
        return (!$this->enableReporting) ?: $this->enableReporting;
    }

    /**
     * Call Center Reporting Server Name.
     */
    public function setReportingServerName($reportingServerName = null)
    {
        $this->reportingServerName = ($reportingServerName InstanceOf CallCenterReportingServerName)
             ? $reportingServerName
             : new CallCenterReportingServerName($reportingServerName);
    }

    /**
     * Call Center Reporting Server Name.
     */
    public function getReportingServerName()
    {
        return (!$this->reportingServerName) ?: $this->reportingServerName->getValue();
    }

    /**
     * 
     */
    public function setAllowCallerToDialEscapeDigit($allowCallerToDialEscapeDigit = null)
    {
        $this->allowCallerToDialEscapeDigit = (boolean) $allowCallerToDialEscapeDigit;
    }

    /**
     * 
     */
    public function getAllowCallerToDialEscapeDigit()
    {
        return (!$this->allowCallerToDialEscapeDigit) ?: $this->allowCallerToDialEscapeDigit;
    }

    /**
     * A single DTMF dialing digit. Valid values are 0-9,*,#.
     */
    public function setEscapeDigit($escapeDigit = null)
    {
        $this->escapeDigit = ($escapeDigit InstanceOf DtmfDigit)
             ? $escapeDigit
             : new DtmfDigit($escapeDigit);
    }

    /**
     * A single DTMF dialing digit. Valid values are 0-9,*,#.
     */
    public function getEscapeDigit()
    {
        return (!$this->escapeDigit) ?: $this->escapeDigit->getValue();
    }

    /**
     * 
     */
    public function setResetCallStatisticsUponEntryInQueue($resetCallStatisticsUponEntryInQueue = null)
    {
        $this->resetCallStatisticsUponEntryInQueue = (boolean) $resetCallStatisticsUponEntryInQueue;
    }

    /**
     * 
     */
    public function getResetCallStatisticsUponEntryInQueue()
    {
        return (!$this->resetCallStatisticsUponEntryInQueue) ?: $this->resetCallStatisticsUponEntryInQueue;
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
        return (!$this->allowAgentLogoff) ?: $this->allowAgentLogoff;
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
        return (!$this->allowCallWaitingForAgents) ?: $this->allowCallWaitingForAgents;
    }

    /**
     * 
     */
    public function setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp = null)
    {
        $this->allowCallsToAgentsInWrapUp = (boolean) $allowCallsToAgentsInWrapUp;
    }

    /**
     * 
     */
    public function getAllowCallsToAgentsInWrapUp()
    {
        return (!$this->allowCallsToAgentsInWrapUp) ?: $this->allowCallsToAgentsInWrapUp;
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
        return (!$this->overrideAgentWrapUpTime) ?: $this->overrideAgentWrapUpTime;
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
    public function setForceDeliveryOfCalls($forceDeliveryOfCalls = null)
    {
        $this->forceDeliveryOfCalls = (boolean) $forceDeliveryOfCalls;
    }

    /**
     * 
     */
    public function getForceDeliveryOfCalls()
    {
        return (!$this->forceDeliveryOfCalls) ?: $this->forceDeliveryOfCalls;
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
        return (!$this->enableAutomaticStateChangeForAgents) ?: $this->enableAutomaticStateChangeForAgents;
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
        return (!$this->playRingingWhenOfferingCall) ?: $this->playRingingWhenOfferingCall;
    }
}
