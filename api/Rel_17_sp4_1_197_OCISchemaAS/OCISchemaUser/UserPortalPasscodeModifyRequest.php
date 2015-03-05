<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Passcode;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's Portal passcode
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPortalPasscodeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $oldPasscode=null,
             $newPasscode
    ) {
        $this->userId      = new UserId($userId);
        $this->oldPasscode = new Passcode($oldPasscode);
        $this->newPasscode = new Passcode($newPasscode);
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
}
