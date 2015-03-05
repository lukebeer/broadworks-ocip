<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingDeviceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemInstantConferencingGetDeviceRequest14.
 */
class SystemInstantConferencingGetDeviceResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $clusterNetAddress=null,
             $signalingPort=null,
             $description=null,
             $transportProtocol
    ) {
        $this->clusterNetAddress = new NetAddress($clusterNetAddress);
        $this->signalingPort     = new Port1025($signalingPort);
        $this->description       = $description;
        $this->transportProtocol = new TransportProtocol($transportProtocol);
        $this->args              = func_get_args();
    }

    public function setClusterNetAddress($clusterNetAddress)
    {
        $clusterNetAddress and $this->clusterNetAddress = new NetAddress($clusterNetAddress);
    }

    public function getClusterNetAddress()
    {
        return (!$this->clusterNetAddress) ?: $this->clusterNetAddress->value();
    }

    public function setSignalingPort($signalingPort)
    {
        $signalingPort and $this->signalingPort = new Port1025($signalingPort);
    }

    public function getSignalingPort()
    {
        return (!$this->signalingPort) ?: $this->signalingPort->value();
    }

    public function setDescription($description)
    {
        $description and $this->description = new InstantConferencingDeviceDescription($description);
    }

    public function getDescription()
    {
        return (!$this->description) ?: $this->description->value();
    }

    public function setTransportProtocol($transportProtocol)
    {
        $transportProtocol and $this->transportProtocol = new TransportProtocol($transportProtocol);
    }

    public function getTransportProtocol()
    {
        return (!$this->transportProtocol) ?: $this->transportProtocol->value();
    }
}
