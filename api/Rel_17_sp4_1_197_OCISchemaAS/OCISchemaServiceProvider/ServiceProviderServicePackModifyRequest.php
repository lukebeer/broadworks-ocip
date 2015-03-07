<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests to modify a service pack for a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $serviceProviderId       = null;
    protected $servicePackName         = null;
    protected $newServicePackName      = null;
    protected $servicePackDescription  = null;
    protected $isAvailableForUse       = null;
    protected $servicePackQuantity     = null;

    public function __construct(
         $serviceProviderId,
         $servicePackName,
         $newServicePackName = null,
         $servicePackDescription = null,
         $isAvailableForUse = null,
         UnboundedPositiveInt $servicePackQuantity = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setServicePackName($servicePackName);
        $this->setNewServicePackName($newServicePackName);
        $this->setServicePackDescription($servicePackDescription);
        $this->setIsAvailableForUse($isAvailableForUse);
        $this->setServicePackQuantity($servicePackQuantity);
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

    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
    }

    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->value();
    }

    public function setNewServicePackName($newServicePackName = null)
    {
        $this->newServicePackName = ($newServicePackName InstanceOf ServicePackName)
             ? $newServicePackName
             : new ServicePackName($newServicePackName);
    }

    public function getNewServicePackName()
    {
        return (!$this->newServicePackName) ?: $this->newServicePackName->value();
    }

    public function setServicePackDescription($servicePackDescription = null)
    {
        $this->servicePackDescription = ($servicePackDescription InstanceOf ServicePackDescription)
             ? $servicePackDescription
             : new ServicePackDescription($servicePackDescription);
    }

    public function getServicePackDescription()
    {
        return (!$this->servicePackDescription) ?: $this->servicePackDescription->value();
    }

    public function setIsAvailableForUse(xs:boolean $isAvailableForUse = null)
    {
    }

    public function getIsAvailableForUse()
    {
        return (!$this->isAvailableForUse) ?: $this->isAvailableForUse->value();
    }

    public function setServicePackQuantity(UnboundedPositiveInt $servicePackQuantity = null)
    {
    }

    public function getServicePackQuantity()
    {
        return (!$this->servicePackQuantity) ?: $this->servicePackQuantity->value();
    }
}
