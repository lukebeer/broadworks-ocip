<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterStatisticsSamplingPeriodMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemCallCenterGetResponse16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemCallCenterGetRequest16.
 */
class SystemCallCenterGetResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                                                 = __CLASS__;
    protected $defaultFromAddress                                   = null;
    protected $statisticsSamplingPeriodMinutes                      = null;
    protected $defaultEnableGuardTimer                              = null;
    protected $defaultGuardTimerSeconds                             = null;
    protected $forceAgentUnavailableOnDNDActivation                 = null;
    protected $forceAgentUnavailableOnPersonalCalls                 = null;
    protected $forceAgentUnavailableOnBouncedCallLimit              = null;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;

    /**
     * @return SystemCallCenterGetResponse16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Email Address
     */
    public function setDefaultFromAddress($defaultFromAddress = null)
    {
        $this->defaultFromAddress = ($defaultFromAddress InstanceOf EmailAddress)
             ? $defaultFromAddress
             : new EmailAddress($defaultFromAddress);
    }

    /**
     * Email Address
     */
    public function getDefaultFromAddress()
    {
        return (!$this->defaultFromAddress) ?: $this->defaultFromAddress->getValue();
    }

    /**
     * Call Center statistics sampling period.
     */
    public function setStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes = null)
    {
        $this->statisticsSamplingPeriodMinutes = ($statisticsSamplingPeriodMinutes InstanceOf CallCenterStatisticsSamplingPeriodMinutes)
             ? $statisticsSamplingPeriodMinutes
             : new CallCenterStatisticsSamplingPeriodMinutes($statisticsSamplingPeriodMinutes);
    }

    /**
     * Call Center statistics sampling period.
     */
    public function getStatisticsSamplingPeriodMinutes()
    {
        return (!$this->statisticsSamplingPeriodMinutes) ?: $this->statisticsSamplingPeriodMinutes->getValue();
    }

    /**
     * 
     */
    public function setDefaultEnableGuardTimer($defaultEnableGuardTimer = null)
    {
        $this->defaultEnableGuardTimer = (boolean) $defaultEnableGuardTimer;
    }

    /**
     * 
     */
    public function getDefaultEnableGuardTimer()
    {
        return (!$this->defaultEnableGuardTimer) ?: $this->defaultEnableGuardTimer;
    }

    /**
     * The timer determines how long the system will wait before routing a call to a free agent.
     */
    public function setDefaultGuardTimerSeconds($defaultGuardTimerSeconds = null)
    {
        $this->defaultGuardTimerSeconds = ($defaultGuardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $defaultGuardTimerSeconds
             : new CallCenterGuardTimerSeconds($defaultGuardTimerSeconds);
    }

    /**
     * The timer determines how long the system will wait before routing a call to a free agent.
     */
    public function getDefaultGuardTimerSeconds()
    {
        return (!$this->defaultGuardTimerSeconds) ?: $this->defaultGuardTimerSeconds->getValue();
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
    public function setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls = null)
    {
        $this->forceAgentUnavailableOnPersonalCalls = (boolean) $forceAgentUnavailableOnPersonalCalls;
    }

    /**
     * 
     */
    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return (!$this->forceAgentUnavailableOnPersonalCalls) ?: $this->forceAgentUnavailableOnPersonalCalls;
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
}
