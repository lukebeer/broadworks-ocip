<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDeviceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemInstantConferencingGetDeviceRequest14.
 */
class SystemInstantConferencingGetDeviceResponse14 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing\SystemInstantConferencingGetDeviceResponse14';
    public    $name              = __CLASS__;
    protected $clusterNetAddress = null;
    protected $signalingPort     = null;
    protected $description       = null;
    protected $transportProtocol = null;


    /**
     * IP Address, hostname, or domain.
     */
    public function setClusterNetAddress($clusterNetAddress = null)
    {
        $this->clusterNetAddress = ($clusterNetAddress InstanceOf NetAddress)
             ? $clusterNetAddress
             : new NetAddress($clusterNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getClusterNetAddress()
    {
        return (!$this->clusterNetAddress) ?: $this->clusterNetAddress->getValue();
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function setSignalingPort($signalingPort = null)
    {
        $this->signalingPort = ($signalingPort InstanceOf Port1025)
             ? $signalingPort
             : new Port1025($signalingPort);
    }

    /**
     * TCP/IP Port number above the well-known range.
     */
    public function getSignalingPort()
    {
        return (!$this->signalingPort) ?: $this->signalingPort->getValue();
    }

    /**
     * Instant Conferencing device description.
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf InstantConferencingDeviceDescription)
             ? $description
             : new InstantConferencingDeviceDescription($description);
    }

    /**
     * Instant Conferencing device description.
     */
    public function getDescription()
    {
        return (!$this->description) ?: $this->description->getValue();
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
}
