<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingUserMailServerSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerProtocol;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerUserId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the user's voice messaging advanced voice management service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVoiceMessagingUserModifyAdvancedVoiceManagementRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVoiceMessagingUserModifyAdvancedVoiceManagementRequest';
    protected $userId;
    protected $mailServerSelection;
    protected $groupMailServerEmailAddress;
    protected $groupMailServerUserId;
    protected $groupMailServerPassword;
    protected $personalMailServerNetAddress;
    protected $personalMailServerProtocol;
    protected $personalMailServerRealDeleteForImap;
    protected $personalMailServerEmailAddress;
    protected $personalMailServerUserId;
    protected $personalMailServerPassword;

    public function __construct(
         $userId = '',
         $mailServerSelection = null,
         $groupMailServerEmailAddress = null,
         $groupMailServerUserId = null,
         $groupMailServerPassword = null,
         $personalMailServerNetAddress = null,
         $personalMailServerProtocol = null,
         $personalMailServerRealDeleteForImap = null,
         $personalMailServerEmailAddress = null,
         $personalMailServerUserId = null,
         $personalMailServerPassword = null
    ) {
        $this->setUserId($userId);
        $this->setMailServerSelection($mailServerSelection);
        $this->setGroupMailServerEmailAddress($groupMailServerEmailAddress);
        $this->setGroupMailServerUserId($groupMailServerUserId);
        $this->setGroupMailServerPassword($groupMailServerPassword);
        $this->setPersonalMailServerNetAddress($personalMailServerNetAddress);
        $this->setPersonalMailServerProtocol($personalMailServerProtocol);
        $this->setPersonalMailServerRealDeleteForImap($personalMailServerRealDeleteForImap);
        $this->setPersonalMailServerEmailAddress($personalMailServerEmailAddress);
        $this->setPersonalMailServerUserId($personalMailServerUserId);
        $this->setPersonalMailServerPassword($personalMailServerPassword);
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
    public function setMailServerSelection($mailServerSelection = null)
    {
        $this->mailServerSelection = ($mailServerSelection InstanceOf VoiceMessagingUserMailServerSelection)
             ? $mailServerSelection
             : new VoiceMessagingUserMailServerSelection($mailServerSelection);
        $this->mailServerSelection->setElementName('mailServerSelection');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingUserMailServerSelection $mailServerSelection
     */
    public function getMailServerSelection()
    {
        return ($this->mailServerSelection)
            ? $this->mailServerSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupMailServerEmailAddress($groupMailServerEmailAddress = null)
    {
        $this->groupMailServerEmailAddress = ($groupMailServerEmailAddress InstanceOf EmailAddress)
             ? $groupMailServerEmailAddress
             : new EmailAddress($groupMailServerEmailAddress);
        $this->groupMailServerEmailAddress->setElementName('groupMailServerEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $groupMailServerEmailAddress
     */
    public function getGroupMailServerEmailAddress()
    {
        return ($this->groupMailServerEmailAddress)
            ? $this->groupMailServerEmailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupMailServerUserId($groupMailServerUserId = null)
    {
        $this->groupMailServerUserId = ($groupMailServerUserId InstanceOf VoiceMessagingMailServerUserId)
             ? $groupMailServerUserId
             : new VoiceMessagingMailServerUserId($groupMailServerUserId);
        $this->groupMailServerUserId->setElementName('groupMailServerUserId');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailServerUserId $groupMailServerUserId
     */
    public function getGroupMailServerUserId()
    {
        return ($this->groupMailServerUserId)
            ? $this->groupMailServerUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupMailServerPassword($groupMailServerPassword = null)
    {
        $this->groupMailServerPassword = ($groupMailServerPassword InstanceOf Password)
             ? $groupMailServerPassword
             : new Password($groupMailServerPassword);
        $this->groupMailServerPassword->setElementName('groupMailServerPassword');
        return $this;
    }

    /**
     * 
     * @return Password $groupMailServerPassword
     */
    public function getGroupMailServerPassword()
    {
        return ($this->groupMailServerPassword)
            ? $this->groupMailServerPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPersonalMailServerNetAddress($personalMailServerNetAddress = null)
    {
        $this->personalMailServerNetAddress = ($personalMailServerNetAddress InstanceOf NetAddress)
             ? $personalMailServerNetAddress
             : new NetAddress($personalMailServerNetAddress);
        $this->personalMailServerNetAddress->setElementName('personalMailServerNetAddress');
        return $this;
    }

    /**
     * 
     * @return NetAddress $personalMailServerNetAddress
     */
    public function getPersonalMailServerNetAddress()
    {
        return ($this->personalMailServerNetAddress)
            ? $this->personalMailServerNetAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPersonalMailServerProtocol($personalMailServerProtocol = null)
    {
        $this->personalMailServerProtocol = ($personalMailServerProtocol InstanceOf VoiceMessagingMailServerProtocol)
             ? $personalMailServerProtocol
             : new VoiceMessagingMailServerProtocol($personalMailServerProtocol);
        $this->personalMailServerProtocol->setElementName('personalMailServerProtocol');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailServerProtocol $personalMailServerProtocol
     */
    public function getPersonalMailServerProtocol()
    {
        return ($this->personalMailServerProtocol)
            ? $this->personalMailServerProtocol->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPersonalMailServerRealDeleteForImap($personalMailServerRealDeleteForImap = null)
    {
        $this->personalMailServerRealDeleteForImap = new PrimitiveType($personalMailServerRealDeleteForImap);
        $this->personalMailServerRealDeleteForImap->setElementName('personalMailServerRealDeleteForImap');
        return $this;
    }

    /**
     * 
     * @return boolean $personalMailServerRealDeleteForImap
     */
    public function getPersonalMailServerRealDeleteForImap()
    {
        return ($this->personalMailServerRealDeleteForImap)
            ? $this->personalMailServerRealDeleteForImap->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPersonalMailServerEmailAddress($personalMailServerEmailAddress = null)
    {
        $this->personalMailServerEmailAddress = ($personalMailServerEmailAddress InstanceOf EmailAddress)
             ? $personalMailServerEmailAddress
             : new EmailAddress($personalMailServerEmailAddress);
        $this->personalMailServerEmailAddress->setElementName('personalMailServerEmailAddress');
        return $this;
    }

    /**
     * 
     * @return EmailAddress $personalMailServerEmailAddress
     */
    public function getPersonalMailServerEmailAddress()
    {
        return ($this->personalMailServerEmailAddress)
            ? $this->personalMailServerEmailAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPersonalMailServerUserId($personalMailServerUserId = null)
    {
        $this->personalMailServerUserId = ($personalMailServerUserId InstanceOf VoiceMessagingMailServerUserId)
             ? $personalMailServerUserId
             : new VoiceMessagingMailServerUserId($personalMailServerUserId);
        $this->personalMailServerUserId->setElementName('personalMailServerUserId');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingMailServerUserId $personalMailServerUserId
     */
    public function getPersonalMailServerUserId()
    {
        return ($this->personalMailServerUserId)
            ? $this->personalMailServerUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPersonalMailServerPassword($personalMailServerPassword = null)
    {
        $this->personalMailServerPassword = ($personalMailServerPassword InstanceOf Password)
             ? $personalMailServerPassword
             : new Password($personalMailServerPassword);
        $this->personalMailServerPassword->setElementName('personalMailServerPassword');
        return $this;
    }

    /**
     * 
     * @return Password $personalMailServerPassword
     */
    public function getPersonalMailServerPassword()
    {
        return ($this->personalMailServerPassword)
            ? $this->personalMailServerPassword->getElementValue()
            : null;
    }
}
