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
    const     RESPONSE_TYPE   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderRoutingProfileGetResponse';
    public    $name           = __CLASS__;
    protected $routingProfile = null;


    /**
     * Routing Profile.
     */
    public function setRoutingProfile($routingProfile = null)
    {
        $this->routingProfile = ($routingProfile InstanceOf RoutingProfile)
             ? $routingProfile
             : new RoutingProfile($routingProfile);
    }

    /**
     * Routing Profile.
     */
    public function getRoutingProfile()
    {
        return (!$this->routingProfile) ?: $this->routingProfile->getValue();
    }
}
