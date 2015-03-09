<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Passcode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserPortalPasscodeGetInfoResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserPortalPasscodeGetInfoRequest.
 */
class UserPortalPasscodeGetInfoResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $isLoginDisabled = null;
    protected $passcode        = null;

    /**
     * @return UserPortalPasscodeGetInfoResponse
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
        $this->isLoginDisabled = (boolean) $isLoginDisabled;
    }

    /**
     * 
     */
    public function getIsLoginDisabled()
    {
        return (!$this->isLoginDisabled) ?: $this->isLoginDisabled;
    }

    /**
     * Portal passcode
     */
    public function setPasscode($passcode = null)
    {
        $this->passcode = ($passcode InstanceOf Passcode)
             ? $passcode
             : new Passcode($passcode);
    }

    /**
     * Portal passcode
     */
    public function getPasscode()
    {
        return (!$this->passcode) ?: $this->passcode->getValue();
    }
}
