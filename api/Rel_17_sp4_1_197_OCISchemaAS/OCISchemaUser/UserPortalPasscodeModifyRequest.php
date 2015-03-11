<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Passcode;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's Portal passcode
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPortalPasscodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name        = 'UserPortalPasscodeModifyRequest';
    protected $userId      = null;
    protected $oldPasscode = null;
    protected $newPasscode = null;

    public function __construct(
         $userId,
         $oldPasscode = null,
         $newPasscode
    ) {
        $this->setUserId($userId);
        $this->setOldPasscode($oldPasscode);
        $this->setNewPasscode($newPasscode);
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
}
