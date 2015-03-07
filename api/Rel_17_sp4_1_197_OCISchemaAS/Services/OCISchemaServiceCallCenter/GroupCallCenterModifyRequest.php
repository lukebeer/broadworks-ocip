<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the group level data associated with Call Center and
 *         the active status of Call Center instances.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                                  = __CLASS__;
    protected $serviceProviderId                                     = null;
    protected $groupId                                               = null;
    protected $useSystemDefaultGuardTimer                            = null;
    protected $enableGuardTimer                                      = null;
    protected $guardTimerSeconds                                     = null;
    protected $useSystemDefaultUnavailableSettings                   = null;
    protected $forceAgentUnavailableOnDNDActivation                  = null;
    protected $forceAgentUnavailableOnPersonalCalls                  = null;
    protected $forceAgentUnavailableOnBouncedCallLimit               = null;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $useSystemDefaultGuardTimer = null,
         $enableGuardTimer = null,
         $guardTimerSeconds = null,
         $useSystemDefaultUnavailableSettings = null,
         $forceAgentUnavailableOnDNDActivation = null,
         $forceAgentUnavailableOnPersonalCalls = null,
         $forceAgentUnavailableOnBouncedCallLimit = null,
         $numberConsecutiveBouncedCallsToForceAgentUnavailable = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setUseSystemDefaultGuardTimer($useSystemDefaultGuardTimer);
        $this->setEnableGuardTimer($enableGuardTimer);
        $this->setGuardTimerSeconds($guardTimerSeconds);
        $this->setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings);
        $this->setForceAgentUnavailableOnDNDActivation($forceAgentUnavailableOnDNDActivation);
        $this->setForceAgentUnavailableOnPersonalCalls($forceAgentUnavailableOnPersonalCalls);
        $this->setForceAgentUnavailableOnBouncedCallLimit($forceAgentUnavailableOnBouncedCallLimit);
        $this->setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setUseSystemDefaultGuardTimer(xs:boolean $useSystemDefaultGuardTimer = null)
    {
    }

    public function getUseSystemDefaultGuardTimer()
    {
        return (!$this->useSystemDefaultGuardTimer) ?: $this->useSystemDefaultGuardTimer->value();
    }

    public function setEnableGuardTimer(xs:boolean $enableGuardTimer = null)
    {
    }

    public function getEnableGuardTimer()
    {
        return (!$this->enableGuardTimer) ?: $this->enableGuardTimer->value();
    }

    public function setGuardTimerSeconds($guardTimerSeconds = null)
    {
        $this->guardTimerSeconds = ($guardTimerSeconds InstanceOf CallCenterGuardTimerSeconds)
             ? $guardTimerSeconds
             : new CallCenterGuardTimerSeconds($guardTimerSeconds);
    }

    public function getGuardTimerSeconds()
    {
        return (!$this->guardTimerSeconds) ?: $this->guardTimerSeconds->value();
    }

    public function setUseSystemDefaultUnavailableSettings(xs:boolean $useSystemDefaultUnavailableSettings = null)
    {
    }

    public function getUseSystemDefaultUnavailableSettings()
    {
        return (!$this->useSystemDefaultUnavailableSettings) ?: $this->useSystemDefaultUnavailableSettings->value();
    }

    public function setForceAgentUnavailableOnDNDActivation(xs:boolean $forceAgentUnavailableOnDNDActivation = null)
    {
    }

    public function getForceAgentUnavailableOnDNDActivation()
    {
        return (!$this->forceAgentUnavailableOnDNDActivation) ?: $this->forceAgentUnavailableOnDNDActivation->value();
    }

    public function setForceAgentUnavailableOnPersonalCalls(xs:boolean $forceAgentUnavailableOnPersonalCalls = null)
    {
    }

    public function getForceAgentUnavailableOnPersonalCalls()
    {
        return (!$this->forceAgentUnavailableOnPersonalCalls) ?: $this->forceAgentUnavailableOnPersonalCalls->value();
    }

    public function setForceAgentUnavailableOnBouncedCallLimit(xs:boolean $forceAgentUnavailableOnBouncedCallLimit = null)
    {
    }

    public function getForceAgentUnavailableOnBouncedCallLimit()
    {
        return (!$this->forceAgentUnavailableOnBouncedCallLimit) ?: $this->forceAgentUnavailableOnBouncedCallLimit->value();
    }

    public function setNumberConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable = null)
    {
        $this->numberConsecutiveBouncedCallsToForceAgentUnavailable = ($numberConsecutiveBouncedCallsToForceAgentUnavailable InstanceOf CallCenterConsecutiveBouncedCallsToForceAgentUnavailable)
             ? $numberConsecutiveBouncedCallsToForceAgentUnavailable
             : new CallCenterConsecutiveBouncedCallsToForceAgentUnavailable($numberConsecutiveBouncedCallsToForceAgentUnavailable);
    }

    public function getNumberConsecutiveBouncedCallsToForceAgentUnavailable()
    {
        return (!$this->numberConsecutiveBouncedCallsToForceAgentUnavailable) ?: $this->numberConsecutiveBouncedCallsToForceAgentUnavailable->value();
    }
}
