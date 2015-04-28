<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\AgentACDState;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to the UserCallCenterGetRequest17.
 *         Contains the user's call center settings.
 *         Indicates whether the agent is current available (logged in) to each call center in the list.
 *         Contains a table with column headings: "Service User Id", "Phone Number", "Extension", "Available", "Logoff Allowed", "Type", and "Priority".
 */
class UserCallCenterGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallCenterGetResponse17';
    protected $agentACDState;
    protected $agentUnavailableCode;
    protected $useDefaultGuardTimer;
    protected $enableGuardTimer;
    protected $guardTimerSeconds;
    protected $useSystemDefaultUnavailableSettings;
    protected $forceAgentUnavailableOnDNDActivation;
    protected $forceUnavailableOnPersonalCalls;
    protected $forceAgentUnavailableOnBouncedCallLimit;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable;
    protected $makeOutgoingCallsAsCallCenter;
    protected $outgoingCallDNIS;
    protected $callCenterTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\UserCallCenterGetResponse17 $response
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
        $this->agentACDState = ($agentACDState InstanceOf AgentACDState)
             ? $agentACDState
             : new AgentACDState($agentACDState);
        $this->agentACDState->setElementName('agentACDState');
        return $this;
    }

    /**
     * 
     * @return AgentACDState $agentACDState
     */
    public function getAgentACDState()
    {
        return ($this->agentACDState)
            ? $this->agentACDState->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAgentUnavailableCode($agentUnavailableCode = null)
    {
        $this->agentUnavailableCode = ($agentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $agentUnavailableCode
             : new CallCenterAgentUnavailableCode($agentUnavailableCode);
        $this->agentUnavailableCode->setElementName('agentUnavailableCode');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode $agentUnavailableCode
     */
    public function getAgentUnavailableCode()
    {
        return ($this->agentUnavailableCode)
            ? $this->agentUnavailableCode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseDefaultGuardTimer($useDefaultGuardTimer = null)
    {
        $this->useDefaultGuardTimer = new PrimitiveType($useDefaultGuardTimer);
        $this->useDefaultGuardTimer->setElementName('useDefaultGuardTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $useDefaultGuardTimer
     */
    public function getUseDefaultGuardTimer()
    {
        return ($this->useDefaultGuardTimer)
            ? $this->useDefaultGuardTimer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableGuardTimer($enableGuardTimer = null)
    {
        $this->enableGuardTimer = new PrimitiveType($enableGuardTimer);
        $this->enableGuardTimer->setElementName('enableGuardTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $enableGuardTimer
     */
    public function getEnableGuardTimer()
    {
        return ($this->enableGuardTimer)
            ? $this->enableGuardTimer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGuardTimerSeconds($guardTimerSeconds = null)
    {
        $this->guardTimerSeconds = ($guardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $guardTimerSeconds
             : new CallCenterGuardTimerSeconds($guardTimerSeconds);
        $this->guardTimerSeconds->setElementName('guardTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterGuardTimerSeconds $guardTimerSeconds
     */
    public function getGuardTimerSeconds()
    {
        return ($this->guardTimerSeconds)
            ? $this->guardTimerSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings = null)
    {
        $this->useSystemDefaultUnavailableSettings = new PrimitiveType($useSystemDefaultUnavailableSettings);
        $this->useSystemDefaultUnavailableSettings->setElementName('useSystemDefaultUnavailableSettings');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemDefaultUnavailableSettings
     */
    public function getUseSystemDefaultUnavailableSettings()
    {
        return ($this->useSystemDefaultUnavailableSettings)
            ? $this->useSystemDefaultUnavailableSettings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation = null)
    {
        $this->forceAgentUnavailableOnDNDActivation = new PrimitiveType($forceAgentUnavailableOnDNDActivation);
        $this->forceAgentUnavailableOnDNDActivation->setElementName('forceAgentUnavailableOnDNDActivation');
        return $this;
    }

    /**
     * 
     * @return boolean $forceAgentUnavailableOnDNDActivation
     */
    public function getForceAgentUnavailableOnDNDActivation()
    {
        return ($this->forceAgentUnavailableOnDNDActivation)
            ? $this->forceAgentUnavailableOnDNDActivation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForceUnavailableOnPersonalCalls($forceUnavailableOnPersonalCalls = null)
    {
        $this->forceUnavailableOnPersonalCalls = new PrimitiveType($forceUnavailableOnPersonalCalls);
        $this->forceUnavailableOnPersonalCalls->setElementName('forceUnavailableOnPersonalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $forceUnavailableOnPersonalCalls
     */
    public function getForceUnavailableOnPersonalCalls()
    {
        return ($this->forceUnavailableOnPersonalCalls)
            ? $this->forceUnavailableOnPersonalCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit = null)
    {
        $this->forceAgentUnavailableOnBouncedCallLimit = new PrimitiveType($forceAgentUnavailableOnBouncedCallLimit);
        $this->forceAgentUnavailableOnBouncedCallLimit->setElementName('forceAgentUnavailableOnBouncedCallLimit');
        return $this;
    }

    /**
     * 
     * @return boolean $forceAgentUnavailableOnBouncedCallLimit
     */
    public function getForceAgentUnavailableOnBouncedCallLimit()
    {
        return ($this->forceAgentUnavailableOnBouncedCallLimit)
            ? $this->forceAgentUnavailableOnBouncedCallLimit->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable = null)
    {
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = ($numberConsecutiveBouncedCallsToForceAgentUnavailable InstanceOf CallCenterConsecutiveBouncedCallsToForceAgentUnavailable)
             ? $numberConsecutiveBouncedCallsToForceAgentUnavailable
             : new CallCenterConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable);
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable->setElementName('numberConsecutiveBouncedCallsToForceAgentUnavailable');
        return $this;
    }

    /**
     * 
     * @return CallCenterConsecutiveBouncedCallsToForceAgentUnavailable $numberConsecutiveBouncedCallsToForceAgentUnavailable
     */
    public function getNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        return ($this->numberConsecutiveBouncedCallsToForceAgentUnavailable)
            ? $this->numberConsecutiveBouncedCallsToForceAgentUnavailable->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMakeOutgoingCallsAsCallCenter($makeOutgoingCallsAsCallCenter = null)
    {
        $this->makeOutgoingCallsAsCallCenter = new PrimitiveType($makeOutgoingCallsAsCallCenter);
        $this->makeOutgoingCallsAsCallCenter->setElementName('makeOutgoingCallsAsCallCenter');
        return $this;
    }

    /**
     * 
     * @return boolean $makeOutgoingCallsAsCallCenter
     */
    public function getMakeOutgoingCallsAsCallCenter()
    {
        return ($this->makeOutgoingCallsAsCallCenter)
            ? $this->makeOutgoingCallsAsCallCenter->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOutgoingCallDNIS(DNISKey $outgoingCallDNIS = null)
    {
        $this->outgoingCallDNIS = ($outgoingCallDNIS InstanceOf DNISKey)
             ? $outgoingCallDNIS
             : new DNISKey($outgoingCallDNIS);
        $this->outgoingCallDNIS->setElementName('outgoingCallDNIS');
        return $this;
    }

    /**
     * 
     * @return DNISKey $outgoingCallDNIS
     */
    public function getOutgoingCallDNIS()
    {
        return $this->outgoingCallDNIS;
    }

    /**
     * 
     */
    public function setCallCenterTable(TableType $callCenterTable = null)
    {
        $this->callCenterTable = $callCenterTable;
        $this->callCenterTable->setElementName('callCenterTable');
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
