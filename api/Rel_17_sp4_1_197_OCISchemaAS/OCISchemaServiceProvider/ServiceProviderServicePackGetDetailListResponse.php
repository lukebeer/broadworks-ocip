<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedNonNegativeInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UnboundedPositiveInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServicePackName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderServicePackGetDetailListRequest. It contains the service pack details
 *         and the list of services in a table format. The column headings are "Service", "Authorized"
 *         "Allocated" and "Available".
 */
class ServiceProviderServicePackGetDetailListResponse extends ComplexType implements ComplexInterface
{
    public    $name                    = __CLASS__;
    protected $servicePackName         = null;
    protected $servicePackDescription  = null;
    protected $isAvailableForUse       = null;
    protected $servicePackQuantity     = null;
    protected $assignedQuantity        = null;
    protected $allowedQuantity         = null;
    protected $userServiceTable        = null;


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

    public function setAssignedQuantity(UnboundedNonNegativeInt $assignedQuantity = null)
    {
    }

    public function getAssignedQuantity()
    {
        return (!$this->assignedQuantity) ?: $this->assignedQuantity->value();
    }

    public function setAllowedQuantity(UnboundedPositiveInt $allowedQuantity = null)
    {
    }

    public function getAllowedQuantity()
    {
        return (!$this->allowedQuantity) ?: $this->allowedQuantity->value();
    }

    public function setUserServiceTable(core:OCITable $userServiceTable = null)
    {
    }

    public function getUserServiceTable()
    {
        return (!$this->userServiceTable) ?: $this->userServiceTable->value();
    }
}
