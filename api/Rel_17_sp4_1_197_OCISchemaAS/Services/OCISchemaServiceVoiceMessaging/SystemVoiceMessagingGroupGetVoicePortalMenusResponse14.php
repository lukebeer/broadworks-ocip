<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemVoiceMessagingGroupGetVoicePortalMenusRequest14.
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse14 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                                      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging\SystemVoiceMessagingGroupGetVoicePortalMenusResponse14';
    public    $name                                              = __CLASS__;
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


    /**
     * 
     */
    public function setUseVoicePortalCustomization($useVoicePortalCustomization = null)
    {
        $this->useVoicePortalCustomization = (boolean) $useVoicePortalCustomization;
    }

    /**
     * 
     */
    public function getUseVoicePortalCustomization()
    {
        return (!$this->useVoicePortalCustomization) ?: $this->useVoicePortalCustomization->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalMainMenuKeys($voicePortalMainMenuKeys = null)
    {
        $this->voicePortalMainMenuKeys = $voicePortalMainMenuKeys;
    }

    /**
     * 
     */
    public function getVoicePortalMainMenuKeys()
    {
        return (!$this->voicePortalMainMenuKeys) ?: $this->voicePortalMainMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setVoiceMessagingMenuKeys($voiceMessagingMenuKeys = null)
    {
        $this->voiceMessagingMenuKeys = $voiceMessagingMenuKeys;
    }

    /**
     * 
     */
    public function getVoiceMessagingMenuKeys()
    {
        return (!$this->voiceMessagingMenuKeys) ?: $this->voiceMessagingMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setChangeBusyOrNoAnswerGreetingMenuKeys($changeBusyOrNoAnswerGreetingMenuKeys = null)
    {
        $this->changeBusyOrNoAnswerGreetingMenuKeys = $changeBusyOrNoAnswerGreetingMenuKeys;
    }

    /**
     * 
     */
    public function getChangeBusyOrNoAnswerGreetingMenuKeys()
    {
        return (!$this->changeBusyOrNoAnswerGreetingMenuKeys) ?: $this->changeBusyOrNoAnswerGreetingMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setRecordNewGreetingOrPersonalizedNameMenuKeys($recordNewGreetingOrPersonalizedNameMenuKeys = null)
    {
        $this->recordNewGreetingOrPersonalizedNameMenuKeys = $recordNewGreetingOrPersonalizedNameMenuKeys;
    }

    /**
     * 
     */
    public function getRecordNewGreetingOrPersonalizedNameMenuKeys()
    {
        return (!$this->recordNewGreetingOrPersonalizedNameMenuKeys) ?: $this->recordNewGreetingOrPersonalizedNameMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setDeleteAllMessagesMenuKeys($deleteAllMessagesMenuKeys = null)
    {
        $this->deleteAllMessagesMenuKeys = $deleteAllMessagesMenuKeys;
    }

    /**
     * 
     */
    public function getDeleteAllMessagesMenuKeys()
    {
        return (!$this->deleteAllMessagesMenuKeys) ?: $this->deleteAllMessagesMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setCommPilotExpressProfileMenuKeys($commPilotExpressProfileMenuKeys = null)
    {
        $this->commPilotExpressProfileMenuKeys = $commPilotExpressProfileMenuKeys;
    }

    /**
     * 
     */
    public function getCommPilotExpressProfileMenuKeys()
    {
        return (!$this->commPilotExpressProfileMenuKeys) ?: $this->commPilotExpressProfileMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setPersonalizedNameMenuKeys($personalizedNameMenuKeys = null)
    {
        $this->personalizedNameMenuKeys = $personalizedNameMenuKeys;
    }

    /**
     * 
     */
    public function getPersonalizedNameMenuKeys()
    {
        return (!$this->personalizedNameMenuKeys) ?: $this->personalizedNameMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setCallForwardingOptionsMenuKeys($callForwardingOptionsMenuKeys = null)
    {
        $this->callForwardingOptionsMenuKeys = $callForwardingOptionsMenuKeys;
    }

    /**
     * 
     */
    public function getCallForwardingOptionsMenuKeys()
    {
        return (!$this->callForwardingOptionsMenuKeys) ?: $this->callForwardingOptionsMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setChangeCallForwardingDestinationMenuKeys($changeCallForwardingDestinationMenuKeys = null)
    {
        $this->changeCallForwardingDestinationMenuKeys = $changeCallForwardingDestinationMenuKeys;
    }

    /**
     * 
     */
    public function getChangeCallForwardingDestinationMenuKeys()
    {
        return (!$this->changeCallForwardingDestinationMenuKeys) ?: $this->changeCallForwardingDestinationMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalCallingMenuKeys($voicePortalCallingMenuKeys = null)
    {
        $this->voicePortalCallingMenuKeys = $voicePortalCallingMenuKeys;
    }

    /**
     * 
     */
    public function getVoicePortalCallingMenuKeys()
    {
        return (!$this->voicePortalCallingMenuKeys) ?: $this->voicePortalCallingMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setHotelingMenuKeys($hotelingMenuKeys = null)
    {
        $this->hotelingMenuKeys = $hotelingMenuKeys;
    }

    /**
     * 
     */
    public function getHotelingMenuKeys()
    {
        return (!$this->hotelingMenuKeys) ?: $this->hotelingMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setPasscodeMenuKeys($passcodeMenuKeys = null)
    {
        $this->passcodeMenuKeys = $passcodeMenuKeys;
    }

    /**
     * 
     */
    public function getPasscodeMenuKeys()
    {
        return (!$this->passcodeMenuKeys) ?: $this->passcodeMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setPlayMessagesMenuKeys($playMessagesMenuKeys = null)
    {
        $this->playMessagesMenuKeys = $playMessagesMenuKeys;
    }

    /**
     * 
     */
    public function getPlayMessagesMenuKeys()
    {
        return (!$this->playMessagesMenuKeys) ?: $this->playMessagesMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setPlayMessageMenuKeys($playMessageMenuKeys = null)
    {
        $this->playMessageMenuKeys = $playMessageMenuKeys;
    }

    /**
     * 
     */
    public function getPlayMessageMenuKeys()
    {
        return (!$this->playMessageMenuKeys) ?: $this->playMessageMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setAdditionalMessageOptionsMenuKeys($additionalMessageOptionsMenuKeys = null)
    {
        $this->additionalMessageOptionsMenuKeys = $additionalMessageOptionsMenuKeys;
    }

    /**
     * 
     */
    public function getAdditionalMessageOptionsMenuKeys()
    {
        return (!$this->additionalMessageOptionsMenuKeys) ?: $this->additionalMessageOptionsMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setForwardOrComposeMessageMenuKeys($forwardOrComposeMessageMenuKeys = null)
    {
        $this->forwardOrComposeMessageMenuKeys = $forwardOrComposeMessageMenuKeys;
    }

    /**
     * 
     */
    public function getForwardOrComposeMessageMenuKeys()
    {
        return (!$this->forwardOrComposeMessageMenuKeys) ?: $this->forwardOrComposeMessageMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setReplyMessageMenuKeys($replyMessageMenuKeys = null)
    {
        $this->replyMessageMenuKeys = $replyMessageMenuKeys;
    }

    /**
     * 
     */
    public function getReplyMessageMenuKeys()
    {
        return (!$this->replyMessageMenuKeys) ?: $this->replyMessageMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setSendToDistributionListMenuKeys($sendToDistributionListMenuKeys = null)
    {
        $this->sendToDistributionListMenuKeys = $sendToDistributionListMenuKeys;
    }

    /**
     * 
     */
    public function getSendToDistributionListMenuKeys()
    {
        return (!$this->sendToDistributionListMenuKeys) ?: $this->sendToDistributionListMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setSelectDistributionListMenuKeys($selectDistributionListMenuKeys = null)
    {
        $this->selectDistributionListMenuKeys = $selectDistributionListMenuKeys;
    }

    /**
     * 
     */
    public function getSelectDistributionListMenuKeys()
    {
        return (!$this->selectDistributionListMenuKeys) ?: $this->selectDistributionListMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setReviewSelectedDistributionListMenuKeys($reviewSelectedDistributionListMenuKeys = null)
    {
        $this->reviewSelectedDistributionListMenuKeys = $reviewSelectedDistributionListMenuKeys;
    }

    /**
     * 
     */
    public function getReviewSelectedDistributionListMenuKeys()
    {
        return (!$this->reviewSelectedDistributionListMenuKeys) ?: $this->reviewSelectedDistributionListMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setSendMessageToSelectedDistributionListMenuKeys($sendMessageToSelectedDistributionListMenuKeys = null)
    {
        $this->sendMessageToSelectedDistributionListMenuKeys = $sendMessageToSelectedDistributionListMenuKeys;
    }

    /**
     * 
     */
    public function getSendMessageToSelectedDistributionListMenuKeys()
    {
        return (!$this->sendMessageToSelectedDistributionListMenuKeys) ?: $this->sendMessageToSelectedDistributionListMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setSendToAllGroupMembersMenuKeys($sendToAllGroupMembersMenuKeys = null)
    {
        $this->sendToAllGroupMembersMenuKeys = $sendToAllGroupMembersMenuKeys;
    }

    /**
     * 
     */
    public function getSendToAllGroupMembersMenuKeys()
    {
        return (!$this->sendToAllGroupMembersMenuKeys) ?: $this->sendToAllGroupMembersMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setSendToPersonMenuKeys($sendToPersonMenuKeys = null)
    {
        $this->sendToPersonMenuKeys = $sendToPersonMenuKeys;
    }

    /**
     * 
     */
    public function getSendToPersonMenuKeys()
    {
        return (!$this->sendToPersonMenuKeys) ?: $this->sendToPersonMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setChangeCurrentIntroductionOrMessageOrReplyMenuKeys($changeCurrentIntroductionOrMessageOrReplyMenuKeys = null)
    {
        $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys = $changeCurrentIntroductionOrMessageOrReplyMenuKeys;
    }

    /**
     * 
     */
    public function getChangeCurrentIntroductionOrMessageOrReplyMenuKeys()
    {
        return (!$this->changeCurrentIntroductionOrMessageOrReplyMenuKeys) ?: $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setVoicePortalLoginMenuKeys($voicePortalLoginMenuKeys = null)
    {
        $this->voicePortalLoginMenuKeys = $voicePortalLoginMenuKeys;
    }

    /**
     * 
     */
    public function getVoicePortalLoginMenuKeys()
    {
        return (!$this->voicePortalLoginMenuKeys) ?: $this->voicePortalLoginMenuKeys->getValue();
    }

    /**
     * 
     */
    public function setFaxMessagingMenuKeys($faxMessagingMenuKeys = null)
    {
        $this->faxMessagingMenuKeys = $faxMessagingMenuKeys;
    }

    /**
     * 
     */
    public function getFaxMessagingMenuKeys()
    {
        return (!$this->faxMessagingMenuKeys) ?: $this->faxMessagingMenuKeys->getValue();
    }
}
