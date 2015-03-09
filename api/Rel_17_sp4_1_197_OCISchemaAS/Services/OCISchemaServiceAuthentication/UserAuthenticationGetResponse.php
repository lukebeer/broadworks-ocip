<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAuthentication; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAuthentication\UserAuthenticationGetResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the UserAuthenticationGetRequest.
 */
class UserAuthenticationGetResponse extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $userName = null;

    /**
     * @return UserAuthenticationGetResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * SIP Authentication User Name.
     */
    public function setUserName($userName = null)
    {
        $this->userName = ($userName InstanceOf SIPAuthenticationUserName)
             ? $userName
             : new SIPAuthenticationUserName($userName);
    }

    /**
     * SIP Authentication User Name.
     */
    public function getUserName()
    {
        return (!$this->userName) ?: $this->userName->getValue();
    }
}
