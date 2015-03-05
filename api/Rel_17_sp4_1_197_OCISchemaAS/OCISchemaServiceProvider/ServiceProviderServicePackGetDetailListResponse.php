<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderServicePackGetDetailListRequest. It contains the service pack details
 *         and the list of services in a table format. The column headings are "Service", "Authorized"
 *         "Allocated" and "Available".
 */
class ServiceProviderServicePackGetDetailListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $servicePackName,
             $servicePackDescription=null,
             $isAvailableForUse,
             UnboundedPositiveInt $servicePackQuantity,
             UnboundedNonNegativeInt $assignedQuantity,
             UnboundedPositiveInt $allowedQuantity,
             $userServiceTable
    ) {
        $this->servicePackName        = new ServicePackName($servicePackName);
        $this->servicePackDescription = new ServicePackDescription($servicePackDescription);
        $this->isAvailableForUse      = $isAvailableForUse;
        $this->servicePackQuantity    = $servicePackQuantity;
        $this->assignedQuantity       = $assignedQuantity;
        $this->allowedQuantity        = $allowedQuantity;
        $this->userServiceTable       = $userServiceTable;
        $this->args                   = func_get_args();
    }

    public function setServicePackName($servicePackName)
    {
        $servicePackName and $this->servicePackName = new ServicePackName($servicePackName);
    }

    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->value();
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

    public function setAssignedQuantity($assignedQuantity)
    {
        $assignedQuantity and $this->assignedQuantity = new UnboundedNonNegativeInt($assignedQuantity);
    }

    public function getAssignedQuantity()
    {
        return (!$this->assignedQuantity) ?: $this->assignedQuantity->value();
    }

    public function setAllowedQuantity($allowedQuantity)
    {
        $allowedQuantity and $this->allowedQuantity = new UnboundedPositiveInt($allowedQuantity);
    }

    public function getAllowedQuantity()
    {
        return (!$this->allowedQuantity) ?: $this->allowedQuantity->value();
    }

    public function setUserServiceTable($userServiceTable)
    {
        $userServiceTable and $this->userServiceTable = new core:OCITable($userServiceTable);
    }

    public function getUserServiceTable()
    {
        return (!$this->userServiceTable) ?: $this->userServiceTable->value();
    }
}
