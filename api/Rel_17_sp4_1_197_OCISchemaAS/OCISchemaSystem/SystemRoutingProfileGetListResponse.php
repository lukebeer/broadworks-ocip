<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutingProfile;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemRoutingProfileGetListRequest.  
 *         Returns a list of routing profiles defined in the system.
 */
class SystemRoutingProfileGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $routingProfile  = null;


    public function setRoutingProfile($routingProfile = null)
    {
        $this->routingProfile = ($routingProfile InstanceOf RoutingProfile)
             ? $routingProfile
             : new RoutingProfile($routingProfile);
    }

    public function getRoutingProfile()
    {
        return (!$this->routingProfile) ?: $this->routingProfile->value();
    }
}
