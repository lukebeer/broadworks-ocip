<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemVoiceMessagingGroupGetVoicePortalMenusRequest14.
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemVoiceMessagingGroupGetVoicePortalMenusResponse14';
    protected $useVoicePortalCustomization;
    protected $voicePortalMainMenuKeys;
    protected $voiceMessagingMenuKeys;
    protected $changeBusyOrNoAnswerGreetingMenuKeys;
    protected $recordNewGreetingOrPersonalizedNameMenuKeys;
    protected $deleteAllMessagesMenuKeys;
    protected $commPilotExpressProfileMenuKeys;
    protected $personalizedNameMenuKeys;
    protected $callForwardingOptionsMenuKeys;
    protected $changeCallForwardingDestinationMenuKeys;
    protected $voicePortalCallingMenuKeys;
    protected $hotelingMenuKeys;
    protected $passcodeMenuKeys;
    protected $playMessagesMenuKeys;
    protected $playMessageMenuKeys;
    protected $additionalMessageOptionsMenuKeys;
    protected $forwardOrComposeMessageMenuKeys;
    protected $replyMessageMenuKeys;
    protected $sendToDistributionListMenuKeys;
    protected $selectDistributionListMenuKeys;
    protected $reviewSelectedDistributionListMenuKeys;
    protected $sendMessageToSelectedDistributionListMenuKeys;
    protected $sendToAllGroupMembersMenuKeys;
    protected $sendToPersonMenuKeys;
    protected $changeCurrentIntroductionOrMessageOrReplyMenuKeys;
    protected $voicePortalLoginMenuKeys;
    protected $faxMessagingMenuKeys;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\SystemVoiceMessagingGroupGetVoicePortalMenusResponse14 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUseVoicePortalCustomization($useVoicePortalCustomization = null)
    {
        $this->useVoicePortalCustomization = new PrimitiveType($useVoicePortalCustomization);
        $this->useVoicePortalCustomization->setElementName('useVoicePortalCustomization');
        return $this;
    }

    /**
     * 
     * @return boolean $useVoicePortalCustomization
     */
    public function getUseVoicePortalCustomization()
    {
        return ($this->useVoicePortalCustomization)
            ? $this->useVoicePortalCustomization->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoicePortalMainMenuKeys($voicePortalMainMenuKeys = null)
    {
        $this->voicePortalMainMenuKeys->setElementName('voicePortalMainMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $voicePortalMainMenuKeys
     */
    public function getVoicePortalMainMenuKeys()
    {
        return ($this->voicePortalMainMenuKeys)
            ? $this->voicePortalMainMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoiceMessagingMenuKeys($voiceMessagingMenuKeys = null)
    {
        $this->voiceMessagingMenuKeys->setElementName('voiceMessagingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $voiceMessagingMenuKeys
     */
    public function getVoiceMessagingMenuKeys()
    {
        return ($this->voiceMessagingMenuKeys)
            ? $this->voiceMessagingMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setChangeBusyOrNoAnswerGreetingMenuKeys($changeBusyOrNoAnswerGreetingMenuKeys = null)
    {
        $this->changeBusyOrNoAnswerGreetingMenuKeys->setElementName('changeBusyOrNoAnswerGreetingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $changeBusyOrNoAnswerGreetingMenuKeys
     */
    public function getChangeBusyOrNoAnswerGreetingMenuKeys()
    {
        return ($this->changeBusyOrNoAnswerGreetingMenuKeys)
            ? $this->changeBusyOrNoAnswerGreetingMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRecordNewGreetingOrPersonalizedNameMenuKeys($recordNewGreetingOrPersonalizedNameMenuKeys = null)
    {
        $this->recordNewGreetingOrPersonalizedNameMenuKeys->setElementName('recordNewGreetingOrPersonalizedNameMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $recordNewGreetingOrPersonalizedNameMenuKeys
     */
    public function getRecordNewGreetingOrPersonalizedNameMenuKeys()
    {
        return ($this->recordNewGreetingOrPersonalizedNameMenuKeys)
            ? $this->recordNewGreetingOrPersonalizedNameMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeleteAllMessagesMenuKeys($deleteAllMessagesMenuKeys = null)
    {
        $this->deleteAllMessagesMenuKeys->setElementName('deleteAllMessagesMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $deleteAllMessagesMenuKeys
     */
    public function getDeleteAllMessagesMenuKeys()
    {
        return ($this->deleteAllMessagesMenuKeys)
            ? $this->deleteAllMessagesMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCommPilotExpressProfileMenuKeys($commPilotExpressProfileMenuKeys = null)
    {
        $this->commPilotExpressProfileMenuKeys->setElementName('commPilotExpressProfileMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $commPilotExpressProfileMenuKeys
     */
    public function getCommPilotExpressProfileMenuKeys()
    {
        return ($this->commPilotExpressProfileMenuKeys)
            ? $this->commPilotExpressProfileMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPersonalizedNameMenuKeys($personalizedNameMenuKeys = null)
    {
        $this->personalizedNameMenuKeys->setElementName('personalizedNameMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $personalizedNameMenuKeys
     */
    public function getPersonalizedNameMenuKeys()
    {
        return ($this->personalizedNameMenuKeys)
            ? $this->personalizedNameMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallForwardingOptionsMenuKeys($callForwardingOptionsMenuKeys = null)
    {
        $this->callForwardingOptionsMenuKeys->setElementName('callForwardingOptionsMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $callForwardingOptionsMenuKeys
     */
    public function getCallForwardingOptionsMenuKeys()
    {
        return ($this->callForwardingOptionsMenuKeys)
            ? $this->callForwardingOptionsMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setChangeCallForwardingDestinationMenuKeys($changeCallForwardingDestinationMenuKeys = null)
    {
        $this->changeCallForwardingDestinationMenuKeys->setElementName('changeCallForwardingDestinationMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $changeCallForwardingDestinationMenuKeys
     */
    public function getChangeCallForwardingDestinationMenuKeys()
    {
        return ($this->changeCallForwardingDestinationMenuKeys)
            ? $this->changeCallForwardingDestinationMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoicePortalCallingMenuKeys($voicePortalCallingMenuKeys = null)
    {
        $this->voicePortalCallingMenuKeys->setElementName('voicePortalCallingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $voicePortalCallingMenuKeys
     */
    public function getVoicePortalCallingMenuKeys()
    {
        return ($this->voicePortalCallingMenuKeys)
            ? $this->voicePortalCallingMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHotelingMenuKeys($hotelingMenuKeys = null)
    {
        $this->hotelingMenuKeys->setElementName('hotelingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $hotelingMenuKeys
     */
    public function getHotelingMenuKeys()
    {
        return ($this->hotelingMenuKeys)
            ? $this->hotelingMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPasscodeMenuKeys($passcodeMenuKeys = null)
    {
        $this->passcodeMenuKeys->setElementName('passcodeMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $passcodeMenuKeys
     */
    public function getPasscodeMenuKeys()
    {
        return ($this->passcodeMenuKeys)
            ? $this->passcodeMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayMessagesMenuKeys($playMessagesMenuKeys = null)
    {
        $this->playMessagesMenuKeys->setElementName('playMessagesMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $playMessagesMenuKeys
     */
    public function getPlayMessagesMenuKeys()
    {
        return ($this->playMessagesMenuKeys)
            ? $this->playMessagesMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayMessageMenuKeys($playMessageMenuKeys = null)
    {
        $this->playMessageMenuKeys->setElementName('playMessageMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $playMessageMenuKeys
     */
    public function getPlayMessageMenuKeys()
    {
        return ($this->playMessageMenuKeys)
            ? $this->playMessageMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAdditionalMessageOptionsMenuKeys($additionalMessageOptionsMenuKeys = null)
    {
        $this->additionalMessageOptionsMenuKeys->setElementName('additionalMessageOptionsMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $additionalMessageOptionsMenuKeys
     */
    public function getAdditionalMessageOptionsMenuKeys()
    {
        return ($this->additionalMessageOptionsMenuKeys)
            ? $this->additionalMessageOptionsMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForwardOrComposeMessageMenuKeys($forwardOrComposeMessageMenuKeys = null)
    {
        $this->forwardOrComposeMessageMenuKeys->setElementName('forwardOrComposeMessageMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $forwardOrComposeMessageMenuKeys
     */
    public function getForwardOrComposeMessageMenuKeys()
    {
        return ($this->forwardOrComposeMessageMenuKeys)
            ? $this->forwardOrComposeMessageMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReplyMessageMenuKeys($replyMessageMenuKeys = null)
    {
        $this->replyMessageMenuKeys->setElementName('replyMessageMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $replyMessageMenuKeys
     */
    public function getReplyMessageMenuKeys()
    {
        return ($this->replyMessageMenuKeys)
            ? $this->replyMessageMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendToDistributionListMenuKeys($sendToDistributionListMenuKeys = null)
    {
        $this->sendToDistributionListMenuKeys->setElementName('sendToDistributionListMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $sendToDistributionListMenuKeys
     */
    public function getSendToDistributionListMenuKeys()
    {
        return ($this->sendToDistributionListMenuKeys)
            ? $this->sendToDistributionListMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSelectDistributionListMenuKeys($selectDistributionListMenuKeys = null)
    {
        $this->selectDistributionListMenuKeys->setElementName('selectDistributionListMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $selectDistributionListMenuKeys
     */
    public function getSelectDistributionListMenuKeys()
    {
        return ($this->selectDistributionListMenuKeys)
            ? $this->selectDistributionListMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setReviewSelectedDistributionListMenuKeys($reviewSelectedDistributionListMenuKeys = null)
    {
        $this->reviewSelectedDistributionListMenuKeys->setElementName('reviewSelectedDistributionListMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $reviewSelectedDistributionListMenuKeys
     */
    public function getReviewSelectedDistributionListMenuKeys()
    {
        return ($this->reviewSelectedDistributionListMenuKeys)
            ? $this->reviewSelectedDistributionListMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendMessageToSelectedDistributionListMenuKeys($sendMessageToSelectedDistributionListMenuKeys = null)
    {
        $this->sendMessageToSelectedDistributionListMenuKeys->setElementName('sendMessageToSelectedDistributionListMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $sendMessageToSelectedDistributionListMenuKeys
     */
    public function getSendMessageToSelectedDistributionListMenuKeys()
    {
        return ($this->sendMessageToSelectedDistributionListMenuKeys)
            ? $this->sendMessageToSelectedDistributionListMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendToAllGroupMembersMenuKeys($sendToAllGroupMembersMenuKeys = null)
    {
        $this->sendToAllGroupMembersMenuKeys->setElementName('sendToAllGroupMembersMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $sendToAllGroupMembersMenuKeys
     */
    public function getSendToAllGroupMembersMenuKeys()
    {
        return ($this->sendToAllGroupMembersMenuKeys)
            ? $this->sendToAllGroupMembersMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendToPersonMenuKeys($sendToPersonMenuKeys = null)
    {
        $this->sendToPersonMenuKeys->setElementName('sendToPersonMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $sendToPersonMenuKeys
     */
    public function getSendToPersonMenuKeys()
    {
        return ($this->sendToPersonMenuKeys)
            ? $this->sendToPersonMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setChangeCurrentIntroductionOrMessageOrReplyMenuKeys($changeCurrentIntroductionOrMessageOrReplyMenuKeys = null)
    {
        $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys->setElementName('changeCurrentIntroductionOrMessageOrReplyMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $changeCurrentIntroductionOrMessageOrReplyMenuKeys
     */
    public function getChangeCurrentIntroductionOrMessageOrReplyMenuKeys()
    {
        return ($this->changeCurrentIntroductionOrMessageOrReplyMenuKeys)
            ? $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoicePortalLoginMenuKeys($voicePortalLoginMenuKeys = null)
    {
        $this->voicePortalLoginMenuKeys->setElementName('voicePortalLoginMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $voicePortalLoginMenuKeys
     */
    public function getVoicePortalLoginMenuKeys()
    {
        return ($this->voicePortalLoginMenuKeys)
            ? $this->voicePortalLoginMenuKeys->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFaxMessagingMenuKeys($faxMessagingMenuKeys = null)
    {
        $this->faxMessagingMenuKeys->setElementName('faxMessagingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $faxMessagingMenuKeys
     */
    public function getFaxMessagingMenuKeys()
    {
        return ($this->faxMessagingMenuKeys)
            ? $this->faxMessagingMenuKeys->getElementValue()
            : null;
    }
}
