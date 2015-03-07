<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAttendantConsole; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add users to the Attendant Console monitored users list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAttendantConsoleAddUserListRequest extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $userId           = null;
    protected $monitoredUserId  = null;

    public function __construct(
         $userId,
         $monitoredUserId = null
    ) {
        $this->setUserId($userId);
        $this->setMonitoredUserId($monitoredUserId);
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

    public function setMonitoredUserId($monitoredUserId = null)
    {
        $this->monitoredUserId = ($monitoredUserId InstanceOf UserId)
             ? $monitoredUserId
             : new UserId($monitoredUserId);
    }

    public function getMonitoredUserId()
    {
        return (!$this->monitoredUserId) ?: $this->monitoredUserId->value();
    }
}
