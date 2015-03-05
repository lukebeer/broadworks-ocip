<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAttendantConsole; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AttendantConsoleReplacementDisplayColumnList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify user's attendant console settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAttendantConsoleModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $launchOnLogin=null,
             $allowUserConfigCallDetails=null,
             $allowUserViewCallDetails=null,
             $displayColumnList=null,
             ReplacementUserIdList $monitoredUserIdList=null
    ) {
        $this->userId                     = new UserId($userId);
        $this->launchOnLogin              = $launchOnLogin;
        $this->allowUserConfigCallDetails = $allowUserConfigCallDetails;
        $this->allowUserViewCallDetails   = $allowUserViewCallDetails;
        $this->displayColumnList          = $displayColumnList;
        $this->monitoredUserIdList        = $monitoredUserIdList;
        $this->args                       = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setLaunchOnLogin($launchOnLogin)
    {
        $launchOnLogin and $this->launchOnLogin = new xs:boolean($launchOnLogin);
    }

    public function getLaunchOnLogin()
    {
        return (!$this->launchOnLogin) ?: $this->launchOnLogin->value();
    }

    public function setAllowUserConfigCallDetails($allowUserConfigCallDetails)
    {
        $allowUserConfigCallDetails and $this->allowUserConfigCallDetails = new xs:boolean($allowUserConfigCallDetails);
    }

    public function getAllowUserConfigCallDetails()
    {
        return (!$this->allowUserConfigCallDetails) ?: $this->allowUserConfigCallDetails->value();
    }

    public function setAllowUserViewCallDetails($allowUserViewCallDetails)
    {
        $allowUserViewCallDetails and $this->allowUserViewCallDetails = new xs:boolean($allowUserViewCallDetails);
    }

    public function getAllowUserViewCallDetails()
    {
        return (!$this->allowUserViewCallDetails) ?: $this->allowUserViewCallDetails->value();
    }

    public function setDisplayColumnList($displayColumnList)
    {
        $displayColumnList and $this->displayColumnList = new AttendantConsoleReplacementDisplayColumnList($displayColumnList);
    }

    public function getDisplayColumnList()
    {
        return (!$this->displayColumnList) ?: $this->displayColumnList->value();
    }

    public function setMonitoredUserIdList($monitoredUserIdList)
    {
        $monitoredUserIdList and $this->monitoredUserIdList = new ReplacementUserIdList($monitoredUserIdList);
    }

    public function getMonitoredUserIdList()
    {
        return (!$this->monitoredUserIdList) ?: $this->monitoredUserIdList->value();
    }
}
