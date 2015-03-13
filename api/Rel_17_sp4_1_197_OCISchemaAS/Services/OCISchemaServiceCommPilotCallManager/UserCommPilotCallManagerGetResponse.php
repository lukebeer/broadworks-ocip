<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotCallManager; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserCommPilotCallManagerGetRequest.
 */
class UserCommPilotCallManagerGetResponse extends ComplexType implements ComplexInterface
{
    public    $name          = 'UserCommPilotCallManagerGetResponse';
    protected $launchOnLogin = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotCallManager\UserCommPilotCallManagerGetResponse $response
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
        if (!$launchOnLogin) return $this;
        $this->launchOnLogin = new PrimitiveType($launchOnLogin);
        $this->launchOnLogin->setName('launchOnLogin');
        return $this;
    }

    /**
     * 
     * @return boolean $launchOnLogin
     */
    public function getLaunchOnLogin()
    {
        return $this->launchOnLogin->getValue();
    }
}
