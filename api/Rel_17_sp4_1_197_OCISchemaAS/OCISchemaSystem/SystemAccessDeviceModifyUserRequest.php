<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify attributes for line/ports assigned on the system device profile.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAccessDeviceModifyUserRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $deviceName         = null;
    protected $linePort           = null;
    protected $isPrimaryLinePort  = null;

    public function __construct(
         $deviceName,
         $linePort,
         $isPrimaryLinePort = null
    ) {
        $this->setDeviceName($deviceName);
        $this->setLinePort($linePort);
        $this->setIsPrimaryLinePort($isPrimaryLinePort);
    }

    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
    }

    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->value();
    }

    public function setLinePort($linePort = null)
    {
        $this->linePort = ($linePort InstanceOf AccessDeviceEndpointLinePort)
             ? $linePort
             : new AccessDeviceEndpointLinePort($linePort);
    }

    public function getLinePort()
    {
        return (!$this->linePort) ?: $this->linePort->value();
    }

    public function setIsPrimaryLinePort(xs:boolean $isPrimaryLinePort = null)
    {
    }

    public function getIsPrimaryLinePort()
    {
        return (!$this->isPrimaryLinePort) ?: $this->isPrimaryLinePort->value();
    }
}
