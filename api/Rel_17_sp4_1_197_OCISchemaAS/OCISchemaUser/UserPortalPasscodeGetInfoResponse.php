<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserPortalPasscodeGetInfoRequest.
 */
class UserPortalPasscodeGetInfoResponse extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserPortalPasscodeGetInfoResponse';
    protected $isLoginDisabled = null;
    protected $passcode        = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPortalPasscodeGetInfoResponse $response
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
    public function setPasscode($passcode = null)
    {
        if (!$passcode) return $this;
        $this->passcode = ($passcode InstanceOf Passcode)
             ? $passcode
             : new Passcode($passcode);
        $this->passcode->setName('passcode');
        return $this;
    }

    /**
     * 
     * @return Passcode $passcode
     */
    public function getPasscode()
    {
        return $this->passcode->getValue();
    }
}
