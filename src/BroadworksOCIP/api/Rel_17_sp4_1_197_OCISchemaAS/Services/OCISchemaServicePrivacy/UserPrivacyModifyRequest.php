<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServicePrivacy; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user level data associated with Privacy.
 *         This command is supported for regular users only.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserPrivacyModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserPrivacyModifyRequest';
    protected $userId;
    protected $enableDirectoryPrivacy;
    protected $enableAutoAttendantExtensionDialingPrivacy;
    protected $enableAutoAttendantNameDialingPrivacy;
    protected $enablePhoneStatusPrivacy;
    protected $permittedMonitorUserIdList;

    public function __construct(
         $userId = '',
         $enableDirectoryPrivacy = null,
         $enableAutoAttendantExtensionDialingPrivacy = null,
         $enableAutoAttendantNameDialingPrivacy = null,
         $enablePhoneStatusPrivacy = null,
         $permittedMonitorUserIdList = null
    ) {
        $this->setUserId($userId);
        $this->setEnableDirectoryPrivacy($enableDirectoryPrivacy);
        $this->setEnableAutoAttendantExtensionDialingPrivacy($enableAutoAttendantExtensionDialingPrivacy);
        $this->setEnableAutoAttendantNameDialingPrivacy($enableAutoAttendantNameDialingPrivacy);
        $this->setEnablePhoneStatusPrivacy($enablePhoneStatusPrivacy);
        $this->setPermittedMonitorUserIdList($permittedMonitorUserIdList);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
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
    public function setPermittedMonitorUserIdList(ReplacementUserIdList $permittedMonitorUserIdList = null)
    {
        $this->permittedMonitorUserIdList = ($permittedMonitorUserIdList InstanceOf ReplacementUserIdList)
             ? $permittedMonitorUserIdList
             : new ReplacementUserIdList($permittedMonitorUserIdList);
        $this->permittedMonitorUserIdList->setElementName('permittedMonitorUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $permittedMonitorUserIdList
     */
    public function getPermittedMonitorUserIdList()
    {
        return $this->permittedMonitorUserIdList;
    }
}
