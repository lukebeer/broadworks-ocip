<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterForceDeliveryWaitTimeSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterReportingServerName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterQueueLength16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterWrapUpSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AudioFileCodec;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DtmfDigit;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupCallCenterGetInstanceRequest16.
 */
class GroupCallCenterGetInstanceResponse16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupCallCenterGetInstanceResponse16';
    public    $name                                = __CLASS__;
    protected $serviceInstanceProfile              = null;
    protected $type                                = null;
    protected $policy                              = null;
    protected $enableVideo                         = null;
    protected $queueLength                         = null;
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
    protected $externalPreferredAudioCodec         = null;
    protected $internalPreferredAudioCodec         = null;
    protected $playRingingWhenOfferingCall         = null;


    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ServiceInstanceReadProfile $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
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
        return (!$this->enableVideo) ?: $this->enableVideo->getValue();
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
        return (!$this->allowCallerToDialEscapeDigit) ?: $this->allowCallerToDialEscapeDigit->getValue();
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
        return (!$this->resetCallStatisticsUponEntryInQueue) ?: $this->resetCallStatisticsUponEntryInQueue->getValue();
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
    public function setAllowCallsToAgentsInWrapUp($allowCallsToAgentsInWrapUp = null)
    {
        $this->allowCallsToAgentsInWrapUp = (boolean) $allowCallsToAgentsInWrapUp;
    }

    /**
     * 
     */
    public function getAllowCallsToAgentsInWrapUp()
    {
        return (!$this->allowCallsToAgentsInWrapUp) ?: $this->allowCallsToAgentsInWrapUp->getValue();
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
        return (!$this->playRingingWhenOfferingCall) ?: $this->playRingingWhenOfferingCall->getValue();
    }
}
