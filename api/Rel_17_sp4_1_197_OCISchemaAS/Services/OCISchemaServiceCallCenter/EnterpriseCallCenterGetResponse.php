<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to EnterpriseCallCenterGetRequest.
 */
class EnterpriseCallCenterGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                                                 = __CLASS__;
    protected $useSystemDefaultGuardTimer                           = null;
    protected $enableGuardTimer                                     = null;
    protected $guardTimerSeconds                                    = null;
    protected $useSystemDefaultUnavailableSettings                  = null;
    protected $forceAgentUnavailableOnDNDActivation                 = null;
    protected $forceAgentUnavailableOnPersonalCalls                 = null;
    protected $forceAgentUnavailableOnBouncedCallLimit              = null;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable = null;


    /**
     * 
     */
    public function setUseSystemDefaultGuardTimer($useSystemDefaultGuardTimer = null)
    {
        $this->useSystemDefaultGuardTimer = (boolean) $useSystemDefaultGuardTimer;
    }

    /**
     * 
     */
    public function getUseSystemDefaultGuardTimer()
    {
        return (!$this->useSystemDefaultGuardTimer) ?: $this->useSystemDefaultGuardTimer->getValue();
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
    public function setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls = null)
    {
        $this->forceAgentUnavailableOnPersonalCalls = (boolean) $forceAgentUnavailableOnPersonalCalls;
    }

    /**
     * 
     */
    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return (!$this->forceAgentUnavailableOnPersonalCalls) ?: $this->forceAgentUnavailableOnPersonalCalls->getValue();
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
}
