<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupCallCenterGetRequest.
 */
class GroupCallCenterGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $useSystemDefaultGuardTimer,
             $enableGuardTimer,
             $guardTimerSeconds,
             $useSystemDefaultUnavailableSettings=null,
             $forceAgentUnavailableOnDNDActivation=null,
             $forceAgentUnavailableOnPersonalCalls=null,
             $forceAgentUnavailableOnBouncedCallLimit=null,
             $numberConsecutiveBouncedCallsToForceAgentUnavailable=null
    ) {
        $this->useSystemDefaultGuardTimer                           = $useSystemDefaultGuardTimer;
        $this->enableGuardTimer                                     = $enableGuardTimer;
        $this->guardTimerSeconds                                    = $guardTimerSeconds;
        $this->useSystemDefaultUnavailableSettings                  = $useSystemDefaultUnavailableSettings;
        $this->forceAgentUnavailableOnDNDActivation                 = $forceAgentUnavailableOnDNDActivation;
        $this->forceAgentUnavailableOnPersonalCalls                 = $forceAgentUnavailableOnPersonalCalls;
        $this->forceAgentUnavailableOnBouncedCallLimit              = $forceAgentUnavailableOnBouncedCallLimit;
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = $numberConsecutiveBouncedCallsToForceAgentUnavailable;
        $this->args                                                 = func_get_args();
    }

    public function setUseSystemDefaultGuardTimer($useSystemDefaultGuardTimer)
    {
        $useSystemDefaultGuardTimer and $this->useSystemDefaultGuardTimer = new xs:boolean($useSystemDefaultGuardTimer);
    }

    public function getUseSystemDefaultGuardTimer()
    {
        return (!$this->useSystemDefaultGuardTimer) ?: $this->useSystemDefaultGuardTimer->value();
    }

    public function setEnableGuardTimer($enableGuardTimer)
    {
        $enableGuardTimer and $this->enableGuardTimer = new xs:boolean($enableGuardTimer);
    }

    public function getEnableGuardTimer()
    {
        return (!$this->enableGuardTimer) ?: $this->enableGuardTimer->value();
    }

    public function setGuardTimerSeconds($guardTimerSeconds)
    {
        $guardTimerSeconds and $this->guardTimerSeconds = new CallCenterGuardTimerSeconds($guardTimerSeconds);
    }

    public function getGuardTimerSeconds()
    {
        return (!$this->guardTimerSeconds) ?: $this->guardTimerSeconds->value();
    }

    public function setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings)
    {
        $useSystemDefaultUnavailableSettings and $this->useSystemDefaultUnavailableSettings = new xs:boolean($useSystemDefaultUnavailableSettings);
    }

    public function getUseSystemDefaultUnavailableSettings()
    {
        return (!$this->useSystemDefaultUnavailableSettings) ?: $this->useSystemDefaultUnavailableSettings->value();
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
