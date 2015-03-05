<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify attributes for line/ports assigned on the service provider device profile.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderAccessDeviceModifyUserRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $deviceName,
             $linePort,
             $isPrimaryLinePort=null
    ) {
        $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
        $this->deviceName        = new AccessDeviceName($deviceName);
        $this->linePort          = new AccessDeviceEndpointLinePort($linePort);
        $this->isPrimaryLinePort = $isPrimaryLinePort;
        $this->args              = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setDeviceName($deviceName)
    {
        $deviceName and $this->deviceName = new AccessDeviceName($deviceName);
    }

    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->value();
    }

    public function setLinePort($linePort)
    {
        $linePort and $this->linePort = new AccessDeviceEndpointLinePort($linePort);
    }

    public function getLinePort()
    {
        return (!$this->linePort) ?: $this->linePort->value();
    }

    public function setIsPrimaryLinePort($isPrimaryLinePort)
    {
        $isPrimaryLinePort and $this->isPrimaryLinePort = new xs:boolean($isPrimaryLinePort);
    }

    public function getIsPrimaryLinePort()
    {
        return (!$this->isPrimaryLinePort) ?: $this->isPrimaryLinePort->value();
    }
}
