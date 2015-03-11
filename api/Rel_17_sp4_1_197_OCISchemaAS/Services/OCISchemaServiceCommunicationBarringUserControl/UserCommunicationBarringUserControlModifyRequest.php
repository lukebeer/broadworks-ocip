<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl\CommunicationBarringUserControlProfileCode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Passcode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Enabling a profile automatically disables the currently active profile.
 *         Also allows the passcode for the service to be modified and the lockout to be reset.
 *         Admins only need to populate the newPasscode field when changing the passcode.  
 *         Users must populate both the oldPasscode and new Passcode fields when changing the passcode.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserCommunicationBarringUserControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name          = 'UserCommunicationBarringUserControlModifyRequest';
    protected $userId        = null;
    protected $enableProfile = null;
    protected $oldPasscode   = null;
    protected $newPasscode   = null;
    protected $resetLockout  = null;

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

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setEnableProfile($enableProfile = null)
    {
        if (!$enableProfile) return $this;
        $this->enableProfile = ($enableProfile InstanceOf CommunicationBarringUserControlProfileCode)
             ? $enableProfile
             : new CommunicationBarringUserControlProfileCode($enableProfile);
        $this->enableProfile->setName('enableProfile');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringUserControlProfileCode
     */
    public function getEnableProfile()
    {
        return $this->enableProfile->getValue();
    }

    /**
     * 
     */
    public function setOldPasscode($oldPasscode = null)
    {
        if (!$oldPasscode) return $this;
        $this->oldPasscode = ($oldPasscode InstanceOf Passcode)
             ? $oldPasscode
             : new Passcode($oldPasscode);
        $this->oldPasscode->setName('oldPasscode');
        return $this;
    }

    /**
     * 
     * @return Passcode
     */
    public function getOldPasscode()
    {
        return $this->oldPasscode->getValue();
    }

    /**
     * 
     */
    public function setNewPasscode($newPasscode = null)
    {
        if (!$newPasscode) return $this;
        $this->newPasscode = ($newPasscode InstanceOf Passcode)
             ? $newPasscode
             : new Passcode($newPasscode);
        $this->newPasscode->setName('newPasscode');
        return $this;
    }

    /**
     * 
     * @return Passcode
     */
    public function getNewPasscode()
    {
        return $this->newPasscode->getValue();
    }

    /**
     * 
     */
    public function setResetLockout($resetLockout = null)
    {
        if (!$resetLockout) return $this;
        $this->resetLockout = new PrimitiveType($resetLockout);
        $this->resetLockout->setName('resetLockout');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getResetLockout()
    {
        return $this->resetLockout->getValue();
    }
}
