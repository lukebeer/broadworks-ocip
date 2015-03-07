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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserThirdPartyVoiceMailSupportGetRequest17.
 */
class UserThirdPartyVoiceMailSupportGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                 = __CLASS__;
    protected $isActive                             = null;
    protected $busyRedirectToVoiceMail              = null;
    protected $noAnswerRedirectToVoiceMail          = null;
    protected $serverSelection                      = null;
    protected $userServer                           = null;
    protected $mailboxIdType                        = null;
    protected $mailboxURL                           = null;
    protected $noAnswerNumberOfRings                = null;
    protected $alwaysRedirectToVoiceMail            = null;
    protected $outOfPrimaryZoneRedirectToVoiceMail  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setBusyRedirectToVoiceMail(xs:boolean $busyRedirectToVoiceMail = null)
    {
    }

    public function getBusyRedirectToVoiceMail()
    {
        return (!$this->busyRedirectToVoiceMail) ?: $this->busyRedirectToVoiceMail->value();
    }

    public function setNoAnswerRedirectToVoiceMail(xs:boolean $noAnswerRedirectToVoiceMail = null)
    {
    }

    public function getNoAnswerRedirectToVoiceMail()
    {
        return (!$this->noAnswerRedirectToVoiceMail) ?: $this->noAnswerRedirectToVoiceMail->value();
    }

    public function setServerSelection($serverSelection = null)
    {
        $this->serverSelection = ($serverSelection InstanceOf ThirdPartyVoiceMailSupportServerSelection)
             ? $serverSelection
             : new ThirdPartyVoiceMailSupportServerSelection($serverSelection);
    }

    public function getServerSelection()
    {
        return (!$this->serverSelection) ?: $this->serverSelection->value();
    }

    public function setUserServer($userServer = null)
    {
        $this->userServer = ($userServer InstanceOf ThirdPartyVoiceMailSupportMailServer)
             ? $userServer
             : new ThirdPartyVoiceMailSupportMailServer($userServer);
    }

    public function getUserServer()
    {
        return (!$this->userServer) ?: $this->userServer->value();
    }

    public function setMailboxIdType($mailboxIdType = null)
    {
        $this->mailboxIdType = ($mailboxIdType InstanceOf ThirdPartyVoiceMailSupportMailboxIdType)
             ? $mailboxIdType
             : new ThirdPartyVoiceMailSupportMailboxIdType($mailboxIdType);
    }

    public function getMailboxIdType()
    {
        return (!$this->mailboxIdType) ?: $this->mailboxIdType->value();
    }

    public function setMailboxURL($mailboxURL = null)
    {
        $this->mailboxURL = ($mailboxURL InstanceOf SIPURI)
             ? $mailboxURL
             : new SIPURI($mailboxURL);
    }

    public function getMailboxURL()
    {
        return (!$this->mailboxURL) ?: $this->mailboxURL->value();
    }

    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf ThirdPartyVoiceMailSupportNumberOfRings)
             ? $noAnswerNumberOfRings
             : new ThirdPartyVoiceMailSupportNumberOfRings($noAnswerNumberOfRings);
    }

    public function getNoAnswerNumberOfRings()
    {
        return (!$this->noAnswerNumberOfRings) ?: $this->noAnswerNumberOfRings->value();
    }

    public function setAlwaysRedirectToVoiceMail(xs:boolean $alwaysRedirectToVoiceMail = null)
    {
    }

    public function getAlwaysRedirectToVoiceMail()
    {
        return (!$this->alwaysRedirectToVoiceMail) ?: $this->alwaysRedirectToVoiceMail->value();
    }

    public function setOutOfPrimaryZoneRedirectToVoiceMail(xs:boolean $outOfPrimaryZoneRedirectToVoiceMail = null)
    {
    }

    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return (!$this->outOfPrimaryZoneRedirectToVoiceMail) ?: $this->outOfPrimaryZoneRedirectToVoiceMail->value();
    }
}
