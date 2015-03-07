<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingDNSResolvedAddressSelectionPolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingStatefulExpirationMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RoutingMaxAddresses;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RouteTimerSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the system's general routing attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutingModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                               = __CLASS__;
    protected $isRouteRoundRobin                  = null;
    protected $routeTimerSeconds                  = null;
    protected $dnsResolvedAddressSelectionPolicy  = null;
    protected $statefulExpirationMinutes          = null;
    protected $maxAddressesPerHostname            = null;
    protected $maxAddressesDuringSetup            = null;

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

    public function setIsRouteRoundRobin(xs:boolean $isRouteRoundRobin = null)
    {
    }

    public function getIsRouteRoundRobin()
    {
        return (!$this->isRouteRoundRobin) ?: $this->isRouteRoundRobin->value();
    }

    public function setRouteTimerSeconds($routeTimerSeconds = null)
    {
        $this->routeTimerSeconds = ($routeTimerSeconds InstanceOf RouteTimerSeconds)
             ? $routeTimerSeconds
             : new RouteTimerSeconds($routeTimerSeconds);
    }

    public function getRouteTimerSeconds()
    {
        return (!$this->routeTimerSeconds) ?: $this->routeTimerSeconds->value();
    }

    public function setDnsResolvedAddressSelectionPolicy($dnsResolvedAddressSelectionPolicy = null)
    {
        $this->dnsResolvedAddressSelectionPolicy = ($dnsResolvedAddressSelectionPolicy InstanceOf RoutingDNSResolvedAddressSelectionPolicy)
             ? $dnsResolvedAddressSelectionPolicy
             : new RoutingDNSResolvedAddressSelectionPolicy($dnsResolvedAddressSelectionPolicy);
    }

    public function getDnsResolvedAddressSelectionPolicy()
    {
        return (!$this->dnsResolvedAddressSelectionPolicy) ?: $this->dnsResolvedAddressSelectionPolicy->value();
    }

    public function setStatefulExpirationMinutes($statefulExpirationMinutes = null)
    {
        $this->statefulExpirationMinutes = ($statefulExpirationMinutes InstanceOf RoutingStatefulExpirationMinutes)
             ? $statefulExpirationMinutes
             : new RoutingStatefulExpirationMinutes($statefulExpirationMinutes);
    }

    public function getStatefulExpirationMinutes()
    {
        return (!$this->statefulExpirationMinutes) ?: $this->statefulExpirationMinutes->value();
    }

    public function setMaxAddressesPerHostname($maxAddressesPerHostname = null)
    {
        $this->maxAddressesPerHostname = ($maxAddressesPerHostname InstanceOf RoutingMaxAddresses)
             ? $maxAddressesPerHostname
             : new RoutingMaxAddresses($maxAddressesPerHostname);
    }

    public function getMaxAddressesPerHostname()
    {
        return (!$this->maxAddressesPerHostname) ?: $this->maxAddressesPerHostname->value();
    }

    public function setMaxAddressesDuringSetup($maxAddressesDuringSetup = null)
    {
        $this->maxAddressesDuringSetup = ($maxAddressesDuringSetup InstanceOf RoutingMaxAddresses)
             ? $maxAddressesDuringSetup
             : new RoutingMaxAddresses($maxAddressesDuringSetup);
    }

    public function getMaxAddressesDuringSetup()
    {
        return (!$this->maxAddressesDuringSetup) ?: $this->maxAddressesDuringSetup->value();
    }
}
