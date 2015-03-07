<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\AgentACDState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserCallCenterGetRequest17.
 *         Contains the user's call center settings.
 *         Indicates whether the agent is current available (logged in) to each call center in the list.
 *         Contains a table with column headings: "Service User Id", "Phone Number", "Extension", "Available", "Logoff Allowed", "Type", and "Priority".
 */
class UserCallCenterGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                                  = __CLASS__;
    protected $agentACDState                                         = null;
    protected $agentUnavailableCode                                  = null;
    protected $useDefaultGuardTimer                                  = null;
    protected $enableGuardTimer                                      = null;
    protected $guardTimerSeconds                                     = null;
    protected $useSystemDefaultUnavailableSettings                   = null;
    protected $forceAgentUnavailableOnDNDActivation                  = null;
    protected $forceUnavailableOnPersonalCalls                       = null;
    protected $forceAgentUnavailableOnBouncedCallLimit               = null;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable  = null;
    protected $makeOutgoingCallsAsCallCenter                         = null;
    protected $outgoingCallDNIS                                      = null;
    protected $callCenterTable                                       = null;


    public function setAgentACDState($agentACDState = null)
    {
        $this->agentACDState = ($agentACDState InstanceOf AgentACDState)
             ? $agentACDState
             : new AgentACDState($agentACDState);
    }

    public function getAgentACDState()
    {
        return (!$this->agentACDState) ?: $this->agentACDState->value();
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

    public function setUseDefaultGuardTimer(xs:boolean $useDefaultGuardTimer = null)
    {
    }

    public function getUseDefaultGuardTimer()
    {
        return (!$this->useDefaultGuardTimer) ?: $this->useDefaultGuardTimer->value();
    }

    public function setEnableGuardTimer(xs:boolean $enableGuardTimer = null)
    {
    }

    public function getEnableGuardTimer()
    {
        return (!$this->enableGuardTimer) ?: $this->enableGuardTimer->value();
    }

    public function setGuardTimerSeconds($guardTimerSeconds = null)
    {
        $this->guardTimerSeconds = ($guardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $guardTimerSeconds
             : new CallCenterGuardTimerSeconds($guardTimerSeconds);
    }

    public function getGuardTimerSeconds()
    {
        return (!$this->guardTimerSeconds) ?: $this->guardTimerSeconds->value();
    }

    public function setUseSystemDefaultUnavailableSettings(xs:boolean $useSystemDefaultUnavailableSettings = null)
    {
    }

    public function getUseSystemDefaultUnavailableSettings()
    {
        return (!$this->useSystemDefaultUnavailableSettings) ?: $this->useSystemDefaultUnavailableSettings->value();
    }

    public function setForceAgentUnavailableOnDNDActivation(xs:boolean $forceAgentUnavailableOnDNDActivation = null)
    {
    }

    public function getForceAgentUnavailableOnDNDActivation()
    {
        return (!$this->forceAgentUnavailableOnDNDActivation) ?: $this->forceAgentUnavailableOnDNDActivation->value();
    }

    public function setForceUnavailableOnPersonalCalls(xs:boolean $forceUnavailableOnPersonalCalls = null)
    {
    }

    public function getForceUnavailableOnPersonalCalls()
    {
        return (!$this->forceUnavailableOnPersonalCalls) ?: $this->forceUnavailableOnPersonalCalls->value();
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

    public function setMakeOutgoingCallsAsCallCenter(xs:boolean $makeOutgoingCallsAsCallCenter = null)
    {
    }

    public function getMakeOutgoingCallsAsCallCenter()
    {
        return (!$this->makeOutgoingCallsAsCallCenter) ?: $this->makeOutgoingCallsAsCallCenter->value();
    }

    public function setOutgoingCallDNIS(DNISKey $outgoingCallDNIS = null)
    {
    }

    public function getOutgoingCallDNIS()
    {
        return (!$this->outgoingCallDNIS) ?: $this->outgoingCallDNIS->value();
    }

    public function setCallCenterTable(core:OCITable $callCenterTable = null)
    {
    }

    public function getCallCenterTable()
    {
        return (!$this->callCenterTable) ?: $this->callCenterTable->value();
    }
}
