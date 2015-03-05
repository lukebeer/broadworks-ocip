<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemVoiceMessagingGroupGetVoicePortalMenusRequest14.
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $useVoicePortalCustomization,
             $voicePortalMainMenuKeys,
             $voiceMessagingMenuKeys,
             $changeBusyOrNoAnswerGreetingMenuKeys,
             $recordNewGreetingOrPersonalizedNameMenuKeys,
             $deleteAllMessagesMenuKeys,
             $commPilotExpressProfileMenuKeys,
             $personalizedNameMenuKeys,
             $callForwardingOptionsMenuKeys,
             $changeCallForwardingDestinationMenuKeys,
             $voicePortalCallingMenuKeys,
             $hotelingMenuKeys,
             $passcodeMenuKeys,
             $playMessagesMenuKeys,
             $playMessageMenuKeys,
             $additionalMessageOptionsMenuKeys,
             $forwardOrComposeMessageMenuKeys,
             $replyMessageMenuKeys,
             $sendToDistributionListMenuKeys,
             $selectDistributionListMenuKeys,
             $reviewSelectedDistributionListMenuKeys,
             $sendMessageToSelectedDistributionListMenuKeys,
             $sendToAllGroupMembersMenuKeys,
             $sendToPersonMenuKeys,
             $changeCurrentIntroductionOrMessageOrReplyMenuKeys,
             $voicePortalLoginMenuKeys,
             $faxMessagingMenuKeys
    ) {
        $this->useVoicePortalCustomization                       = $useVoicePortalCustomization;
        $this->voicePortalMainMenuKeys                           = $voicePortalMainMenuKeys;
        $this->voiceMessagingMenuKeys                            = $voiceMessagingMenuKeys;
        $this->changeBusyOrNoAnswerGreetingMenuKeys              = $changeBusyOrNoAnswerGreetingMenuKeys;
        $this->recordNewGreetingOrPersonalizedNameMenuKeys       = $recordNewGreetingOrPersonalizedNameMenuKeys;
        $this->deleteAllMessagesMenuKeys                         = $deleteAllMessagesMenuKeys;
        $this->commPilotExpressProfileMenuKeys                   = $commPilotExpressProfileMenuKeys;
        $this->personalizedNameMenuKeys                          = $personalizedNameMenuKeys;
        $this->callForwardingOptionsMenuKeys                     = $callForwardingOptionsMenuKeys;
        $this->changeCallForwardingDestinationMenuKeys           = $changeCallForwardingDestinationMenuKeys;
        $this->voicePortalCallingMenuKeys                        = $voicePortalCallingMenuKeys;
        $this->hotelingMenuKeys                                  = $hotelingMenuKeys;
        $this->passcodeMenuKeys                                  = $passcodeMenuKeys;
        $this->playMessagesMenuKeys                              = $playMessagesMenuKeys;
        $this->playMessageMenuKeys                               = $playMessageMenuKeys;
        $this->additionalMessageOptionsMenuKeys                  = $additionalMessageOptionsMenuKeys;
        $this->forwardOrComposeMessageMenuKeys                   = $forwardOrComposeMessageMenuKeys;
        $this->replyMessageMenuKeys                              = $replyMessageMenuKeys;
        $this->sendToDistributionListMenuKeys                    = $sendToDistributionListMenuKeys;
        $this->selectDistributionListMenuKeys                    = $selectDistributionListMenuKeys;
        $this->reviewSelectedDistributionListMenuKeys            = $reviewSelectedDistributionListMenuKeys;
        $this->sendMessageToSelectedDistributionListMenuKeys     = $sendMessageToSelectedDistributionListMenuKeys;
        $this->sendToAllGroupMembersMenuKeys                     = $sendToAllGroupMembersMenuKeys;
        $this->sendToPersonMenuKeys                              = $sendToPersonMenuKeys;
        $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys = $changeCurrentIntroductionOrMessageOrReplyMenuKeys;
        $this->voicePortalLoginMenuKeys                          = $voicePortalLoginMenuKeys;
        $this->faxMessagingMenuKeys                              = $faxMessagingMenuKeys;
        $this->args                                              = func_get_args();
    }

    public function setUseVoicePortalCustomization($useVoicePortalCustomization)
    {
        $useVoicePortalCustomization and $this->useVoicePortalCustomization = new xs:boolean($useVoicePortalCustomization);
    }

    public function getUseVoicePortalCustomization()
    {
        return (!$this->useVoicePortalCustomization) ?: $this->useVoicePortalCustomization->value();
    }

    public function setVoicePortalMainMenuKeys($voicePortalMainMenuKeys)
    {
        $voicePortalMainMenuKeys and $this->voicePortalMainMenuKeys = new ($voicePortalMainMenuKeys);
    }

    public function getVoicePortalMainMenuKeys()
    {
        return (!$this->voicePortalMainMenuKeys) ?: $this->voicePortalMainMenuKeys->value();
    }

    public function setVoiceMessagingMenuKeys($voiceMessagingMenuKeys)
    {
        $voiceMessagingMenuKeys and $this->voiceMessagingMenuKeys = new ($voiceMessagingMenuKeys);
    }

    public function getVoiceMessagingMenuKeys()
    {
        return (!$this->voiceMessagingMenuKeys) ?: $this->voiceMessagingMenuKeys->value();
    }

    public function setChangeBusyOrNoAnswerGreetingMenuKeys($changeBusyOrNoAnswerGreetingMenuKeys)
    {
        $changeBusyOrNoAnswerGreetingMenuKeys and $this->changeBusyOrNoAnswerGreetingMenuKeys = new ($changeBusyOrNoAnswerGreetingMenuKeys);
    }

    public function getChangeBusyOrNoAnswerGreetingMenuKeys()
    {
        return (!$this->changeBusyOrNoAnswerGreetingMenuKeys) ?: $this->changeBusyOrNoAnswerGreetingMenuKeys->value();
    }

    public function setRecordNewGreetingOrPersonalizedNameMenuKeys($recordNewGreetingOrPersonalizedNameMenuKeys)
    {
        $recordNewGreetingOrPersonalizedNameMenuKeys and $this->recordNewGreetingOrPersonalizedNameMenuKeys = new ($recordNewGreetingOrPersonalizedNameMenuKeys);
    }

    public function getRecordNewGreetingOrPersonalizedNameMenuKeys()
    {
        return (!$this->recordNewGreetingOrPersonalizedNameMenuKeys) ?: $this->recordNewGreetingOrPersonalizedNameMenuKeys->value();
    }

    public function setDeleteAllMessagesMenuKeys($deleteAllMessagesMenuKeys)
    {
        $deleteAllMessagesMenuKeys and $this->deleteAllMessagesMenuKeys = new ($deleteAllMessagesMenuKeys);
    }

    public function getDeleteAllMessagesMenuKeys()
    {
        return (!$this->deleteAllMessagesMenuKeys) ?: $this->deleteAllMessagesMenuKeys->value();
    }

    public function setCommPilotExpressProfileMenuKeys($commPilotExpressProfileMenuKeys)
    {
        $commPilotExpressProfileMenuKeys and $this->commPilotExpressProfileMenuKeys = new ($commPilotExpressProfileMenuKeys);
    }

    public function getCommPilotExpressProfileMenuKeys()
    {
        return (!$this->commPilotExpressProfileMenuKeys) ?: $this->commPilotExpressProfileMenuKeys->value();
    }

    public function setPersonalizedNameMenuKeys($personalizedNameMenuKeys)
    {
        $personalizedNameMenuKeys and $this->personalizedNameMenuKeys = new ($personalizedNameMenuKeys);
    }

    public function getPersonalizedNameMenuKeys()
    {
        return (!$this->personalizedNameMenuKeys) ?: $this->personalizedNameMenuKeys->value();
    }

    public function setCallForwardingOptionsMenuKeys($callForwardingOptionsMenuKeys)
    {
        $callForwardingOptionsMenuKeys and $this->callForwardingOptionsMenuKeys = new ($callForwardingOptionsMenuKeys);
    }

    public function getCallForwardingOptionsMenuKeys()
    {
        return (!$this->callForwardingOptionsMenuKeys) ?: $this->callForwardingOptionsMenuKeys->value();
    }

    public function setChangeCallForwardingDestinationMenuKeys($changeCallForwardingDestinationMenuKeys)
    {
        $changeCallForwardingDestinationMenuKeys and $this->changeCallForwardingDestinationMenuKeys = new ($changeCallForwardingDestinationMenuKeys);
    }

    public function getChangeCallForwardingDestinationMenuKeys()
    {
        return (!$this->changeCallForwardingDestinationMenuKeys) ?: $this->changeCallForwardingDestinationMenuKeys->value();
    }

    public function setVoicePortalCallingMenuKeys($voicePortalCallingMenuKeys)
    {
        $voicePortalCallingMenuKeys and $this->voicePortalCallingMenuKeys = new ($voicePortalCallingMenuKeys);
    }

    public function getVoicePortalCallingMenuKeys()
    {
        return (!$this->voicePortalCallingMenuKeys) ?: $this->voicePortalCallingMenuKeys->value();
    }

    public function setHotelingMenuKeys($hotelingMenuKeys)
    {
        $hotelingMenuKeys and $this->hotelingMenuKeys = new ($hotelingMenuKeys);
    }

    public function getHotelingMenuKeys()
    {
        return (!$this->hotelingMenuKeys) ?: $this->hotelingMenuKeys->value();
    }

    public function setPasscodeMenuKeys($passcodeMenuKeys)
    {
        $passcodeMenuKeys and $this->passcodeMenuKeys = new ($passcodeMenuKeys);
    }

    public function getPasscodeMenuKeys()
    {
        return (!$this->passcodeMenuKeys) ?: $this->passcodeMenuKeys->value();
    }

    public function setPlayMessagesMenuKeys($playMessagesMenuKeys)
    {
        $playMessagesMenuKeys and $this->playMessagesMenuKeys = new ($playMessagesMenuKeys);
    }

    public function getPlayMessagesMenuKeys()
    {
        return (!$this->playMessagesMenuKeys) ?: $this->playMessagesMenuKeys->value();
    }

    public function setPlayMessageMenuKeys($playMessageMenuKeys)
    {
        $playMessageMenuKeys and $this->playMessageMenuKeys = new ($playMessageMenuKeys);
    }

    public function getPlayMessageMenuKeys()
    {
        return (!$this->playMessageMenuKeys) ?: $this->playMessageMenuKeys->value();
    }

    public function setAdditionalMessageOptionsMenuKeys($additionalMessageOptionsMenuKeys)
    {
        $additionalMessageOptionsMenuKeys and $this->additionalMessageOptionsMenuKeys = new ($additionalMessageOptionsMenuKeys);
    }

    public function getAdditionalMessageOptionsMenuKeys()
    {
        return (!$this->additionalMessageOptionsMenuKeys) ?: $this->additionalMessageOptionsMenuKeys->value();
    }

    public function setForwardOrComposeMessageMenuKeys($forwardOrComposeMessageMenuKeys)
    {
        $forwardOrComposeMessageMenuKeys and $this->forwardOrComposeMessageMenuKeys = new ($forwardOrComposeMessageMenuKeys);
    }

    public function getForwardOrComposeMessageMenuKeys()
    {
        return (!$this->forwardOrComposeMessageMenuKeys) ?: $this->forwardOrComposeMessageMenuKeys->value();
    }

    public function setReplyMessageMenuKeys($replyMessageMenuKeys)
    {
        $replyMessageMenuKeys and $this->replyMessageMenuKeys = new ($replyMessageMenuKeys);
    }

    public function getReplyMessageMenuKeys()
    {
        return (!$this->replyMessageMenuKeys) ?: $this->replyMessageMenuKeys->value();
    }

    public function setSendToDistributionListMenuKeys($sendToDistributionListMenuKeys)
    {
        $sendToDistributionListMenuKeys and $this->sendToDistributionListMenuKeys = new ($sendToDistributionListMenuKeys);
    }

    public function getSendToDistributionListMenuKeys()
    {
        return (!$this->sendToDistributionListMenuKeys) ?: $this->sendToDistributionListMenuKeys->value();
    }

    public function setSelectDistributionListMenuKeys($selectDistributionListMenuKeys)
    {
        $selectDistributionListMenuKeys and $this->selectDistributionListMenuKeys = new ($selectDistributionListMenuKeys);
    }

    public function getSelectDistributionListMenuKeys()
    {
        return (!$this->selectDistributionListMenuKeys) ?: $this->selectDistributionListMenuKeys->value();
    }

    public function setReviewSelectedDistributionListMenuKeys($reviewSelectedDistributionListMenuKeys)
    {
        $reviewSelectedDistributionListMenuKeys and $this->reviewSelectedDistributionListMenuKeys = new ($reviewSelectedDistributionListMenuKeys);
    }

    public function getReviewSelectedDistributionListMenuKeys()
    {
        return (!$this->reviewSelectedDistributionListMenuKeys) ?: $this->reviewSelectedDistributionListMenuKeys->value();
    }

    public function setSendMessageToSelectedDistributionListMenuKeys($sendMessageToSelectedDistributionListMenuKeys)
    {
        $sendMessageToSelectedDistributionListMenuKeys and $this->sendMessageToSelectedDistributionListMenuKeys = new ($sendMessageToSelectedDistributionListMenuKeys);
    }

    public function getSendMessageToSelectedDistributionListMenuKeys()
    {
        return (!$this->sendMessageToSelectedDistributionListMenuKeys) ?: $this->sendMessageToSelectedDistributionListMenuKeys->value();
    }

    public function setSendToAllGroupMembersMenuKeys($sendToAllGroupMembersMenuKeys)
    {
        $sendToAllGroupMembersMenuKeys and $this->sendToAllGroupMembersMenuKeys = new ($sendToAllGroupMembersMenuKeys);
    }

    public function getSendToAllGroupMembersMenuKeys()
    {
        return (!$this->sendToAllGroupMembersMenuKeys) ?: $this->sendToAllGroupMembersMenuKeys->value();
    }

    public function setSendToPersonMenuKeys($sendToPersonMenuKeys)
    {
        $sendToPersonMenuKeys and $this->sendToPersonMenuKeys = new ($sendToPersonMenuKeys);
    }

    public function getSendToPersonMenuKeys()
    {
        return (!$this->sendToPersonMenuKeys) ?: $this->sendToPersonMenuKeys->value();
    }

    public function setChangeCurrentIntroductionOrMessageOrReplyMenuKeys($changeCurrentIntroductionOrMessageOrReplyMenuKeys)
    {
        $changeCurrentIntroductionOrMessageOrReplyMenuKeys and $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys = new ($changeCurrentIntroductionOrMessageOrReplyMenuKeys);
    }

    public function getChangeCurrentIntroductionOrMessageOrReplyMenuKeys()
    {
        return (!$this->changeCurrentIntroductionOrMessageOrReplyMenuKeys) ?: $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys->value();
    }

    public function setVoicePortalLoginMenuKeys($voicePortalLoginMenuKeys)
    {
        $voicePortalLoginMenuKeys and $this->voicePortalLoginMenuKeys = new ($voicePortalLoginMenuKeys);
    }

    public function getVoicePortalLoginMenuKeys()
    {
        return (!$this->voicePortalLoginMenuKeys) ?: $this->voicePortalLoginMenuKeys->value();
    }

    public function setFaxMessagingMenuKeys($faxMessagingMenuKeys)
    {
        $faxMessagingMenuKeys and $this->faxMessagingMenuKeys = new ($faxMessagingMenuKeys);
    }

    public function getFaxMessagingMenuKeys()
    {
        return (!$this->faxMessagingMenuKeys) ?: $this->faxMessagingMenuKeys->value();
    }
}
