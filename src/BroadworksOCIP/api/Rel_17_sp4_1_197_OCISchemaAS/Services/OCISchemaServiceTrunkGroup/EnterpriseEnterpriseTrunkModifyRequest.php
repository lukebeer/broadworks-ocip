<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkMaximumRerouteAttempts;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkRouteExhaustionAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseTrunkName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify an enterprise trunk in an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseEnterpriseTrunkModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseEnterpriseTrunkModifyRequest';
    protected $serviceProviderId;
    protected $enterpriseTrunkName;
    protected $newEnterpriseTrunkName;
    protected $maximumRerouteAttempts;
    protected $routeExhaustionAction;
    protected $routeExhaustionForwardAddress;

    public function __construct(
         $serviceProviderId = '',
         $enterpriseTrunkName = '',
         $newEnterpriseTrunkName = null,
         $maximumRerouteAttempts = null,
         $routeExhaustionAction = null,
         $routeExhaustionForwardAddress = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setEnterpriseTrunkName($enterpriseTrunkName);
        $this->setNewEnterpriseTrunkName($newEnterpriseTrunkName);
        $this->setMaximumRerouteAttempts($maximumRerouteAttempts);
        $this->setRouteExhaustionAction($routeExhaustionAction);
        $this->setRouteExhaustionForwardAddress($routeExhaustionForwardAddress);
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
    public function setEnterpriseTrunkName($enterpriseTrunkName = null)
    {
        $this->enterpriseTrunkName = ($enterpriseTrunkName InstanceOf EnterpriseTrunkName)
             ? $enterpriseTrunkName
             : new EnterpriseTrunkName($enterpriseTrunkName);
        $this->enterpriseTrunkName->setElementName('enterpriseTrunkName');
        return $this;
    }

    /**
     * 
     * @return EnterpriseTrunkName $enterpriseTrunkName
     */
    public function getEnterpriseTrunkName()
    {
        return ($this->enterpriseTrunkName)
            ? $this->enterpriseTrunkName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewEnterpriseTrunkName($newEnterpriseTrunkName = null)
    {
        $this->newEnterpriseTrunkName = ($newEnterpriseTrunkName InstanceOf EnterpriseTrunkName)
             ? $newEnterpriseTrunkName
             : new EnterpriseTrunkName($newEnterpriseTrunkName);
        $this->newEnterpriseTrunkName->setElementName('newEnterpriseTrunkName');
        return $this;
    }

    /**
     * 
     * @return EnterpriseTrunkName $newEnterpriseTrunkName
     */
    public function getNewEnterpriseTrunkName()
    {
        return ($this->newEnterpriseTrunkName)
            ? $this->newEnterpriseTrunkName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaximumRerouteAttempts($maximumRerouteAttempts = null)
    {
        $this->maximumRerouteAttempts = ($maximumRerouteAttempts InstanceOf EnterpriseTrunkMaximumRerouteAttempts)
             ? $maximumRerouteAttempts
             : new EnterpriseTrunkMaximumRerouteAttempts($maximumRerouteAttempts);
        $this->maximumRerouteAttempts->setElementName('maximumRerouteAttempts');
        return $this;
    }

    /**
     * 
     * @return EnterpriseTrunkMaximumRerouteAttempts $maximumRerouteAttempts
     */
    public function getMaximumRerouteAttempts()
    {
        return ($this->maximumRerouteAttempts)
            ? $this->maximumRerouteAttempts->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRouteExhaustionAction($routeExhaustionAction = null)
    {
        $this->routeExhaustionAction = ($routeExhaustionAction InstanceOf EnterpriseTrunkRouteExhaustionAction)
             ? $routeExhaustionAction
             : new EnterpriseTrunkRouteExhaustionAction($routeExhaustionAction);
        $this->routeExhaustionAction->setElementName('routeExhaustionAction');
        return $this;
    }

    /**
     * 
     * @return EnterpriseTrunkRouteExhaustionAction $routeExhaustionAction
     */
    public function getRouteExhaustionAction()
    {
        return ($this->routeExhaustionAction)
            ? $this->routeExhaustionAction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRouteExhaustionForwardAddress($routeExhaustionForwardAddress = null)
    {
        $this->routeExhaustionForwardAddress = ($routeExhaustionForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $routeExhaustionForwardAddress
             : new OutgoingDNorSIPURI($routeExhaustionForwardAddress);
        $this->routeExhaustionForwardAddress->setElementName('routeExhaustionForwardAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $routeExhaustionForwardAddress
     */
    public function getRouteExhaustionForwardAddress()
    {
        return ($this->routeExhaustionForwardAddress)
            ? $this->routeExhaustionForwardAddress->getElementValue()
            : null;
    }
}
