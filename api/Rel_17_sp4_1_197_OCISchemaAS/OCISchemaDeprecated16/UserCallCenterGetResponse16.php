<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AgentACDState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCallCenterGetRequest16.
 *         Contains the user's call center settings.
 *         Indicates whether the agent is current available (logged in) to each call center in the list.
 *         Contains a table with column headings: "Service User Id", "Phone Number", "Extension", "Available", "Logoff Allowed", "Type", and "Priority".
 */
class UserCallCenterGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $agentACDState=null,
             $useDefaultGuardTimer,
             $enableGuardTimer,
             $guardTimerSeconds,
             $useSystemDefaultUnavailableSettings=null,
             $forceAgentUnavailableOnDNDActivation=null,
             $forceUnavailableOnPersonalCalls=null,
             $forceAgentUnavailableOnBouncedCallLimit=null,
             $numberConsecutiveBouncedCallsToForceAgentUnavailable=null,
             $callCenterTable
    ) {
        $this->agentACDState                                        = $agentACDState;
        $this->useDefaultGuardTimer                                 = $useDefaultGuardTimer;
        $this->enableGuardTimer                                     = $enableGuardTimer;
        $this->guardTimerSeconds                                    = $guardTimerSeconds;
        $this->useSystemDefaultUnavailableSettings                  = $useSystemDefaultUnavailableSettings;
        $this->forceAgentUnavailableOnDNDActivation                 = $forceAgentUnavailableOnDNDActivation;
        $this->forceUnavailableOnPersonalCalls                      = $forceUnavailableOnPersonalCalls;
        $this->forceAgentUnavailableOnBouncedCallLimit              = $forceAgentUnavailableOnBouncedCallLimit;
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = $numberConsecutiveBouncedCallsToForceAgentUnavailable;
        $this->callCenterTable                                      = $callCenterTable;
        $this->args                                                 = func_get_args();
    }

    public function setAgentACDState($agentACDState)
    {
        $agentACDState and $this->agentACDState = new AgentACDState($agentACDState);
    }

    public function getAgentACDState()
    {
        return (!$this->agentACDState) ?: $this->agentACDState->value();
    }

    public function setUseDefaultGuardTimer($useDefaultGuardTimer)
    {
        $useDefaultGuardTimer and $this->useDefaultGuardTimer = new xs:boolean($useDefaultGuardTimer);
    }

    public function getUseDefaultGuardTimer()
    {
        return (!$this->useDefaultGuardTimer) ?: $this->useDefaultGuardTimer->value();
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

    public function setForceUnavailableOnPersonalCalls($forceUnavailableOnPersonalCalls)
    {
        $forceUnavailableOnPersonalCalls and $this->forceUnavailableOnPersonalCalls = new xs:boolean($forceUnavailableOnPersonalCalls);
    }

    public function getForceUnavailableOnPersonalCalls()
    {
        return (!$this->forceUnavailableOnPersonalCalls) ?: $this->forceUnavailableOnPersonalCalls->value();
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

    public function setCallCenterTable($callCenterTable)
    {
        $callCenterTable and $this->callCenterTable = new core:OCITable($callCenterTable);
    }

    public function getCallCenterTable()
    {
        return (!$this->callCenterTable) ?: $this->callCenterTable->value();
    }
}
