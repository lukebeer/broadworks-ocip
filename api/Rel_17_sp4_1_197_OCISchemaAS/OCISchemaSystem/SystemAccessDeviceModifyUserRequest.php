<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify attributes for line/ports assigned on the system device profile.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAccessDeviceModifyUserRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemAccessDeviceModifyUserRequest';
    protected $deviceName        = null;
    protected $linePort          = null;
    protected $isPrimaryLinePort = null;

    public function __construct(
         $deviceName,
         $linePort,
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
        if (!$deviceName) return $this;
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
        return $this->deviceName->getValue();
    }

    /**
     * 
     */
    public function setLinePort($linePort = null)
    {
        if (!$linePort) return $this;
        $this->linePort = ($linePort InstanceOf AccessDeviceEndpointLinePort)
             ? $linePort
             : new AccessDeviceEndpointLinePort($linePort);
        $this->linePort->setName('linePort');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointLinePort $linePort
     */
    public function getLinePort()
    {
        return $this->linePort->getValue();
    }

    /**
     * 
     */
    public function setIsPrimaryLinePort($isPrimaryLinePort = null)
    {
        if (!$isPrimaryLinePort) return $this;
        $this->isPrimaryLinePort = new PrimitiveType($isPrimaryLinePort);
        $this->isPrimaryLinePort->setName('isPrimaryLinePort');
        return $this;
    }

    /**
     * 
     * @return boolean $isPrimaryLinePort
     */
    public function getIsPrimaryLinePort()
    {
        return $this->isPrimaryLinePort->getValue();
    }
}
