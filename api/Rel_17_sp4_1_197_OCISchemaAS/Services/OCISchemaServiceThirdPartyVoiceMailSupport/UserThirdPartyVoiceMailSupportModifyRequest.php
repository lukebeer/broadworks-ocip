<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceThirdPartyVoiceMailSupport; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportServerSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportMailboxIdType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportMailServer;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the Third Party Voice Mail Support settings for a user.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserThirdPartyVoiceMailSupportModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                = __CLASS__;
    protected $userId                              = null;
    protected $isActive                            = null;
    protected $busyRedirectToVoiceMail             = null;
    protected $noAnswerRedirectToVoiceMail         = null;
    protected $serverSelection                     = null;
    protected $userServer                          = null;
    protected $mailboxIdType                       = null;
    protected $mailboxURL                          = null;
    protected $noAnswerNumberOfRings               = null;
    protected $alwaysRedirectToVoiceMail           = null;
    protected $outOfPrimaryZoneRedirectToVoiceMail = null;

    public function __construct(
         $userId,
         $isActive = null,
         $busyRedirectToVoiceMail = null,
         $noAnswerRedirectToVoiceMail = null,
         $serverSelection = null,
         $userServer = null,
         $mailboxIdType = null,
         $mailboxURL = null,
         $noAnswerNumberOfRings = null,
         $alwaysRedirectToVoiceMail = null,
         $outOfPrimaryZoneRedirectToVoiceMail = null
    ) {
        $this->setUserId($userId);
        $this->setIsActive($isActive);
        $this->setBusyRedirectToVoiceMail($busyRedirectToVoiceMail);
        $this->setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail);
        $this->setServerSelection($serverSelection);
        $this->setUserServer($userServer);
        $this->setMailboxIdType($mailboxIdType);
        $this->setMailboxURL($mailboxURL);
        $this->setNoAnswerNumberOfRings($noAnswerNumberOfRings);
        $this->setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail);
        $this->setOutOfPrimaryZoneRedirectToVoiceMail($outOfPrimaryZoneRedirectToVoiceMail);
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
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail = null)
    {
        $this->busyRedirectToVoiceMail = (boolean) $busyRedirectToVoiceMail;
    }

    /**
     * 
     */
    public function getBusyRedirectToVoiceMail()
    {
        return (!$this->busyRedirectToVoiceMail) ?: $this->busyRedirectToVoiceMail->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail = null)
    {
        $this->noAnswerRedirectToVoiceMail = (boolean) $noAnswerRedirectToVoiceMail;
    }

    /**
     * 
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return (!$this->noAnswerRedirectToVoiceMail) ?: $this->noAnswerRedirectToVoiceMail->getValue();
    }

    /**
     * Third Party Voice Mail user-level voice mail server choices.
     */
    public function setServerSelection($serverSelection = null)
    {
        $this->serverSelection = ($serverSelection InstanceOf ThirdPartyVoiceMailSupportServerSelection)
             ? $serverSelection
             : new ThirdPartyVoiceMailSupportServerSelection($serverSelection);
    }

    /**
     * Third Party Voice Mail user-level voice mail server choices.
     */
    public function getServerSelection()
    {
        return (!$this->serverSelection) ?: $this->serverSelection->getValue();
    }

    /**
     * Uniquely identifies an external voice mail server.
     */
    public function setUserServer($userServer = null)
    {
        $this->userServer = ($userServer InstanceOf ThirdPartyVoiceMailSupportMailServer)
             ? $userServer
             : new ThirdPartyVoiceMailSupportMailServer($userServer);
    }

    /**
     * Uniquely identifies an external voice mail server.
     */
    public function getUserServer()
    {
        return (!$this->userServer) ?: $this->userServer->getValue();
    }

    /**
     * Mailbox Id type on Third Party Voice Mail platform.
     */
    public function setMailboxIdType($mailboxIdType = null)
    {
        $this->mailboxIdType = ($mailboxIdType InstanceOf ThirdPartyVoiceMailSupportMailboxIdType)
             ? $mailboxIdType
             : new ThirdPartyVoiceMailSupportMailboxIdType($mailboxIdType);
    }

    /**
     * Mailbox Id type on Third Party Voice Mail platform.
     */
    public function getMailboxIdType()
    {
        return (!$this->mailboxIdType) ?: $this->mailboxIdType->getValue();
    }

    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function setMailboxURL($mailboxURL = null)
    {
        $this->mailboxURL = ($mailboxURL InstanceOf SIPURI)
             ? $mailboxURL
             : new SIPURI($mailboxURL);
    }

    /**
     * SIP URI.
     *         The SIP URI is used in many different places in the schema.
     *         If the SIPURI is an alias, the Validation rules are:
     *         - don't allow sip:
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - exactly one @ symbol
     *         - user portion and host portion are both required
     */
    public function getMailboxURL()
    {
        return (!$this->mailboxURL) ?: $this->mailboxURL->getValue();
    }

    /**
     * Number of Rings until call is redirected to voice mail.
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf ThirdPartyVoiceMailSupportNumberOfRings)
             ? $noAnswerNumberOfRings
             : new ThirdPartyVoiceMailSupportNumberOfRings($noAnswerNumberOfRings);
    }

    /**
     * Number of Rings until call is redirected to voice mail.
     */
    public function getNoAnswerNumberOfRings()
    {
        return (!$this->noAnswerNumberOfRings) ?: $this->noAnswerNumberOfRings->getValue();
    }

    /**
     * 
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail = null)
    {
        $this->alwaysRedirectToVoiceMail = (boolean) $alwaysRedirectToVoiceMail;
    }

    /**
     * 
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return (!$this->alwaysRedirectToVoiceMail) ?: $this->alwaysRedirectToVoiceMail->getValue();
    }

    /**
     * 
     */
    public function setOutOfPrimaryZoneRedirectToVoiceMail($outOfPrimaryZoneRedirectToVoiceMail = null)
    {
        $this->outOfPrimaryZoneRedirectToVoiceMail = (boolean) $outOfPrimaryZoneRedirectToVoiceMail;
    }

    /**
     * 
     */
    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return (!$this->outOfPrimaryZoneRedirectToVoiceMail) ?: $this->outOfPrimaryZoneRedirectToVoiceMail->getValue();
    }
}
