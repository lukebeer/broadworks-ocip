<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePrivacy; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user level data associated with Privacy.
 *         This command is supported for regular users only.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPrivacyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                        = __CLASS__;
    protected $userId                                      = null;
    protected $enableDirectoryPrivacy                      = null;
    protected $enableAutoAttendantExtensionDialingPrivacy  = null;
    protected $enableAutoAttendantNameDialingPrivacy       = null;
    protected $enablePhoneStatusPrivacy                    = null;
    protected $permittedMonitorUserIdList                  = null;

    public function __construct(
         $userId,
         $enableDirectoryPrivacy = null,
         $enableAutoAttendantExtensionDialingPrivacy = null,
         $enableAutoAttendantNameDialingPrivacy = null,
         $enablePhoneStatusPrivacy = null,
         ReplacementUserIdList $permittedMonitorUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setEnableDirectoryPrivacy($enableDirectoryPrivacy);
        $this->setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy);
        $this->setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy);
        $this->setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy);
        $this->setPermittedMonitorUserIdList($permittedMonitorUserIdList);
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

    public function setEnableDirectoryPrivacy(xs:boolean $enableDirectoryPrivacy = null)
    {
    }

    public function getEnableDirectoryPrivacy()
    {
        return (!$this->enableDirectoryPrivacy) ?: $this->enableDirectoryPrivacy->value();
    }

    public function setEnableAutoAttendantExtensionDialingPrivacy(xs:boolean $enableAutoAttendantExtensionDialingPrivacy = null)
    {
    }

    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return (!$this->enableAutoAttendantExtensionDialingPrivacy) ?: $this->enableAutoAttendantExtensionDialingPrivacy->value();
    }

    public function setEnableAutoAttendantNameDialingPrivacy(xs:boolean $enableAutoAttendantNameDialingPrivacy = null)
    {
    }

    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return (!$this->enableAutoAttendantNameDialingPrivacy) ?: $this->enableAutoAttendantNameDialingPrivacy->value();
    }

    public function setEnablePhoneStatusPrivacy(xs:boolean $enablePhoneStatusPrivacy = null)
    {
    }

    public function getEnablePhoneStatusPrivacy()
    {
        return (!$this->enablePhoneStatusPrivacy) ?: $this->enablePhoneStatusPrivacy->value();
    }

    public function setPermittedMonitorUserIdList(ReplacementUserIdList $permittedMonitorUserIdList = null)
    {
    }

    public function getPermittedMonitorUserIdList()
    {
        return (!$this->permittedMonitorUserIdList) ?: $this->permittedMonitorUserIdList->value();
    }
}
