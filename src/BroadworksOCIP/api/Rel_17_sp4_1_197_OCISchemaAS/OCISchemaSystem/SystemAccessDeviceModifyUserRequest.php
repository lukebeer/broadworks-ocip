<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify attributes for line/ports assigned on the system device profile.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAccessDeviceModifyUserRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccessDeviceModifyUserRequest';
    protected $deviceName;
    protected $linePort;
    protected $isPrimaryLinePort;

    public function __construct(
         $deviceName = '',
         $linePort = '',
         $isPrimaryLinePort = null
    ) {
        $this->setDeviceName($deviceName);
        $this->setLinePort($linePort);
        $this->setIsPrimaryLinePort($isPrimaryLinePort);
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
        $this->deviceName->setElementName('deviceName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceName $deviceName
     */
    public function getDeviceName()
    {
        return ($this->deviceName)
            ? $this->deviceName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setLinePort($linePort = null)
    {
        $this->linePort = ($linePort InstanceOf AccessDeviceEndpointLinePort)
             ? $linePort
             : new AccessDeviceEndpointLinePort($linePort);
        $this->linePort->setElementName('linePort');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointLinePort $linePort
     */
    public function getLinePort()
    {
        return ($this->linePort)
            ? $this->linePort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIsPrimaryLinePort($isPrimaryLinePort = null)
    {
        $this->isPrimaryLinePort = new PrimitiveType($isPrimaryLinePort);
        $this->isPrimaryLinePort->setElementName('isPrimaryLinePort');
        return $this;
    }

    /**
     * 
     * @return boolean $isPrimaryLinePort
     */
    public function getIsPrimaryLinePort()
    {
        return ($this->isPrimaryLinePort)
            ? $this->isPrimaryLinePort->getElementValue()
            : null;
    }
}
