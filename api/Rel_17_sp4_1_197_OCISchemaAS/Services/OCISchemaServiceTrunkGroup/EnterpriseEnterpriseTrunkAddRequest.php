<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkMaximumRerouteAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkRouteExhaustionAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseTrunkName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add an enterprise trunk in an enterprise.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class EnterpriseEnterpriseTrunkAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                          = 'EnterpriseEnterpriseTrunkAddRequest';
    protected $serviceProviderId             = null;
    protected $enterpriseTrunkName           = null;
    protected $maximumRerouteAttempts        = null;
    protected $routeExhaustionAction         = null;
    protected $routeExhaustionForwardAddress = null;

    public function __construct(
         $serviceProviderId,
         $enterpriseTrunkName,
         $maximumRerouteAttempts,
         $routeExhaustionAction,
         $routeExhaustionForwardAddress = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setEnterpriseTrunkName($enterpriseTrunkName);
        $this->setMaximumRerouteAttempts($maximumRerouteAttempts);
        $this->setRouteExhaustionAction($routeExhaustionAction);
        $this->setRouteExhaustionForwardAddress($routeExhaustionForwardAddress);
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
    public function setEnterpriseTrunkName($enterpriseTrunkName = null)
    {
        if (!$enterpriseTrunkName) return $this;
        $this->enterpriseTrunkName = ($enterpriseTrunkName InstanceOf EnterpriseTrunkName)
             ? $enterpriseTrunkName
             : new EnterpriseTrunkName($enterpriseTrunkName);
        $this->enterpriseTrunkName->setName('enterpriseTrunkName');
        return $this;
    }

    /**
     * 
     * @return EnterpriseTrunkName
     */
    public function getEnterpriseTrunkName()
    {
        return $this->enterpriseTrunkName->getValue();
    }

    /**
     * 
     */
    public function setMaximumRerouteAttempts($maximumRerouteAttempts = null)
    {
        if (!$maximumRerouteAttempts) return $this;
        $this->maximumRerouteAttempts = ($maximumRerouteAttempts InstanceOf EnterpriseTrunkMaximumRerouteAttempts)
             ? $maximumRerouteAttempts
             : new EnterpriseTrunkMaximumRerouteAttempts($maximumRerouteAttempts);
        $this->maximumRerouteAttempts->setName('maximumRerouteAttempts');
        return $this;
    }

    /**
     * 
     * @return EnterpriseTrunkMaximumRerouteAttempts
     */
    public function getMaximumRerouteAttempts()
    {
        return $this->maximumRerouteAttempts->getValue();
    }

    /**
     * 
     */
    public function setRouteExhaustionAction($routeExhaustionAction = null)
    {
        if (!$routeExhaustionAction) return $this;
        $this->routeExhaustionAction = ($routeExhaustionAction InstanceOf EnterpriseTrunkRouteExhaustionAction)
             ? $routeExhaustionAction
             : new EnterpriseTrunkRouteExhaustionAction($routeExhaustionAction);
        $this->routeExhaustionAction->setName('routeExhaustionAction');
        return $this;
    }

    /**
     * 
     * @return EnterpriseTrunkRouteExhaustionAction
     */
    public function getRouteExhaustionAction()
    {
        return $this->routeExhaustionAction->getValue();
    }

    /**
     * 
     */
    public function setRouteExhaustionForwardAddress($routeExhaustionForwardAddress = null)
    {
        if (!$routeExhaustionForwardAddress) return $this;
        $this->routeExhaustionForwardAddress = ($routeExhaustionForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $routeExhaustionForwardAddress
             : new OutgoingDNorSIPURI($routeExhaustionForwardAddress);
        $this->routeExhaustionForwardAddress->setName('routeExhaustionForwardAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getRouteExhaustionForwardAddress()
    {
        return $this->routeExhaustionForwardAddress->getValue();
    }
}
