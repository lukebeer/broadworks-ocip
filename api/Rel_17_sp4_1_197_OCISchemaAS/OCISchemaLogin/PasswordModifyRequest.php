<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaLogin; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the password for a user/administrator.
 *         When oldPassword is specified, password rule applies. If oldPassword in not specified,
 *         any password rule related to old password does not apply.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class PasswordModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name        = 'PasswordModifyRequest';
    protected $userId      = null;
    protected $oldPassword = null;
    protected $newPassword = null;

    public function __construct(
         $userId,
         $oldPassword = null,
         $newPassword
    ) {
        $this->setUserId($userId);
        $this->setOldPassword($oldPassword);
        $this->setNewPassword($newPassword);
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
        if (!$userId) return $this;
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setOldPassword($oldPassword = null)
    {
        if (!$oldPassword) return $this;
        $this->oldPassword = ($oldPassword InstanceOf Password)
             ? $oldPassword
             : new Password($oldPassword);
        $this->oldPassword->setName('oldPassword');
        return $this;
    }

    /**
     * 
     * @return Password $oldPassword
     */
    public function getOldPassword()
    {
        return $this->oldPassword->getValue();
    }

    /**
     * 
     */
    public function setNewPassword($newPassword = null)
    {
        if (!$newPassword) return $this;
        $this->newPassword = ($newPassword InstanceOf Password)
             ? $newPassword
             : new Password($newPassword);
        $this->newPassword->setName('newPassword');
        return $this;
    }

    /**
     * 
     * @return Password $newPassword
     */
    public function getNewPassword()
    {
        return $this->newPassword->getValue();
    }
}
