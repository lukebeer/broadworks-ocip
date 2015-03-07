<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIServerRouteDestination;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Replace the list of devices associated with a SMDI server route destination.
 *         There must be at least one device in the list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMDIMessageDeskModifyServerRouteRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $routeDestination  = null;
    protected $deviceNameList    = null;

    public function __construct(
         $routeDestination,
         $deviceNameList = null
    ) {
        $this->setRouteDestination($routeDestination);
        $this->setDeviceNameList($deviceNameList);
    }

    public function setRouteDestination($routeDestination = null)
    {
        $this->routeDestination = ($routeDestination InstanceOf SMDIServerRouteDestination)
             ? $routeDestination
             : new SMDIServerRouteDestination($routeDestination);
    }

    public function getRouteDestination()
    {
        return (!$this->routeDestination) ?: $this->routeDestination->value();
    }

    public function setDeviceNameList($deviceNameList = null)
    {
        $this->deviceNameList = $deviceNameList;
    }

    public function getDeviceNameList()
    {
        return (!$this->deviceNameList) ?: $this->deviceNameList->value();
    }
}
