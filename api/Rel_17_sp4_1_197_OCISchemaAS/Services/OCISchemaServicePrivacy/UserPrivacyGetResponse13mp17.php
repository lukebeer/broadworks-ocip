<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePrivacy; 


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
    const     RESPONSE_TYPE                               = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServicePrivacy\UserPrivacyGetResponse13mp17';
    public    $name                                       = __CLASS__;
    protected $enableDirectoryPrivacy                     = null;
    protected $enableAutoAttendantExtensionDialingPrivacy = null;
    protected $enableAutoAttendantNameDialingPrivacy      = null;
    protected $enablePhoneStatusPrivacy                   = null;
    protected $permittedMonitorUserIdTable                = null;


    /**
     * 
     */
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy = null)
    {
        $this->enableDirectoryPrivacy = (boolean) $enableDirectoryPrivacy;
    }

    /**
     * 
     */
    public function getEnableDirectoryPrivacy()
    {
        return (!$this->enableDirectoryPrivacy) ?: $this->enableDirectoryPrivacy->getValue();
    }

    /**
     * 
     */
    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy = null)
    {
        $this->enableAutoAttendantExtensionDialingPrivacy = (boolean) $enableAutoAttendantExtensionDialingPrivacy;
    }

    /**
     * 
     */
    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return (!$this->enableAutoAttendantExtensionDialingPrivacy) ?: $this->enableAutoAttendantExtensionDialingPrivacy->getValue();
    }

    /**
     * 
     */
    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy = null)
    {
        $this->enableAutoAttendantNameDialingPrivacy = (boolean) $enableAutoAttendantNameDialingPrivacy;
    }

    /**
     * 
     */
    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return (!$this->enableAutoAttendantNameDialingPrivacy) ?: $this->enableAutoAttendantNameDialingPrivacy->getValue();
    }

    /**
     * 
     */
    public function setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy = null)
    {
        $this->enablePhoneStatusPrivacy = (boolean) $enablePhoneStatusPrivacy;
    }

    /**
     * 
     */
    public function getEnablePhoneStatusPrivacy()
    {
        return (!$this->enablePhoneStatusPrivacy) ?: $this->enablePhoneStatusPrivacy->getValue();
    }

    /**
     * 
     */
    public function setPermittedMonitorUserIdTable(core:OCITable $permittedMonitorUserIdTable = null)
    {
        $this->permittedMonitorUserIdTable = core:OCITable $permittedMonitorUserIdTable;
    }

    /**
     * 
     */
    public function getPermittedMonitorUserIdTable()
    {
        return (!$this->permittedMonitorUserIdTable) ?: $this->permittedMonitorUserIdTable->getValue();
    }
}