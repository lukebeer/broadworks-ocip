<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkMaximumRerouteAttempts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkRouteExhaustionAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to EnterpriseEnterpriseTrunkGetRequest.
 */
class EnterpriseEnterpriseTrunkGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseEnterpriseTrunkGetResponse';
    protected $maximumRerouteAttempts;
    protected $routeExhaustionAction;
    protected $routeExhaustionForwardAddress;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseEnterpriseTrunkGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMaximumRerouteAttempts($maximumRerouteAttempts = null)
    {
        $this->maximumRerouteAttempts = ($maximumRerouteAttempts InstanceOf EnterpriseTrunkMaximumRerouteAttempts)
             ? $maximumRerouteAttempts
             : new EnterpriseTrunkMaximumRerouteAttempts($maximumRerouteAttempts);
        $this->maximumRerouteAttempts->setName('maximumRerouteAttempts');
        return $this;
    }

    /**
     * 
     * @return EnterpriseTrunkMaximumRerouteAttempts $maximumRerouteAttempts
     */
    public function getMaximumRerouteAttempts()
    {
        return ($this->maximumRerouteAttempts) ? $this->maximumRerouteAttempts->getValue() : null;
    }

    /**
     * 
     */
    public function setRouteExhaustionAction($routeExhaustionAction = null)
    {
        $this->routeExhaustionAction = ($routeExhaustionAction InstanceOf EnterpriseTrunkRouteExhaustionAction)
             ? $routeExhaustionAction
             : new EnterpriseTrunkRouteExhaustionAction($routeExhaustionAction);
        $this->routeExhaustionAction->setName('routeExhaustionAction');
        return $this;
    }

    /**
     * 
     * @return EnterpriseTrunkRouteExhaustionAction $routeExhaustionAction
     */
    public function getRouteExhaustionAction()
    {
        return ($this->routeExhaustionAction) ? $this->routeExhaustionAction->getValue() : null;
    }

    /**
     * 
     */
    public function setRouteExhaustionForwardAddress($routeExhaustionForwardAddress = null)
    {
        $this->routeExhaustionForwardAddress = ($routeExhaustionForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $routeExhaustionForwardAddress
             : new OutgoingDNorSIPURI($routeExhaustionForwardAddress);
        $this->routeExhaustionForwardAddress->setName('routeExhaustionForwardAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $routeExhaustionForwardAddress
     */
    public function getRouteExhaustionForwardAddress()
    {
        return ($this->routeExhaustionForwardAddress) ? $this->routeExhaustionForwardAddress->getValue() : null;
    }
}
