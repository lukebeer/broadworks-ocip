<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SMDIServerRouteDestination;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Replace the list of devices associated with a SMDI server route destination.
 *         There must be at least one device in the list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMDIMessageDeskModifyServerRouteRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $routeDestination,
             $deviceNameList=null
    ) {
        $this->routeDestination = $routeDestination;
        $this->deviceNameList   = $deviceNameList;
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

    public function setDeviceNameList($deviceNameList)
    {
        $deviceNameList and $this->deviceNameList = new ($deviceNameList);
    }

    public function getDeviceNameList()
    {
        return (!$this->deviceNameList) ?: $this->deviceNameList->value();
    }
}
