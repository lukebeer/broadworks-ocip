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
    const     RESPONSE_TYPE           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackGetDetailListResponse';
    public    $name                   = __CLASS__;
    protected $servicePackName        = null;
    protected $servicePackDescription = null;
    protected $isAvailableForUse      = null;
    protected $servicePackQuantity    = null;
    protected $assignedQuantity       = null;
    protected $allowedQuantity        = null;
    protected $userServiceTable       = null;


    /**
     * Service Pack name.
     */
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
    }

    /**
     * Service Pack name.
     */
    public function getServicePackName()
    {
        return (!$this->servicePackName) ?: $this->servicePackName->getValue();
    }

    /**
     * Service Pack description.
     */
    public function setServicePackDescription($servicePackDescription = null)
    {
        $this->servicePackDescription = ($servicePackDescription InstanceOf ServicePackDescription)
             ? $servicePackDescription
             : new ServicePackDescription($servicePackDescription);
    }

    /**
     * Service Pack description.
     */
    public function getServicePackDescription()
    {
        return (!$this->servicePackDescription) ?: $this->servicePackDescription->getValue();
    }

    /**
     * 
     */
    public function setIsAvailableForUse($isAvailableForUse = null)
    {
        $this->isAvailableForUse = (boolean) $isAvailableForUse;
    }

    /**
     * 
     */
    public function getIsAvailableForUse()
    {
        return (!$this->isAvailableForUse) ?: $this->isAvailableForUse->getValue();
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function setServicePackQuantity(UnboundedPositiveInt $servicePackQuantity = null)
    {
        $this->servicePackQuantity = UnboundedPositiveInt $servicePackQuantity;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function getServicePackQuantity()
    {
        return (!$this->servicePackQuantity) ?: $this->servicePackQuantity->getValue();
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function setAssignedQuantity(UnboundedNonNegativeInt $assignedQuantity = null)
    {
        $this->assignedQuantity = UnboundedNonNegativeInt $assignedQuantity;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a non-negative int quantity.
     */
    public function getAssignedQuantity()
    {
        return (!$this->assignedQuantity) ?: $this->assignedQuantity->getValue();
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function setAllowedQuantity(UnboundedPositiveInt $allowedQuantity = null)
    {
        $this->allowedQuantity = UnboundedPositiveInt $allowedQuantity;
    }

    /**
     * Unbounded Quantity. Can either be unlimited or a positive int quantity.
     */
    public function getAllowedQuantity()
    {
        return (!$this->allowedQuantity) ?: $this->allowedQuantity->getValue();
    }

    /**
     * 
     */
    public function setUserServiceTable(core:OCITable $userServiceTable = null)
    {
        $this->userServiceTable = core:OCITable $userServiceTable;
    }

    /**
     * 
     */
    public function getUserServiceTable()
    {
        return (!$this->userServiceTable) ?: $this->userServiceTable->getValue();
    }
}
