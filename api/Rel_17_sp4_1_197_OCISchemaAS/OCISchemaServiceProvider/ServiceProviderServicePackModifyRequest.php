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
    public    $name                   = 'ServiceProviderServicePackModifyRequest';
    protected $serviceProviderId      = null;
    protected $servicePackName        = null;
    protected $newServicePackName     = null;
    protected $servicePackDescription = null;
    protected $isAvailableForUse      = null;
    protected $servicePackQuantity    = null;

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
        if (!$serviceProviderId) return $this;
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
        return $this->serviceProviderId->getValue();
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
     * @return ServicePackName $servicePackName
     */
    public function getServicePackName()
    {
        return $this->servicePackName->getValue();
    }

    /**
     * 
     */
    public function setNewServicePackName($newServicePackName = null)
    {
        if (!$newServicePackName) return $this;
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
        return $this->newServicePackName->getValue();
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
     * @return ServicePackDescription $servicePackDescription
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
     * @return boolean $isAvailableForUse
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
     * @return UnboundedPositiveInt $servicePackQuantity
     */
    public function getServicePackQuantity()
    {
        return $this->servicePackQuantity;
    }
}
