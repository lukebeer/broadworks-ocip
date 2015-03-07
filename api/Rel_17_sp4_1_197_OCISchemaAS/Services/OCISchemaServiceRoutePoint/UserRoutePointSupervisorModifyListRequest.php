<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify the Route Point supervisor list for a user.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class UserRoutePointSupervisorModifyListRequest extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $userId                = null;
    protected $supervisorUserIdList  = null;

    public function __construct(
         $userId,
         ReplacementUserIdList $supervisorUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setSupervisorUserIdList($supervisorUserIdList);
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

    public function setSupervisorUserIdList(ReplacementUserIdList $supervisorUserIdList = null)
    {
    }

    public function getSupervisorUserIdList()
    {
        return (!$this->supervisorUserIdList) ?: $this->supervisorUserIdList->value();
    }
}
