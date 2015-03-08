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
     * Request to delete a SMDI Server route from the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMDIMessageDeskDeleteServerRouteRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $routeDestination = null;

    public function __construct(
         $routeDestination
    ) {
        $this->setRouteDestination($routeDestination);
    }

    /**
     * SMDI server route destination, a 3 to 10 digits number
     */
    public function setRouteDestination($routeDestination = null)
    {
        $this->routeDestination = ($routeDestination InstanceOf SMDIServerRouteDestination)
             ? $routeDestination
             : new SMDIServerRouteDestination($routeDestination);
    }

    /**
     * SMDI server route destination, a 3 to 10 digits number
     */
    public function getRouteDestination()
    {
        return (!$this->routeDestination) ?: $this->routeDestination->getValue();
    }
}
