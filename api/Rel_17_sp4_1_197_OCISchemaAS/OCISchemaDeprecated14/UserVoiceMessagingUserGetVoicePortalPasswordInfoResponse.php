<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserVoiceMessagingUserGetVoicePortalPasswordInfoRequest.
 *         Replaced By: UserPortalPasscodeGetInfoResponse
 */
class UserVoiceMessagingUserGetVoicePortalPasswordInfoResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isLoginDisabled,
             $password
    ) {
        $this->isLoginDisabled = $isLoginDisabled;
        $this->password        = new Password($password);
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

    public function setPassword($password)
    {
        $password and $this->password = new Password($password);
    }

    public function getPassword()
    {
        return (!$this->password) ?: $this->password->value();
    }
}
