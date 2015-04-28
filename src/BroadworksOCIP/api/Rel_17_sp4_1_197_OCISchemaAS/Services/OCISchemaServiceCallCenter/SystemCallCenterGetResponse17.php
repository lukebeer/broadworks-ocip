<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterUniformCallDistributionPolicyScope;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsSamplingPeriodMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterEmergencyCallCLIDPrefix;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallHandlingSamplingPeriodMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallHandlingMinimumSamplingSize;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemCallCenterGetRequest17.
 */
class SystemCallCenterGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemCallCenterGetResponse17';
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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\SystemCallCenterGetResponse17 $response
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
        $this->defaultFromAddress->setElementName('defaultFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $defaultFromAddress
     */
    public function getDefaultFromAddress()
    {
        return ($this->defaultFromAddress)
            ? $this->defaultFromAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes = null)
    {
        $this->statisticsSamplingPeriodMinutes = ($statisticsSamplingPeriodMinutes InstanceOf CallCenterStatisticsSamplingPeriodMinutes)
             ? $statisticsSamplingPeriodMinutes
             : new CallCenterStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes);
        $this->statisticsSamplingPeriodMinutes->setElementName('statisticsSamplingPeriodMinutes');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsSamplingPeriodMinutes $statisticsSamplingPeriodMinutes
     */
    public function getStatisticsSamplingPeriodMinutes()
    {
        return ($this->statisticsSamplingPeriodMinutes)
            ? $this->statisticsSamplingPeriodMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultEnableGuardTimer($defaultEnableGuardTimer = null)
    {
        $this->defaultEnableGuardTimer = new PrimitiveType($defaultEnableGuardTimer);
        $this->defaultEnableGuardTimer->setElementName('defaultEnableGuardTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $defaultEnableGuardTimer
     */
    public function getDefaultEnableGuardTimer()
    {
        return ($this->defaultEnableGuardTimer)
            ? $this->defaultEnableGuardTimer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDefaultGuardTimerSeconds($defaultGuardTimerSeconds = null)
    {
        $this->defaultGuardTimerSeconds = ($defaultGuardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $defaultGuardTimerSeconds
             : new CallCenterGuardTimerSeconds($defaultGuardTimerSeconds);
        $this->defaultGuardTimerSeconds->setElementName('defaultGuardTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterGuardTimerSeconds $defaultGuardTimerSeconds
     */
    public function getDefaultGuardTimerSeconds()
    {
        return ($this->defaultGuardTimerSeconds)
            ? $this->defaultGuardTimerSeconds->getElementValue()
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
    public function setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls = null)
    {
        $this->forceAgentUnavailableOnPersonalCalls = new PrimitiveType($forceAgentUnavailableOnPersonalCalls);
        $this->forceAgentUnavailableOnPersonalCalls->setElementName('forceAgentUnavailableOnPersonalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $forceAgentUnavailableOnPersonalCalls
     */
    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return ($this->forceAgentUnavailableOnPersonalCalls)
            ? $this->forceAgentUnavailableOnPersonalCalls->getElementValue()
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
    public function setDefaultPlayRingWhenOfferCall($defaultPlayRingWhenOfferCall = null)
    {
        $this->defaultPlayRingWhenOfferCall = new PrimitiveType($defaultPlayRingWhenOfferCall);
        $this->defaultPlayRingWhenOfferCall->setElementName('defaultPlayRingWhenOfferCall');
        return $this;
    }

    /**
     * 
     * @return boolean $defaultPlayRingWhenOfferCall
     */
    public function getDefaultPlayRingWhenOfferCall()
    {
        return ($this->defaultPlayRingWhenOfferCall)
            ? $this->defaultPlayRingWhenOfferCall->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope = null)
    {
        $this->uniformCallDistributionPolicyScope = ($uniformCallDistributionPolicyScope InstanceOf CallCenterUniformCallDistributionPolicyScope)
             ? $uniformCallDistributionPolicyScope
             : new CallCenterUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
        $this->uniformCallDistributionPolicyScope->setElementName('uniformCallDistributionPolicyScope');
        return $this;
    }

    /**
     * 
     * @return CallCenterUniformCallDistributionPolicyScope $uniformCallDistributionPolicyScope
     */
    public function getUniformCallDistributionPolicyScope()
    {
        return ($this->uniformCallDistributionPolicyScope)
            ? $this->uniformCallDistributionPolicyScope->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes = null)
    {
        $this->callHandlingSamplingPeriodMinutes = ($callHandlingSamplingPeriodMinutes InstanceOf CallHandlingSamplingPeriodMinutes)
             ? $callHandlingSamplingPeriodMinutes
             : new CallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes);
        $this->callHandlingSamplingPeriodMinutes->setElementName('callHandlingSamplingPeriodMinutes');
        return $this;
    }

    /**
     * 
     * @return CallHandlingSamplingPeriodMinutes $callHandlingSamplingPeriodMinutes
     */
    public function getCallHandlingSamplingPeriodMinutes()
    {
        return ($this->callHandlingSamplingPeriodMinutes)
            ? $this->callHandlingSamplingPeriodMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize = null)
    {
        $this->callHandlingMinimumSamplingSize = ($callHandlingMinimumSamplingSize InstanceOf CallHandlingMinimumSamplingSize)
             ? $callHandlingMinimumSamplingSize
             : new CallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize);
        $this->callHandlingMinimumSamplingSize->setElementName('callHandlingMinimumSamplingSize');
        return $this;
    }

    /**
     * 
     * @return CallHandlingMinimumSamplingSize $callHandlingMinimumSamplingSize
     */
    public function getCallHandlingMinimumSamplingSize()
    {
        return ($this->callHandlingMinimumSamplingSize)
            ? $this->callHandlingMinimumSamplingSize->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayToneToAgentForEmergencyCall($playToneToAgentForEmergencyCall = null)
    {
        $this->playToneToAgentForEmergencyCall = new PrimitiveType($playToneToAgentForEmergencyCall);
        $this->playToneToAgentForEmergencyCall->setElementName('playToneToAgentForEmergencyCall');
        return $this;
    }

    /**
     * 
     * @return boolean $playToneToAgentForEmergencyCall
     */
    public function getPlayToneToAgentForEmergencyCall()
    {
        return ($this->playToneToAgentForEmergencyCall)
            ? $this->playToneToAgentForEmergencyCall->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix = null)
    {
        $this->emergencyCallCLIDPrefix = ($emergencyCallCLIDPrefix InstanceOf CallCenterEmergencyCallCLIDPrefix)
             ? $emergencyCallCLIDPrefix
             : new CallCenterEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix);
        $this->emergencyCallCLIDPrefix->setElementName('emergencyCallCLIDPrefix');
        return $this;
    }

    /**
     * 
     * @return CallCenterEmergencyCallCLIDPrefix $emergencyCallCLIDPrefix
     */
    public function getEmergencyCallCLIDPrefix()
    {
        return ($this->emergencyCallCLIDPrefix)
            ? $this->emergencyCallCLIDPrefix->getElementValue()
            : null;
    }
}
