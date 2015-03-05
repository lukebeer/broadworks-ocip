<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Requests to modify a service pack for a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $servicePackName,
             $newServicePackName=null,
             $servicePackDescription=null,
             $isAvailableForUse=null,
             UnboundedPositiveInt $servicePackQuantity=null
    ) {
        $this->serviceProviderId      = new ServiceProviderId($serviceProviderId);
        $this->servicePackName        = new ServicePackName($servicePackName);
        $this->newServicePackName     = new ServicePackName($newServicePackName);
        $this->servicePackDescription = new ServicePackDescription($servicePackDescription);
        $this->isAvailableForUse      = $isAvailableForUse;
        $this->servicePackQuantity    = $servicePackQuantity;
        $this->args                   = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setServicePackName($servicePackName)
    {
        $servicePackName and $this->servicePackName = new ServicePackName($servicePackName);
    }

    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->value();
    }

    public function setNewServicePackName($newServicePackName)
    {
        $newServicePackName and $this->newServicePackName = new ServicePackName($newServicePackName);
    }

    public function getNewServicePackName()
    {
        return (!$this->newServicePackName) ?: $this->newServicePackName->value();
    }

    public function setServicePackDescription($servicePackDescription)
    {
        $servicePackDescription and $this->servicePackDescription = new ServicePackDescription($servicePackDescription);
    }

    public function getServicePackDescription()
    {
        return (!$this->servicePackDescription) ?: $this->servicePackDescription->value();
    }

    public function setIsAvailableForUse($isAvailableForUse)
    {
        $isAvailableForUse and $this->isAvailableForUse = new xs:boolean($isAvailableForUse);
    }

    public function getIsAvailableForUse()
    {
        return (!$this->isAvailableForUse) ?: $this->isAvailableForUse->value();
    }

    public function setServicePackQuantity($servicePackQuantity)
    {
        $servicePackQuantity and $this->servicePackQuantity = new UnboundedPositiveInt($servicePackQuantity);
    }

    public function getServicePackQuantity()
    {
        return (!$this->servicePackQuantity) ?: $this->servicePackQuantity->value();
    }
}
