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
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallCenterGetRequest17.
 */
class SystemCallCenterGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                                  = __CLASS__;
    protected $defaultFromAddress                                    = null;
    protected $statisticsSamplingPeriodMinutes                       = null;
    protected $defaultEnableGuardTimer                               = null;
    protected $defaultGuardTimerSeconds                              = null;
    protected $forceAgentUnavailableOnDNDActivation                  = null;
    protected $forceAgentUnavailableOnPersonalCalls                  = null;
    protected $forceAgentUnavailableOnBouncedCallLimit               = null;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable  = null;
    protected $defaultPlayRingWhenOfferCall                          = null;
    protected $uniformCallDistributionPolicyScope                    = null;
    protected $callHandlingSamplingPeriodMinutes                     = null;
    protected $callHandlingMinimumSamplingSize                       = null;
    protected $playToneToAgentForEmergencyCall                       = null;
    protected $emergencyCallCLIDPrefix                               = null;


    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
    }

    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->value();
    }

    public function setStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes = null)
    {
        $this->statisticsSamplingPeriodMinutes = ($statisticsSamplingPeriodMinutes InstanceOf CallCenterStatisticsSamplingPeriodMinutes)
             ? $statisticsSamplingPeriodMinutes
             : new CallCenterStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes);
    }

    public function getStatisticsSamplingPeriodMinutes()
    {
        return (!$this->statisticsSamplingPeriodMinutes) ?: $this->statisticsSamplingPeriodMinutes->value();
    }

    public function setDefaultEnableGuardTimer(xs:boolean $defaultEnableGuardTimer = null)
    {
    }

    public function getDefaultEnableGuardTimer()
    {
        return (!$this->defaultEnableGuardTimer) ?: $this->defaultEnableGuardTimer->value();
    }

    public function setDefaultGuardTimerSeconds($defaultGuardTimerSeconds = null)
    {
        $this->defaultGuardTimerSeconds = ($defaultGuardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $defaultGuardTimerSeconds
             : new CallCenterGuardTimerSeconds($defaultGuardTimerSeconds);
    }

    public function getDefaultGuardTimerSeconds()
    {
        return (!$this->defaultGuardTimerSeconds) ?: $this->defaultGuardTimerSeconds->value();
    }

    public function setForceAgentUnavailableOnDNDActivation(xs:boolean $forceAgentUnavailableOnDNDActivation = null)
    {
    }

    public function getForceAgentUnavailableOnDNDActivation()
    {
        return (!$this->forceAgentUnavailableOnDNDActivation) ?: $this->forceAgentUnavailableOnDNDActivation->value();
    }

    public function setForceAgentUnavailableOnPersonalCalls(xs:boolean $forceAgentUnavailableOnPersonalCalls = null)
    {
    }

    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return (!$this->forceAgentUnavailableOnPersonalCalls) ?: $this->forceAgentUnavailableOnPersonalCalls->value();
    }

    public function setForceAgentUnavailableOnBouncedCallLimit(xs:boolean $forceAgentUnavailableOnBouncedCallLimit = null)
    {
    }

    public function getForceAgentUnavailableOnBouncedCallLimit()
    {
        return (!$this->forceAgentUnavailableOnBouncedCallLimit) ?: $this->forceAgentUnavailableOnBouncedCallLimit->value();
    }

    public function setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable = null)
    {
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = ($numberConsecutiveBouncedCallsToForceAgentUnavailable InstanceOf CallCenterConsecutiveBouncedCallsToForceAgentUnavailable)
             ? $numberConsecutiveBouncedCallsToForceAgentUnavailable
             : new CallCenterConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable);
    }

    public function getNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        return (!$this->numberConsecutiveBouncedCallsToForceAgentUnavailable) ?: $this->numberConsecutiveBouncedCallsToForceAgentUnavailable->value();
    }

    public function setDefaultPlayRingWhenOfferCall(xs:boolean $defaultPlayRingWhenOfferCall = null)
    {
    }

    public function getDefaultPlayRingWhenOfferCall()
    {
        return (!$this->defaultPlayRingWhenOfferCall) ?: $this->defaultPlayRingWhenOfferCall->value();
    }

    public function setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope = null)
    {
        $this->uniformCallDistributionPolicyScope = ($uniformCallDistributionPolicyScope InstanceOf CallCenterUniformCallDistributionPolicyScope)
             ? $uniformCallDistributionPolicyScope
             : new CallCenterUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
    }

    public function getUniformCallDistributionPolicyScope()
    {
        return (!$this->uniformCallDistributionPolicyScope) ?: $this->uniformCallDistributionPolicyScope->value();
    }

    public function setCallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes = null)
    {
        $this->callHandlingSamplingPeriodMinutes = ($callHandlingSamplingPeriodMinutes InstanceOf CallHandlingSamplingPeriodMinutes)
             ? $callHandlingSamplingPeriodMinutes
             : new CallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes);
    }

    public function getCallHandlingSamplingPeriodMinutes()
    {
        return (!$this->callHandlingSamplingPeriodMinutes) ?: $this->callHandlingSamplingPeriodMinutes->value();
    }

    public function setCallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize = null)
    {
        $this->callHandlingMinimumSamplingSize = ($callHandlingMinimumSamplingSize InstanceOf CallHandlingMinimumSamplingSize)
             ? $callHandlingMinimumSamplingSize
             : new CallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize);
    }

    public function getCallHandlingMinimumSamplingSize()
    {
        return (!$this->callHandlingMinimumSamplingSize) ?: $this->callHandlingMinimumSamplingSize->value();
    }

    public function setPlayToneToAgentForEmergencyCall(xs:boolean $playToneToAgentForEmergencyCall = null)
    {
    }

    public function getPlayToneToAgentForEmergencyCall()
    {
        return (!$this->playToneToAgentForEmergencyCall) ?: $this->playToneToAgentForEmergencyCall->value();
    }

    public function setEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix = null)
    {
        $this->emergencyCallCLIDPrefix = ($emergencyCallCLIDPrefix InstanceOf CallCenterEmergencyCallCLIDPrefix)
             ? $emergencyCallCLIDPrefix
             : new CallCenterEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix);
    }

    public function getEmergencyCallCLIDPrefix()
    {
        return (!$this->emergencyCallCLIDPrefix) ?: $this->emergencyCallCLIDPrefix->value();
    }
}
