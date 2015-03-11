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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemRoutingProfileGetListRequest.  
 *         Returns a list of routing profiles defined in the system.
 */
class SystemRoutingProfileGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name           = 'SystemRoutingProfileGetListResponse';
    protected $routingProfile = null;

    /**
     * @return SystemRoutingProfileGetListResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setRoutingProfile($routingProfile = null)
    {
        if (!$routingProfile) return $this;
        $this->routingProfile = ($routingProfile InstanceOf RoutingProfile)
             ? $routingProfile
             : new RoutingProfile($routingProfile);
        $this->routingProfile->setName('routingProfile');
        return $this;
    }

    /**
     * 
     * @return RoutingProfile
     */
    public function getRoutingProfile()
    {
        return $this->routingProfile->getValue();
    }
}
