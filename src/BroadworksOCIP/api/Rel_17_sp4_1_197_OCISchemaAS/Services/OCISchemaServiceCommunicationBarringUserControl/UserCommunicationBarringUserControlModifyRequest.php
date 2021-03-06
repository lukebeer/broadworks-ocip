<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicationBarringUserControl\CommunicationBarringUserControlProfileCode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Passcode;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Enabling a profile automatically disables the currently active profile.
 *         Also allows the passcode for the service to be modified and the lockout to be reset.
 *         Admins only need to populate the newPasscode field when changing the passcode.  
 *         Users must populate both the oldPasscode and new Passcode fields when changing the passcode.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserCommunicationBarringUserControlModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCommunicationBarringUserControlModifyRequest';
    protected $userId;
    protected $enableProfile;
    protected $oldPasscode;
    protected $newPasscode;
    protected $resetLockout;

    public function __construct(
         $userId = '',
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
     * @return mixed $response
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
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableProfile($enableProfile = null)
    {
        $this->enableProfile = ($enableProfile InstanceOf CommunicationBarringUserControlProfileCode)
             ? $enableProfile
             : new CommunicationBarringUserControlProfileCode($enableProfile);
        $this->enableProfile->setElementName('enableProfile');
        return $this;
    }

    /**
     * 
     * @return CommunicationBarringUserControlProfileCode $enableProfile
     */
    public function getEnableProfile()
    {
        return ($this->enableProfile)
            ? $this->enableProfile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOldPasscode($oldPasscode = null)
    {
        $this->oldPasscode = ($oldPasscode InstanceOf Passcode)
             ? $oldPasscode
             : new Passcode($oldPasscode);
        $this->oldPasscode->setElementName('oldPasscode');
        return $this;
    }

    /**
     * 
     * @return Passcode $oldPasscode
     */
    public function getOldPasscode()
    {
        return ($this->oldPasscode)
            ? $this->oldPasscode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNewPasscode($newPasscode = null)
    {
        $this->newPasscode = ($newPasscode InstanceOf Passcode)
             ? $newPasscode
             : new Passcode($newPasscode);
        $this->newPasscode->setElementName('newPasscode');
        return $this;
    }

    /**
     * 
     * @return Passcode $newPasscode
     */
    public function getNewPasscode()
    {
        return ($this->newPasscode)
            ? $this->newPasscode->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setResetLockout($resetLockout = null)
    {
        $this->resetLockout = new PrimitiveType($resetLockout);
        $this->resetLockout->setElementName('resetLockout');
        return $this;
    }

    /**
     * 
     * @return boolean $resetLockout
     */
    public function getResetLockout()
    {
        return ($this->resetLockout)
            ? $this->resetLockout->getElementValue()
            : null;
    }
}
