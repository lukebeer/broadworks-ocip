<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SMDIServerRouteDestination;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SMDIDeviceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add a SMDI Server route to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMDIMessageDeskAddServerRouteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $routeDestination,
             $deviceName
    ) {
        $this->routeDestination = $routeDestination;
        $this->deviceName       = $deviceName;
        $this->args             = func_get_args();
    }

    public function setRouteDestination($routeDestination)
    {
        $routeDestination and $this->routeDestination = new SMDIServerRouteDestination($routeDestination);
    }

    public function getRouteDestination()
    {
        return (!$this->routeDestination) ?: $this->routeDestination->value();
    }

    public function setDeviceName($deviceName)
    {
        $deviceName and $this->deviceName = new SMDIDeviceName($deviceName);
    }

    public function getDeviceName()
    {
        return (!$this->deviceName) ?: $this->deviceName->value();
    }
}
