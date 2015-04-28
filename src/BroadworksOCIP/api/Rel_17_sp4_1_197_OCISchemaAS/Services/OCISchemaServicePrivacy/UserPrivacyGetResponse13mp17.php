<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


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
    public    $elementName = 'UserPrivacyGetResponse13mp17';
    protected $enableDirectoryPrivacy;
    protected $enableAutoAttendantExtensionDialingPrivacy;
    protected $enableAutoAttendantNameDialingPrivacy;
    protected $enablePhoneStatusPrivacy;
    protected $permittedMonitorUserIdTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy\UserPrivacyGetResponse13mp17 $response
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
        $this->enableDirectoryPrivacy->setElementName('enableDirectoryPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enableDirectoryPrivacy
     */
    public function getEnableDirectoryPrivacy()
    {
        return ($this->enableDirectoryPrivacy)
            ? $this->enableDirectoryPrivacy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy = null)
    {
        $this->enableAutoAttendantExtensionDialingPrivacy = new PrimitiveType($enableAutoAttendantExtensionDialingPrivacy);
        $this->enableAutoAttendantExtensionDialingPrivacy->setElementName('enableAutoAttendantExtensionDialingPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutoAttendantExtensionDialingPrivacy
     */
    public function getEnableAutoAttendantExtensionDialingPrivacy()
    {
        return ($this->enableAutoAttendantExtensionDialingPrivacy)
            ? $this->enableAutoAttendantExtensionDialingPrivacy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy = null)
    {
        $this->enableAutoAttendantNameDialingPrivacy = new PrimitiveType($enableAutoAttendantNameDialingPrivacy);
        $this->enableAutoAttendantNameDialingPrivacy->setElementName('enableAutoAttendantNameDialingPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enableAutoAttendantNameDialingPrivacy
     */
    public function getEnableAutoAttendantNameDialingPrivacy()
    {
        return ($this->enableAutoAttendantNameDialingPrivacy)
            ? $this->enableAutoAttendantNameDialingPrivacy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy = null)
    {
        $this->enablePhoneStatusPrivacy = new PrimitiveType($enablePhoneStatusPrivacy);
        $this->enablePhoneStatusPrivacy->setElementName('enablePhoneStatusPrivacy');
        return $this;
    }

    /**
     * 
     * @return boolean $enablePhoneStatusPrivacy
     */
    public function getEnablePhoneStatusPrivacy()
    {
        return ($this->enablePhoneStatusPrivacy)
            ? $this->enablePhoneStatusPrivacy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPermittedMonitorUserIdTable(TableType $permittedMonitorUserIdTable = null)
    {
        $this->permittedMonitorUserIdTable = $permittedMonitorUserIdTable;
        $this->permittedMonitorUserIdTable->setElementName('permittedMonitorUserIdTable');
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
