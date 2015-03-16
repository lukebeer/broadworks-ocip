<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * AuthenticationVerifyRequest is used to authenticate a user using the user Id and password. The response is a AuthenticationVerifyResponse or an ErrorResponse
 *         Replaced By: AuthenticationVerifyRequest14sp8
 */
class AuthenticationVerifyRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\AuthenticationVerifyResponse';
    public    $name = 'AuthenticationVerifyRequest';
    protected $userId;
    protected $password;

    public function __construct(
         $userId = '',
         $password = ''
    ) {
        $this->setUserId($userId);
        $this->setPassword($password);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\AuthenticationVerifyResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        $this->password = ($password InstanceOf Password)
             ? $password
             : new Password($password);
        $this->password->setName('password');
        return $this;
    }

    /**
     * 
     * @return Password $password
     */
    public function getPassword()
    {
        return ($this->password) ? $this->password->getValue() : null;
    }
}
