<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCommunicationBarringUserControl; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl\CommunicationBarringUserControlProfileCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Passcode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
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
    public    $name           = __CLASS__;
    protected $userId         = null;
    protected $enableProfile  = null;
    protected $oldPasscode    = null;
    protected $newPasscode    = null;
    protected $resetLockout   = null;

    public function __construct(
         $userId,
         $enableProfile = null,
         $oldPasscode = null,
         $newPasscode = null,
         $resetLockout = null
    ) {
        $this->setUserId($userId);
        $this->setEnableProfile($enableProfile);
        $this->setOldPasscode($oldPasscode);
        $this->setNewPasscode($newPasscode);
        $this->setResetLockout($resetLockout);
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

    public function setEnableProfile($enableProfile = null)
    {
        $this->enableProfile = ($enableProfile InstanceOf CommunicationBarringUserControlProfileCode)
             ? $enableProfile
             : new CommunicationBarringUserControlProfileCode($enableProfile);
    }

    public function getEnableProfile()
    {
        return (!$this->enableProfile) ?: $this->enableProfile->value();
    }

    public function setOldPasscode($oldPasscode = null)
    {
        $this->oldPasscode = ($oldPasscode InstanceOf Passcode)
             ? $oldPasscode
             : new Passcode($oldPasscode);
    }

    public function getOldPasscode()
    {
        return (!$this->oldPasscode) ?: $this->oldPasscode->value();
    }

    public function setNewPasscode($newPasscode = null)
    {
        $this->newPasscode = ($newPasscode InstanceOf Passcode)
             ? $newPasscode
             : new Passcode($newPasscode);
    }

    public function getNewPasscode()
    {
        return (!$this->newPasscode) ?: $this->newPasscode->value();
    }

    public function setResetLockout(xs:boolean $resetLockout = null)
    {
    }

    public function getResetLockout()
    {
        return (!$this->resetLockout) ?: $this->resetLockout->value();
    }
}
