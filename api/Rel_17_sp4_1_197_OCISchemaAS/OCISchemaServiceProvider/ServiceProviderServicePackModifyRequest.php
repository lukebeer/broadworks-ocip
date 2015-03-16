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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Requests to modify a service pack for a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderServicePackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderServicePackModifyRequest';
    protected $serviceProviderId;
    protected $servicePackName;
    protected $newServicePackName;
    protected $servicePackDescription;
    protected $isAvailableForUse;
    protected $servicePackQuantity;

    public function __construct(
         $serviceProviderId = '',
         $servicePackName = '',
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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setServicePackName($servicePackName = null)
    {
        $this->servicePackName = ($servicePackName InstanceOf ServicePackName)
             ? $servicePackName
             : new ServicePackName($servicePackName);
        $this->servicePackName->setName('servicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $servicePackName
     */
    public function getServicePackName()
    {
        return ($this->servicePackName) ? $this->servicePackName->getValue() : null;
    }

    /**
     * 
     */
    public function setNewServicePackName($newServicePackName = null)
    {
        $this->newServicePackName = ($newServicePackName InstanceOf ServicePackName)
             ? $newServicePackName
             : new ServicePackName($newServicePackName);
        $this->newServicePackName->setName('newServicePackName');
        return $this;
    }

    /**
     * 
     * @return ServicePackName $newServicePackName
     */
    public function getNewServicePackName()
    {
        return ($this->newServicePackName) ? $this->newServicePackName->getValue() : null;
    }

    /**
     * 
     */
    public function setServicePackDescription($servicePackDescription = null)
    {
        $this->servicePackDescription = ($servicePackDescription InstanceOf ServicePackDescription)
             ? $servicePackDescription
             : new ServicePackDescription($servicePackDescription);
        $this->servicePackDescription->setName('servicePackDescription');
        return $this;
    }

    /**
     * 
     * @return ServicePackDescription $servicePackDescription
     */
    public function getServicePackDescription()
    {
        return ($this->servicePackDescription) ? $this->servicePackDescription->getValue() : null;
    }

    /**
     * 
     */
    public function setIsAvailableForUse($isAvailableForUse = null)
    {
        $this->isAvailableForUse = new PrimitiveType($isAvailableForUse);
        $this->isAvailableForUse->setName('isAvailableForUse');
        return $this;
    }

    /**
     * 
     * @return boolean $isAvailableForUse
     */
    public function getIsAvailableForUse()
    {
        return ($this->isAvailableForUse) ? $this->isAvailableForUse->getValue() : null;
    }

    /**
     * 
     */
    public function setServicePackQuantity(UnboundedPositiveInt $servicePackQuantity = null)
    {
        $this->servicePackQuantity = ($servicePackQuantity InstanceOf UnboundedPositiveInt)
             ? $servicePackQuantity
             : new UnboundedPositiveInt($servicePackQuantity);
        $this->servicePackQuantity->setName('servicePackQuantity');
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
}
