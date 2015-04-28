<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingDNSResolvedAddressSelectionPolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingStatefulExpirationMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingMaxAddresses;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RouteTimerSeconds;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modifies the system's general routing attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemRoutingModifyRequest';
    protected $isRouteRoundRobin;
    protected $routeTimerSeconds;
    protected $dnsResolvedAddressSelectionPolicy;
    protected $statefulExpirationMinutes;
    protected $maxAddressesPerHostname;
    protected $maxAddressesDuringSetup;

    public function __construct(
         $isRouteRoundRobin = null,
         $routeTimerSeconds = null,
         $dnsResolvedAddressSelectionPolicy = null,
         $statefulExpirationMinutes = null,
         $maxAddressesPerHostname = null,
         $maxAddressesDuringSetup = null
    ) {
        $this->setIsRouteRoundRobin($isRouteRoundRobin);
        $this->setRouteTimerSeconds($routeTimerSeconds);
        $this->setDnsResolvedAddressSelectionPolicy($dnsResolvedAddressSelectionPolicy);
        $this->setStatefulExpirationMinutes($statefulExpirationMinutes);
        $this->setMaxAddressesPerHostname($maxAddressesPerHostname);
        $this->setMaxAddressesDuringSetup($maxAddressesDuringSetup);
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
    public function setIsRouteRoundRobin($isRouteRoundRobin = null)
    {
        $this->isRouteRoundRobin = new PrimitiveType($isRouteRoundRobin);
        $this->isRouteRoundRobin->setElementName('isRouteRoundRobin');
        return $this;
    }

    /**
     * 
     * @return boolean $isRouteRoundRobin
     */
    public function getIsRouteRoundRobin()
    {
        return ($this->isRouteRoundRobin)
            ? $this->isRouteRoundRobin->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRouteTimerSeconds($routeTimerSeconds = null)
    {
        $this->routeTimerSeconds = ($routeTimerSeconds InstanceOf RouteTimerSeconds)
             ? $routeTimerSeconds
             : new RouteTimerSeconds($routeTimerSeconds);
        $this->routeTimerSeconds->setElementName('routeTimerSeconds');
        return $this;
    }

    /**
     * 
     * @return RouteTimerSeconds $routeTimerSeconds
     */
    public function getRouteTimerSeconds()
    {
        return ($this->routeTimerSeconds)
            ? $this->routeTimerSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDnsResolvedAddressSelectionPolicy($dnsResolvedAddressSelectionPolicy = null)
    {
        $this->dnsResolvedAddressSelectionPolicy = ($dnsResolvedAddressSelectionPolicy InstanceOf RoutingDNSResolvedAddressSelectionPolicy)
             ? $dnsResolvedAddressSelectionPolicy
             : new RoutingDNSResolvedAddressSelectionPolicy($dnsResolvedAddressSelectionPolicy);
        $this->dnsResolvedAddressSelectionPolicy->setElementName('dnsResolvedAddressSelectionPolicy');
        return $this;
    }

    /**
     * 
     * @return RoutingDNSResolvedAddressSelectionPolicy $dnsResolvedAddressSelectionPolicy
     */
    public function getDnsResolvedAddressSelectionPolicy()
    {
        return ($this->dnsResolvedAddressSelectionPolicy)
            ? $this->dnsResolvedAddressSelectionPolicy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStatefulExpirationMinutes($statefulExpirationMinutes = null)
    {
        $this->statefulExpirationMinutes = ($statefulExpirationMinutes InstanceOf RoutingStatefulExpirationMinutes)
             ? $statefulExpirationMinutes
             : new RoutingStatefulExpirationMinutes($statefulExpirationMinutes);
        $this->statefulExpirationMinutes->setElementName('statefulExpirationMinutes');
        return $this;
    }

    /**
     * 
     * @return RoutingStatefulExpirationMinutes $statefulExpirationMinutes
     */
    public function getStatefulExpirationMinutes()
    {
        return ($this->statefulExpirationMinutes)
            ? $this->statefulExpirationMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxAddressesPerHostname($maxAddressesPerHostname = null)
    {
        $this->maxAddressesPerHostname = ($maxAddressesPerHostname InstanceOf RoutingMaxAddresses)
             ? $maxAddressesPerHostname
             : new RoutingMaxAddresses($maxAddressesPerHostname);
        $this->maxAddressesPerHostname->setElementName('maxAddressesPerHostname');
        return $this;
    }

    /**
     * 
     * @return RoutingMaxAddresses $maxAddressesPerHostname
     */
    public function getMaxAddressesPerHostname()
    {
        return ($this->maxAddressesPerHostname)
            ? $this->maxAddressesPerHostname->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxAddressesDuringSetup($maxAddressesDuringSetup = null)
    {
        $this->maxAddressesDuringSetup = ($maxAddressesDuringSetup InstanceOf RoutingMaxAddresses)
             ? $maxAddressesDuringSetup
             : new RoutingMaxAddresses($maxAddressesDuringSetup);
        $this->maxAddressesDuringSetup->setElementName('maxAddressesDuringSetup');
        return $this;
    }

    /**
     * 
     * @return RoutingMaxAddresses $maxAddressesDuringSetup
     */
    public function getMaxAddressesDuringSetup()
    {
        return ($this->maxAddressesDuringSetup)
            ? $this->maxAddressesDuringSetup->getElementValue()
            : null;
    }
}
