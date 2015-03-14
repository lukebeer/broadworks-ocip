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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserCallCenterGetRequest16.
 *         Contains the user's call center settings.
 *         Indicates whether the agent is current available (logged in) to each call center in the list.
 *         Contains a table with column headings: "Service User Id", "Phone Number", "Extension", "Available", "Logoff Allowed", "Type", and "Priority".
 */
class UserCallCenterGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                                                 = 'UserCallCenterGetResponse16';
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
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserCallCenterGetResponse16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setAgentACDState($agentACDState = null)
    {
        if (!$agentACDState) return $this;
        $this->agentACDState = ($agentACDState InstanceOf AgentACDState)
             ? $agentACDState
             : new AgentACDState($agentACDState);
        $this->agentACDState->setName('agentACDState');
        return $this;
    }

    /**
     * 
     * @return AgentACDState $agentACDState
     */
    public function getAgentACDState()
    {
        return $this->agentACDState->getValue();
    }

    /**
     * 
     */
    public function setUseDefaultGuardTimer($useDefaultGuardTimer = null)
    {
        if (!$useDefaultGuardTimer) return $this;
        $this->useDefaultGuardTimer = new PrimitiveType($useDefaultGuardTimer);
        $this->useDefaultGuardTimer->setName('useDefaultGuardTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $useDefaultGuardTimer
     */
    public function getUseDefaultGuardTimer()
    {
        return $this->useDefaultGuardTimer->getValue();
    }

    /**
     * 
     */
    public function setEnableGuardTimer($enableGuardTimer = null)
    {
        if (!$enableGuardTimer) return $this;
        $this->enableGuardTimer = new PrimitiveType($enableGuardTimer);
        $this->enableGuardTimer->setName('enableGuardTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $enableGuardTimer
     */
    public function getEnableGuardTimer()
    {
        return $this->enableGuardTimer->getValue();
    }

    /**
     * 
     */
    public function setGuardTimerSeconds($guardTimerSeconds = null)
    {
        if (!$guardTimerSeconds) return $this;
        $this->guardTimerSeconds = ($guardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $guardTimerSeconds
             : new CallCenterGuardTimerSeconds($guardTimerSeconds);
        $this->guardTimerSeconds->setName('guardTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterGuardTimerSeconds $guardTimerSeconds
     */
    public function getGuardTimerSeconds()
    {
        return $this->guardTimerSeconds->getValue();
    }

    /**
     * 
     */
    public function setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings = null)
    {
        if (!$useSystemDefaultUnavailableSettings) return $this;
        $this->useSystemDefaultUnavailableSettings = new PrimitiveType($useSystemDefaultUnavailableSettings);
        $this->useSystemDefaultUnavailableSettings->setName('useSystemDefaultUnavailableSettings');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemDefaultUnavailableSettings
     */
    public function getUseSystemDefaultUnavailableSettings()
    {
        return $this->useSystemDefaultUnavailableSettings->getValue();
    }

    /**
     * 
     */
    public function setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation = null)
    {
        if (!$forceAgentUnavailableOnDNDActivation) return $this;
        $this->forceAgentUnavailableOnDNDActivation = new PrimitiveType($forceAgentUnavailableOnDNDActivation);
        $this->forceAgentUnavailableOnDNDActivation->setName('forceAgentUnavailableOnDNDActivation');
        return $this;
    }

    /**
     * 
     * @return boolean $forceAgentUnavailableOnDNDActivation
     */
    public function getForceAgentUnavailableOnDNDActivation()
    {
        return $this->forceAgentUnavailableOnDNDActivation->getValue();
    }

    /**
     * 
     */
    public function setForceUnavailableOnPersonalCalls($forceUnavailableOnPersonalCalls = null)
    {
        if (!$forceUnavailableOnPersonalCalls) return $this;
        $this->forceUnavailableOnPersonalCalls = new PrimitiveType($forceUnavailableOnPersonalCalls);
        $this->forceUnavailableOnPersonalCalls->setName('forceUnavailableOnPersonalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $forceUnavailableOnPersonalCalls
     */
    public function getForceUnavailableOnPersonalCalls()
    {
        return $this->forceUnavailableOnPersonalCalls->getValue();
    }

    /**
     * 
     */
    public function setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit = null)
    {
        if (!$forceAgentUnavailableOnBouncedCallLimit) return $this;
        $this->forceAgentUnavailableOnBouncedCallLimit = new PrimitiveType($forceAgentUnavailableOnBouncedCallLimit);
        $this->forceAgentUnavailableOnBouncedCallLimit->setName('forceAgentUnavailableOnBouncedCallLimit');
        return $this;
    }

    /**
     * 
     * @return boolean $forceAgentUnavailableOnBouncedCallLimit
     */
    public function getForceAgentUnavailableOnBouncedCallLimit()
    {
        return $this->forceAgentUnavailableOnBouncedCallLimit->getValue();
    }

    /**
     * 
     */
    public function setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable = null)
    {
        if (!$numberConsecutiveBouncedCallsToForceAgentUnavailable) return $this;
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = ($numberConsecutiveBouncedCallsToForceAgentUnavailable InstanceOf CallCenterConsecutiveBouncedCallsToForceAgentUnavailable)
             ? $numberConsecutiveBouncedCallsToForceAgentUnavailable
             : new CallCenterConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable);
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable->setName('numberConsecutiveBouncedCallsToForceAgentUnavailable');
        return $this;
    }

    /**
     * 
     * @return CallCenterConsecutiveBouncedCallsToForceAgentUnavailable $numberConsecutiveBouncedCallsToForceAgentUnavailable
     */
    public function getNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        return $this->numberConsecutiveBouncedCallsToForceAgentUnavailable->getValue();
    }

    /**
     * 
     */
    public function setCallCenterTable(TableType $callCenterTable = null)
    {
        if (!$callCenterTable) return $this;
        $this->callCenterTable = $callCenterTable;
        $this->callCenterTable->setName('callCenterTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getCallCenterTable()
    {
        return $this->callCenterTable;
    }
}
