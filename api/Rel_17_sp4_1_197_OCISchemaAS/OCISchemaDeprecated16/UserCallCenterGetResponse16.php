<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\AgentACDState;
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
    public    $name                                                 = __CLASS__;
    protected $agentACDState                                        = null;
    protected $useDefaultGuardTimer                                 = null;
    protected $enableGuardTimer                                     = null;
    protected $guardTimerSeconds                                    = null;
    protected $useSystemDefaultUnavailableSettings                  = null;
    protected $forceAgentUnavailableOnDNDActivation                 = null;
    protected $forceUnavailableOnPersonalCalls                      = null;
    protected $forceAgentUnavailableOnBouncedCallLimit              = null;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;
    protected $callCenterTable                                      = null;


    /**
     * Agent Automatic Call Distribution (ACD) State.
     */
    public function setAgentACDState($agentACDState = null)
    {
        $this->agentACDState = ($agentACDState InstanceOf AgentACDState)
             ? $agentACDState
             : new AgentACDState($agentACDState);
    }

    /**
     * Agent Automatic Call Distribution (ACD) State.
     */
    public function getAgentACDState()
    {
        return (!$this->agentACDState) ?: $this->agentACDState->getValue();
    }

    /**
     * 
     */
    public function setUseDefaultGuardTimer($useDefaultGuardTimer = null)
    {
        $this->useDefaultGuardTimer = (boolean) $useDefaultGuardTimer;
    }

    /**
     * 
     */
    public function getUseDefaultGuardTimer()
    {
        return (!$this->useDefaultGuardTimer) ?: $this->useDefaultGuardTimer->getValue();
    }

    /**
     * 
     */
    public function setEnableGuardTimer($enableGuardTimer = null)
    {
        $this->enableGuardTimer = (boolean) $enableGuardTimer;
    }

    /**
     * 
     */
    public function getEnableGuardTimer()
    {
        return (!$this->enableGuardTimer) ?: $this->enableGuardTimer->getValue();
    }

    /**
     * The timer determines how long the system will wait before routing a call to a free agent.
     */
    public function setGuardTimerSeconds($guardTimerSeconds = null)
    {
        $this->guardTimerSeconds = ($guardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $guardTimerSeconds
             : new CallCenterGuardTimerSeconds($guardTimerSeconds);
    }

    /**
     * The timer determines how long the system will wait before routing a call to a free agent.
     */
    public function getGuardTimerSeconds()
    {
        return (!$this->guardTimerSeconds) ?: $this->guardTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings = null)
    {
        $this->useSystemDefaultUnavailableSettings = (boolean) $useSystemDefaultUnavailableSettings;
    }

    /**
     * 
     */
    public function getUseSystemDefaultUnavailableSettings()
    {
        return (!$this->useSystemDefaultUnavailableSettings) ?: $this->useSystemDefaultUnavailableSettings->getValue();
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
        return (!$this->forceAgentUnavailableOnDNDActivation) ?: $this->forceAgentUnavailableOnDNDActivation->getValue();
    }

    /**
     * 
     */
    public function setForceUnavailableOnPersonalCalls($forceUnavailableOnPersonalCalls = null)
    {
        $this->forceUnavailableOnPersonalCalls = (boolean) $forceUnavailableOnPersonalCalls;
    }

    /**
     * 
     */
    public function getForceUnavailableOnPersonalCalls()
    {
        return (!$this->forceUnavailableOnPersonalCalls) ?: $this->forceUnavailableOnPersonalCalls->getValue();
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
        return (!$this->forceAgentUnavailableOnBouncedCallLimit) ?: $this->forceAgentUnavailableOnBouncedCallLimit->getValue();
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
    public function setCallCenterTable(core:OCITable $callCenterTable = null)
    {
        $this->callCenterTable =  $callCenterTable;
    }

    /**
     * 
     */
    public function getCallCenterTable()
    {
        return (!$this->callCenterTable) ?: $this->callCenterTable->getValue();
    }
}
