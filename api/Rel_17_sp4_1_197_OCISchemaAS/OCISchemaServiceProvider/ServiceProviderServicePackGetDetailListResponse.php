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
    public    $elementName = 'ServiceProviderServicePackGetDetailListResponse';
    protected $servicePackName;
    protected $servicePackDescription;
    protected $isAvailableForUse;
    protected $servicePackQuantity;
    protected $assignedQuantity;
    protected $allowedQuantity;
    protected $userServiceTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackGetDetailListResponse $response
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
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setElementName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $servicePackName
     */
    public function getServicePackName()
    {
        return ($this->servicePackName)
            ? $this->servicePackName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServicePackDescription($servicePackDescription = null)
    {
        $this->servicePackDescription = ($servicePackDescription InstanceOf ServicePackDescription)
             ? $servicePackDescription
             : new ServicePackDescription($servicePackDescription);
        $this->servicePackDescription->setElementName('servicePackDescription');
        return $this;
    }

    /**
     * 
     * @return ServicePackDescription $servicePackDescription
     */
    public function getServicePackDescription()
    {
        return ($this->servicePackDescription)
            ? $this->servicePackDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsAvailableForUse($isAvailableForUse = null)
    {
        $this->isAvailableForUse = new PrimitiveType($isAvailableForUse);
        $this->isAvailableForUse->setElementName('isAvailableForUse');
        return $this;
    }

    /**
     * 
     * @return boolean $isAvailableForUse
     */
    public function getIsAvailableForUse()
    {
        return ($this->isAvailableForUse)
            ? $this->isAvailableForUse->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServicePackQuantity(UnboundedPositiveInt $servicePackQuantity = null)
    {
        $this->servicePackQuantity = ($servicePackQuantity InstanceOf UnboundedPositiveInt)
             ? $servicePackQuantity
             : new UnboundedPositiveInt($servicePackQuantity);
        $this->servicePackQuantity->setElementName('servicePackQuantity');
        return $this;
    }

    /**
     * 
     * @return UnboundedPositiveInt $servicePackQuantity
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
        $this->assignedQuantity = ($assignedQuantity InstanceOf UnboundedNonNegativeInt)
             ? $assignedQuantity
             : new UnboundedNonNegativeInt($assignedQuantity);
        $this->assignedQuantity->setElementName('assignedQuantity');
        return $this;
    }

    /**
     * 
     * @return UnboundedNonNegativeInt $assignedQuantity
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
        $this->allowedQuantity = ($allowedQuantity InstanceOf UnboundedPositiveInt)
             ? $allowedQuantity
             : new UnboundedPositiveInt($allowedQuantity);
        $this->allowedQuantity->setElementName('allowedQuantity');
        return $this;
    }

    /**
     * 
     * @return UnboundedPositiveInt $allowedQuantity
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
        $this->userServiceTable = $userServiceTable;
        $this->userServiceTable->setElementName('userServiceTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getUserServiceTable()
    {
        return $this->userServiceTable;
    }
}
