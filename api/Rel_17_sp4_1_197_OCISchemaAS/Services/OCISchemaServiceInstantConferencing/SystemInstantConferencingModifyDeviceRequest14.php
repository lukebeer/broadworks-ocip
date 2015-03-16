<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingIntegratedDeviceModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingDeviceDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TransportProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port1025;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify an Instant Conferencing device in the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemInstantConferencingModifyDeviceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemInstantConferencingModifyDeviceRequest14';
    protected $deviceName;
    protected $clusterNetAddress;
    protected $signalingPort;
    protected $description;
    protected $integrated;
    protected $transportProtocol;

    public function __construct(
         $deviceName = '',
         $clusterNetAddress = null,
         $signalingPort = null,
         $description = null,
         $integrated = null,
         $transportProtocol = null
    ) {
        $this->setDeviceName($deviceName);
        $this->setClusterNetAddress($clusterNetAddress);
        $this->setSignalingPort($signalingPort);
        $this->setDescription($description);
        $this->setIntegrated($integrated);
        $this->setTransportProtocol($transportProtocol);
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
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
        $this->deviceName->setName('deviceName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceName $deviceName
     */
    public function getDeviceName()
    {
        return ($this->deviceName) ? $this->deviceName->getValue() : null;
    }

    /**
     * 
     */
    public function setClusterNetAddress($clusterNetAddress = null)
    {
        $this->clusterNetAddress = ($clusterNetAddress InstanceOf NetAddress)
             ? $clusterNetAddress
             : new NetAddress($clusterNetAddress);
        $this->clusterNetAddress->setName('clusterNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $clusterNetAddress
     */
    public function getClusterNetAddress()
    {
        return ($this->clusterNetAddress) ? $this->clusterNetAddress->getValue() : null;
    }

    /**
     * 
     */
    public function setSignalingPort($signalingPort = null)
    {
        $this->signalingPort = ($signalingPort InstanceOf Port1025)
             ? $signalingPort
             : new Port1025($signalingPort);
        $this->signalingPort->setName('signalingPort');
        return $this;
    }

    /**
     * 
     * @return Port1025 $signalingPort
     */
    public function getSignalingPort()
    {
        return ($this->signalingPort) ? $this->signalingPort->getValue() : null;
    }

    /**
     * 
     */
    public function setDescription($description = null)
    {
        $this->description = ($description InstanceOf InstantConferencingDeviceDescription)
             ? $description
             : new InstantConferencingDeviceDescription($description);
        $this->description->setName('description');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingDeviceDescription $description
     */
    public function getDescription()
    {
        return ($this->description) ? $this->description->getValue() : null;
    }

    /**
     * 
     */
    public function setIntegrated(InstantConferencingIntegratedDeviceModify $integrated = null)
    {
        $this->integrated = ($integrated InstanceOf InstantConferencingIntegratedDeviceModify)
             ? $integrated
             : new InstantConferencingIntegratedDeviceModify($integrated);
        $this->integrated->setName('integrated');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingIntegratedDeviceModify $integrated
     */
    public function getIntegrated()
    {
        return $this->integrated;
    }

    /**
     * 
     */
    public function setTransportProtocol($transportProtocol = null)
    {
        $this->transportProtocol = ($transportProtocol InstanceOf TransportProtocol)
             ? $transportProtocol
             : new TransportProtocol($transportProtocol);
        $this->transportProtocol->setName('transportProtocol');
        return $this;
    }

    /**
     * 
     * @return TransportProtocol $transportProtocol
     */
    public function getTransportProtocol()
    {
        return ($this->transportProtocol) ? $this->transportProtocol->getValue() : null;
    }
}
