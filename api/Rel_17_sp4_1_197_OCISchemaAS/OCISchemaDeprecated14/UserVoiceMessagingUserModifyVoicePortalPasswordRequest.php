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


/**
 * Modify the user's Voice Portal password
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 *         Replaced By: UserPortalPasscodeModifyRequest
 */
class UserVoiceMessagingUserModifyVoicePortalPasswordRequest extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $userId       = null;
    protected $oldPassword  = null;
    protected $newPassword  = null;

    public function __construct(
         $userId,
         $oldPassword = null,
         $newPassword
    ) {
        $this->setUserId($userId);
        $this->setOldPassword($oldPassword);
        $this->setNewPassword($newPassword);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setOldPassword($oldPassword = null)
    {
        $this->oldPassword = ($oldPassword InstanceOf Password)
             ? $oldPassword
             : new Password($oldPassword);
    }

    public function getOldPassword()
    {
        return (!$this->oldPassword) ?: $this->oldPassword->value();
    }

    public function setNewPassword($newPassword = null)
    {
        $this->newPassword = ($newPassword InstanceOf Password)
             ? $newPassword
             : new Password($newPassword);
    }

    public function getNewPassword()
    {
        return (!$this->newPassword) ?: $this->newPassword->value();
    }
}
