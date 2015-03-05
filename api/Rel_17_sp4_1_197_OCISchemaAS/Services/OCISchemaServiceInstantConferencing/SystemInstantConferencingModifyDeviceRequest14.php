<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingDeviceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingIntegratedDeviceModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify an Instant Conferencing device in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInstantConferencingModifyDeviceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $deviceName,
             $clusterNetAddress=null,
             $signalingPort=null,
             $description=null,
             $integrated=null,
             $transportProtocol=null
    ) {
        $this->deviceName        = new AccessDeviceName($deviceName);
        $this->clusterNetAddress = new NetAddress($clusterNetAddress);
        $this->signalingPort     = new Port1025($signalingPort);
        $this->description       = $description;
        $this->integrated        = $integrated;
        $this->transportProtocol = new TransportProtocol($transportProtocol);
        $this->args              = func_get_args();
    }

    public function setDeviceName($deviceName)
    {
        $deviceName and $this->deviceName = new AccessDeviceName($deviceName);
    }

    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->value();
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

    public function setIntegrated($integrated)
    {
        $integrated and $this->integrated = new InstantConferencingIntegratedDeviceModify($integrated);
    }

    public function getIntegrated()
    {
        return (!$this->integrated) ?: $this->integrated->value();
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
