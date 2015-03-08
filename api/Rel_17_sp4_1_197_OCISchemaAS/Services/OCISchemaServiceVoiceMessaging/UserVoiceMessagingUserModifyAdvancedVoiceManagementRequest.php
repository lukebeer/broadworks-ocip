<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingUserMailServerSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerProtocol;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingMailServerUserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EmailAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the user's voice messaging advanced voice management service setting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserVoiceMessagingUserModifyAdvancedVoiceManagementRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $userId                              = null;
    protected $mailServerSelection                 = null;
    protected $groupMailServerEmailAddress         = null;
    protected $groupMailServerUserId               = null;
    protected $groupMailServerPassword             = null;
    protected $personalMailServerNetAddress        = null;
    protected $personalMailServerProtocol          = null;
    protected $personalMailServerRealDeleteForImap = null;
    protected $personalMailServerEmailAddress      = null;
    protected $personalMailServerUserId            = null;
    protected $personalMailServerPassword          = null;

    public function __construct(
         $userId,
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
     * Voice Messaging user-level mail server choices.
     */
    public function setMailServerSelection($mailServerSelection = null)
    {
        $this->mailServerSelection = ($mailServerSelection InstanceOf VoiceMessagingUserMailServerSelection)
             ? $mailServerSelection
             : new VoiceMessagingUserMailServerSelection($mailServerSelection);
    }

    /**
     * Voice Messaging user-level mail server choices.
     */
    public function getMailServerSelection()
    {
        return (!$this->mailServerSelection) ?: $this->mailServerSelection->getValue();
    }

    /**
     * Email Address
     */
    public function setGroupMailServerEmailAddress($groupMailServerEmailAddress = null)
    {
        $this->groupMailServerEmailAddress = ($groupMailServerEmailAddress InstanceOf EmailAddress)
             ? $groupMailServerEmailAddress
             : new EmailAddress($groupMailServerEmailAddress);
    }

    /**
     * Email Address
     */
    public function getGroupMailServerEmailAddress()
    {
        return (!$this->groupMailServerEmailAddress) ?: $this->groupMailServerEmailAddress->getValue();
    }

    /**
     * User Id for a mail server.
     */
    public function setGroupMailServerUserId($groupMailServerUserId = null)
    {
        $this->groupMailServerUserId = ($groupMailServerUserId InstanceOf VoiceMessagingMailServerUserId)
             ? $groupMailServerUserId
             : new VoiceMessagingMailServerUserId($groupMailServerUserId);
    }

    /**
     * User Id for a mail server.
     */
    public function getGroupMailServerUserId()
    {
        return (!$this->groupMailServerUserId) ?: $this->groupMailServerUserId->getValue();
    }

    /**
     * 
     */
    public function setGroupMailServerPassword($groupMailServerPassword = null)
    {
        $this->groupMailServerPassword = ($groupMailServerPassword InstanceOf Password)
             ? $groupMailServerPassword
             : new Password($groupMailServerPassword);
    }

    /**
     * 
     */
    public function getGroupMailServerPassword()
    {
        return (!$this->groupMailServerPassword) ?: $this->groupMailServerPassword->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setPersonalMailServerNetAddress($personalMailServerNetAddress = null)
    {
        $this->personalMailServerNetAddress = ($personalMailServerNetAddress InstanceOf NetAddress)
             ? $personalMailServerNetAddress
             : new NetAddress($personalMailServerNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getPersonalMailServerNetAddress()
    {
        return (!$this->personalMailServerNetAddress) ?: $this->personalMailServerNetAddress->getValue();
    }

    /**
     * Protocol used by mail server holding voice messages
     */
    public function setPersonalMailServerProtocol($personalMailServerProtocol = null)
    {
        $this->personalMailServerProtocol = ($personalMailServerProtocol InstanceOf VoiceMessagingMailServerProtocol)
             ? $personalMailServerProtocol
             : new VoiceMessagingMailServerProtocol($personalMailServerProtocol);
    }

    /**
     * Protocol used by mail server holding voice messages
     */
    public function getPersonalMailServerProtocol()
    {
        return (!$this->personalMailServerProtocol) ?: $this->personalMailServerProtocol->getValue();
    }

    /**
     * 
     */
    public function setPersonalMailServerRealDeleteForImap($personalMailServerRealDeleteForImap = null)
    {
        $this->personalMailServerRealDeleteForImap = (boolean) $personalMailServerRealDeleteForImap;
    }

    /**
     * 
     */
    public function getPersonalMailServerRealDeleteForImap()
    {
        return (!$this->personalMailServerRealDeleteForImap) ?: $this->personalMailServerRealDeleteForImap->getValue();
    }

    /**
     * Email Address
     */
    public function setPersonalMailServerEmailAddress($personalMailServerEmailAddress = null)
    {
        $this->personalMailServerEmailAddress = ($personalMailServerEmailAddress InstanceOf EmailAddress)
             ? $personalMailServerEmailAddress
             : new EmailAddress($personalMailServerEmailAddress);
    }

    /**
     * Email Address
     */
    public function getPersonalMailServerEmailAddress()
    {
        return (!$this->personalMailServerEmailAddress) ?: $this->personalMailServerEmailAddress->getValue();
    }

    /**
     * User Id for a mail server.
     */
    public function setPersonalMailServerUserId($personalMailServerUserId = null)
    {
        $this->personalMailServerUserId = ($personalMailServerUserId InstanceOf VoiceMessagingMailServerUserId)
             ? $personalMailServerUserId
             : new VoiceMessagingMailServerUserId($personalMailServerUserId);
    }

    /**
     * User Id for a mail server.
     */
    public function getPersonalMailServerUserId()
    {
        return (!$this->personalMailServerUserId) ?: $this->personalMailServerUserId->getValue();
    }

    /**
     * 
     */
    public function setPersonalMailServerPassword($personalMailServerPassword = null)
    {
        $this->personalMailServerPassword = ($personalMailServerPassword InstanceOf Password)
             ? $personalMailServerPassword
             : new Password($personalMailServerPassword);
    }

    /**
     * 
     */
    public function getPersonalMailServerPassword()
    {
        return (!$this->personalMailServerPassword) ?: $this->personalMailServerPassword->getValue();
    }
}