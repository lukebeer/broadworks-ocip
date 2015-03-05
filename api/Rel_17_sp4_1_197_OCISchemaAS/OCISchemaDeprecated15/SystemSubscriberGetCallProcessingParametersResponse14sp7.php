<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SystemUserRingTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemSubscriberGetCallProcessingParametersRequest14sp7.
 */
class SystemSubscriberGetCallProcessingParametersResponse14sp7 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isExtendedCallingLineIdActive,
             $isRingTimeOutActive,
             $ringTimeoutSeconds,
             $allowEmergencyRemoteOfficeOriginations
    ) {
        $this->isExtendedCallingLineIdActive          = $isExtendedCallingLineIdActive;
        $this->isRingTimeOutActive                    = $isRingTimeOutActive;
        $this->ringTimeoutSeconds                     = new SystemUserRingTimeoutSeconds($ringTimeoutSeconds);
        $this->allowEmergencyRemoteOfficeOriginations = $allowEmergencyRemoteOfficeOriginations;
        $this->args                                   = func_get_args();
    }

    public function setIsExtendedCallingLineIdActive($isExtendedCallingLineIdActive)
    {
        $isExtendedCallingLineIdActive and $this->isExtendedCallingLineIdActive = new xs:boolean($isExtendedCallingLineIdActive);
    }

    public function getIsExtendedCallingLineIdActive()
    {
        return (!$this->isExtendedCallingLineIdActive) ?: $this->isExtendedCallingLineIdActive->value();
    }

    public function setIsRingTimeOutActive($isRingTimeOutActive)
    {
        $isRingTimeOutActive and $this->isRingTimeOutActive = new xs:boolean($isRingTimeOutActive);
    }

    public function getIsRingTimeOutActive()
    {
        return (!$this->isRingTimeOutActive) ?: $this->isRingTimeOutActive->value();
    }

    public function setRingTimeoutSeconds($ringTimeoutSeconds)
    {
        $ringTimeoutSeconds and $this->ringTimeoutSeconds = new SystemUserRingTimeoutSeconds($ringTimeoutSeconds);
    }

    public function getRingTimeoutSeconds()
    {
        return (!$this->ringTimeoutSeconds) ?: $this->ringTimeoutSeconds->value();
    }

    public function setAllowEmergencyRemoteOfficeOriginations($allowEmergencyRemoteOfficeOriginations)
    {
        $allowEmergencyRemoteOfficeOriginations and $this->allowEmergencyRemoteOfficeOriginations = new xs:boolean($allowEmergencyRemoteOfficeOriginations);
    }

    public function getAllowEmergencyRemoteOfficeOriginations()
    {
        return (!$this->allowEmergencyRemoteOfficeOriginations) ?: $this->allowEmergencyRemoteOfficeOriginations->value();
    }
}
