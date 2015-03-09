<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotCallManager; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommPilotCallManager\UserCommPilotCallManagerGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCommPilotCallManagerGetRequest.
 */
class UserCommPilotCallManagerGetResponse extends ComplexType implements ComplexInterface
{
    public    $name          = __CLASS__;
    protected $launchOnLogin = null;

    /**
     * @return UserCommPilotCallManagerGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setLaunchOnLogin($launchOnLogin = null)
    {
        $this->launchOnLogin = (boolean) $launchOnLogin;
    }

    /**
     * 
     */
    public function getLaunchOnLogin()
    {
        return (!$this->launchOnLogin) ?: $this->launchOnLogin;
    }
}
