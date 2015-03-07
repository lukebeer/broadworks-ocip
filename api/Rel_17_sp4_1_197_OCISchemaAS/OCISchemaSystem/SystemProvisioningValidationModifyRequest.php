<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ProvisioningValidationTimeoutSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the system's provisioning validation attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemProvisioningValidationModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $isActive                    = null;
    protected $isNetworkServerQueryActive  = null;
    protected $timeoutSeconds              = null;

    public function __construct(
         $isActive = null,
         $isNetworkServerQueryActive = null,
         $timeoutSeconds = null
    ) {
        $this->setIsActive($isActive);
        $this->setIsNetworkServerQueryActive($isNetworkServerQueryActive);
        $this->setTimeoutSeconds($timeoutSeconds);
    }

    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setIsNetworkServerQueryActive(xs:boolean $isNetworkServerQueryActive = null)
    {
    }

    public function getIsNetworkServerQueryActive()
    {
        return (!$this->isNetworkServerQueryActive) ?: $this->isNetworkServerQueryActive->value();
    }

    public function setTimeoutSeconds($timeoutSeconds = null)
    {
        $this->timeoutSeconds = ($timeoutSeconds InstanceOf ProvisioningValidationTimeoutSeconds)
             ? $timeoutSeconds
             : new ProvisioningValidationTimeoutSeconds($timeoutSeconds);
    }

    public function getTimeoutSeconds()
    {
        return (!$this->timeoutSeconds) ?: $this->timeoutSeconds->value();
    }
}
