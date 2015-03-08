<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RouteDeviceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\RouteName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify a routing device.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemRoutingModifyRouteDeviceRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $routeName         = null;
    protected $netAddress        = null;
    protected $port              = null;
    protected $transportProtocol = null;
    protected $description       = null;

    public function __construct(
         $routeName,
         $netAddress,
         $port = null,
         $transportProtocol = null,
         $description = null
    ) {
        $this->setRouteName($routeName);
        $this->setNetAddress($netAddress);
        $this->setPort($port);
        $this->setTransportProtocol($transportProtocol);
        $this->setDescription($description);
    }

    /**
     * Route name.
     */
    public function setRouteName($routeName = null)
    {
        $this->routeName = ($routeName InstanceOf RouteName)
             ? $routeName
             : new RouteName($routeName);
    }

    /**
     * Route name.
     */
    public function getRouteName()
    {
        return (!$this->routeName) ?: $this->routeName->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setNetAddress($netAddress = null)
    {
        $this->netAddress = ($netAddress InstanceOf NetAddress)
             ? $netAddress
             : new NetAddress($netAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getNetAddress()
    {
        return (!$this->netAddress) ?: $this->netAddress->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setPort($port = null)
    {
        $this->port = ($port InstanceOf Port1025)
             ? $port
             : new Port1025($port);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getPort()
    {
        return (!$this->port) ?: $this->port->getValue();
    }

    /**
     * Network Transport Protocol.
     */
    public function setTransportProtocol($transportProtocol = null)
    {
        $this->transportProtocol = ($transportProtocol InstanceOf TransportProtocol)
             ? $transportProtocol
             : new TransportProtocol($transportProtocol);
    }

    /**
     * Network Transport Protocol.
     */
    public function getTransportProtocol()
    {
        return (!$this->transportProtocol) ?: $this->transportProtocol->getValue();
    }

    /**
     * Route device description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf RouteDeviceDescription)
             ? $description
             : new RouteDeviceDescription($description);
    }

    /**
     * Route device description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
    }
}
