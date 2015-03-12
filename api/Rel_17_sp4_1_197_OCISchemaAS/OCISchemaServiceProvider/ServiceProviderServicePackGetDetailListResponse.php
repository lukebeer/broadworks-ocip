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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to ServiceProviderServicePackGetDetailListRequest. It contains the service pack details
 *         and the list of services in a table format. The column headings are "Service", "Authorized"
 *         "Allocated" and "Available".
 */
class ServiceProviderServicePackGetDetailListResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = 'ServiceProviderServicePackGetDetailListResponse';
    protected $servicePackName        = null;
    protected $servicePackDescription = null;
    protected $isAvailableForUse      = null;
    protected $servicePackQuantity    = null;
    protected $assignedQuantity       = null;
    protected $allowedQuantity        = null;
    protected $userServiceTable       = null;

    /**
     * @return ServiceProviderServicePackGetDetailListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
        if (!$servicePackName) return $this;
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName
     */
    public function getServicePackName()
    {
        return $this->servicePackName->getValue();
    }

    /**
     * 
     */
    public function setServicePackDescription($servicePackDescription = null)
    {
        if (!$servicePackDescription) return $this;
        $this->servicePackDescription = ($servicePackDescription InstanceOf ServicePackDescription)
             ? $servicePackDescription
             : new ServicePackDescription($servicePackDescription);
        $this->servicePackDescription->setName('servicePackDescription');
        return $this;
    }

    /**
     * 
     * @return ServicePackDescription
     */
    public function getServicePackDescription()
    {
        return $this->servicePackDescription->getValue();
    }

    /**
     * 
     */
    public function setIsAvailableForUse($isAvailableForUse = null)
    {
        if (!$isAvailableForUse) return $this;
        $this->isAvailableForUse = new PrimitiveType($isAvailableForUse);
        $this->isAvailableForUse->setName('isAvailableForUse');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getIsAvailableForUse()
    {
        return $this->isAvailableForUse->getValue();
    }

    /**
     * 
     */
    public function setServicePackQuantity(UnboundedPositiveInt $servicePackQuantity = null)
    {
        if (!$servicePackQuantity) return $this;
        $this->servicePackQuantity = $servicePackQuantity;
        $this->servicePackQuantity->setName('servicePackQuantity');
        return $this;
    }

    /**
     * 
     * @return UnboundedPositiveInt
     */
    public function getServicePackQuantity()
    {
        return $this->servicePackQuantity;
    }

    /**
     * 
     */
    public function setAssignedQuantity(UnboundedNonNegativeInt $assignedQuantity = null)
    {
        if (!$assignedQuantity) return $this;
        $this->assignedQuantity = $assignedQuantity;
        $this->assignedQuantity->setName('assignedQuantity');
        return $this;
    }

    /**
     * 
     * @return UnboundedNonNegativeInt
     */
    public function getAssignedQuantity()
    {
        return $this->assignedQuantity;
    }

    /**
     * 
     */
    public function setAllowedQuantity(UnboundedPositiveInt $allowedQuantity = null)
    {
        if (!$allowedQuantity) return $this;
        $this->allowedQuantity = $allowedQuantity;
        $this->allowedQuantity->setName('allowedQuantity');
        return $this;
    }

    /**
     * 
     * @return UnboundedPositiveInt
     */
    public function getAllowedQuantity()
    {
        return $this->allowedQuantity;
    }

    /**
     * 
     */
    public function setUserServiceTable(TableType $userServiceTable = null)
    {
        if (!$userServiceTable) return $this;
        $this->userServiceTable = $userServiceTable;
        $this->userServiceTable->setName('userServiceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUserServiceTable()
    {
        return $this->userServiceTable->getValue();
    }
}
