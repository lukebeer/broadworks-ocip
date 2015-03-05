<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RouteTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutingDNSResolvedAddressSelectionPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutingStatefulExpirationMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutingMaxAddresses;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemRoutingGetRequest.
 */
class SystemRoutingGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isRouteRoundRobin,
             $routeTimerSeconds,
             $dnsResolvedAddressSelectionPolicy,
             $statefulExpirationMinutes,
             $maxAddressesPerHostname,
             $maxAddressesDuringSetup
    ) {
        $this->isRouteRoundRobin                 = $isRouteRoundRobin;
        $this->routeTimerSeconds                 = $routeTimerSeconds;
        $this->dnsResolvedAddressSelectionPolicy = $dnsResolvedAddressSelectionPolicy;
        $this->statefulExpirationMinutes         = $statefulExpirationMinutes;
        $this->maxAddressesPerHostname           = $maxAddressesPerHostname;
        $this->maxAddressesDuringSetup           = $maxAddressesDuringSetup;
        $this->args                              = func_get_args();
    }

    public function setIsRouteRoundRobin($isRouteRoundRobin)
    {
        $isRouteRoundRobin and $this->isRouteRoundRobin = new xs:boolean($isRouteRoundRobin);
    }

    public function getIsRouteRoundRobin()
    {
        return (!$this->isRouteRoundRobin) ?: $this->isRouteRoundRobin->value();
    }

    public function setRouteTimerSeconds($routeTimerSeconds)
    {
        $routeTimerSeconds and $this->routeTimerSeconds = new RouteTimerSeconds($routeTimerSeconds);
    }

    public function getRouteTimerSeconds()
    {
        return (!$this->routeTimerSeconds) ?: $this->routeTimerSeconds->value();
    }

    public function setDnsResolvedAddressSelectionPolicy($dnsResolvedAddressSelectionPolicy)
    {
        $dnsResolvedAddressSelectionPolicy and $this->dnsResolvedAddressSelectionPolicy = new RoutingDNSResolvedAddressSelectionPolicy($dnsResolvedAddressSelectionPolicy);
    }

    public function getDnsResolvedAddressSelectionPolicy()
    {
        return (!$this->dnsResolvedAddressSelectionPolicy) ?: $this->dnsResolvedAddressSelectionPolicy->value();
    }

    public function setStatefulExpirationMinutes($statefulExpirationMinutes)
    {
        $statefulExpirationMinutes and $this->statefulExpirationMinutes = new RoutingStatefulExpirationMinutes($statefulExpirationMinutes);
    }

    public function getStatefulExpirationMinutes()
    {
        return (!$this->statefulExpirationMinutes) ?: $this->statefulExpirationMinutes->value();
    }

    public function setMaxAddressesPerHostname($maxAddressesPerHostname)
    {
        $maxAddressesPerHostname and $this->maxAddressesPerHostname = new RoutingMaxAddresses($maxAddressesPerHostname);
    }

    public function getMaxAddressesPerHostname()
    {
        return (!$this->maxAddressesPerHostname) ?: $this->maxAddressesPerHostname->value();
    }

    public function setMaxAddressesDuringSetup($maxAddressesDuringSetup)
    {
        $maxAddressesDuringSetup and $this->maxAddressesDuringSetup = new RoutingMaxAddresses($maxAddressesDuringSetup);
    }

    public function getMaxAddressesDuringSetup()
    {
        return (!$this->maxAddressesDuringSetup) ?: $this->maxAddressesDuringSetup->value();
    }
}
