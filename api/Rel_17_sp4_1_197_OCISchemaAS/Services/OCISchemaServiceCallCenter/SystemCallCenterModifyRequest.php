<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterUniformCallDistributionPolicyScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsSamplingPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEmergencyCallCLIDPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallHandlingSamplingPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallHandlingMinimumSamplingSize;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\SystemCallCenterModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the system level data associated with Call Center.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemCallCenterModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                                 = __CLASS__;
    protected $defaultFromAddress                                   = null;
    protected $statisticsSamplingPeriodMinutes                      = null;
    protected $defaultEnableGuardTimer                              = null;
    protected $defaultGuardTimerSeconds                             = null;
    protected $forceAgentUnavailableOnDNDActivation                 = null;
    protected $forceAgentUnavailableOnPersonalCalls                 = null;
    protected $forceAgentUnavailableOnBouncedCallLimit              = null;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;
    protected $defaultPlayRingWhenOfferCall                         = null;
    protected $uniformCallDistributionPolicyScope                   = null;
    protected $callHandlingSamplingPeriodMinutes                    = null;
    protected $callHandlingMinimumSamplingSize                      = null;
    protected $playToneToAgentForEmergencyCall                      = null;
    protected $emergencyCallCLIDPrefix                              = null;

    public function __construct(
         $defaultFromAddress = null,
         $statisticsSamplingPeriodMinutes = null,
         $defaultEnableGuardTimer = null,
         $defaultGuardTimerSeconds = null,
         $forceAgentUnavailableOnDNDActivation = null,
         $forceAgentUnavailableOnPersonalCalls = null,
         $forceAgentUnavailableOnBouncedCallLimit = null,
         $numberConsecutiveBouncedCallsToForceAgentUnavailable = null,
         $defaultPlayRingWhenOfferCall = null,
         $uniformCallDistributionPolicyScope = null,
         $callHandlingSamplingPeriodMinutes = null,
         $callHandlingMinimumSamplingSize = null,
         $playToneToAgentForEmergencyCall = null,
         $emergencyCallCLIDPrefix = null
    ) {
        $this->setDefaultFromAddress($defaultFromAddress);
        $this->setStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes);
        $this->setDefaultEnableGuardTimer($defaultEnableGuardTimer);
        $this->setDefaultGuardTimerSeconds($defaultGuardTimerSeconds);
        $this->setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation);
        $this->setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls);
        $this->setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit);
        $this->setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable);
        $this->setDefaultPlayRingWhenOfferCall($defaultPlayRingWhenOfferCall);
        $this->setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
        $this->setCallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes);
        $this->setCallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize);
        $this->setPlayToneToAgentForEmergencyCall($playToneToAgentForEmergencyCall);
        $this->setEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix);
    }

    /**
     * @return SystemCallCenterModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Email Address
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
    }

    /**
     * Email Address
     */
    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->getValue();
    }

    /**
     * Call Center statistics sampling period.
     */
    public function setStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes = null)
    {
        $this->statisticsSamplingPeriodMinutes = ($statisticsSamplingPeriodMinutes InstanceOf CallCenterStatisticsSamplingPeriodMinutes)
             ? $statisticsSamplingPeriodMinutes
             : new CallCenterStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes);
    }

    /**
     * Call Center statistics sampling period.
     */
    public function getStatisticsSamplingPeriodMinutes()
    {
        return (!$this->statisticsSamplingPeriodMinutes) ?: $this->statisticsSamplingPeriodMinutes->getValue();
    }

    /**
     * 
     */
    public function setDefaultEnableGuardTimer($defaultEnableGuardTimer = null)
    {
        $this->defaultEnableGuardTimer = (boolean) $defaultEnableGuardTimer;
    }

    /**
     * 
     */
    public function getDefaultEnableGuardTimer()
    {
        return (!$this->defaultEnableGuardTimer) ?: $this->defaultEnableGuardTimer;
    }

    /**
     * The timer determines how long the system will wait before routing a call to a free agent.
     */
    public function setDefaultGuardTimerSeconds($defaultGuardTimerSeconds = null)
    {
        $this->defaultGuardTimerSeconds = ($defaultGuardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $defaultGuardTimerSeconds
             : new CallCenterGuardTimerSeconds($defaultGuardTimerSeconds);
    }

    /**
     * The timer determines how long the system will wait before routing a call to a free agent.
     */
    public function getDefaultGuardTimerSeconds()
    {
        return (!$this->defaultGuardTimerSeconds) ?: $this->defaultGuardTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation = null)
    {
        $this->forceAgentUnavailableOnDNDActivation = (boolean) $forceAgentUnavailableOnDNDActivation;
    }

    /**
     * 
     */
    public function getForceAgentUnavailableOnDNDActivation()
    {
        return (!$this->forceAgentUnavailableOnDNDActivation) ?: $this->forceAgentUnavailableOnDNDActivation;
    }

    /**
     * 
     */
    public function setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls = null)
    {
        $this->forceAgentUnavailableOnPersonalCalls = (boolean) $forceAgentUnavailableOnPersonalCalls;
    }

    /**
     * 
     */
    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return (!$this->forceAgentUnavailableOnPersonalCalls) ?: $this->forceAgentUnavailableOnPersonalCalls;
    }

    /**
     * 
     */
    public function setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit = null)
    {
        $this->forceAgentUnavailableOnBouncedCallLimit = (boolean) $forceAgentUnavailableOnBouncedCallLimit;
    }

    /**
     * 
     */
    public function getForceAgentUnavailableOnBouncedCallLimit()
    {
        return (!$this->forceAgentUnavailableOnBouncedCallLimit) ?: $this->forceAgentUnavailableOnBouncedCallLimit;
    }

    /**
     * Call center maximum number of consecutive bounced calls allowed before forcing agent to become unavailable.
     */
    public function setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable = null)
    {
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = ($numberConsecutiveBouncedCallsToForceAgentUnavailable InstanceOf CallCenterConsecutiveBouncedCallsToForceAgentUnavailable)
             ? $numberConsecutiveBouncedCallsToForceAgentUnavailable
             : new CallCenterConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable);
    }

    /**
     * Call center maximum number of consecutive bounced calls allowed before forcing agent to become unavailable.
     */
    public function getNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        return (!$this->numberConsecutiveBouncedCallsToForceAgentUnavailable) ?: $this->numberConsecutiveBouncedCallsToForceAgentUnavailable->getValue();
    }

    /**
     * 
     */
    public function setDefaultPlayRingWhenOfferCall($defaultPlayRingWhenOfferCall = null)
    {
        $this->defaultPlayRingWhenOfferCall = (boolean) $defaultPlayRingWhenOfferCall;
    }

    /**
     * 
     */
    public function getDefaultPlayRingWhenOfferCall()
    {
        return (!$this->defaultPlayRingWhenOfferCall) ?: $this->defaultPlayRingWhenOfferCall;
    }

    /**
     * Call Center Uniform Call Distribution Policy Scope.
     */
    public function setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope = null)
    {
        $this->uniformCallDistributionPolicyScope = ($uniformCallDistributionPolicyScope InstanceOf CallCenterUniformCallDistributionPolicyScope)
             ? $uniformCallDistributionPolicyScope
             : new CallCenterUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
    }

    /**
     * Call Center Uniform Call Distribution Policy Scope.
     */
    public function getUniformCallDistributionPolicyScope()
    {
        return (!$this->uniformCallDistributionPolicyScope) ?: $this->uniformCallDistributionPolicyScope->getValue();
    }

    /**
     * The moving average period used to calculate the call handling time.
     */
    public function setCallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes = null)
    {
        $this->callHandlingSamplingPeriodMinutes = ($callHandlingSamplingPeriodMinutes InstanceOf CallHandlingSamplingPeriodMinutes)
             ? $callHandlingSamplingPeriodMinutes
             : new CallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes);
    }

    /**
     * The moving average period used to calculate the call handling time.
     */
    public function getCallHandlingSamplingPeriodMinutes()
    {
        return (!$this->callHandlingSamplingPeriodMinutes) ?: $this->callHandlingSamplingPeriodMinutes->getValue();
    }

    /**
     * The minimum number of entries for the call handling time moving average to be valid.
     */
    public function setCallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize = null)
    {
        $this->callHandlingMinimumSamplingSize = ($callHandlingMinimumSamplingSize InstanceOf CallHandlingMinimumSamplingSize)
             ? $callHandlingMinimumSamplingSize
             : new CallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize);
    }

    /**
     * The minimum number of entries for the call handling time moving average to be valid.
     */
    public function getCallHandlingMinimumSamplingSize()
    {
        return (!$this->callHandlingMinimumSamplingSize) ?: $this->callHandlingMinimumSamplingSize->getValue();
    }

    /**
     * 
     */
    public function setPlayToneToAgentForEmergencyCall($playToneToAgentForEmergencyCall = null)
    {
        $this->playToneToAgentForEmergencyCall = (boolean) $playToneToAgentForEmergencyCall;
    }

    /**
     * 
     */
    public function getPlayToneToAgentForEmergencyCall()
    {
        return (!$this->playToneToAgentForEmergencyCall) ?: $this->playToneToAgentForEmergencyCall;
    }

    /**
     * Call Center emergency call CLID prefix.
     */
    public function setEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix = null)
    {
        $this->emergencyCallCLIDPrefix = ($emergencyCallCLIDPrefix InstanceOf CallCenterEmergencyCallCLIDPrefix)
             ? $emergencyCallCLIDPrefix
             : new CallCenterEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix);
    }

    /**
     * Call Center emergency call CLID prefix.
     */
    public function getEmergencyCallCLIDPrefix()
    {
        return (!$this->emergencyCallCLIDPrefix) ?: $this->emergencyCallCLIDPrefix->getValue();
    }
}
