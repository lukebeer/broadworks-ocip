<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDeactivationReason;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Activates or Deactivates the BroadWorks Mobile Manager.
 *         The deactivationReason is required when isActive is set to false. 
 *         The response is either SuccessResponse or ErrorResponse.
 */
class EnterpriseBroadWorksMobileManagerActivationRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseBroadWorksMobileManagerActivationRequest';
    protected $serviceProviderId;
    protected $isActive;
    protected $deactivationReason;

    public function __construct(
         $serviceProviderId = '',
         $isActive = '',
         $deactivationReason = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setIsActive($isActive);
        $this->setDeactivationReason($deactivationReason);
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
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeactivationReason($deactivationReason = null)
    {
        $this->deactivationReason = ($deactivationReason InstanceOf BroadWorksMobileManagerDeactivationReason)
             ? $deactivationReason
             : new BroadWorksMobileManagerDeactivationReason($deactivationReason);
        $this->deactivationReason->setElementName('deactivationReason');
        return $this;
    }

    /**
     * 
     * @return BroadWorksMobileManagerDeactivationReason $deactivationReason
     */
    public function getDeactivationReason()
    {
        return ($this->deactivationReason)
            ? $this->deactivationReason->getElementValue()
            : null;
    }
}
