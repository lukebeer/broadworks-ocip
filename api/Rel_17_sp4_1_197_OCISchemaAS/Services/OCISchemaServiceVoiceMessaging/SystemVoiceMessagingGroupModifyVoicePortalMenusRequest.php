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
 * Request to modify the system voice portal menus setting.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemVoiceMessagingGroupModifyVoicePortalMenusRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemVoiceMessagingGroupModifyVoicePortalMenusRequest';
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

    public function __construct(
         $useVoicePortalCustomization = null,
         $voicePortalMainMenuKeys = null,
         $voiceMessagingMenuKeys = null,
         $changeBusyOrNoAnswerGreetingMenuKeys = null,
         $recordNewGreetingOrPersonalizedNameMenuKeys = null,
         $deleteAllMessagesMenuKeys = null,
         $commPilotExpressProfileMenuKeys = null,
         $personalizedNameMenuKeys = null,
         $callForwardingOptionsMenuKeys = null,
         $changeCallForwardingDestinationMenuKeys = null,
         $voicePortalCallingMenuKeys = null,
         $hotelingMenuKeys = null,
         $passcodeMenuKeys = null,
         $playMessagesMenuKeys = null,
         $playMessageMenuKeys = null,
         $additionalMessageOptionsMenuKeys = null,
         $forwardOrComposeMessageMenuKeys = null,
         $replyMessageMenuKeys = null,
         $sendToDistributionListMenuKeys = null,
         $selectDistributionListMenuKeys = null,
         $reviewSelectedDistributionListMenuKeys = null,
         $sendMessageToSelectedDistributionListMenuKeys = null,
         $sendToAllGroupMembersMenuKeys = null,
         $sendToPersonMenuKeys = null,
         $changeCurrentIntroductionOrMessageOrReplyMenuKeys = null,
         $voicePortalLoginMenuKeys = null,
         $faxMessagingMenuKeys = null
    ) {
        $this->setUseVoicePortalCustomization($useVoicePortalCustomization);
        $this->setVoicePortalMainMenuKeys($voicePortalMainMenuKeys);
        $this->setVoiceMessagingMenuKeys($voiceMessagingMenuKeys);
        $this->setChangeBusyOrNoAnswerGreetingMenuKeys($changeBusyOrNoAnswerGreetingMenuKeys);
        $this->setRecordNewGreetingOrPersonalizedNameMenuKeys($recordNewGreetingOrPersonalizedNameMenuKeys);
        $this->setDeleteAllMessagesMenuKeys($deleteAllMessagesMenuKeys);
        $this->setCommPilotExpressProfileMenuKeys($commPilotExpressProfileMenuKeys);
        $this->setPersonalizedNameMenuKeys($personalizedNameMenuKeys);
        $this->setCallForwardingOptionsMenuKeys($callForwardingOptionsMenuKeys);
        $this->setChangeCallForwardingDestinationMenuKeys($changeCallForwardingDestinationMenuKeys);
        $this->setVoicePortalCallingMenuKeys($voicePortalCallingMenuKeys);
        $this->setHotelingMenuKeys($hotelingMenuKeys);
        $this->setPasscodeMenuKeys($passcodeMenuKeys);
        $this->setPlayMessagesMenuKeys($playMessagesMenuKeys);
        $this->setPlayMessageMenuKeys($playMessageMenuKeys);
        $this->setAdditionalMessageOptionsMenuKeys($additionalMessageOptionsMenuKeys);
        $this->setForwardOrComposeMessageMenuKeys($forwardOrComposeMessageMenuKeys);
        $this->setReplyMessageMenuKeys($replyMessageMenuKeys);
        $this->setSendToDistributionListMenuKeys($sendToDistributionListMenuKeys);
        $this->setSelectDistributionListMenuKeys($selectDistributionListMenuKeys);
        $this->setReviewSelectedDistributionListMenuKeys($reviewSelectedDistributionListMenuKeys);
        $this->setSendMessageToSelectedDistributionListMenuKeys($sendMessageToSelectedDistributionListMenuKeys);
        $this->setSendToAllGroupMembersMenuKeys($sendToAllGroupMembersMenuKeys);
        $this->setSendToPersonMenuKeys($sendToPersonMenuKeys);
        $this->setChangeCurrentIntroductionOrMessageOrReplyMenuKeys($changeCurrentIntroductionOrMessageOrReplyMenuKeys);
        $this->setVoicePortalLoginMenuKeys($voicePortalLoginMenuKeys);
        $this->setFaxMessagingMenuKeys($faxMessagingMenuKeys);
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
    public function setUseVoicePortalCustomization($useVoicePortalCustomization = null)
    {
        $this->useVoicePortalCustomization = new PrimitiveType($useVoicePortalCustomization);
        $this->useVoicePortalCustomization->setName('useVoicePortalCustomization');
        return $this;
    }

    /**
     * 
     * @return boolean $useVoicePortalCustomization
     */
    public function getUseVoicePortalCustomization()
    {
        return ($this->useVoicePortalCustomization) ? $this->useVoicePortalCustomization->getValue() : null;
    }

    /**
     * 
     */
    public function setVoicePortalMainMenuKeys($voicePortalMainMenuKeys = null)
    {
        $this->voicePortalMainMenuKeys->setName('voicePortalMainMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $voicePortalMainMenuKeys
     */
    public function getVoicePortalMainMenuKeys()
    {
        return ($this->voicePortalMainMenuKeys) ? $this->voicePortalMainMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setVoiceMessagingMenuKeys($voiceMessagingMenuKeys = null)
    {
        $this->voiceMessagingMenuKeys->setName('voiceMessagingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $voiceMessagingMenuKeys
     */
    public function getVoiceMessagingMenuKeys()
    {
        return ($this->voiceMessagingMenuKeys) ? $this->voiceMessagingMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setChangeBusyOrNoAnswerGreetingMenuKeys($changeBusyOrNoAnswerGreetingMenuKeys = null)
    {
        $this->changeBusyOrNoAnswerGreetingMenuKeys->setName('changeBusyOrNoAnswerGreetingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $changeBusyOrNoAnswerGreetingMenuKeys
     */
    public function getChangeBusyOrNoAnswerGreetingMenuKeys()
    {
        return ($this->changeBusyOrNoAnswerGreetingMenuKeys) ? $this->changeBusyOrNoAnswerGreetingMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setRecordNewGreetingOrPersonalizedNameMenuKeys($recordNewGreetingOrPersonalizedNameMenuKeys = null)
    {
        $this->recordNewGreetingOrPersonalizedNameMenuKeys->setName('recordNewGreetingOrPersonalizedNameMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $recordNewGreetingOrPersonalizedNameMenuKeys
     */
    public function getRecordNewGreetingOrPersonalizedNameMenuKeys()
    {
        return ($this->recordNewGreetingOrPersonalizedNameMenuKeys) ? $this->recordNewGreetingOrPersonalizedNameMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setDeleteAllMessagesMenuKeys($deleteAllMessagesMenuKeys = null)
    {
        $this->deleteAllMessagesMenuKeys->setName('deleteAllMessagesMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $deleteAllMessagesMenuKeys
     */
    public function getDeleteAllMessagesMenuKeys()
    {
        return ($this->deleteAllMessagesMenuKeys) ? $this->deleteAllMessagesMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setCommPilotExpressProfileMenuKeys($commPilotExpressProfileMenuKeys = null)
    {
        $this->commPilotExpressProfileMenuKeys->setName('commPilotExpressProfileMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $commPilotExpressProfileMenuKeys
     */
    public function getCommPilotExpressProfileMenuKeys()
    {
        return ($this->commPilotExpressProfileMenuKeys) ? $this->commPilotExpressProfileMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setPersonalizedNameMenuKeys($personalizedNameMenuKeys = null)
    {
        $this->personalizedNameMenuKeys->setName('personalizedNameMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $personalizedNameMenuKeys
     */
    public function getPersonalizedNameMenuKeys()
    {
        return ($this->personalizedNameMenuKeys) ? $this->personalizedNameMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setCallForwardingOptionsMenuKeys($callForwardingOptionsMenuKeys = null)
    {
        $this->callForwardingOptionsMenuKeys->setName('callForwardingOptionsMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $callForwardingOptionsMenuKeys
     */
    public function getCallForwardingOptionsMenuKeys()
    {
        return ($this->callForwardingOptionsMenuKeys) ? $this->callForwardingOptionsMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setChangeCallForwardingDestinationMenuKeys($changeCallForwardingDestinationMenuKeys = null)
    {
        $this->changeCallForwardingDestinationMenuKeys->setName('changeCallForwardingDestinationMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $changeCallForwardingDestinationMenuKeys
     */
    public function getChangeCallForwardingDestinationMenuKeys()
    {
        return ($this->changeCallForwardingDestinationMenuKeys) ? $this->changeCallForwardingDestinationMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setVoicePortalCallingMenuKeys($voicePortalCallingMenuKeys = null)
    {
        $this->voicePortalCallingMenuKeys->setName('voicePortalCallingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $voicePortalCallingMenuKeys
     */
    public function getVoicePortalCallingMenuKeys()
    {
        return ($this->voicePortalCallingMenuKeys) ? $this->voicePortalCallingMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setHotelingMenuKeys($hotelingMenuKeys = null)
    {
        $this->hotelingMenuKeys->setName('hotelingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $hotelingMenuKeys
     */
    public function getHotelingMenuKeys()
    {
        return ($this->hotelingMenuKeys) ? $this->hotelingMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setPasscodeMenuKeys($passcodeMenuKeys = null)
    {
        $this->passcodeMenuKeys->setName('passcodeMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $passcodeMenuKeys
     */
    public function getPasscodeMenuKeys()
    {
        return ($this->passcodeMenuKeys) ? $this->passcodeMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setPlayMessagesMenuKeys($playMessagesMenuKeys = null)
    {
        $this->playMessagesMenuKeys->setName('playMessagesMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $playMessagesMenuKeys
     */
    public function getPlayMessagesMenuKeys()
    {
        return ($this->playMessagesMenuKeys) ? $this->playMessagesMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setPlayMessageMenuKeys($playMessageMenuKeys = null)
    {
        $this->playMessageMenuKeys->setName('playMessageMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $playMessageMenuKeys
     */
    public function getPlayMessageMenuKeys()
    {
        return ($this->playMessageMenuKeys) ? $this->playMessageMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setAdditionalMessageOptionsMenuKeys($additionalMessageOptionsMenuKeys = null)
    {
        $this->additionalMessageOptionsMenuKeys->setName('additionalMessageOptionsMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $additionalMessageOptionsMenuKeys
     */
    public function getAdditionalMessageOptionsMenuKeys()
    {
        return ($this->additionalMessageOptionsMenuKeys) ? $this->additionalMessageOptionsMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setForwardOrComposeMessageMenuKeys($forwardOrComposeMessageMenuKeys = null)
    {
        $this->forwardOrComposeMessageMenuKeys->setName('forwardOrComposeMessageMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $forwardOrComposeMessageMenuKeys
     */
    public function getForwardOrComposeMessageMenuKeys()
    {
        return ($this->forwardOrComposeMessageMenuKeys) ? $this->forwardOrComposeMessageMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setReplyMessageMenuKeys($replyMessageMenuKeys = null)
    {
        $this->replyMessageMenuKeys->setName('replyMessageMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $replyMessageMenuKeys
     */
    public function getReplyMessageMenuKeys()
    {
        return ($this->replyMessageMenuKeys) ? $this->replyMessageMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setSendToDistributionListMenuKeys($sendToDistributionListMenuKeys = null)
    {
        $this->sendToDistributionListMenuKeys->setName('sendToDistributionListMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $sendToDistributionListMenuKeys
     */
    public function getSendToDistributionListMenuKeys()
    {
        return ($this->sendToDistributionListMenuKeys) ? $this->sendToDistributionListMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setSelectDistributionListMenuKeys($selectDistributionListMenuKeys = null)
    {
        $this->selectDistributionListMenuKeys->setName('selectDistributionListMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $selectDistributionListMenuKeys
     */
    public function getSelectDistributionListMenuKeys()
    {
        return ($this->selectDistributionListMenuKeys) ? $this->selectDistributionListMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setReviewSelectedDistributionListMenuKeys($reviewSelectedDistributionListMenuKeys = null)
    {
        $this->reviewSelectedDistributionListMenuKeys->setName('reviewSelectedDistributionListMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $reviewSelectedDistributionListMenuKeys
     */
    public function getReviewSelectedDistributionListMenuKeys()
    {
        return ($this->reviewSelectedDistributionListMenuKeys) ? $this->reviewSelectedDistributionListMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setSendMessageToSelectedDistributionListMenuKeys($sendMessageToSelectedDistributionListMenuKeys = null)
    {
        $this->sendMessageToSelectedDistributionListMenuKeys->setName('sendMessageToSelectedDistributionListMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $sendMessageToSelectedDistributionListMenuKeys
     */
    public function getSendMessageToSelectedDistributionListMenuKeys()
    {
        return ($this->sendMessageToSelectedDistributionListMenuKeys) ? $this->sendMessageToSelectedDistributionListMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setSendToAllGroupMembersMenuKeys($sendToAllGroupMembersMenuKeys = null)
    {
        $this->sendToAllGroupMembersMenuKeys->setName('sendToAllGroupMembersMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $sendToAllGroupMembersMenuKeys
     */
    public function getSendToAllGroupMembersMenuKeys()
    {
        return ($this->sendToAllGroupMembersMenuKeys) ? $this->sendToAllGroupMembersMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setSendToPersonMenuKeys($sendToPersonMenuKeys = null)
    {
        $this->sendToPersonMenuKeys->setName('sendToPersonMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $sendToPersonMenuKeys
     */
    public function getSendToPersonMenuKeys()
    {
        return ($this->sendToPersonMenuKeys) ? $this->sendToPersonMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setChangeCurrentIntroductionOrMessageOrReplyMenuKeys($changeCurrentIntroductionOrMessageOrReplyMenuKeys = null)
    {
        $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys->setName('changeCurrentIntroductionOrMessageOrReplyMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $changeCurrentIntroductionOrMessageOrReplyMenuKeys
     */
    public function getChangeCurrentIntroductionOrMessageOrReplyMenuKeys()
    {
        return ($this->changeCurrentIntroductionOrMessageOrReplyMenuKeys) ? $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setVoicePortalLoginMenuKeys($voicePortalLoginMenuKeys = null)
    {
        $this->voicePortalLoginMenuKeys->setName('voicePortalLoginMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $voicePortalLoginMenuKeys
     */
    public function getVoicePortalLoginMenuKeys()
    {
        return ($this->voicePortalLoginMenuKeys) ? $this->voicePortalLoginMenuKeys->getValue() : null;
    }

    /**
     * 
     */
    public function setFaxMessagingMenuKeys($faxMessagingMenuKeys = null)
    {
        $this->faxMessagingMenuKeys->setName('faxMessagingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $faxMessagingMenuKeys
     */
    public function getFaxMessagingMenuKeys()
    {
        return ($this->faxMessagingMenuKeys) ? $this->faxMessagingMenuKeys->getValue() : null;
    }
}
