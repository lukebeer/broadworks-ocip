<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AgentACDState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentAvailability;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the agents call center settings and the availability for an agent in one or more Call Centers.
 *         Contains a list specifying the desired availability status of one or more call centers.
 *         A default unavailable code will be used if the parameter agentUnavailableCode is not active, included or is invalid.
 *         Changing the agentACDState from unavailable to any other state will automatically clear the unavailable code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $agentACDState=null,
             $agentUnavailableCode=null,
             $useDefaultGuardTimer=null,
             $enableGuardTimer=null,
             $guardTimerSeconds=null,
             $useSystemDefaultUnavailableSettings=null,
             $forceAgentUnavailableOnDNDActivation=null,
             $forceUnavailableOnPersonalCalls=null,
             $forceAgentUnavailableOnBouncedCallLimit=null,
             $numberConsecutiveBouncedCallsToForceAgentUnavailable=null,
             $makeOutgoingCallsAsCallCenter=null,
             DNISKey $outgoingCallDNIS=null,
             $callCenterAvailability=null
    ) {
        $this->userId                                               = new UserId($userId);
        $this->agentACDState                                        = $agentACDState;
        $this->agentUnavailableCode                                 = new CallCenterAgentUnavailableCode($agentUnavailableCode);
        $this->useDefaultGuardTimer                                 = $useDefaultGuardTimer;
        $this->enableGuardTimer                                     = $enableGuardTimer;
        $this->guardTimerSeconds                                    = $guardTimerSeconds;
        $this->useSystemDefaultUnavailableSettings                  = $useSystemDefaultUnavailableSettings;
        $this->forceAgentUnavailableOnDNDActivation                 = $forceAgentUnavailableOnDNDActivation;
        $this->forceUnavailableOnPersonalCalls                      = $forceUnavailableOnPersonalCalls;
        $this->forceAgentUnavailableOnBouncedCallLimit              = $forceAgentUnavailableOnBouncedCallLimit;
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = $numberConsecutiveBouncedCallsToForceAgentUnavailable;
        $this->makeOutgoingCallsAsCallCenter                        = $makeOutgoingCallsAsCallCenter;
        $this->outgoingCallDNIS                                     = $outgoingCallDNIS;
        $this->callCenterAvailability                               = $callCenterAvailability;
        $this->args                                                 = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setAgentACDState($agentACDState)
    {
        $agentACDState and $this->agentACDState = new AgentACDState($agentACDState);
    }

    public function getAgentACDState()
    {
        return (!$this->agentACDState) ?: $this->agentACDState->value();
    }

    public function setAgentUnavailableCode($agentUnavailableCode)
    {
        $agentUnavailableCode and $this->agentUnavailableCode = new CallCenterAgentUnavailableCode($agentUnavailableCode);
    }

    public function getAgentUnavailableCode()
    {
        return (!$this->agentUnavailableCode) ?: $this->agentUnavailableCode->value();
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

    public function setMakeOutgoingCallsAsCallCenter($makeOutgoingCallsAsCallCenter)
    {
        $makeOutgoingCallsAsCallCenter and $this->makeOutgoingCallsAsCallCenter = new xs:boolean($makeOutgoingCallsAsCallCenter);
    }

    public function getMakeOutgoingCallsAsCallCenter()
    {
        return (!$this->makeOutgoingCallsAsCallCenter) ?: $this->makeOutgoingCallsAsCallCenter->value();
    }

    public function setOutgoingCallDNIS($outgoingCallDNIS)
    {
        $outgoingCallDNIS and $this->outgoingCallDNIS = new DNISKey($outgoingCallDNIS);
    }

    public function getOutgoingCallDNIS()
    {
        return (!$this->outgoingCallDNIS) ?: $this->outgoingCallDNIS->value();
    }

    public function setCallCenterAvailability($callCenterAvailability)
    {
        $callCenterAvailability and $this->callCenterAvailability = new CallCenterAgentAvailability($callCenterAvailability);
    }

    public function getCallCenterAvailability()
    {
        return (!$this->callCenterAvailability) ?: $this->callCenterAvailability->value();
    }
}
