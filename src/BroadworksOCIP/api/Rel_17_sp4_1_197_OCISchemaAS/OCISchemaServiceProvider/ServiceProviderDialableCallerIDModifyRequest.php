<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaPriorityOrder;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NsScreeningFailurePolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the service provider?s Dialable Caller ID settings and criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderDialableCallerIDModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderDialableCallerIDModifyRequest';
    protected $serviceProviderId;
    protected $useServiceProviderCriteria;
    protected $nsScreeningFailurePolicy;
    protected $criteriaPriorityOrder;

    public function __construct(
         $serviceProviderId = '',
         $useServiceProviderCriteria = null,
         $nsScreeningFailurePolicy = null,
         $criteriaPriorityOrder = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setUseServiceProviderCriteria($useServiceProviderCriteria);
        $this->setNsScreeningFailurePolicy($nsScreeningFailurePolicy);
        $this->setCriteriaPriorityOrder($criteriaPriorityOrder);
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
    public function setUseServiceProviderCriteria($useServiceProviderCriteria = null)
    {
        $this->useServiceProviderCriteria = new PrimitiveType($useServiceProviderCriteria);
        $this->useServiceProviderCriteria->setElementName('useServiceProviderCriteria');
        return $this;
    }

    /**
     * 
     * @return boolean $useServiceProviderCriteria
     */
    public function getUseServiceProviderCriteria()
    {
        return ($this->useServiceProviderCriteria)
            ? $this->useServiceProviderCriteria->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNsScreeningFailurePolicy($nsScreeningFailurePolicy = null)
    {
        $this->nsScreeningFailurePolicy = ($nsScreeningFailurePolicy InstanceOf NsScreeningFailurePolicy)
             ? $nsScreeningFailurePolicy
             : new NsScreeningFailurePolicy($nsScreeningFailurePolicy);
        $this->nsScreeningFailurePolicy->setElementName('nsScreeningFailurePolicy');
        return $this;
    }

    /**
     * 
     * @return NsScreeningFailurePolicy $nsScreeningFailurePolicy
     */
    public function getNsScreeningFailurePolicy()
    {
        return ($this->nsScreeningFailurePolicy)
            ? $this->nsScreeningFailurePolicy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCriteriaPriorityOrder(DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder = null)
    {
        $this->criteriaPriorityOrder = ($criteriaPriorityOrder InstanceOf DialableCallerIDCriteriaPriorityOrder)
             ? $criteriaPriorityOrder
             : new DialableCallerIDCriteriaPriorityOrder($criteriaPriorityOrder);
        $this->criteriaPriorityOrder->setElementName('criteriaPriorityOrder');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder
     */
    public function getCriteriaPriorityOrder()
    {
        return $this->criteriaPriorityOrder;
    }
}
