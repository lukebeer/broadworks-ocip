<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePrivacy; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Privacy.
 *         This command is supported for regular users only.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPrivacyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $enableDirectoryPrivacy=null,
             $enableAutoAttendantExtensionDialingPrivacy=null,
             $enableAutoAttendantNameDialingPrivacy=null,
             $enablePhoneStatusPrivacy=null,
             ReplacementUserIdList $permittedMonitorUserIdList=null
    ) {
        $this->userId                                     = new UserId($userId);
        $this->enableDirectoryPrivacy                     = $enableDirectoryPrivacy;
        $this->enableAutoAttendantExtensionDialingPrivacy = $enableAutoAttendantExtensionDialingPrivacy;
        $this->enableAutoAttendantNameDialingPrivacy      = $enableAutoAttendantNameDialingPrivacy;
        $this->enablePhoneStatusPrivacy                   = $enablePhoneStatusPrivacy;
        $this->permittedMonitorUserIdList                 = $permittedMonitorUserIdList;
        $this->args                                       = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy)
    {
        $enableDirectoryPrivacy and $this->enableDirectoryPrivacy = new xs:boolean($enableDirectoryPrivacy);
    }

    public function getEnableDirectoryPrivacy()
    {
        return (!$this->enableDirectoryPrivacy) ?: $this->enableDirectoryPrivacy->value();
    }

    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy)
    {
        $enableAutoAttendantExtensionDialingPrivacy and $this->enableAutoAttendantExtensionDialingPrivacy = new xs:boolean($enableAutoAttendantExtensionDialingPrivacy);
    }

    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return (!$this->enableAutoAttendantExtensionDialingPrivacy) ?: $this->enableAutoAttendantExtensionDialingPrivacy->value();
    }

    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy)
    {
        $enableAutoAttendantNameDialingPrivacy and $this->enableAutoAttendantNameDialingPrivacy = new xs:boolean($enableAutoAttendantNameDialingPrivacy);
    }

    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return (!$this->enableAutoAttendantNameDialingPrivacy) ?: $this->enableAutoAttendantNameDialingPrivacy->value();
    }

    public function setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy)
    {
        $enablePhoneStatusPrivacy and $this->enablePhoneStatusPrivacy = new xs:boolean($enablePhoneStatusPrivacy);
    }

    public function getEnablePhoneStatusPrivacy()
    {
        return (!$this->enablePhoneStatusPrivacy) ?: $this->enablePhoneStatusPrivacy->value();
    }

    public function setPermittedMonitorUserIdList($permittedMonitorUserIdList)
    {
        $permittedMonitorUserIdList and $this->permittedMonitorUserIdList = new ReplacementUserIdList($permittedMonitorUserIdList);
    }

    public function getPermittedMonitorUserIdList()
    {
        return (!$this->permittedMonitorUserIdList) ?: $this->permittedMonitorUserIdList->value();
    }
}
