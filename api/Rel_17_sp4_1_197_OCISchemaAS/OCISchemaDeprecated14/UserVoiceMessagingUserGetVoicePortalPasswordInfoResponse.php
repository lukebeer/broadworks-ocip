<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserVoiceMessagingUserGetVoicePortalPasswordInfoRequest.
 *         Replaced By: UserPortalPasscodeGetInfoResponse
 */
class UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse';
    protected $isLoginDisabled = null;
    protected $password        = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsLoginDisabled($isLoginDisabled = null)
    {
        if (!$isLoginDisabled) return $this;
        $this->isLoginDisabled = new PrimitiveType($isLoginDisabled);
        $this->isLoginDisabled->setName('isLoginDisabled');
        return $this;
    }

    /**
     * 
     * @return boolean $isLoginDisabled
     */
    public function getIsLoginDisabled()
    {
        return $this->isLoginDisabled->getValue();
    }

    /**
     * 
     */
    public function setPassword($password = null)
    {
        if (!$password) return $this;
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
        return $this->password->getValue();
    }
}
