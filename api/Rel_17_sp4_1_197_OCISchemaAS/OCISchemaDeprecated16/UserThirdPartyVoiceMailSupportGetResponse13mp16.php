<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportServerSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportMailboxIdType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportMailServer;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserThirdPartyVoiceMailSupportGetRequest13mp16.
 *         Replaced by: UserThirdPartyVoiceMailSupportGetResponse17
 */
class UserThirdPartyVoiceMailSupportGetResponse13mp16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserThirdPartyVoiceMailSupportGetResponse13mp16';
    public    $name                        = __CLASS__;
    protected $isActive                    = null;
    protected $busyRedirectToVoiceMail     = null;
    protected $noAnswerRedirectToVoiceMail = null;
    protected $serverSelection             = null;
    protected $userServer                  = null;
    protected $mailboxIdType               = null;
    protected $mailboxURL                  = null;
    protected $noAnswerNumberOfRings       = null;
    protected $alwaysRedirectToVoiceMail   = null;


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
}
