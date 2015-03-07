<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemUserRingTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IncomingCallToUserAliasMode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxNoAnswerNumberOfRings;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemSubscriberGetCallProcessingParametersRequest17sp3.
 */
class SystemSubscriberGetCallProcessingParametersResponse17sp3 extends ComplexType implements ComplexInterface
{
    public    $name                                    = __CLASS__;
    protected $isExtendedCallingLineIdActive           = null;
    protected $isRingTimeOutActive                     = null;
    protected $ringTimeoutSeconds                      = null;
    protected $allowEmergencyRemoteOfficeOriginations  = null;
    protected $maxNoAnswerNumberOfRings                = null;
    protected $incomingCallToUserAliasMode             = null;
    protected $bypassTerminationLoopDetection          = null;


    public function setIsExtendedCallingLineIdActive(xs:boolean $isExtendedCallingLineIdActive = null)
    {
    }

    public function getIsExtendedCallingLineIdActive()
    {
        return (!$this->isExtendedCallingLineIdActive) ?: $this->isExtendedCallingLineIdActive->value();
    }

    public function setIsRingTimeOutActive(xs:boolean $isRingTimeOutActive = null)
    {
    }

    public function getIsRingTimeOutActive()
    {
        return (!$this->isRingTimeOutActive) ?: $this->isRingTimeOutActive->value();
    }

    public function setRingTimeoutSeconds($ringTimeoutSeconds = null)
    {
        $this->ringTimeoutSeconds = ($ringTimeoutSeconds InstanceOf SystemUserRingTimeoutSeconds)
             ? $ringTimeoutSeconds
             : new SystemUserRingTimeoutSeconds($ringTimeoutSeconds);
    }

    public function getRingTimeoutSeconds()
    {
        return (!$this->ringTimeoutSeconds) ?: $this->ringTimeoutSeconds->value();
    }

    public function setAllowEmergencyRemoteOfficeOriginations(xs:boolean $allowEmergencyRemoteOfficeOriginations = null)
    {
    }

    public function getAllowEmergencyRemoteOfficeOriginations()
    {
        return (!$this->allowEmergencyRemoteOfficeOriginations) ?: $this->allowEmergencyRemoteOfficeOriginations->value();
    }

    public function setMaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings = null)
    {
        $this->maxNoAnswerNumberOfRings = ($maxNoAnswerNumberOfRings InstanceOf MaxNoAnswerNumberOfRings)
             ? $maxNoAnswerNumberOfRings
             : new MaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings);
    }

    public function getMaxNoAnswerNumberOfRings()
    {
        return (!$this->maxNoAnswerNumberOfRings) ?: $this->maxNoAnswerNumberOfRings->value();
    }

    public function setIncomingCallToUserAliasMode($incomingCallToUserAliasMode = null)
    {
        $this->incomingCallToUserAliasMode = ($incomingCallToUserAliasMode InstanceOf IncomingCallToUserAliasMode)
             ? $incomingCallToUserAliasMode
             : new IncomingCallToUserAliasMode($incomingCallToUserAliasMode);
    }

    public function getIncomingCallToUserAliasMode()
    {
        return (!$this->incomingCallToUserAliasMode) ?: $this->incomingCallToUserAliasMode->value();
    }

    public function setBypassTerminationLoopDetection(xs:boolean $bypassTerminationLoopDetection = null)
    {
    }

    public function getBypassTerminationLoopDetection()
    {
        return (!$this->bypassTerminationLoopDetection) ?: $this->bypassTerminationLoopDetection->value();
    }
}
