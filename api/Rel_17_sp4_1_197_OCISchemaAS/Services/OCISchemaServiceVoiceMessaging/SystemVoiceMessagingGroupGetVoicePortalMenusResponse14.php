<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 


use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging\SystemVoiceMessagingGroupGetVoicePortalMenusResponse14;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemVoiceMessagingGroupGetVoicePortalMenusRequest14.
 */
class SystemVoiceMessagingGroupGetVoicePortalMenusResponse14 extends ComplexType implements ComplexInterface
{
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
     * @return SystemVoiceMessagingGroupGetVoicePortalMenusResponse14
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
        $this->useVoicePortalCustomization = (boolean) $useVoicePortalCustomization;
    }

    /**
     * 
     */
    public function getUseVoicePortalCustomization()
    {
        return (!$this->useVoicePortalCustomization) ?: $this->useVoicePortalCustomization;
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
        return (!$this->voicePortalMainMenuKeys) ?: $this->voicePortalMainMenuKeys;
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
        return (!$this->voiceMessagingMenuKeys) ?: $this->voiceMessagingMenuKeys;
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
        return (!$this->changeBusyOrNoAnswerGreetingMenuKeys) ?: $this->changeBusyOrNoAnswerGreetingMenuKeys;
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
        return (!$this->recordNewGreetingOrPersonalizedNameMenuKeys) ?: $this->recordNewGreetingOrPersonalizedNameMenuKeys;
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
        return (!$this->deleteAllMessagesMenuKeys) ?: $this->deleteAllMessagesMenuKeys;
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
        return (!$this->commPilotExpressProfileMenuKeys) ?: $this->commPilotExpressProfileMenuKeys;
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
        return (!$this->personalizedNameMenuKeys) ?: $this->personalizedNameMenuKeys;
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
        return (!$this->callForwardingOptionsMenuKeys) ?: $this->callForwardingOptionsMenuKeys;
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
        return (!$this->changeCallForwardingDestinationMenuKeys) ?: $this->changeCallForwardingDestinationMenuKeys;
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
        return (!$this->voicePortalCallingMenuKeys) ?: $this->voicePortalCallingMenuKeys;
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
        return (!$this->hotelingMenuKeys) ?: $this->hotelingMenuKeys;
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
        return (!$this->passcodeMenuKeys) ?: $this->passcodeMenuKeys;
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
        return (!$this->playMessagesMenuKeys) ?: $this->playMessagesMenuKeys;
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
        return (!$this->playMessageMenuKeys) ?: $this->playMessageMenuKeys;
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
        return (!$this->additionalMessageOptionsMenuKeys) ?: $this->additionalMessageOptionsMenuKeys;
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
        return (!$this->forwardOrComposeMessageMenuKeys) ?: $this->forwardOrComposeMessageMenuKeys;
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
        return (!$this->replyMessageMenuKeys) ?: $this->replyMessageMenuKeys;
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
        return (!$this->sendToDistributionListMenuKeys) ?: $this->sendToDistributionListMenuKeys;
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
        return (!$this->selectDistributionListMenuKeys) ?: $this->selectDistributionListMenuKeys;
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
        return (!$this->reviewSelectedDistributionListMenuKeys) ?: $this->reviewSelectedDistributionListMenuKeys;
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
        return (!$this->sendMessageToSelectedDistributionListMenuKeys) ?: $this->sendMessageToSelectedDistributionListMenuKeys;
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
        return (!$this->sendToAllGroupMembersMenuKeys) ?: $this->sendToAllGroupMembersMenuKeys;
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
        return (!$this->sendToPersonMenuKeys) ?: $this->sendToPersonMenuKeys;
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
        return (!$this->changeCurrentIntroductionOrMessageOrReplyMenuKeys) ?: $this->changeCurrentIntroductionOrMessageOrReplyMenuKeys;
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
        return (!$this->voicePortalLoginMenuKeys) ?: $this->voicePortalLoginMenuKeys;
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
        return (!$this->faxMessagingMenuKeys) ?: $this->faxMessagingMenuKeys;
    }
}
