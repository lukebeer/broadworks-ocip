<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommunicationBarringUserControl; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CommunicationBarringUserControlProfileCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Passcode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Enabling a profile automatically disables the currently active profile.
 *         Also allows the passcode for the service to be modified and the lockout to be reset.
 *         Admins only need to populate the newPasscode field when changing the passcode.  
 *         Users must populate both the oldPasscode and new Passcode fields when changing the passcode.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserCommunicationBarringUserControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $enableProfile=null,
             $oldPasscode=null,
             $newPasscode=null,
             $resetLockout=null
    ) {
        $this->userId        = new UserId($userId);
        $this->enableProfile = $enableProfile;
        $this->oldPasscode   = new Passcode($oldPasscode);
        $this->newPasscode   = new Passcode($newPasscode);
        $this->resetLockout  = $resetLockout;
        $this->args          = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setEnableProfile($enableProfile)
    {
        $enableProfile and $this->enableProfile = new CommunicationBarringUserControlProfileCode($enableProfile);
    }

    public function getEnableProfile()
    {
        return (!$this->enableProfile) ?: $this->enableProfile->value();
    }

    public function setOldPasscode($oldPasscode)
    {
        $oldPasscode and $this->oldPasscode = new Passcode($oldPasscode);
    }

    public function getOldPasscode()
    {
        return (!$this->oldPasscode) ?: $this->oldPasscode->value();
    }

    public function setNewPasscode($newPasscode)
    {
        $newPasscode and $this->newPasscode = new Passcode($newPasscode);
    }

    public function getNewPasscode()
    {
        return (!$this->newPasscode) ?: $this->newPasscode->value();
    }

    public function setResetLockout($resetLockout)
    {
        $resetLockout and $this->resetLockout = new xs:boolean($resetLockout);
    }

    public function getResetLockout()
    {
        return (!$this->resetLockout) ?: $this->resetLockout->value();
    }
}
