<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDeactivationReason;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Activates or Deactivates the BroadWorks Mobile Manager.
 *         The deactivationReason is required when isActive is set to false. 
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerActivationRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $serviceProviderId  = null;
    protected $isActive           = null;
    protected $deactivationReason = null;

    public function __construct(
         $serviceProviderId,
         $isActive,
         $deactivationReason = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setIsActive($isActive);
        $this->setDeactivationReason($deactivationReason);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * Deactivation reason.
     */
    public function setDeactivationReason($deactivationReason = null)
    {
        $this->deactivationReason = ($deactivationReason InstanceOf BroadWorksMobileManagerDeactivationReason)
             ? $deactivationReason
             : new BroadWorksMobileManagerDeactivationReason($deactivationReason);
    }

    /**
     * Deactivation reason.
     */
    public function getDeactivationReason()
    {
        return (!$this->deactivationReason) ?: $this->deactivationReason->getValue();
    }
}
