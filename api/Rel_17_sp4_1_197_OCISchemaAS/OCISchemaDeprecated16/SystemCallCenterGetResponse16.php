<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterStatisticsSamplingPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemCallCenterGetRequest16.
 */
class SystemCallCenterGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $defaultFromAddress,
             $statisticsSamplingPeriodMinutes,
             $defaultEnableGuardTimer,
             $defaultGuardTimerSeconds,
             $forceAgentUnavailableOnDNDActivation,
             $forceAgentUnavailableOnPersonalCalls,
             $forceAgentUnavailableOnBouncedCallLimit,
             $numberConsecutiveBouncedCallsToForceAgentUnavailable
    ) {
        $this->defaultFromAddress                                   = new EmailAddress($defaultFromAddress);
        $this->statisticsSamplingPeriodMinutes                      = $statisticsSamplingPeriodMinutes;
        $this->defaultEnableGuardTimer                              = $defaultEnableGuardTimer;
        $this->defaultGuardTimerSeconds                             = $defaultGuardTimerSeconds;
        $this->forceAgentUnavailableOnDNDActivation                 = $forceAgentUnavailableOnDNDActivation;
        $this->forceAgentUnavailableOnPersonalCalls                 = $forceAgentUnavailableOnPersonalCalls;
        $this->forceAgentUnavailableOnBouncedCallLimit              = $forceAgentUnavailableOnBouncedCallLimit;
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = $numberConsecutiveBouncedCallsToForceAgentUnavailable;
        $this->args                                                 = func_get_args();
    }

    public function setDefaultFromAddress($defaultFromAddress)
    {
        $defaultFromAddress and $this->defaultFromAddress = new EmailAddress($defaultFromAddress);
    }

    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->value();
    }

    public function setStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes)
    {
        $statisticsSamplingPeriodMinutes and $this->statisticsSamplingPeriodMinutes = new CallCenterStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes);
    }

    public function getStatisticsSamplingPeriodMinutes()
    {
        return (!$this->statisticsSamplingPeriodMinutes) ?: $this->statisticsSamplingPeriodMinutes->value();
    }

    public function setDefaultEnableGuardTimer($defaultEnableGuardTimer)
    {
        $defaultEnableGuardTimer and $this->defaultEnableGuardTimer = new xs:boolean($defaultEnableGuardTimer);
    }

    public function getDefaultEnableGuardTimer()
    {
        return (!$this->defaultEnableGuardTimer) ?: $this->defaultEnableGuardTimer->value();
    }

    public function setDefaultGuardTimerSeconds($defaultGuardTimerSeconds)
    {
        $defaultGuardTimerSeconds and $this->defaultGuardTimerSeconds = new CallCenterGuardTimerSeconds($defaultGuardTimerSeconds);
    }

    public function getDefaultGuardTimerSeconds()
    {
        return (!$this->defaultGuardTimerSeconds) ?: $this->defaultGuardTimerSeconds->value();
    }

    public function setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation)
    {
        $forceAgentUnavailableOnDNDActivation and $this->forceAgentUnavailableOnDNDActivation = new xs:boolean($forceAgentUnavailableOnDNDActivation);
    }

    public function getForceAgentUnavailableOnDNDActivation()
    {
        return (!$this->forceAgentUnavailableOnDNDActivation) ?: $this->forceAgentUnavailableOnDNDActivation->value();
    }

    public function setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls)
    {
        $forceAgentUnavailableOnPersonalCalls and $this->forceAgentUnavailableOnPersonalCalls = new xs:boolean($forceAgentUnavailableOnPersonalCalls);
    }

    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return (!$this->forceAgentUnavailableOnPersonalCalls) ?: $this->forceAgentUnavailableOnPersonalCalls->value();
    }

    public function setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit)
    {
        $forceAgentUnavailableOnBouncedCallLimit and $this->forceAgentUnavailableOnBouncedCallLimit = new xs:boolean($forceAgentUnavailableOnBouncedCallLimit);
    }

    public function getForceAgentUnavailableOnBouncedCallLimit()
    {
        return (!$this->forceAgentUnavailableOnBouncedCallLimit) ?: $this->forceAgentUnavailableOnBouncedCallLimit->value();
    }

    public function setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable)
    {
        $numberConsecutiveBouncedCallsToForceAgentUnavailable and $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = new CallCenterConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable);
    }

    public function getNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        return (!$this->numberConsecutiveBouncedCallsToForceAgentUnavailable) ?: $this->numberConsecutiveBouncedCallsToForceAgentUnavailable->value();
    }
}
