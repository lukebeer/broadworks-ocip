<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportServerSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportNumberOfRings;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportMailboxIdType;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\ThirdPartyVoiceMailSupportMailServer;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserThirdPartyVoiceMailSupportGetRequest17.
 */
class UserThirdPartyVoiceMailSupportGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserThirdPartyVoiceMailSupportGetResponse17';
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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport\UserThirdPartyVoiceMailSupportGetResponse17 $response
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
        $this->isActive->setElementName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive)
            ? $this->isActive->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusyRedirectToVoiceMail($busyRedirectToVoiceMail = null)
    {
        $this->busyRedirectToVoiceMail = new PrimitiveType($busyRedirectToVoiceMail);
        $this->busyRedirectToVoiceMail->setElementName('busyRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $busyRedirectToVoiceMail
     */
    public function getBusyRedirectToVoiceMail()
    {
        return ($this->busyRedirectToVoiceMail)
            ? $this->busyRedirectToVoiceMail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerRedirectToVoiceMail($noAnswerRedirectToVoiceMail = null)
    {
        $this->noAnswerRedirectToVoiceMail = new PrimitiveType($noAnswerRedirectToVoiceMail);
        $this->noAnswerRedirectToVoiceMail->setElementName('noAnswerRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $noAnswerRedirectToVoiceMail
     */
    public function getNoAnswerRedirectToVoiceMail()
    {
        return ($this->noAnswerRedirectToVoiceMail)
            ? $this->noAnswerRedirectToVoiceMail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServerSelection($serverSelection = null)
    {
        $this->serverSelection = ($serverSelection InstanceOf ThirdPartyVoiceMailSupportServerSelection)
             ? $serverSelection
             : new ThirdPartyVoiceMailSupportServerSelection($serverSelection);
        $this->serverSelection->setElementName('serverSelection');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportServerSelection $serverSelection
     */
    public function getServerSelection()
    {
        return ($this->serverSelection)
            ? $this->serverSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUserServer($userServer = null)
    {
        $this->userServer = ($userServer InstanceOf ThirdPartyVoiceMailSupportMailServer)
             ? $userServer
             : new ThirdPartyVoiceMailSupportMailServer($userServer);
        $this->userServer->setElementName('userServer');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportMailServer $userServer
     */
    public function getUserServer()
    {
        return ($this->userServer)
            ? $this->userServer->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMailboxIdType($mailboxIdType = null)
    {
        $this->mailboxIdType = ($mailboxIdType InstanceOf ThirdPartyVoiceMailSupportMailboxIdType)
             ? $mailboxIdType
             : new ThirdPartyVoiceMailSupportMailboxIdType($mailboxIdType);
        $this->mailboxIdType->setElementName('mailboxIdType');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportMailboxIdType $mailboxIdType
     */
    public function getMailboxIdType()
    {
        return ($this->mailboxIdType)
            ? $this->mailboxIdType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMailboxURL($mailboxURL = null)
    {
        $this->mailboxURL = ($mailboxURL InstanceOf SIPURI)
             ? $mailboxURL
             : new SIPURI($mailboxURL);
        $this->mailboxURL->setElementName('mailboxURL');
        return $this;
    }

    /**
     * 
     * @return SIPURI $mailboxURL
     */
    public function getMailboxURL()
    {
        return ($this->mailboxURL)
            ? $this->mailboxURL->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf ThirdPartyVoiceMailSupportNumberOfRings)
             ? $noAnswerNumberOfRings
             : new ThirdPartyVoiceMailSupportNumberOfRings($noAnswerNumberOfRings);
        $this->noAnswerNumberOfRings->setElementName('noAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return ThirdPartyVoiceMailSupportNumberOfRings $noAnswerNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return ($this->noAnswerNumberOfRings)
            ? $this->noAnswerNumberOfRings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAlwaysRedirectToVoiceMail($alwaysRedirectToVoiceMail = null)
    {
        $this->alwaysRedirectToVoiceMail = new PrimitiveType($alwaysRedirectToVoiceMail);
        $this->alwaysRedirectToVoiceMail->setElementName('alwaysRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $alwaysRedirectToVoiceMail
     */
    public function getAlwaysRedirectToVoiceMail()
    {
        return ($this->alwaysRedirectToVoiceMail)
            ? $this->alwaysRedirectToVoiceMail->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOutOfPrimaryZoneRedirectToVoiceMail($outOfPrimaryZoneRedirectToVoiceMail = null)
    {
        $this->outOfPrimaryZoneRedirectToVoiceMail = new PrimitiveType($outOfPrimaryZoneRedirectToVoiceMail);
        $this->outOfPrimaryZoneRedirectToVoiceMail->setElementName('outOfPrimaryZoneRedirectToVoiceMail');
        return $this;
    }

    /**
     * 
     * @return boolean $outOfPrimaryZoneRedirectToVoiceMail
     */
    public function getOutOfPrimaryZoneRedirectToVoiceMail()
    {
        return ($this->outOfPrimaryZoneRedirectToVoiceMail)
            ? $this->outOfPrimaryZoneRedirectToVoiceMail->getElementValue()
            : null;
    }
}
