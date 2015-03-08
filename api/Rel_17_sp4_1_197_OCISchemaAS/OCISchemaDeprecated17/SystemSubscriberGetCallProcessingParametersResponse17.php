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
     * Response to the SystemSubscriberGetCallProcessingParametersRequest17.
 */
class SystemSubscriberGetCallProcessingParametersResponse17 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\SystemSubscriberGetCallProcessingParametersResponse17';
    public    $name                                   = __CLASS__;
    protected $isExtendedCallingLineIdActive          = null;
    protected $isRingTimeOutActive                    = null;
    protected $ringTimeoutSeconds                     = null;
    protected $allowEmergencyRemoteOfficeOriginations = null;
    protected $maxNoAnswerNumberOfRings               = null;
    protected $incomingCallToUserAliasMode            = null;


    /**
     * 
     */
    public function setIsExtendedCallingLineIdActive($isExtendedCallingLineIdActive = null)
    {
        $this->isExtendedCallingLineIdActive = (boolean) $isExtendedCallingLineIdActive;
    }

    /**
     * 
     */
    public function getIsExtendedCallingLineIdActive()
    {
        return (!$this->isExtendedCallingLineIdActive) ?: $this->isExtendedCallingLineIdActive->getValue();
    }

    /**
     * 
     */
    public function setIsRingTimeOutActive($isRingTimeOutActive = null)
    {
        $this->isRingTimeOutActive = (boolean) $isRingTimeOutActive;
    }

    /**
     * 
     */
    public function getIsRingTimeOutActive()
    {
        return (!$this->isRingTimeOutActive) ?: $this->isRingTimeOutActive->getValue();
    }

    /**
     * Ring timeout for a user.
     */
    public function setRingTimeoutSeconds($ringTimeoutSeconds = null)
    {
        $this->ringTimeoutSeconds = ($ringTimeoutSeconds InstanceOf SystemUserRingTimeoutSeconds)
             ? $ringTimeoutSeconds
             : new SystemUserRingTimeoutSeconds($ringTimeoutSeconds);
    }

    /**
     * Ring timeout for a user.
     */
    public function getRingTimeoutSeconds()
    {
        return (!$this->ringTimeoutSeconds) ?: $this->ringTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setAllowEmergencyRemoteOfficeOriginations($allowEmergencyRemoteOfficeOriginations = null)
    {
        $this->allowEmergencyRemoteOfficeOriginations = (boolean) $allowEmergencyRemoteOfficeOriginations;
    }

    /**
     * 
     */
    public function getAllowEmergencyRemoteOfficeOriginations()
    {
        return (!$this->allowEmergencyRemoteOfficeOriginations) ?: $this->allowEmergencyRemoteOfficeOriginations->getValue();
    }

    /**
     * Maximum Number of No Answer Rings.
     */
    public function setMaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings = null)
    {
        $this->maxNoAnswerNumberOfRings = ($maxNoAnswerNumberOfRings InstanceOf MaxNoAnswerNumberOfRings)
             ? $maxNoAnswerNumberOfRings
             : new MaxNoAnswerNumberOfRings($maxNoAnswerNumberOfRings);
    }

    /**
     * Maximum Number of No Answer Rings.
     */
    public function getMaxNoAnswerNumberOfRings()
    {
        return (!$this->maxNoAnswerNumberOfRings) ?: $this->maxNoAnswerNumberOfRings->getValue();
    }

    /**
     * User alias usage mode for AS translations on incoming calls.
     */
    public function setIncomingCallToUserAliasMode($incomingCallToUserAliasMode = null)
    {
        $this->incomingCallToUserAliasMode = ($incomingCallToUserAliasMode InstanceOf IncomingCallToUserAliasMode)
             ? $incomingCallToUserAliasMode
             : new IncomingCallToUserAliasMode($incomingCallToUserAliasMode);
    }

    /**
     * User alias usage mode for AS translations on incoming calls.
     */
    public function getIncomingCallToUserAliasMode()
    {
        return (!$this->incomingCallToUserAliasMode) ?: $this->incomingCallToUserAliasMode->getValue();
    }
}
