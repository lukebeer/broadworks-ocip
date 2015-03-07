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
    public    $name                                               = __CLASS__;
    protected $useVoicePortalCustomization                        = null;
    protected $voicePortalMainMenuKeys                            = null;
    protected $voiceMessagingMenuKeys                             = null;
    protected $changeBusyOrNoAnswerGreetingMenuKeys               = null;
    protected $recordNewGreetingOrPersonalizedNameMenuKeys        = null;
    protected $deleteAllMessagesMenuKeys                          = null;
    protected $commPilotExpressProfileMenuKeys                    = null;
    protected $personalizedNameMenuKeys                           = null;
    protected $callForwardingOptionsMenuKeys                      = null;
    protected $changeCallForwardingDestinationMenuKeys            = null;
    protected $voicePortalCallingMenuKeys                         = null;
    protected $hotelingMenuKeys                                   = null;
    protected $passcodeMenuKeys                                   = null;
    protected $playMessagesMenuKeys                               = null;
    protected $playMessageMenuKeys                                = null;
    protected $additionalMessageOptionsMenuKeys                   = null;
    protected $forwardOrComposeMessageMenuKeys                    = null;
    protected $replyMessageMenuKeys                               = null;
    protected $sendToDistributionListMenuKeys                     = null;
    protected $selectDistributionListMenuKeys                     = null;
    protected $reviewSelectedDistributionListMenuKeys             = null;
    protected $sendMessageToSelectedDistributionListMenuKeys      = null;
    protected $sendToAllGroupMembersMenuKeys                      = null;
    protected $sendToPersonMenuKeys                               = null;
    protected $changeCurrentIntroductionOrMessageOrReplyMenuKeys  = null;
    protected $voicePortalLoginMenuKeys                           = null;
    protected $faxMessagingMenuKeys                               = null;


    public function setUseVoicePortalCustomization(xs:boolean $useVoicePortalCustomization = null)
    {
    }

    public function getUseVoicePortalCustomization()
    {
        return (!$this->useVoicePortalCustomization) ?: $this->useVoicePortalCustomization->value();
    }

    public function setVoicePortalMainMenuKeys(xs:boolean $voicePortalMainMenuKeys = null)
    {
        $this->voicePortalMainMenuKeys = $voicePortalMainMenuKeys;
    }

    public function getVoicePortalMainMenuKeys()
    {
        return (!$this->voicePortalMainMenuKeys) ?: $this->voicePortalMainMenuKeys->value();
    }

    public function setVoiceMessagingMenuKeys(xs:boolean $voiceMessagingMenuKeys = null)
    {
        $this->voiceMessagingMenuKeys = $voiceMessagingMenuKeys;
    }

    public function getVoiceMessagingMenuKeys()
    {
        return (!$this->voiceMessagingMenuKeys) ?: $this->voiceMessagingMenuKeys->value();
    }

    public function setChangeBusyOrNoAnswerGreetingMenuKeys(xs:boolean $changeBusyOrNoAnswerGreetingMenuKeys = null)
    {
        $this->changeBusyOrNoAnswerGreetingMenuKeys = $changeBusyOrNoAnswerGreetingMenuKeys;
    }

    public function getChangeBusyOrNoAnswerGreetingMenuKeys()
    {
        return (!$this->changeBusyOrNoAnswerGreetingMenuKeys) ?: $this->changeBusyOrNoAnswerGreetingMenuKeys->value();
    }

    public function setRecordNewGreetingOrPersonalizedNameMenuKeys(xs:boolean $recordNewGreetingOrPersonalizedNameMenuKeys = null)
    {
        $this->recordNewGreetingOrPersonalizedNameMenuKeys = $recordNewGreetingOrPersonalizedNameMenuKeys;
    }

    public function getRecordNewGreetingOrPersonalizedNameMenuKeys()
    {
        return (!$this->recordNewGreetingOrPersonalizedNameMenuKeys) ?: $this->recordNewGreetingOrPersonalizedNameMenuKeys->value();
    }

    public function setDeleteAllMessagesMenuKeys(xs:boolean $deleteAllMessagesMenuKeys = null)
    {
        $this->deleteAllMessagesMenuKeys = $deleteAllMessagesMenuKeys;
    }

    public function getDeleteAllMessagesMenuKeys()
    {
        return (!$this->deleteAllMessagesMenuKeys) ?: $this->deleteAllMessagesMenuKeys->value();
    }

    public function setCommPilotExpressProfileMenuKeys(xs:boolean $commPilotExpressProfileMenuKeys = null)
    {
        $this->commPilotExpressProfileMenuKeys = $commPilotExpressProfileMenuKeys;
    }

    public function getCommPilotExpressProfileMenuKeys()
    {
        return (!$this->commPilotExpressProfileMenuKeys) ?: $this->commPilotExpressProfileMenuKeys->value();
    }

    public function setPersonalizedNameMenuKeys(xs:boolean $personalizedNameMenuKeys = null)
    {
        $this->personalizedNameMenuKeys = $personalizedNameMenuKeys;
    }

    public function getPersonalizedNameMenuKeys()
    {
        return (!$this->personalizedNameMenuKeys) ?: $this->personalizedNameMenuKeys->value();
    }

    public function setCallForwardingOptionsMenuKeys(xs:boolean $callForwardingOptionsMenuKeys = null)
    {
        $this->callForwardingOptionsMenuKeys = $callForwardingOptionsMenuKeys;
    }

    public function getCallForwardingOptionsMenuKeys()
    {
        return (!$this->callForwardingOptionsMenuKeys) ?: $this->callForwardingOptionsMenuKeys->value();
    }

    public function setChangeCallForwardingDestinationMenuKeys(xs:boolean $changeCallForwardingDestinationMenuKeys = null)
    {
        $this->changeCallForwardingDestinationMenuKeys = $changeCallForwardingDestinationMenuKeys;
    }

    public function getChangeCallForwardingDestinationMenuKeys()
    {
        return (!$this->changeCallForwardingDestinationMenuKeys) ?: $this->changeCallForwardingDestinationMenuKeys->value();
    }

    public function setVoicePortalCallingMenuKeys(xs:boolean $voicePortalCallingMenuKeys = null)
    {
        $this->voicePortalCallingMenuKeys = $voicePortalCallingMenuKeys;
    }

    public function getVoicePortalCallingMenuKeys()
    {
        return (!$this->voicePortalCallingMenuKeys) ?: $this->voicePortalCallingMenuKeys->value();
    }

    public function setHotelingMenuKeys(xs:boolean $hotelingMenuKeys = null)
    {
        $this->hotelingMenuKeys = $hotelingMenuKeys;
    }

    public function getHotelingMenuKeys()
    {
        return (!$this->hotelingMenuKeys) ?: $this->hotelingMenuKeys->value();
    }

    public function setPasscodeMenuKeys(xs:boolean $passcodeMenuKeys = null)
    {
        $this->passcodeMenuKeys = $passcodeMenuKeys;
    }

    public function getPasscodeMenuKeys()
    {
        return (!$this->passcodeMenuKeys) ?: $this->passcodeMenuKeys->value();
    }

    public function setPlayMessagesMenuKeys(xs:boolean $playMessagesMenuKeys = null)
    {
        $this->playMessagesMenuKeys = $playMessagesMenuKeys;
    }

    public function getPlayMessagesMenuKeys()
    {
        return (!$this->playMessagesMenuKeys) ?: $this->playMessagesMenuKeys->value();
    }

    public function setPlayMessageMenuKeys(xs:boolean $playMessageMenuKeys = null)
    {
        $this->playMessageMenuKeys = $playMessageMenuKeys;
    }

    public function getPlayMessageMenuKeys()
    {
        return (!$this->playMessageMenuKeys) ?: $this->playMessageMenuKeys->value();
    }

    public function setAdditionalMessageOptionsMenuKeys(xs:boolean $additionalMessageOptionsMenuKeys = null)
    {
        $this->additionalMessageOptionsMenuKeys = $additionalMessageOptionsMenuKeys;
    }

    public function getAdditionalMessageOptionsMenuKeys()
    {
        return (!$this->additionalMessageOptionsMenuKeys) ?: $this->additionalMessageOptionsMenuKeys->value();
    }

    public function setForwardOrComposeMessageMenuKeys(xs:boolean $forwardOrComposeMessageMenuKeys = null)
    {
        $this->forwardOrComposeMessageMenuKeys = $forwardOrComposeMessageMenuKeys;
    }

    public function getForwardOrComposeMessageMenuKeys()
    {
        return (!$this->forwardOrComposeMessageMenuKeys) ?: $this->forwardOrComposeMessageMenuKeys->value();
    }

    public function setReplyMessageMenuKeys(xs:boolean $replyMessageMenuKeys = null)
    {
        $this->replyMessageMenuKeys = $replyMessageMenuKeys;
    }

    public function getReplyMessageMenuKeys()
    {
        return (!$this->replyMessageMenuKeys) ?: $this->replyMessageMenuKeys->value();
    }

    public function setSendToDistributionListMenuKeys(xs:boolean $sendToDistributionListMenuKeys = null)
    {
        $this->sendToDistributionListMenuKeys = $sendToDistributionListMenuKeys;
    }

    public function getSendToDistributionListMenuKeys()
    {
        return (!$this->sendToDistributionListMenuKeys) ?: $this->sendToDistributionListMenuKeys->value();
    }

    public function setSelectDistributionListMenuKeys(xs:boolean $selectDistributionListMenuKeys = null)
    {
        $this->selectDistributionListMenuKeys = $selectDistributionListMenuKeys;
    }

    public function getSelectDistributionListMenuKeys()
    {
        return (!$this->selectDistributionListMenuKeys) ?: $this->selectDistributionListMenuKeys->value();
    }

    public function setReviewSelectedDistributionListMenuKeys(xs:boolean $reviewSelectedDistributionListMenuKeys = null)
    {
        $this->reviewSelectedDistributionListMenuKeys = $reviewSelectedDistributionListMenuKeys;
    }

    public function getReviewSelectedDistributionListMenuKeys()
    {
        return (!$this->reviewSelectedDistributionListMenuKeys) ?: $this->reviewSelectedDistributionListMenuKeys->value();
    }

    public function setSendMessageToSelectedDistributionListMenuKeys(xs:boolean $sendMessageToSelectedDistributionListMenuKeys = null)
    {
        $this->sendMessageToSelectedDistributionListMenuKeys = $sendMessageToSelectedDistributionListMenuKeys;
    }

    public function getSendMessageToSelectedDistributionListMenuKeys()
    {
        return (!$this->sendMessageToSelectedDistributionListMenuKeys) ?: $this->sendMessageToSelectedDistributionListMenuKeys->value();
    }

    public function setSendToAllGroupMembersMenuKeys(xs:boolean $sendToAllGroupMembersMenuKeys = null)
    {
        $this->sendToAllGroupMembersMenuKeys = $sendToAllGroupMembersMenuKeys;
    }

    public function getSendToAllGroupMembersMenuKeys()
    {
        return (!$this->sendToAllGroupMembersMenuKeys) ?: $this->sendToAllGroupMembersMenuKeys->value();
    }

    public function setSendToPersonMenuKeys(xs:boolean $sendToPersonMenuKeys = null)
    {
        $this->sendToPersonMenuKeys = $sendToPersonMenuKeys;
    }

    public function getSendToPersonMenuKeys()
    {
        return (!$this->sendToPersonMenuKeys) ?: $this->sendToPersonMenuKeys->value();
    }

    public function setChangeCurrentIntroductionOrMessageOrReplyMenuKeys(xs:boolean $changeCurrentIntroductionOrMessageOrReplyMenuKeys = null)
    {
        $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys = $changeCurrentIntroductionOrMessageOrReplyMenuKeys;
    }

    public function getChangeCurrentIntroductionOrMessageOrReplyMenuKeys()
    {
        return (!$this->changeCurrentIntroductionOrMessageOrReplyMenuKeys) ?: $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys->value();
    }

    public function setVoicePortalLoginMenuKeys(xs:boolean $voicePortalLoginMenuKeys = null)
    {
        $this->voicePortalLoginMenuKeys = $voicePortalLoginMenuKeys;
    }

    public function getVoicePortalLoginMenuKeys()
    {
        return (!$this->voicePortalLoginMenuKeys) ?: $this->voicePortalLoginMenuKeys->value();
    }

    public function setFaxMessagingMenuKeys(xs:boolean $faxMessagingMenuKeys = null)
    {
        $this->faxMessagingMenuKeys = $faxMessagingMenuKeys;
    }

    public function getFaxMessagingMenuKeys()
    {
        return (!$this->faxMessagingMenuKeys) ?: $this->faxMessagingMenuKeys->value();
    }
}
