<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportServerSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportMailboxIdType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportMailServer;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserThirdPartyVoiceMailSupportGetRequest17.
 */
class UserThirdPartyVoiceMailSupportGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserThirdPartyVoiceMailSupportGetResponse17';
    protected $isActive;
    protected $busyRedirectToVoiceMail;
    protected $noAnswerRedirectToVoiceMail;
    protected $serverSelection;
    protected $userServer;
    protected $mailboxIdType;
    protected $mailboxURL;
    protected $noAnswerNumberOfRings;
    protected $alwaysRedirectToVoiceMail;
    protected $outOfPrimaryZoneRedirectToVoiceMail;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\UserThirdPartyVoiceMailSupportGetResponse17 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail = null)
    {
        $this->busyRedirectToVoiceMail = new PrimitiveType($busyRedirectToVoiceMail);
        $this->busyRedirectToVoiceMail->setName('busyRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $busyRedirectToVoiceMail
     */
    public function getBusyRedirectToVoiceMail()
    {
        return ($this->busyRedirectToVoiceMail) ? $this->busyRedirectToVoiceMail->getValue() : null;
    }

    /**
     * 
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail = null)
    {
        $this->noAnswerRedirectToVoiceMail = new PrimitiveType($noAnswerRedirectToVoiceMail);
        $this->noAnswerRedirectToVoiceMail->setName('noAnswerRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $noAnswerRedirectToVoiceMail
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return ($this->noAnswerRedirectToVoiceMail) ? $this->noAnswerRedirectToVoiceMail->getValue() : null;
    }

    /**
     * 
     */
    public function setServerSelection($serverSelection = null)
    {
        $this->serverSelection = ($serverSelection InstanceOf ThirdPartyVoiceMailSupportServerSelection)
             ? $serverSelection
             : new ThirdPartyVoiceMailSupportServerSelection($serverSelection);
        $this->serverSelection->setName('serverSelection');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportServerSelection $serverSelection
     */
    public function getServerSelection()
    {
        return ($this->serverSelection) ? $this->serverSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setUserServer($userServer = null)
    {
        $this->userServer = ($userServer InstanceOf ThirdPartyVoiceMailSupportMailServer)
             ? $userServer
             : new ThirdPartyVoiceMailSupportMailServer($userServer);
        $this->userServer->setName('userServer');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportMailServer $userServer
     */
    public function getUserServer()
    {
        return ($this->userServer) ? $this->userServer->getValue() : null;
    }

    /**
     * 
     */
    public function setMailboxIdType($mailboxIdType = null)
    {
        $this->mailboxIdType = ($mailboxIdType InstanceOf ThirdPartyVoiceMailSupportMailboxIdType)
             ? $mailboxIdType
             : new ThirdPartyVoiceMailSupportMailboxIdType($mailboxIdType);
        $this->mailboxIdType->setName('mailboxIdType');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportMailboxIdType $mailboxIdType
     */
    public function getMailboxIdType()
    {
        return ($this->mailboxIdType) ? $this->mailboxIdType->getValue() : null;
    }

    /**
     * 
     */
    public function setMailboxURL($mailboxURL = null)
    {
        $this->mailboxURL = ($mailboxURL InstanceOf SIPURI)
             ? $mailboxURL
             : new SIPURI($mailboxURL);
        $this->mailboxURL->setName('mailboxURL');
        return $this;
    }

    /**
     * 
     * @return SIPURI $mailboxURL
     */
    public function getMailboxURL()
    {
        return ($this->mailboxURL) ? $this->mailboxURL->getValue() : null;
    }

    /**
     * 
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf ThirdPartyVoiceMailSupportNumberOfRings)
             ? $noAnswerNumberOfRings
             : new ThirdPartyVoiceMailSupportNumberOfRings($noAnswerNumberOfRings);
        $this->noAnswerNumberOfRings->setName('noAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportNumberOfRings $noAnswerNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return ($this->noAnswerNumberOfRings) ? $this->noAnswerNumberOfRings->getValue() : null;
    }

    /**
     * 
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail = null)
    {
        $this->alwaysRedirectToVoiceMail = new PrimitiveType($alwaysRedirectToVoiceMail);
        $this->alwaysRedirectToVoiceMail->setName('alwaysRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $alwaysRedirectToVoiceMail
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return ($this->alwaysRedirectToVoiceMail) ? $this->alwaysRedirectToVoiceMail->getValue() : null;
    }

    /**
     * 
     */
    public function setOutOfPrimaryZoneRedirectToVoiceMail($outOfPrimaryZoneRedirectToVoiceMail = null)
    {
        $this->outOfPrimaryZoneRedirectToVoiceMail = new PrimitiveType($outOfPrimaryZoneRedirectToVoiceMail);
        $this->outOfPrimaryZoneRedirectToVoiceMail->setName('outOfPrimaryZoneRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $outOfPrimaryZoneRedirectToVoiceMail
     */
    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return ($this->outOfPrimaryZoneRedirectToVoiceMail) ? $this->outOfPrimaryZoneRedirectToVoiceMail->getValue() : null;
    }
}
