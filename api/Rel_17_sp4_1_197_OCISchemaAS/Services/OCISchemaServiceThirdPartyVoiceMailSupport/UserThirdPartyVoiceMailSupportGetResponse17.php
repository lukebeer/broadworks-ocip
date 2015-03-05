<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceThirdPartyVoiceMailSupport; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ThirdPartyVoiceMailSupportServerSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ThirdPartyVoiceMailSupportMailServer;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ThirdPartyVoiceMailSupportMailboxIdType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ThirdPartyVoiceMailSupportNumberOfRings;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserThirdPartyVoiceMailSupportGetRequest17.
 */
class UserThirdPartyVoiceMailSupportGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $busyRedirectToVoiceMail,
             $noAnswerRedirectToVoiceMail,
             $serverSelection,
             $userServer=null,
             $mailboxIdType,
             $mailboxURL=null,
             $noAnswerNumberOfRings,
             $alwaysRedirectToVoiceMail,
             $outOfPrimaryZoneRedirectToVoiceMail
    ) {
        $this->isActive                            = $isActive;
        $this->busyRedirectToVoiceMail             = $busyRedirectToVoiceMail;
        $this->noAnswerRedirectToVoiceMail         = $noAnswerRedirectToVoiceMail;
        $this->serverSelection                     = $serverSelection;
        $this->userServer                          = $userServer;
        $this->mailboxIdType                       = $mailboxIdType;
        $this->mailboxURL                          = new SIPURI($mailboxURL);
        $this->noAnswerNumberOfRings               = $noAnswerNumberOfRings;
        $this->alwaysRedirectToVoiceMail           = $alwaysRedirectToVoiceMail;
        $this->outOfPrimaryZoneRedirectToVoiceMail = $outOfPrimaryZoneRedirectToVoiceMail;
        $this->args                                = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail)
    {
        $busyRedirectToVoiceMail and $this->busyRedirectToVoiceMail = new xs:boolean($busyRedirectToVoiceMail);
    }

    public function getBusyRedirectToVoiceMail()
    {
        return (!$this->busyRedirectToVoiceMail) ?: $this->busyRedirectToVoiceMail->value();
    }

    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail)
    {
        $noAnswerRedirectToVoiceMail and $this->noAnswerRedirectToVoiceMail = new xs:boolean($noAnswerRedirectToVoiceMail);
    }

    public function getNoAnswerRedirectToVoiceMail()
    {
        return (!$this->noAnswerRedirectToVoiceMail) ?: $this->noAnswerRedirectToVoiceMail->value();
    }

    public function setServerSelection($serverSelection)
    {
        $serverSelection and $this->serverSelection = new ThirdPartyVoiceMailSupportServerSelection($serverSelection);
    }

    public function getServerSelection()
    {
        return (!$this->serverSelection) ?: $this->serverSelection->value();
    }

    public function setUserServer($userServer)
    {
        $userServer and $this->userServer = new ThirdPartyVoiceMailSupportMailServer($userServer);
    }

    public function getUserServer()
    {
        return (!$this->userServer) ?: $this->userServer->value();
    }

    public function setMailboxIdType($mailboxIdType)
    {
        $mailboxIdType and $this->mailboxIdType = new ThirdPartyVoiceMailSupportMailboxIdType($mailboxIdType);
    }

    public function getMailboxIdType()
    {
        return (!$this->mailboxIdType) ?: $this->mailboxIdType->value();
    }

    public function setMailboxURL($mailboxURL)
    {
        $mailboxURL and $this->mailboxURL = new SIPURI($mailboxURL);
    }

    public function getMailboxURL()
    {
        return (!$this->mailboxURL) ?: $this->mailboxURL->value();
    }

    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $noAnswerNumberOfRings and $this->noAnswerNumberOfRings = new ThirdPartyVoiceMailSupportNumberOfRings($noAnswerNumberOfRings);
    }

    public function getNoAnswerNumberOfRings()
    {
        return (!$this->noAnswerNumberOfRings) ?: $this->noAnswerNumberOfRings->value();
    }

    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail)
    {
        $alwaysRedirectToVoiceMail and $this->alwaysRedirectToVoiceMail = new xs:boolean($alwaysRedirectToVoiceMail);
    }

    public function getAlwaysRedirectToVoiceMail()
    {
        return (!$this->alwaysRedirectToVoiceMail) ?: $this->alwaysRedirectToVoiceMail->value();
    }

    public function setOutOfPrimaryZoneRedirectToVoiceMail($outOfPrimaryZoneRedirectToVoiceMail)
    {
        $outOfPrimaryZoneRedirectToVoiceMail and $this->outOfPrimaryZoneRedirectToVoiceMail = new xs:boolean($outOfPrimaryZoneRedirectToVoiceMail);
    }

    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return (!$this->outOfPrimaryZoneRedirectToVoiceMail) ?: $this->outOfPrimaryZoneRedirectToVoiceMail->value();
    }
}
