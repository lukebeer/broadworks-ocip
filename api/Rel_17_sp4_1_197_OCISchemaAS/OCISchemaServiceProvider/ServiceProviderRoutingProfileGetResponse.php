<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutingProfile;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderRoutingProfileGetRequest.
 */
class ServiceProviderRoutingProfileGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $routingProfile=null
    ) {
        $this->routingProfile = new RoutingProfile($routingProfile);
        $this->args           = func_get_args();
    }

    public function setRoutingProfile($routingProfile)
    {
        $routingProfile and $this->routingProfile = new RoutingProfile($routingProfile);
    }

    public function getRoutingProfile()
    {
        return (!$this->routingProfile) ?: $this->routingProfile->value();
    }
}
