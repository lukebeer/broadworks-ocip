<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user id of a real or virtual user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserModifyUserIdRequest extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $userId     = null;
    protected $newUserId  = null;

    public function __construct(
         $userId,
         $newUserId
    ) {
        $this->setUserId($userId);
        $this->setNewUserId($newUserId);
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

    public function setNewUserId($newUserId = null)
    {
        $this->newUserId = ($newUserId InstanceOf UserId)
             ? $newUserId
             : new UserId($newUserId);
    }

    public function getNewUserId()
    {
        return (!$this->newUserId) ?: $this->newUserId->value();
    }
}
