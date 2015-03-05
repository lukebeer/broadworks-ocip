<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the password for a user/administrator.
 *         When oldPassword is specified, password rule applies. If oldPassword in not specified,
 *         any password rule related to old password does not apply.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class PasswordModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $oldPassword=null,
             $newPassword
    ) {
        $this->userId      = new UserId($userId);
        $this->oldPassword = new Password($oldPassword);
        $this->newPassword = new Password($newPassword);
        $this->args        = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setOldPassword($oldPassword)
    {
        $oldPassword and $this->oldPassword = new Password($oldPassword);
    }

    public function getOldPassword()
    {
        return (!$this->oldPassword) ?: $this->oldPassword->value();
    }

    public function setNewPassword($newPassword)
    {
        $newPassword and $this->newPassword = new Password($newPassword);
    }

    public function getNewPassword()
    {
        return (!$this->newPassword) ?: $this->newPassword->value();
    }
}
