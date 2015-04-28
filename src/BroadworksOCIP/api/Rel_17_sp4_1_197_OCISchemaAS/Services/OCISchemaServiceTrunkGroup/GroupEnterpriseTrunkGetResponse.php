<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkMaximumRerouteAttempts;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\EnterpriseTrunkRouteExhaustionAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupEnterpriseTrunkGetRequest.
 */
class GroupEnterpriseTrunkGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupEnterpriseTrunkGetResponse';
    protected $maximumRerouteAttempts;
    protected $routeExhaustionAction;
    protected $routeExhaustionForwardAddress;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\GroupEnterpriseTrunkGetResponse $response
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
