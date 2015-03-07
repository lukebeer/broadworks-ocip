<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Passcode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserPortalPasscodeGetInfoRequest.
 */
class UserPortalPasscodeGetInfoResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $isLoginDisabled  = null;
    protected $passcode         = null;


    public function setIsLoginDisabled(xs:boolean $isLoginDisabled = null)
    {
    }

    public function getIsLoginDisabled()
    {
        return (!$this->isLoginDisabled) ?: $this->isLoginDisabled->value();
    }

    public function setPasscode($passcode = null)
    {
        $this->passcode = ($passcode InstanceOf Passcode)
             ? $passcode
             : new Passcode($passcode);
    }

    public function getPasscode()
    {
        return (!$this->passcode) ?: $this->passcode->value();
    }
}
