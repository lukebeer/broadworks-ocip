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
    public    $name                       = __CLASS__;
    protected $userId                     = null;
    protected $launchOnLogin              = null;
    protected $allowUserConfigCallDetails = null;
    protected $allowUserViewCallDetails   = null;
    protected $displayColumnList          = null;
    protected $monitoredUserIdList        = null;

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

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * 
     */
    public function setLaunchOnLogin($launchOnLogin = null)
    {
        $this->launchOnLogin = (boolean) $launchOnLogin;
    }

    /**
     * 
     */
    public function getLaunchOnLogin()
    {
        return (!$this->launchOnLogin) ?: $this->launchOnLogin->getValue();
    }

    /**
     * 
     */
    public function setAllowUserConfigCallDetails($allowUserConfigCallDetails = null)
    {
        $this->allowUserConfigCallDetails = (boolean) $allowUserConfigCallDetails;
    }

    /**
     * 
     */
    public function getAllowUserConfigCallDetails()
    {
        return (!$this->allowUserConfigCallDetails) ?: $this->allowUserConfigCallDetails->getValue();
    }

    /**
     * 
     */
    public function setAllowUserViewCallDetails($allowUserViewCallDetails = null)
    {
        $this->allowUserViewCallDetails = (boolean) $allowUserViewCallDetails;
    }

    /**
     * 
     */
    public function getAllowUserViewCallDetails()
    {
        return (!$this->allowUserViewCallDetails) ?: $this->allowUserViewCallDetails->getValue();
    }

    /**
     * A list of attendant console display columns that replaces a previously configured list.
     *         By convention, an element of this type may be set nil to clear the list.
     */
    public function setDisplayColumnList(AttendantConsoleReplacementDisplayColumnList $displayColumnList = null)
    {
        $this->displayColumnList = AttendantConsoleReplacementDisplayColumnList $displayColumnList;
    }

    /**
     * A list of attendant console display columns that replaces a previously configured list.
     *         By convention, an element of this type may be set nil to clear the list.
     */
    public function getDisplayColumnList()
    {
        return (!$this->displayColumnList) ?: $this->displayColumnList->getValue();
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setMonitoredUserIdList(ReplacementUserIdList $monitoredUserIdList = null)
    {
        $this->monitoredUserIdList = ReplacementUserIdList $monitoredUserIdList;
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getMonitoredUserIdList()
    {
        return (!$this->monitoredUserIdList) ?: $this->monitoredUserIdList->getValue();
    }
}
