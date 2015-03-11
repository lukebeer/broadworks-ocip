<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterAgentAvailability;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAgentUnavailableCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\AgentACDState;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modifies the agents call center settings and the availability for an agent in one or more Call Centers.
 *         Contains a list specifying the desired availability status of one or more call centers.
 *         A default unavailable code will be used if the parameter agentUnavailableCode is not active, included or is invalid.
 *         Changing the agentACDState from unavailable to any other state will automatically clear the unavailable code.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserCallCenterModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                                 = 'UserCallCenterModifyRequest';
    protected $userId                                               = null;
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
    protected $callCenterAvailability                               = null;

    public function __construct(
         $userId,
         $agentACDState = null,
         $agentUnavailableCode = null,
         $useDefaultGuardTimer = null,
         $enableGuardTimer = null,
         $guardTimerSeconds = null,
         $useSystemDefaultUnavailableSettings = null,
         $forceAgentUnavailableOnDNDActivation = null,
         $forceUnavailableOnPersonalCalls = null,
         $forceAgentUnavailableOnBouncedCallLimit = null,
         $numberConsecutiveBouncedCallsToForceAgentUnavailable = null,
         $makeOutgoingCallsAsCallCenter = null,
         DNISKey $outgoingCallDNIS = null,
         CallCenterAgentAvailability $callCenterAvailability = null
    ) {
        $this->setUserId($userId);
        $this->setAgentACDState($agentACDState);
        $this->setAgentUnavailableCode($agentUnavailableCode);
        $this->setUseDefaultGuardTimer($useDefaultGuardTimer);
        $this->setEnableGuardTimer($enableGuardTimer);
        $this->setGuardTimerSeconds($guardTimerSeconds);
        $this->setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings);
        $this->setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation);
        $this->setForceUnavailableOnPersonalCalls($forceUnavailableOnPersonalCalls);
        $this->setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit);
        $this->setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable);
        $this->setMakeOutgoingCallsAsCallCenter($makeOutgoingCallsAsCallCenter);
        $this->setOutgoingCallDNIS($outgoingCallDNIS);
        $this->setCallCenterAvailability($callCenterAvailability);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
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
     * @return AgentACDState
     */
    public function getAgentACDState()
    {
        return $this->agentACDState->getValue();
    }

    /**
     * 
     */
    public function setAgentUnavailableCode($agentUnavailableCode = null)
    {
        if (!$agentUnavailableCode) return $this;
        $this->agentUnavailableCode = ($agentUnavailableCode InstanceOf CallCenterAgentUnavailableCode)
             ? $agentUnavailableCode
             : new CallCenterAgentUnavailableCode($agentUnavailableCode);
        $this->agentUnavailableCode->setName('agentUnavailableCode');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentUnavailableCode
     */
    public function getAgentUnavailableCode()
    {
        return $this->agentUnavailableCode->getValue();
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
     * @return xs:boolean
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
     * @return xs:boolean
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
     * @return CallCenterGuardTimerSeconds
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
     * @return xs:boolean
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
     * @return xs:boolean
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
     * @return xs:boolean
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
     * @return xs:boolean
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
     * @return CallCenterConsecutiveBouncedCallsToForceAgentUnavailable
     */
    public function getNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        return $this->numberConsecutiveBouncedCallsToForceAgentUnavailable->getValue();
    }

    /**
     * 
     */
    public function setMakeOutgoingCallsAsCallCenter($makeOutgoingCallsAsCallCenter = null)
    {
        if (!$makeOutgoingCallsAsCallCenter) return $this;
        $this->makeOutgoingCallsAsCallCenter = new PrimitiveType($makeOutgoingCallsAsCallCenter);
        $this->makeOutgoingCallsAsCallCenter->setName('makeOutgoingCallsAsCallCenter');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMakeOutgoingCallsAsCallCenter()
    {
        return $this->makeOutgoingCallsAsCallCenter->getValue();
    }

    /**
     * 
     */
    public function setOutgoingCallDNIS(DNISKey $outgoingCallDNIS = null)
    {
        if (!$outgoingCallDNIS) return $this;
        $this->outgoingCallDNIS = $outgoingCallDNIS;
        $this->outgoingCallDNIS->setName('outgoingCallDNIS');
        return $this;
    }

    /**
     * 
     * @return DNISKey
     */
    public function getOutgoingCallDNIS()
    {
        return $this->outgoingCallDNIS;
    }

    /**
     * 
     */
    public function setCallCenterAvailability(CallCenterAgentAvailability $callCenterAvailability = null)
    {
        if (!$callCenterAvailability) return $this;
        $this->callCenterAvailability = $callCenterAvailability;
        $this->callCenterAvailability->setName('callCenterAvailability');
        return $this;
    }

    /**
     * 
     * @return CallCenterAgentAvailability
     */
    public function getCallCenterAvailability()
    {
        return $this->callCenterAvailability;
    }
}
