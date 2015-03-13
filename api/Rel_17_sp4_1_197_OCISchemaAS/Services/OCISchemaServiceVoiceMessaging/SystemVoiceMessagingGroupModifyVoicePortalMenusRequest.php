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
    public    $name                                              = 'SystemVoiceMessagingGroupModifyVoicePortalMenusRequest';
    protected $useVoicePortalCustomization                       = null;
    protected $voicePortalMainMenuKeys                           = null;
    protected $voiceMessagingMenuKeys                            = null;
    protected $changeBusyOrNoAnswerGreetingMenuKeys              = null;
    protected $recordNewGreetingOrPersonalizedNameMenuKeys       = null;
    protected $deleteAllMessagesMenuKeys                         = null;
    protected $commPilotExpressProfileMenuKeys                   = null;
    protected $personalizedNameMenuKeys                          = null;
    protected $callForwardingOptionsMenuKeys                     = null;
    protected $changeCallForwardingDestinationMenuKeys           = null;
    protected $voicePortalCallingMenuKeys                        = null;
    protected $hotelingMenuKeys                                  = null;
    protected $passcodeMenuKeys                                  = null;
    protected $playMessagesMenuKeys                              = null;
    protected $playMessageMenuKeys                               = null;
    protected $additionalMessageOptionsMenuKeys                  = null;
    protected $forwardOrComposeMessageMenuKeys                   = null;
    protected $replyMessageMenuKeys                              = null;
    protected $sendToDistributionListMenuKeys                    = null;
    protected $selectDistributionListMenuKeys                    = null;
    protected $reviewSelectedDistributionListMenuKeys            = null;
    protected $sendMessageToSelectedDistributionListMenuKeys     = null;
    protected $sendToAllGroupMembersMenuKeys                     = null;
    protected $sendToPersonMenuKeys                              = null;
    protected $changeCurrentIntroductionOrMessageOrReplyMenuKeys = null;
    protected $voicePortalLoginMenuKeys                          = null;
    protected $faxMessagingMenuKeys                              = null;

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
        if (!$useVoicePortalCustomization) return $this;
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
        return $this->useVoicePortalCustomization->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalMainMenuKeys($voicePortalMainMenuKeys = null)
    {
        if (!$voicePortalMainMenuKeys) return $this;
        $this->voicePortalMainMenuKeys->setName('voicePortalMainMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $voicePortalMainMenuKeys
     */
    public function getVoicePortalMainMenuKeys()
    {
        return $this->voicePortalMainMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setVoiceMessagingMenuKeys($voiceMessagingMenuKeys = null)
    {
        if (!$voiceMessagingMenuKeys) return $this;
        $this->voiceMessagingMenuKeys->setName('voiceMessagingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $voiceMessagingMenuKeys
     */
    public function getVoiceMessagingMenuKeys()
    {
        return $this->voiceMessagingMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setChangeBusyOrNoAnswerGreetingMenuKeys($changeBusyOrNoAnswerGreetingMenuKeys = null)
    {
        if (!$changeBusyOrNoAnswerGreetingMenuKeys) return $this;
        $this->changeBusyOrNoAnswerGreetingMenuKeys->setName('changeBusyOrNoAnswerGreetingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $changeBusyOrNoAnswerGreetingMenuKeys
     */
    public function getChangeBusyOrNoAnswerGreetingMenuKeys()
    {
        return $this->changeBusyOrNoAnswerGreetingMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setRecordNewGreetingOrPersonalizedNameMenuKeys($recordNewGreetingOrPersonalizedNameMenuKeys = null)
    {
        if (!$recordNewGreetingOrPersonalizedNameMenuKeys) return $this;
        $this->recordNewGreetingOrPersonalizedNameMenuKeys->setName('recordNewGreetingOrPersonalizedNameMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $recordNewGreetingOrPersonalizedNameMenuKeys
     */
    public function getRecordNewGreetingOrPersonalizedNameMenuKeys()
    {
        return $this->recordNewGreetingOrPersonalizedNameMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setDeleteAllMessagesMenuKeys($deleteAllMessagesMenuKeys = null)
    {
        if (!$deleteAllMessagesMenuKeys) return $this;
        $this->deleteAllMessagesMenuKeys->setName('deleteAllMessagesMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $deleteAllMessagesMenuKeys
     */
    public function getDeleteAllMessagesMenuKeys()
    {
        return $this->deleteAllMessagesMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setCommPilotExpressProfileMenuKeys($commPilotExpressProfileMenuKeys = null)
    {
        if (!$commPilotExpressProfileMenuKeys) return $this;
        $this->commPilotExpressProfileMenuKeys->setName('commPilotExpressProfileMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $commPilotExpressProfileMenuKeys
     */
    public function getCommPilotExpressProfileMenuKeys()
    {
        return $this->commPilotExpressProfileMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setPersonalizedNameMenuKeys($personalizedNameMenuKeys = null)
    {
        if (!$personalizedNameMenuKeys) return $this;
        $this->personalizedNameMenuKeys->setName('personalizedNameMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $personalizedNameMenuKeys
     */
    public function getPersonalizedNameMenuKeys()
    {
        return $this->personalizedNameMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setCallForwardingOptionsMenuKeys($callForwardingOptionsMenuKeys = null)
    {
        if (!$callForwardingOptionsMenuKeys) return $this;
        $this->callForwardingOptionsMenuKeys->setName('callForwardingOptionsMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $callForwardingOptionsMenuKeys
     */
    public function getCallForwardingOptionsMenuKeys()
    {
        return $this->callForwardingOptionsMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setChangeCallForwardingDestinationMenuKeys($changeCallForwardingDestinationMenuKeys = null)
    {
        if (!$changeCallForwardingDestinationMenuKeys) return $this;
        $this->changeCallForwardingDestinationMenuKeys->setName('changeCallForwardingDestinationMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $changeCallForwardingDestinationMenuKeys
     */
    public function getChangeCallForwardingDestinationMenuKeys()
    {
        return $this->changeCallForwardingDestinationMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalCallingMenuKeys($voicePortalCallingMenuKeys = null)
    {
        if (!$voicePortalCallingMenuKeys) return $this;
        $this->voicePortalCallingMenuKeys->setName('voicePortalCallingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $voicePortalCallingMenuKeys
     */
    public function getVoicePortalCallingMenuKeys()
    {
        return $this->voicePortalCallingMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setHotelingMenuKeys($hotelingMenuKeys = null)
    {
        if (!$hotelingMenuKeys) return $this;
        $this->hotelingMenuKeys->setName('hotelingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $hotelingMenuKeys
     */
    public function getHotelingMenuKeys()
    {
        return $this->hotelingMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setPasscodeMenuKeys($passcodeMenuKeys = null)
    {
        if (!$passcodeMenuKeys) return $this;
        $this->passcodeMenuKeys->setName('passcodeMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $passcodeMenuKeys
     */
    public function getPasscodeMenuKeys()
    {
        return $this->passcodeMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setPlayMessagesMenuKeys($playMessagesMenuKeys = null)
    {
        if (!$playMessagesMenuKeys) return $this;
        $this->playMessagesMenuKeys->setName('playMessagesMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $playMessagesMenuKeys
     */
    public function getPlayMessagesMenuKeys()
    {
        return $this->playMessagesMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setPlayMessageMenuKeys($playMessageMenuKeys = null)
    {
        if (!$playMessageMenuKeys) return $this;
        $this->playMessageMenuKeys->setName('playMessageMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $playMessageMenuKeys
     */
    public function getPlayMessageMenuKeys()
    {
        return $this->playMessageMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setAdditionalMessageOptionsMenuKeys($additionalMessageOptionsMenuKeys = null)
    {
        if (!$additionalMessageOptionsMenuKeys) return $this;
        $this->additionalMessageOptionsMenuKeys->setName('additionalMessageOptionsMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $additionalMessageOptionsMenuKeys
     */
    public function getAdditionalMessageOptionsMenuKeys()
    {
        return $this->additionalMessageOptionsMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setForwardOrComposeMessageMenuKeys($forwardOrComposeMessageMenuKeys = null)
    {
        if (!$forwardOrComposeMessageMenuKeys) return $this;
        $this->forwardOrComposeMessageMenuKeys->setName('forwardOrComposeMessageMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $forwardOrComposeMessageMenuKeys
     */
    public function getForwardOrComposeMessageMenuKeys()
    {
        return $this->forwardOrComposeMessageMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setReplyMessageMenuKeys($replyMessageMenuKeys = null)
    {
        if (!$replyMessageMenuKeys) return $this;
        $this->replyMessageMenuKeys->setName('replyMessageMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $replyMessageMenuKeys
     */
    public function getReplyMessageMenuKeys()
    {
        return $this->replyMessageMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setSendToDistributionListMenuKeys($sendToDistributionListMenuKeys = null)
    {
        if (!$sendToDistributionListMenuKeys) return $this;
        $this->sendToDistributionListMenuKeys->setName('sendToDistributionListMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $sendToDistributionListMenuKeys
     */
    public function getSendToDistributionListMenuKeys()
    {
        return $this->sendToDistributionListMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setSelectDistributionListMenuKeys($selectDistributionListMenuKeys = null)
    {
        if (!$selectDistributionListMenuKeys) return $this;
        $this->selectDistributionListMenuKeys->setName('selectDistributionListMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $selectDistributionListMenuKeys
     */
    public function getSelectDistributionListMenuKeys()
    {
        return $this->selectDistributionListMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setReviewSelectedDistributionListMenuKeys($reviewSelectedDistributionListMenuKeys = null)
    {
        if (!$reviewSelectedDistributionListMenuKeys) return $this;
        $this->reviewSelectedDistributionListMenuKeys->setName('reviewSelectedDistributionListMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $reviewSelectedDistributionListMenuKeys
     */
    public function getReviewSelectedDistributionListMenuKeys()
    {
        return $this->reviewSelectedDistributionListMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setSendMessageToSelectedDistributionListMenuKeys($sendMessageToSelectedDistributionListMenuKeys = null)
    {
        if (!$sendMessageToSelectedDistributionListMenuKeys) return $this;
        $this->sendMessageToSelectedDistributionListMenuKeys->setName('sendMessageToSelectedDistributionListMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $sendMessageToSelectedDistributionListMenuKeys
     */
    public function getSendMessageToSelectedDistributionListMenuKeys()
    {
        return $this->sendMessageToSelectedDistributionListMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setSendToAllGroupMembersMenuKeys($sendToAllGroupMembersMenuKeys = null)
    {
        if (!$sendToAllGroupMembersMenuKeys) return $this;
        $this->sendToAllGroupMembersMenuKeys->setName('sendToAllGroupMembersMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $sendToAllGroupMembersMenuKeys
     */
    public function getSendToAllGroupMembersMenuKeys()
    {
        return $this->sendToAllGroupMembersMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setSendToPersonMenuKeys($sendToPersonMenuKeys = null)
    {
        if (!$sendToPersonMenuKeys) return $this;
        $this->sendToPersonMenuKeys->setName('sendToPersonMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $sendToPersonMenuKeys
     */
    public function getSendToPersonMenuKeys()
    {
        return $this->sendToPersonMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setChangeCurrentIntroductionOrMessageOrReplyMenuKeys($changeCurrentIntroductionOrMessageOrReplyMenuKeys = null)
    {
        if (!$changeCurrentIntroductionOrMessageOrReplyMenuKeys) return $this;
        $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys->setName('changeCurrentIntroductionOrMessageOrReplyMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $changeCurrentIntroductionOrMessageOrReplyMenuKeys
     */
    public function getChangeCurrentIntroductionOrMessageOrReplyMenuKeys()
    {
        return $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalLoginMenuKeys($voicePortalLoginMenuKeys = null)
    {
        if (!$voicePortalLoginMenuKeys) return $this;
        $this->voicePortalLoginMenuKeys->setName('voicePortalLoginMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $voicePortalLoginMenuKeys
     */
    public function getVoicePortalLoginMenuKeys()
    {
        return $this->voicePortalLoginMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setFaxMessagingMenuKeys($faxMessagingMenuKeys = null)
    {
        if (!$faxMessagingMenuKeys) return $this;
        $this->faxMessagingMenuKeys->setName('faxMessagingMenuKeys');
        return $this;
    }

    /**
     * 
     * @return  $faxMessagingMenuKeys
     */
    public function getFaxMessagingMenuKeys()
    {
        return $this->faxMessagingMenuKeys->getValue();
    }
}
