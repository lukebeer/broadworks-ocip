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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter\UserCallCenterGetResponse17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallCenterGetRequest17.
 *         Contains the user's call center settings.
 *         Indicates whether the agent is current available (logged in) to each call center in the list.
 *         Contains a table with column headings: "Service User Id", "Phone Number", "Extension", "Available", "Logoff Allowed", "Type", and "Priority".
 */
class UserCallCenterGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                                 = __CLASS__;
    protected $agentACDState                                        = null;
    protected $agentUnavailableCode                                 = null;
    protected $useDefaultGuardTimer                                 = null;
    protected $enableGuardTimer                                     = null;
    protected $guardTimerSeconds                                    = null;
    protected $useSystemDefaultUnavailableSettings                  = null;
    protected $forceAgentUnavailableOnDNDActivation                 = null;
    protected $forceUnavailableOnPersonalCalls                      = null;
    protected $forceAgentUnavailableOnBouncedCallLimit              = null;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;
    protected $makeOutgoingCallsAsCallCenter                        = null;
    protected $outgoingCallDNIS                                     = null;
    protected $callCenterTable                                      = null;

    /**
     * @return UserCallCenterGetResponse17
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

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
        return (!$this->useDefaultGuardTimer) ?: $this->useDefaultGuardTimer;
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
        return (!$this->enableGuardTimer) ?: $this->enableGuardTimer;
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
        return (!$this->useSystemDefaultUnavailableSettings) ?: $this->useSystemDefaultUnavailableSettings;
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
    public function setForceUnavailableOnPersonalCalls($forceUnavailableOnPersonalCalls = null)
    {
        $this->forceUnavailableOnPersonalCalls = (boolean) $forceUnavailableOnPersonalCalls;
    }

    /**
     * 
     */
    public function getForceUnavailableOnPersonalCalls()
    {
        return (!$this->forceUnavailableOnPersonalCalls) ?: $this->forceUnavailableOnPersonalCalls;
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
    public function setMakeOutgoingCallsAsCallCenter($makeOutgoingCallsAsCallCenter = null)
    {
        $this->makeOutgoingCallsAsCallCenter = (boolean) $makeOutgoingCallsAsCallCenter;
    }

    /**
     * 
     */
    public function getMakeOutgoingCallsAsCallCenter()
    {
        return (!$this->makeOutgoingCallsAsCallCenter) ?: $this->makeOutgoingCallsAsCallCenter;
    }

    /**
     * Uniquely identifies a Call Center DNIS.
     */
    public function setOutgoingCallDNIS(DNISKey $outgoingCallDNIS = null)
    {
        $this->outgoingCallDNIS =  $outgoingCallDNIS;
    }

    /**
     * Uniquely identifies a Call Center DNIS.
     */
    public function getOutgoingCallDNIS()
    {
        return (!$this->outgoingCallDNIS) ?: $this->outgoingCallDNIS->getValue();
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
