<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DialableCallerIDCriteriaPriorityOrder;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NsScreeningFailurePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the service provider?s Dialable Caller ID settings and criteria list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderDialableCallerIDModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                       = 'ServiceProviderDialableCallerIDModifyRequest';
    protected $serviceProviderId          = null;
    protected $useServiceProviderCriteria = null;
    protected $nsScreeningFailurePolicy   = null;
    protected $criteriaPriorityOrder      = null;

    public function __construct(
         $serviceProviderId,
         $useServiceProviderCriteria = null,
         $nsScreeningFailurePolicy = null,
         DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setUseServiceProviderCriteria($useServiceProviderCriteria);
        $this->setNsScreeningFailurePolicy($nsScreeningFailurePolicy);
        $this->setCriteriaPriorityOrder($criteriaPriorityOrder);
    }

    /**
     * @return 
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
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setUseServiceProviderCriteria($useServiceProviderCriteria = null)
    {
        if (!$useServiceProviderCriteria) return $this;
        $this->useServiceProviderCriteria = new PrimitiveType($useServiceProviderCriteria);
        $this->useServiceProviderCriteria->setName('useServiceProviderCriteria');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUseServiceProviderCriteria()
    {
        return $this->useServiceProviderCriteria->getValue();
    }

    /**
     * 
     */
    public function setNsScreeningFailurePolicy($nsScreeningFailurePolicy = null)
    {
        if (!$nsScreeningFailurePolicy) return $this;
        $this->nsScreeningFailurePolicy = ($nsScreeningFailurePolicy InstanceOf NsScreeningFailurePolicy)
             ? $nsScreeningFailurePolicy
             : new NsScreeningFailurePolicy($nsScreeningFailurePolicy);
        $this->nsScreeningFailurePolicy->setName('nsScreeningFailurePolicy');
        return $this;
    }

    /**
     * 
     * @return NsScreeningFailurePolicy
     */
    public function getNsScreeningFailurePolicy()
    {
        return $this->nsScreeningFailurePolicy->getValue();
    }

    /**
     * 
     */
    public function setCriteriaPriorityOrder(DialableCallerIDCriteriaPriorityOrder $criteriaPriorityOrder = null)
    {
        if (!$criteriaPriorityOrder) return $this;
        $this->criteriaPriorityOrder = $criteriaPriorityOrder;
        $this->criteriaPriorityOrder->setName('criteriaPriorityOrder');
        return $this;
    }

    /**
     * 
     * @return DialableCallerIDCriteriaPriorityOrder
     */
    public function getCriteriaPriorityOrder()
    {
        return $this->criteriaPriorityOrder;
    }
}
