<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingUserMailServerSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMailServerUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingMailServerProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's voice messaging advanced voice management service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVoiceMessagingUserModifyAdvancedVoiceManagementRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $mailServerSelection=null,
             $groupMailServerEmailAddress=null,
             $groupMailServerUserId=null,
             $groupMailServerPassword=null,
             $personalMailServerNetAddress=null,
             $personalMailServerProtocol=null,
             $personalMailServerRealDeleteForImap=null,
             $personalMailServerEmailAddress=null,
             $personalMailServerUserId=null,
             $personalMailServerPassword=null
    ) {
        $this->userId                              = new UserId($userId);
        $this->mailServerSelection                 = $mailServerSelection;
        $this->groupMailServerEmailAddress         = new EmailAddress($groupMailServerEmailAddress);
        $this->groupMailServerUserId               = $groupMailServerUserId;
        $this->groupMailServerPassword             = new Password($groupMailServerPassword);
        $this->personalMailServerNetAddress        = new NetAddress($personalMailServerNetAddress);
        $this->personalMailServerProtocol          = $personalMailServerProtocol;
        $this->personalMailServerRealDeleteForImap = $personalMailServerRealDeleteForImap;
        $this->personalMailServerEmailAddress      = new EmailAddress($personalMailServerEmailAddress);
        $this->personalMailServerUserId            = $personalMailServerUserId;
        $this->personalMailServerPassword          = new Password($personalMailServerPassword);
        $this->args                                = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

    public function setMailServerSelection($mailServerSelection)
    {
        $mailServerSelection and $this->mailServerSelection = new VoiceMessagingUserMailServerSelection($mailServerSelection);
    }

    public function getMailServerSelection()
    {
        return (!$this->mailServerSelection) ?: $this->mailServerSelection->value();
    }

    public function setGroupMailServerEmailAddress($groupMailServerEmailAddress)
    {
        $groupMailServerEmailAddress and $this->groupMailServerEmailAddress = new EmailAddress($groupMailServerEmailAddress);
    }

    public function getGroupMailServerEmailAddress()
    {
        return (!$this->groupMailServerEmailAddress) ?: $this->groupMailServerEmailAddress->value();
    }

    public function setGroupMailServerUserId($groupMailServerUserId)
    {
        $groupMailServerUserId and $this->groupMailServerUserId = new VoiceMessagingMailServerUserId($groupMailServerUserId);
    }

    public function getGroupMailServerUserId()
    {
        return (!$this->groupMailServerUserId) ?: $this->groupMailServerUserId->value();
    }

    public function setGroupMailServerPassword($groupMailServerPassword)
    {
        $groupMailServerPassword and $this->groupMailServerPassword = new Password($groupMailServerPassword);
    }

    public function getGroupMailServerPassword()
    {
        return (!$this->groupMailServerPassword) ?: $this->groupMailServerPassword->value();
    }

    public function setPersonalMailServerNetAddress($personalMailServerNetAddress)
    {
        $personalMailServerNetAddress and $this->personalMailServerNetAddress = new NetAddress($personalMailServerNetAddress);
    }

    public function getPersonalMailServerNetAddress()
    {
        return (!$this->personalMailServerNetAddress) ?: $this->personalMailServerNetAddress->value();
    }

    public function setPersonalMailServerProtocol($personalMailServerProtocol)
    {
        $personalMailServerProtocol and $this->personalMailServerProtocol = new VoiceMessagingMailServerProtocol($personalMailServerProtocol);
    }

    public function getPersonalMailServerProtocol()
    {
        return (!$this->personalMailServerProtocol) ?: $this->personalMailServerProtocol->value();
    }

    public function setPersonalMailServerRealDeleteForImap($personalMailServerRealDeleteForImap)
    {
        $personalMailServerRealDeleteForImap and $this->personalMailServerRealDeleteForImap = new xs:boolean($personalMailServerRealDeleteForImap);
    }

    public function getPersonalMailServerRealDeleteForImap()
    {
        return (!$this->personalMailServerRealDeleteForImap) ?: $this->personalMailServerRealDeleteForImap->value();
    }

    public function setPersonalMailServerEmailAddress($personalMailServerEmailAddress)
    {
        $personalMailServerEmailAddress and $this->personalMailServerEmailAddress = new EmailAddress($personalMailServerEmailAddress);
    }

    public function getPersonalMailServerEmailAddress()
    {
        return (!$this->personalMailServerEmailAddress) ?: $this->personalMailServerEmailAddress->value();
    }

    public function setPersonalMailServerUserId($personalMailServerUserId)
    {
        $personalMailServerUserId and $this->personalMailServerUserId = new VoiceMessagingMailServerUserId($personalMailServerUserId);
    }

    public function getPersonalMailServerUserId()
    {
        return (!$this->personalMailServerUserId) ?: $this->personalMailServerUserId->value();
    }

    public function setPersonalMailServerPassword($personalMailServerPassword)
    {
        $personalMailServerPassword and $this->personalMailServerPassword = new Password($personalMailServerPassword);
    }

    public function getPersonalMailServerPassword()
    {
        return (!$this->personalMailServerPassword) ?: $this->personalMailServerPassword->value();
    }
}
