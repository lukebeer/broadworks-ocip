<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterConsecutiveBouncedCallsToForceAgentUnavailable;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterGuardTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the group level data associated with Call Center and
 *         the active status of Call Center instances.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'GroupCallCenterModifyRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $useSystemDefaultGuardTimer;
    protected $enableGuardTimer;
    protected $guardTimerSeconds;
    protected $useSystemDefaultUnavailableSettings;
    protected $forceAgentUnavailableOnDNDActivation;
    protected $forceAgentUnavailableOnPersonalCalls;
    protected $forceAgentUnavailableOnBouncedCallLimit;
    protected $numberConsecutiveBouncedCallsToForceAgentUnavailable;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId) ? $this->groupId->getValue() : null;
    }

    /**
     * 
     */
    public function setUseSystemDefaultGuardTimer($useSystemDefaultGuardTimer = null)
    {
        $this->useSystemDefaultGuardTimer = new PrimitiveType($useSystemDefaultGuardTimer);
        $this->useSystemDefaultGuardTimer->setName('useSystemDefaultGuardTimer');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemDefaultGuardTimer
     */
    public function getUseSystemDefaultGuardTimer()
    {
        return ($this->useSystemDefaultGuardTimer) ? $this->useSystemDefaultGuardTimer->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableGuardTimer($enableGuardTimer = null)
    {
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
        return ($this->enableGuardTimer) ? $this->enableGuardTimer->getValue() : null;
    }

    /**
     * 
     */
    public function setGuardTimerSeconds($guardTimerSeconds = null)
    {
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
        return ($this->guardTimerSeconds) ? $this->guardTimerSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setUseSystemDefaultUnavailableSettings($useSystemDefaultUnavailableSettings = null)
    {
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
        return ($this->useSystemDefaultUnavailableSettings) ? $this->useSystemDefaultUnavailableSettings->getValue() : null;
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
}
