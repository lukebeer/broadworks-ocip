<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ProvisioningValidationTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemProvisioningValidationGetRequest14sp2.
 */
class SystemProvisioningValidationGetResponse14sp2 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $isNetworkServerQueryActive,
             $timeoutSeconds
    ) {
        $this->isActive                   = $isActive;
        $this->isNetworkServerQueryActive = $isNetworkServerQueryActive;
        $this->timeoutSeconds             = $timeoutSeconds;
        $this->args                       = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setIsNetworkServerQueryActive($isNetworkServerQueryActive)
    {
        $isNetworkServerQueryActive and $this->isNetworkServerQueryActive = new xs:boolean($isNetworkServerQueryActive);
    }

    public function getIsNetworkServerQueryActive()
    {
        return (!$this->isNetworkServerQueryActive) ?: $this->isNetworkServerQueryActive->value();
    }

    public function setTimeoutSeconds($timeoutSeconds)
    {
        $timeoutSeconds and $this->timeoutSeconds = new ProvisioningValidationTimeoutSeconds($timeoutSeconds);
    }

    public function getTimeoutSeconds()
    {
        return (!$this->timeoutSeconds) ?: $this->timeoutSeconds->value();
    }
}
