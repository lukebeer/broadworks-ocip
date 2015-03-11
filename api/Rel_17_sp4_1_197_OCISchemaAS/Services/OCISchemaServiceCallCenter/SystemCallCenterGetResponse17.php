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
    public    $name                                                 = 'SystemCallCenterGetResponse17';
    protected $defaultFromAddress                                   = null;
    protected $statisticsSamplingPeriodMinutes                      = null;
    protected $defaultEnableGuardTimer                              = null;
    protected $defaultGuardTimerSeconds                             = null;
    protected $forceAgentUnavailableOnDNDActivation                 = null;
    protected $forceAgentUnavailableOnPersonalCalls                 = null;
    protected $forceAgentUnavailableOnBouncedCallLimit              = null;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;
    protected $defaultPlayRingWhenOfferCall                         = null;
    protected $uniformCallDistributionPolicyScope                   = null;
    protected $callHandlingSamplingPeriodMinutes                    = null;
    protected $callHandlingMinimumSamplingSize                      = null;
    protected $playToneToAgentForEmergencyCall                      = null;
    protected $emergencyCallCLIDPrefix                              = null;

    /**
     * @return SystemCallCenterGetResponse17
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
        if (!$defaultFromAddress) return $this;
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
        $this->defaultFromAddress->setName('defaultFromAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress
     */
    public function getDefaultFromAddress()
    {
        return $this->defaultFromAddress->getValue();
    }

    /**
     * 
     */
    public function setStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes = null)
    {
        if (!$statisticsSamplingPeriodMinutes) return $this;
        $this->statisticsSamplingPeriodMinutes = ($statisticsSamplingPeriodMinutes InstanceOf CallCenterStatisticsSamplingPeriodMinutes)
             ? $statisticsSamplingPeriodMinutes
             : new CallCenterStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes);
        $this->statisticsSamplingPeriodMinutes->setName('statisticsSamplingPeriodMinutes');
        return $this;
    }

    /**
     * 
     * @return CallCenterStatisticsSamplingPeriodMinutes
     */
    public function getStatisticsSamplingPeriodMinutes()
    {
        return $this->statisticsSamplingPeriodMinutes->getValue();
    }

    /**
     * 
     */
    public function setDefaultEnableGuardTimer($defaultEnableGuardTimer = null)
    {
        if (!$defaultEnableGuardTimer) return $this;
        $this->defaultEnableGuardTimer = new PrimitiveType($defaultEnableGuardTimer);
        $this->defaultEnableGuardTimer->setName('defaultEnableGuardTimer');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDefaultEnableGuardTimer()
    {
        return $this->defaultEnableGuardTimer->getValue();
    }

    /**
     * 
     */
    public function setDefaultGuardTimerSeconds($defaultGuardTimerSeconds = null)
    {
        if (!$defaultGuardTimerSeconds) return $this;
        $this->defaultGuardTimerSeconds = ($defaultGuardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $defaultGuardTimerSeconds
             : new CallCenterGuardTimerSeconds($defaultGuardTimerSeconds);
        $this->defaultGuardTimerSeconds->setName('defaultGuardTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterGuardTimerSeconds
     */
    public function getDefaultGuardTimerSeconds()
    {
        return $this->defaultGuardTimerSeconds->getValue();
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
    public function setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls = null)
    {
        if (!$forceAgentUnavailableOnPersonalCalls) return $this;
        $this->forceAgentUnavailableOnPersonalCalls = new PrimitiveType($forceAgentUnavailableOnPersonalCalls);
        $this->forceAgentUnavailableOnPersonalCalls->setName('forceAgentUnavailableOnPersonalCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return $this->forceAgentUnavailableOnPersonalCalls->getValue();
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
    public function setDefaultPlayRingWhenOfferCall($defaultPlayRingWhenOfferCall = null)
    {
        if (!$defaultPlayRingWhenOfferCall) return $this;
        $this->defaultPlayRingWhenOfferCall = new PrimitiveType($defaultPlayRingWhenOfferCall);
        $this->defaultPlayRingWhenOfferCall->setName('defaultPlayRingWhenOfferCall');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getDefaultPlayRingWhenOfferCall()
    {
        return $this->defaultPlayRingWhenOfferCall->getValue();
    }

    /**
     * 
     */
    public function setUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope = null)
    {
        if (!$uniformCallDistributionPolicyScope) return $this;
        $this->uniformCallDistributionPolicyScope = ($uniformCallDistributionPolicyScope InstanceOf CallCenterUniformCallDistributionPolicyScope)
             ? $uniformCallDistributionPolicyScope
             : new CallCenterUniformCallDistributionPolicyScope($uniformCallDistributionPolicyScope);
        $this->uniformCallDistributionPolicyScope->setName('uniformCallDistributionPolicyScope');
        return $this;
    }

    /**
     * 
     * @return CallCenterUniformCallDistributionPolicyScope
     */
    public function getUniformCallDistributionPolicyScope()
    {
        return $this->uniformCallDistributionPolicyScope->getValue();
    }

    /**
     * 
     */
    public function setCallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes = null)
    {
        if (!$callHandlingSamplingPeriodMinutes) return $this;
        $this->callHandlingSamplingPeriodMinutes = ($callHandlingSamplingPeriodMinutes InstanceOf CallHandlingSamplingPeriodMinutes)
             ? $callHandlingSamplingPeriodMinutes
             : new CallHandlingSamplingPeriodMinutes($callHandlingSamplingPeriodMinutes);
        $this->callHandlingSamplingPeriodMinutes->setName('callHandlingSamplingPeriodMinutes');
        return $this;
    }

    /**
     * 
     * @return CallHandlingSamplingPeriodMinutes
     */
    public function getCallHandlingSamplingPeriodMinutes()
    {
        return $this->callHandlingSamplingPeriodMinutes->getValue();
    }

    /**
     * 
     */
    public function setCallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize = null)
    {
        if (!$callHandlingMinimumSamplingSize) return $this;
        $this->callHandlingMinimumSamplingSize = ($callHandlingMinimumSamplingSize InstanceOf CallHandlingMinimumSamplingSize)
             ? $callHandlingMinimumSamplingSize
             : new CallHandlingMinimumSamplingSize($callHandlingMinimumSamplingSize);
        $this->callHandlingMinimumSamplingSize->setName('callHandlingMinimumSamplingSize');
        return $this;
    }

    /**
     * 
     * @return CallHandlingMinimumSamplingSize
     */
    public function getCallHandlingMinimumSamplingSize()
    {
        return $this->callHandlingMinimumSamplingSize->getValue();
    }

    /**
     * 
     */
    public function setPlayToneToAgentForEmergencyCall($playToneToAgentForEmergencyCall = null)
    {
        if (!$playToneToAgentForEmergencyCall) return $this;
        $this->playToneToAgentForEmergencyCall = new PrimitiveType($playToneToAgentForEmergencyCall);
        $this->playToneToAgentForEmergencyCall->setName('playToneToAgentForEmergencyCall');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayToneToAgentForEmergencyCall()
    {
        return $this->playToneToAgentForEmergencyCall->getValue();
    }

    /**
     * 
     */
    public function setEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix = null)
    {
        if (!$emergencyCallCLIDPrefix) return $this;
        $this->emergencyCallCLIDPrefix = ($emergencyCallCLIDPrefix InstanceOf CallCenterEmergencyCallCLIDPrefix)
             ? $emergencyCallCLIDPrefix
             : new CallCenterEmergencyCallCLIDPrefix($emergencyCallCLIDPrefix);
        $this->emergencyCallCLIDPrefix->setName('emergencyCallCLIDPrefix');
        return $this;
    }

    /**
     * 
     * @return CallCenterEmergencyCallCLIDPrefix
     */
    public function getEmergencyCallCLIDPrefix()
    {
        return $this->emergencyCallCLIDPrefix->getValue();
    }
}
