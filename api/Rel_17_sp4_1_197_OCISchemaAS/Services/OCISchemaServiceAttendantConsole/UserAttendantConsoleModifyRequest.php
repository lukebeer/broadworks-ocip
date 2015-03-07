<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAttendantConsole; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole\AttendantConsoleReplacementDisplayColumnList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify user's attendant console settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAttendantConsoleModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                        = __CLASS__;
    protected $userId                      = null;
    protected $launchOnLogin               = null;
    protected $allowUserConfigCallDetails  = null;
    protected $allowUserViewCallDetails    = null;
    protected $displayColumnList           = null;
    protected $monitoredUserIdList         = null;

    public function __construct(
         $userId,
         $launchOnLogin = null,
         $allowUserConfigCallDetails = null,
         $allowUserViewCallDetails = null,
         AttendantConsoleReplacementDisplayColumnList $displayColumnList = null,
         ReplacementUserIdList $monitoredUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setLaunchOnLogin($launchOnLogin);
        $this->setAllowUserConfigCallDetails($allowUserConfigCallDetails);
        $this->setAllowUserViewCallDetails($allowUserViewCallDetails);
        $this->setDisplayColumnList($displayColumnList);
        $this->setMonitoredUserIdList($monitoredUserIdList);
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

    public function setLaunchOnLogin(xs:boolean $launchOnLogin = null)
    {
    }

    public function getLaunchOnLogin()
    {
        return (!$this->launchOnLogin) ?: $this->launchOnLogin->value();
    }

    public function setAllowUserConfigCallDetails(xs:boolean $allowUserConfigCallDetails = null)
    {
    }

    public function getAllowUserConfigCallDetails()
    {
        return (!$this->allowUserConfigCallDetails) ?: $this->allowUserConfigCallDetails->value();
    }

    public function setAllowUserViewCallDetails(xs:boolean $allowUserViewCallDetails = null)
    {
    }

    public function getAllowUserViewCallDetails()
    {
        return (!$this->allowUserViewCallDetails) ?: $this->allowUserViewCallDetails->value();
    }

    public function setDisplayColumnList(AttendantConsoleReplacementDisplayColumnList $displayColumnList = null)
    {
    }

    public function getDisplayColumnList()
    {
        return (!$this->displayColumnList) ?: $this->displayColumnList->value();
    }

    public function setMonitoredUserIdList(ReplacementUserIdList $monitoredUserIdList = null)
    {
    }

    public function getMonitoredUserIdList()
    {
        return (!$this->monitoredUserIdList) ?: $this->monitoredUserIdList->value();
    }
}
