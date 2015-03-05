<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Passcode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserPortalPasscodeGetInfoRequest.
 */
class UserPortalPasscodeGetInfoResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isLoginDisabled,
             $passcode
    ) {
        $this->isLoginDisabled = $isLoginDisabled;
        $this->passcode        = new Passcode($passcode);
        $this->args            = func_get_args();
    }

    public function setIsLoginDisabled($isLoginDisabled)
    {
        $isLoginDisabled and $this->isLoginDisabled = new xs:boolean($isLoginDisabled);
    }

    public function getIsLoginDisabled()
    {
        return (!$this->isLoginDisabled) ?: $this->isLoginDisabled->value();
    }

    public function setPasscode($passcode)
    {
        $passcode and $this->passcode = new Passcode($passcode);
    }

    public function getPasscode()
    {
        return (!$this->passcode) ?: $this->passcode->value();
    }
}
