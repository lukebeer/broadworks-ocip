<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


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
    public    $name = 'UserPrivacyGetResponse13mp17';
    protected $enableDirectoryPrivacy;
    protected $enableAutoAttendantExtensionDialingPrivacy;
    protected $enableAutoAttendantNameDialingPrivacy;
    protected $enablePhoneStatusPrivacy;
    protected $permittedMonitorUserIdTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy\UserPrivacyGetResponse13mp17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableDirectoryPrivacy($enableDirectoryPrivacy = null)
    {
        $this->enableDirectoryPrivacy = new PrimitiveType($enableDirectoryPrivacy);
        $this->enableDirectoryPrivacy->setName('enableDirectoryPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDirectoryPrivacy
     */
    public function getEnableDirectoryPrivacy()
    {
        return ($this->enableDirectoryPrivacy) ? $this->enableDirectoryPrivacy->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy = null)
    {
        $this->enableAutoAttendantExtensionDialingPrivacy = new PrimitiveType($enableAutoAttendantExtensionDialingPrivacy);
        $this->enableAutoAttendantExtensionDialingPrivacy->setName('enableAutoAttendantExtensionDialingPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutoAttendantExtensionDialingPrivacy
     */
    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return ($this->enableAutoAttendantExtensionDialingPrivacy) ? $this->enableAutoAttendantExtensionDialingPrivacy->getValue() : null;
    }

    /**
     * 
     */
    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy = null)
    {
        $this->enableAutoAttendantNameDialingPrivacy = new PrimitiveType($enableAutoAttendantNameDialingPrivacy);
        $this->enableAutoAttendantNameDialingPrivacy->setName('enableAutoAttendantNameDialingPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutoAttendantNameDialingPrivacy
     */
    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return ($this->enableAutoAttendantNameDialingPrivacy) ? $this->enableAutoAttendantNameDialingPrivacy->getValue() : null;
    }

    /**
     * 
     */
    public function setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy = null)
    {
        $this->enablePhoneStatusPrivacy = new PrimitiveType($enablePhoneStatusPrivacy);
        $this->enablePhoneStatusPrivacy->setName('enablePhoneStatusPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enablePhoneStatusPrivacy
     */
    public function getEnablePhoneStatusPrivacy()
    {
        return ($this->enablePhoneStatusPrivacy) ? $this->enablePhoneStatusPrivacy->getValue() : null;
    }

    /**
     * 
     */
    public function setPermittedMonitorUserIdTable(TableType $permittedMonitorUserIdTable = null)
    {
        $this->permittedMonitorUserIdTable = $permittedMonitorUserIdTable;
        $this->permittedMonitorUserIdTable->setName('permittedMonitorUserIdTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getPermittedMonitorUserIdTable()
    {
        return $this->permittedMonitorUserIdTable;
    }
}
