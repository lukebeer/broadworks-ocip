<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterUniformCallDistributionPolicyScope;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsSamplingPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEmergencyCallCLIDPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallHandlingSamplingPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallHandlingMinimumSamplingSize;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallCenterGetRequest17.
 */
class SystemCallCenterGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemCallCenterGetResponse17';
    protected $defaultFromAddress;
    protected $statisticsSamplingPeriodMinutes;
    protected $defaultEnableGuardTimer;
    protected $defaultGuardTimerSeconds;
    protected $forceAgentUnavailableOnDNDActivation;
    protected $forceAgentUnavailableOnPersonalCalls;
    protected $forceAgentUnavailableOnBouncedCallLimit;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable;
    protected $defaultPlayRingWhenOfferCall;
    protected $uniformCallDistributionPolicyScope;
    protected $callHandlingSamplingPeriodMinutes;
    protected $callHandlingMinimumSamplingSize;
    protected $playToneToAgentForEmergencyCall;
    protected $emergencyCallCLIDPrefix;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterGetResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
        $this->defaultFromAddress->setName('defaultFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $defaultFromAddress
     */
    public function getDefaultFromAddress()
    {
        return ($this->defaultFromAddress) ? $this->defaultFromAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes = null)
    {
        $this->statisticsSamplingPeriodMinutes = ($statisticsSamplingPeriodMinutes InstanceOf CallCenterStatisticsSamplingPeriodMinutes)
             ? $statisticsSamplingPeriodMinutes
             : new CallCenterStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes);
        $this->statisticsSamplingPeriodMinutes->setName('statisticsSamplingPeriodMinutes');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsSamplingPeriodMinutes $statisticsSamplingPeriodMinutes
     */
    public function getStatisticsSamplingPeriodMinutes()
    {
        return ($this->statisticsSamplingPeriodMinutes) ? $this->statisticsSamplingPeriodMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultEnableGuardTimer($defaultEnableGuardTimer = null)
    {
        $this->defaultEnableGuardTimer = new PrimitiveType($defaultEnableGuardTimer);
        $this->defaultEnableGuardTimer->setName('defaultEnableGuardTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $defaultEnableGuardTimer
     */
    public function getDefaultEnableGuardTimer()
    {
        return ($this->defaultEnableGuardTimer) ? $this->defaultEnableGuardTimer->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultGuardTimerSeconds($defaultGuardTimerSeconds = null)
    {
        $this->defaultGuardTimerSeconds = ($defaultGuardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $defaultGuardTimerSeconds
             : new CallCenterGuardTimerSeconds($defaultGuardTimerSeconds);
        $this->defaultGuardTimerSeconds->setName('defaultGuardTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterGuardTimerSeconds $defaultGuardTimerSeconds
     */
    public function getDefaultGuardTimerSeconds()
    {
        return ($this->defaultGuardTimerSeconds) ? $this->defaultGuardTimerSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation = null)
    {
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
        return ($this->forceAgentUnavailableOnDNDActivation) ? $this->forceAgentUnavailableOnDNDActivation->getValue() : null;
    }

    /**
     * 
     */
    public function setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls = null)
    {
        $this->forceAgentUnavailableOnPersonalCalls = new PrimitiveType($forceAgentUnavailableOnPersonalCalls);
        $this->forceAgentUnavailableOnPersonalCalls->setName('forceAgentUnavailableOnPersonalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $forceAgentUnavailableOnPersonalCalls
     */
    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return ($this->forceAgentUnavailableOnPersonalCalls) ? $this->forceAgentUnavailableOnPersonalCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit = null)
    {
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
        return ($this->forceAgentUnavailableOnBouncedCallLimit) ? $this->forceAgentUnavailableOnBouncedCallLimit->getValue() : null;
    }

    /**
     * 
     */
    public function setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable = null)
    {
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
        return ($this->numberConsecutiveBouncedCallsToForceAgentUnavailable) ? $this->numberConsecutiveBouncedCallsToForceAgentUnavailable->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultPlayRingWhenOfferCall($defaultPlayRingWhenOfferCall = null)
    {
        $this->defaultPlayRingWhenOfferCall = new PrimitiveType($defaultPlayRingWhenOfferCall);
        $this->defaultPlayRingWhenOfferCall->setName('defaultPlayRingWhenOfferCall');
        return $this;
    }

    /**
     * 
     * @return boolean $defaultPlayRingWhenOfferCall
     */
    public function getDefaultPlayRingWhenOfferCall()
    {
        return ($this->defaultPlayRingWhenOfferCall) ? $this->defaultPlayRingWhenOfferCall->getValue() : null;
    }

    /**
     * 
     */
    public function setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope = null)
    {
        $this->uniformCallDistributionPolicyScope = ($uniformCallDistributionPolicyScope InstanceOf CallCenterUniformCallDistributionPolicyScope)
             ? $uniformCallDistributionPolicyScope
             : new CallCenterUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
        $this->uniformCallDistributionPolicyScope->setName('uniformCallDistributionPolicyScope');
        return $this;
    }

    /**
     * 
     * @return CallCenterUniformCallDistributionPolicyScope $uniformCallDistributionPolicyScope
     */
    public function getUniformCallDistributionPolicyScope()
    {
        return ($this->uniformCallDistributionPolicyScope) ? $this->uniformCallDistributionPolicyScope->getValue() : null;
    }

    /**
     * 
     */
    public function setCallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes = null)
    {
        $this->callHandlingSamplingPeriodMinutes = ($callHandlingSamplingPeriodMinutes InstanceOf CallHandlingSamplingPeriodMinutes)
             ? $callHandlingSamplingPeriodMinutes
             : new CallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes);
        $this->callHandlingSamplingPeriodMinutes->setName('callHandlingSamplingPeriodMinutes');
        return $this;
    }

    /**
     * 
     * @return CallHandlingSamplingPeriodMinutes $callHandlingSamplingPeriodMinutes
     */
    public function getCallHandlingSamplingPeriodMinutes()
    {
        return ($this->callHandlingSamplingPeriodMinutes) ? $this->callHandlingSamplingPeriodMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setCallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize = null)
    {
        $this->callHandlingMinimumSamplingSize = ($callHandlingMinimumSamplingSize InstanceOf CallHandlingMinimumSamplingSize)
             ? $callHandlingMinimumSamplingSize
             : new CallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize);
        $this->callHandlingMinimumSamplingSize->setName('callHandlingMinimumSamplingSize');
        return $this;
    }

    /**
     * 
     * @return CallHandlingMinimumSamplingSize $callHandlingMinimumSamplingSize
     */
    public function getCallHandlingMinimumSamplingSize()
    {
        return ($this->callHandlingMinimumSamplingSize) ? $this->callHandlingMinimumSamplingSize->getValue() : null;
    }

    /**
     * 
     */
    public function setPlayToneToAgentForEmergencyCall($playToneToAgentForEmergencyCall = null)
    {
        $this->playToneToAgentForEmergencyCall = new PrimitiveType($playToneToAgentForEmergencyCall);
        $this->playToneToAgentForEmergencyCall->setName('playToneToAgentForEmergencyCall');
        return $this;
    }

    /**
     * 
     * @return boolean $playToneToAgentForEmergencyCall
     */
    public function getPlayToneToAgentForEmergencyCall()
    {
        return ($this->playToneToAgentForEmergencyCall) ? $this->playToneToAgentForEmergencyCall->getValue() : null;
    }

    /**
     * 
     */
    public function setEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix = null)
    {
        $this->emergencyCallCLIDPrefix = ($emergencyCallCLIDPrefix InstanceOf CallCenterEmergencyCallCLIDPrefix)
             ? $emergencyCallCLIDPrefix
             : new CallCenterEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix);
        $this->emergencyCallCLIDPrefix->setName('emergencyCallCLIDPrefix');
        return $this;
    }

    /**
     * 
     * @return CallCenterEmergencyCallCLIDPrefix $emergencyCallCLIDPrefix
     */
    public function getEmergencyCallCLIDPrefix()
    {
        return ($this->emergencyCallCLIDPrefix) ? $this->emergencyCallCLIDPrefix->getValue() : null;
    }
}
