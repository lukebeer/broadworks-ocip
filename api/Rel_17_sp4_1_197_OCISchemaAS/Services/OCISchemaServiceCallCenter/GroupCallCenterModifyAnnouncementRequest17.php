<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EstimatedWaitMessageOptionsModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementFileListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLListModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceModify17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyAnnouncementRequest17 extends ComplexType implements ComplexInterface
{
    public    $name                                          = 'GroupCallCenterModifyAnnouncementRequest17';
    protected $serviceUserId                                 = null;
    protected $playEntranceMessage                           = null;
    protected $mandatoryEntranceMessage                      = null;
    protected $entranceAudioMessageSelection                 = null;
    protected $entranceMessageAudioUrlList                   = null;
    protected $entranceMessageAudioFileList                  = null;
    protected $entranceVideoMessageSelection                 = null;
    protected $entranceMessageVideoUrlList                   = null;
    protected $entranceMessageVideoFileList                  = null;
    protected $playPeriodicComfortMessage                    = null;
    protected $timeBetweenComfortMessagesSeconds             = null;
    protected $periodicComfortAudioMessageSelection          = null;
    protected $periodicComfortMessageAudioUrlList            = null;
    protected $periodicComfortMessageAudioFileList           = null;
    protected $periodicComfortVideoMessageSelection          = null;
    protected $periodicComfortMessageVideoUrlList            = null;
    protected $periodicComfortMessageVideoFileList           = null;
    protected $enableMediaOnHoldForQueuedCalls               = null;
    protected $mediaOnHoldSource                             = null;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls = null;
    protected $mediaOnHoldInternalSource                     = null;
    protected $playWhisperMessage                            = null;
    protected $whisperAudioMessageSelection                  = null;
    protected $whisperMessageAudioUrlList                    = null;
    protected $whisperMessageAudioFileList                   = null;
    protected $whisperVideoMessageSelection                  = null;
    protected $whisperMessageVideoUrlList                    = null;
    protected $whisperMessageVideoFileList                   = null;
    protected $estimatedWaitMessageOptionsModify             = null;

    public function __construct(
         $serviceUserId,
         $playEntranceMessage = null,
         $mandatoryEntranceMessage = null,
         $entranceAudioMessageSelection = null,
         CallCenterAnnouncementURLListModify $entranceMessageAudioUrlList = null,
         CallCenterAnnouncementFileListModify $entranceMessageAudioFileList = null,
         $entranceVideoMessageSelection = null,
         CallCenterAnnouncementURLListModify $entranceMessageVideoUrlList = null,
         CallCenterAnnouncementFileListModify $entranceMessageVideoFileList = null,
         $playPeriodicComfortMessage = null,
         $timeBetweenComfortMessagesSeconds = null,
         $periodicComfortAudioMessageSelection = null,
         CallCenterAnnouncementURLListModify $periodicComfortMessageAudioUrlList = null,
         CallCenterAnnouncementFileListModify $periodicComfortMessageAudioFileList = null,
         $periodicComfortVideoMessageSelection = null,
         CallCenterAnnouncementURLListModify $periodicComfortMessageVideoUrlList = null,
         CallCenterAnnouncementFileListModify $periodicComfortMessageVideoFileList = null,
         $enableMediaOnHoldForQueuedCalls = null,
         CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null,
         $mediaOnHoldUseAlternateSourceForInternalCalls = null,
         CallCenterMediaOnHoldSourceModify17 $mediaOnHoldInternalSource = null,
         $playWhisperMessage = null,
         $whisperAudioMessageSelection = null,
         CallCenterAnnouncementURLListModify $whisperMessageAudioUrlList = null,
         CallCenterAnnouncementFileListModify $whisperMessageAudioFileList = null,
         $whisperVideoMessageSelection = null,
         CallCenterAnnouncementURLListModify $whisperMessageVideoUrlList = null,
         CallCenterAnnouncementFileListModify $whisperMessageVideoFileList = null,
         EstimatedWaitMessageOptionsModify $estimatedWaitMessageOptionsModify = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setPlayEntranceMessage($playEntranceMessage);
        $this->setMandatoryEntranceMessage($mandatoryEntranceMessage);
        $this->setEntranceAudioMessageSelection($entranceAudioMessageSelection);
        $this->setEntranceMessageAudioUrlList($entranceMessageAudioUrlList);
        $this->setEntranceMessageAudioFileList($entranceMessageAudioFileList);
        $this->setEntranceVideoMessageSelection($entranceVideoMessageSelection);
        $this->setEntranceMessageVideoUrlList($entranceMessageVideoUrlList);
        $this->setEntranceMessageVideoFileList($entranceMessageVideoFileList);
        $this->setPlayPeriodicComfortMessage($playPeriodicComfortMessage);
        $this->setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection);
        $this->setPeriodicComfortMessageAudioUrlList($periodicComfortMessageAudioUrlList);
        $this->setPeriodicComfortMessageAudioFileList($periodicComfortMessageAudioFileList);
        $this->setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection);
        $this->setPeriodicComfortMessageVideoUrlList($periodicComfortMessageVideoUrlList);
        $this->setPeriodicComfortMessageVideoFileList($periodicComfortMessageVideoFileList);
        $this->setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls);
        $this->setMediaOnHoldSource($mediaOnHoldSource);
        $this->setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls);
        $this->setMediaOnHoldInternalSource($mediaOnHoldInternalSource);
        $this->setPlayWhisperMessage($playWhisperMessage);
        $this->setWhisperAudioMessageSelection($whisperAudioMessageSelection);
        $this->setWhisperMessageAudioUrlList($whisperMessageAudioUrlList);
        $this->setWhisperMessageAudioFileList($whisperMessageAudioFileList);
        $this->setWhisperVideoMessageSelection($whisperVideoMessageSelection);
        $this->setWhisperMessageVideoUrlList($whisperMessageVideoUrlList);
        $this->setWhisperMessageVideoFileList($whisperMessageVideoFileList);
        $this->setEstimatedWaitMessageOptionsModify($estimatedWaitMessageOptionsModify);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setPlayEntranceMessage($playEntranceMessage = null)
    {
        if (!$playEntranceMessage) return $this;
        $this->playEntranceMessage = new PrimitiveType($playEntranceMessage);
        $this->playEntranceMessage->setName('playEntranceMessage');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayEntranceMessage()
    {
        return $this->playEntranceMessage->getValue();
    }

    /**
     * 
     */
    public function setMandatoryEntranceMessage($mandatoryEntranceMessage = null)
    {
        if (!$mandatoryEntranceMessage) return $this;
        $this->mandatoryEntranceMessage = new PrimitiveType($mandatoryEntranceMessage);
        $this->mandatoryEntranceMessage->setName('mandatoryEntranceMessage');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMandatoryEntranceMessage()
    {
        return $this->mandatoryEntranceMessage->getValue();
    }

    /**
     * 
     */
    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection = null)
    {
        if (!$entranceAudioMessageSelection) return $this;
        $this->entranceAudioMessageSelection = ($entranceAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceAudioMessageSelection
             : new ExtendedFileResourceSelection($entranceAudioMessageSelection);
        $this->entranceAudioMessageSelection->setName('entranceAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getEntranceAudioMessageSelection()
    {
        return $this->entranceAudioMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setEntranceMessageAudioUrlList(CallCenterAnnouncementURLListModify $entranceMessageAudioUrlList = null)
    {
        if (!$entranceMessageAudioUrlList) return $this;
        $this->entranceMessageAudioUrlList = $entranceMessageAudioUrlList;
        $this->entranceMessageAudioUrlList->setName('entranceMessageAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify
     */
    public function getEntranceMessageAudioUrlList()
    {
        return $this->entranceMessageAudioUrlList;
    }

    /**
     * 
     */
    public function setEntranceMessageAudioFileList(CallCenterAnnouncementFileListModify $entranceMessageAudioFileList = null)
    {
        if (!$entranceMessageAudioFileList) return $this;
        $this->entranceMessageAudioFileList = $entranceMessageAudioFileList;
        $this->entranceMessageAudioFileList->setName('entranceMessageAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify
     */
    public function getEntranceMessageAudioFileList()
    {
        return $this->entranceMessageAudioFileList;
    }

    /**
     * 
     */
    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection = null)
    {
        if (!$entranceVideoMessageSelection) return $this;
        $this->entranceVideoMessageSelection = ($entranceVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceVideoMessageSelection
             : new ExtendedFileResourceSelection($entranceVideoMessageSelection);
        $this->entranceVideoMessageSelection->setName('entranceVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getEntranceVideoMessageSelection()
    {
        return $this->entranceVideoMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setEntranceMessageVideoUrlList(CallCenterAnnouncementURLListModify $entranceMessageVideoUrlList = null)
    {
        if (!$entranceMessageVideoUrlList) return $this;
        $this->entranceMessageVideoUrlList = $entranceMessageVideoUrlList;
        $this->entranceMessageVideoUrlList->setName('entranceMessageVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify
     */
    public function getEntranceMessageVideoUrlList()
    {
        return $this->entranceMessageVideoUrlList;
    }

    /**
     * 
     */
    public function setEntranceMessageVideoFileList(CallCenterAnnouncementFileListModify $entranceMessageVideoFileList = null)
    {
        if (!$entranceMessageVideoFileList) return $this;
        $this->entranceMessageVideoFileList = $entranceMessageVideoFileList;
        $this->entranceMessageVideoFileList->setName('entranceMessageVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify
     */
    public function getEntranceMessageVideoFileList()
    {
        return $this->entranceMessageVideoFileList;
    }

    /**
     * 
     */
    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage = null)
    {
        if (!$playPeriodicComfortMessage) return $this;
        $this->playPeriodicComfortMessage = new PrimitiveType($playPeriodicComfortMessage);
        $this->playPeriodicComfortMessage->setName('playPeriodicComfortMessage');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayPeriodicComfortMessage()
    {
        return $this->playPeriodicComfortMessage->getValue();
    }

    /**
     * 
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        if (!$timeBetweenComfortMessagesSeconds) return $this;
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->timeBetweenComfortMessagesSeconds->setName('timeBetweenComfortMessagesSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterTimeBetweenComfortMessagesSeconds
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return $this->timeBetweenComfortMessagesSeconds->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection = null)
    {
        if (!$periodicComfortAudioMessageSelection) return $this;
        $this->periodicComfortAudioMessageSelection = ($periodicComfortAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortAudioMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
        $this->periodicComfortAudioMessageSelection->setName('periodicComfortAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return $this->periodicComfortAudioMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioUrlList(CallCenterAnnouncementURLListModify $periodicComfortMessageAudioUrlList = null)
    {
        if (!$periodicComfortMessageAudioUrlList) return $this;
        $this->periodicComfortMessageAudioUrlList = $periodicComfortMessageAudioUrlList;
        $this->periodicComfortMessageAudioUrlList->setName('periodicComfortMessageAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify
     */
    public function getPeriodicComfortMessageAudioUrlList()
    {
        return $this->periodicComfortMessageAudioUrlList;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioFileList(CallCenterAnnouncementFileListModify $periodicComfortMessageAudioFileList = null)
    {
        if (!$periodicComfortMessageAudioFileList) return $this;
        $this->periodicComfortMessageAudioFileList = $periodicComfortMessageAudioFileList;
        $this->periodicComfortMessageAudioFileList->setName('periodicComfortMessageAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify
     */
    public function getPeriodicComfortMessageAudioFileList()
    {
        return $this->periodicComfortMessageAudioFileList;
    }

    /**
     * 
     */
    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection = null)
    {
        if (!$periodicComfortVideoMessageSelection) return $this;
        $this->periodicComfortVideoMessageSelection = ($periodicComfortVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortVideoMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
        $this->periodicComfortVideoMessageSelection->setName('periodicComfortVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return $this->periodicComfortVideoMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageVideoUrlList(CallCenterAnnouncementURLListModify $periodicComfortMessageVideoUrlList = null)
    {
        if (!$periodicComfortMessageVideoUrlList) return $this;
        $this->periodicComfortMessageVideoUrlList = $periodicComfortMessageVideoUrlList;
        $this->periodicComfortMessageVideoUrlList->setName('periodicComfortMessageVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify
     */
    public function getPeriodicComfortMessageVideoUrlList()
    {
        return $this->periodicComfortMessageVideoUrlList;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageVideoFileList(CallCenterAnnouncementFileListModify $periodicComfortMessageVideoFileList = null)
    {
        if (!$periodicComfortMessageVideoFileList) return $this;
        $this->periodicComfortMessageVideoFileList = $periodicComfortMessageVideoFileList;
        $this->periodicComfortMessageVideoFileList->setName('periodicComfortMessageVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify
     */
    public function getPeriodicComfortMessageVideoFileList()
    {
        return $this->periodicComfortMessageVideoFileList;
    }

    /**
     * 
     */
    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls = null)
    {
        if (!$enableMediaOnHoldForQueuedCalls) return $this;
        $this->enableMediaOnHoldForQueuedCalls = new PrimitiveType($enableMediaOnHoldForQueuedCalls);
        $this->enableMediaOnHoldForQueuedCalls->setName('enableMediaOnHoldForQueuedCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return $this->enableMediaOnHoldForQueuedCalls->getValue();
    }

    /**
     * 
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null)
    {
        if (!$mediaOnHoldSource) return $this;
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        $this->mediaOnHoldSource->setName('mediaOnHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceModify17
     */
    public function getMediaOnHoldSource()
    {
        return $this->mediaOnHoldSource;
    }

    /**
     * 
     */
    public function setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls = null)
    {
        if (!$mediaOnHoldUseAlternateSourceForInternalCalls) return $this;
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = new PrimitiveType($mediaOnHoldUseAlternateSourceForInternalCalls);
        $this->mediaOnHoldUseAlternateSourceForInternalCalls->setName('mediaOnHoldUseAlternateSourceForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return $this->mediaOnHoldUseAlternateSourceForInternalCalls->getValue();
    }

    /**
     * 
     */
    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceModify17 $mediaOnHoldInternalSource = null)
    {
        if (!$mediaOnHoldInternalSource) return $this;
        $this->mediaOnHoldInternalSource = $mediaOnHoldInternalSource;
        $this->mediaOnHoldInternalSource->setName('mediaOnHoldInternalSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceModify17
     */
    public function getMediaOnHoldInternalSource()
    {
        return $this->mediaOnHoldInternalSource;
    }

    /**
     * 
     */
    public function setPlayWhisperMessage($playWhisperMessage = null)
    {
        if (!$playWhisperMessage) return $this;
        $this->playWhisperMessage = new PrimitiveType($playWhisperMessage);
        $this->playWhisperMessage->setName('playWhisperMessage');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPlayWhisperMessage()
    {
        return $this->playWhisperMessage->getValue();
    }

    /**
     * 
     */
    public function setWhisperAudioMessageSelection($whisperAudioMessageSelection = null)
    {
        if (!$whisperAudioMessageSelection) return $this;
        $this->whisperAudioMessageSelection = ($whisperAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $whisperAudioMessageSelection
             : new ExtendedFileResourceSelection($whisperAudioMessageSelection);
        $this->whisperAudioMessageSelection->setName('whisperAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getWhisperAudioMessageSelection()
    {
        return $this->whisperAudioMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setWhisperMessageAudioUrlList(CallCenterAnnouncementURLListModify $whisperMessageAudioUrlList = null)
    {
        if (!$whisperMessageAudioUrlList) return $this;
        $this->whisperMessageAudioUrlList = $whisperMessageAudioUrlList;
        $this->whisperMessageAudioUrlList->setName('whisperMessageAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify
     */
    public function getWhisperMessageAudioUrlList()
    {
        return $this->whisperMessageAudioUrlList;
    }

    /**
     * 
     */
    public function setWhisperMessageAudioFileList(CallCenterAnnouncementFileListModify $whisperMessageAudioFileList = null)
    {
        if (!$whisperMessageAudioFileList) return $this;
        $this->whisperMessageAudioFileList = $whisperMessageAudioFileList;
        $this->whisperMessageAudioFileList->setName('whisperMessageAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify
     */
    public function getWhisperMessageAudioFileList()
    {
        return $this->whisperMessageAudioFileList;
    }

    /**
     * 
     */
    public function setWhisperVideoMessageSelection($whisperVideoMessageSelection = null)
    {
        if (!$whisperVideoMessageSelection) return $this;
        $this->whisperVideoMessageSelection = ($whisperVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $whisperVideoMessageSelection
             : new ExtendedFileResourceSelection($whisperVideoMessageSelection);
        $this->whisperVideoMessageSelection->setName('whisperVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection
     */
    public function getWhisperVideoMessageSelection()
    {
        return $this->whisperVideoMessageSelection->getValue();
    }

    /**
     * 
     */
    public function setWhisperMessageVideoUrlList(CallCenterAnnouncementURLListModify $whisperMessageVideoUrlList = null)
    {
        if (!$whisperMessageVideoUrlList) return $this;
        $this->whisperMessageVideoUrlList = $whisperMessageVideoUrlList;
        $this->whisperMessageVideoUrlList->setName('whisperMessageVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify
     */
    public function getWhisperMessageVideoUrlList()
    {
        return $this->whisperMessageVideoUrlList;
    }

    /**
     * 
     */
    public function setWhisperMessageVideoFileList(CallCenterAnnouncementFileListModify $whisperMessageVideoFileList = null)
    {
        if (!$whisperMessageVideoFileList) return $this;
        $this->whisperMessageVideoFileList = $whisperMessageVideoFileList;
        $this->whisperMessageVideoFileList->setName('whisperMessageVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify
     */
    public function getWhisperMessageVideoFileList()
    {
        return $this->whisperMessageVideoFileList;
    }

    /**
     * 
     */
    public function setEstimatedWaitMessageOptionsModify(EstimatedWaitMessageOptionsModify $estimatedWaitMessageOptionsModify = null)
    {
        if (!$estimatedWaitMessageOptionsModify) return $this;
        $this->estimatedWaitMessageOptionsModify = $estimatedWaitMessageOptionsModify;
        $this->estimatedWaitMessageOptionsModify->setName('estimatedWaitMessageOptionsModify');
        return $this;
    }

    /**
     * 
     * @return EstimatedWaitMessageOptionsModify
     */
    public function getEstimatedWaitMessageOptionsModify()
    {
        return $this->estimatedWaitMessageOptionsModify;
    }
}
