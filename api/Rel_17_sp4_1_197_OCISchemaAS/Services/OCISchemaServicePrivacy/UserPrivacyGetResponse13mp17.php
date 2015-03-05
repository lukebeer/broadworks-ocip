<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePrivacy; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserPrivacyGetRequest13mp17.  The
 *         permittedMonitorUserIdTable contains the members of
 *         the enterprise or group allowed to monitor the phone
 *         status of the user specified in the request.  Members
 *         of this table are allowed to monitor the user even if
 *         enablePhoneStatusPrivacy is set to true.  The table
 *         contains column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name",
 *         "Hiragana First Name".
 */
class UserPrivacyGetResponse13mp17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $enableDirectoryPrivacy,
             $enableAutoAttendantExtensionDialingPrivacy,
             $enableAutoAttendantNameDialingPrivacy,
             $enablePhoneStatusPrivacy,
             $permittedMonitorUserIdTable
    ) {
        $this->enableDirectoryPrivacy                     = $enableDirectoryPrivacy;
        $this->enableAutoAttendantExtensionDialingPrivacy = $enableAutoAttendantExtensionDialingPrivacy;
        $this->enableAutoAttendantNameDialingPrivacy      = $enableAutoAttendantNameDialingPrivacy;
        $this->enablePhoneStatusPrivacy                   = $enablePhoneStatusPrivacy;
        $this->permittedMonitorUserIdTable                = $permittedMonitorUserIdTable;
        $this->args                                       = func_get_args();
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

    public function setPermittedMonitorUserIdTable($permittedMonitorUserIdTable)
    {
        $permittedMonitorUserIdTable and $this->permittedMonitorUserIdTable = new core:OCITable($permittedMonitorUserIdTable);
    }

    public function getPermittedMonitorUserIdTable()
    {
        return (!$this->permittedMonitorUserIdTable) ?: $this->permittedMonitorUserIdTable->value();
    }
}
