<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\EstimatedWaitMessageOptionsRead;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementMediaFileTypeList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementDescriptionList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceRead17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterAnnouncementURLList;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupCallCenterGetAnnouncementRequest17.
 */
class GroupCallCenterGetAnnouncementResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                                          = 'GroupCallCenterGetAnnouncementResponse17';
    protected $playEntranceMessage                           = null;
    protected $mandatoryEntranceMessage                      = null;
    protected $entranceAudioMessageSelection                 = null;
    protected $entranceMessageAudioUrlList                   = null;
    protected $entranceMessageAudioFileList                  = null;
    protected $entranceMessageAudioMediaTypeList             = null;
    protected $entranceVideoMessageSelection                 = null;
    protected $entranceMessageVideoUrlList                   = null;
    protected $entranceMessageVideoFileList                  = null;
    protected $entranceMessageVideoMediaTypeList             = null;
    protected $playPeriodicComfortMessage                    = null;
    protected $timeBetweenComfortMessagesSeconds             = null;
    protected $periodicComfortAudioMessageSelection          = null;
    protected $periodicComfortMessageAudioUrlList            = null;
    protected $periodicComfortMessageAudioFileList           = null;
    protected $periodicComfortMessageAudioMediaTypeList      = null;
    protected $periodicComfortVideoMessageSelection          = null;
    protected $periodicComfortMessageVideoUrlList            = null;
    protected $periodicComfortMessageVideoFileList           = null;
    protected $periodicComfortMessageVideoMediaTypeList      = null;
    protected $enableMediaOnHoldForQueuedCalls               = null;
    protected $mediaOnHoldSource                             = null;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls = null;
    protected $mediaOnHoldInternalSource                     = null;
    protected $playWhisperMessage                            = null;
    protected $whisperAudioMessageSelection                  = null;
    protected $whisperMessageAudioUrlList                    = null;
    protected $whisperMessageAudioFileList                   = null;
    protected $whisperMessageAudioMediaTypeList              = null;
    protected $whisperVideoMessageSelection                  = null;
    protected $whisperMessageVideoUrlList                    = null;
    protected $whisperMessageVideoFileList                   = null;
    protected $whisperMessageVideoMediaTypeList              = null;
    protected $estimatedWaitMessageOptionsRead               = null;

    /**
     * @return GroupCallCenterGetAnnouncementResponse17
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setEntranceMessageAudioUrlList(CallCenterAnnouncementURLList $entranceMessageAudioUrlList = null)
    {
        if (!$entranceMessageAudioUrlList) return $this;
        $this->entranceMessageAudioUrlList = $entranceMessageAudioUrlList;
        $this->entranceMessageAudioUrlList->setName('entranceMessageAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList
     */
    public function getEntranceMessageAudioUrlList()
    {
        return $this->entranceMessageAudioUrlList;
    }

    /**
     * 
     */
    public function setEntranceMessageAudioFileList(CallCenterAnnouncementDescriptionList $entranceMessageAudioFileList = null)
    {
        if (!$entranceMessageAudioFileList) return $this;
        $this->entranceMessageAudioFileList = $entranceMessageAudioFileList;
        $this->entranceMessageAudioFileList->setName('entranceMessageAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList
     */
    public function getEntranceMessageAudioFileList()
    {
        return $this->entranceMessageAudioFileList;
    }

    /**
     * 
     */
    public function setEntranceMessageAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $entranceMessageAudioMediaTypeList = null)
    {
        if (!$entranceMessageAudioMediaTypeList) return $this;
        $this->entranceMessageAudioMediaTypeList = $entranceMessageAudioMediaTypeList;
        $this->entranceMessageAudioMediaTypeList->setName('entranceMessageAudioMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList
     */
    public function getEntranceMessageAudioMediaTypeList()
    {
        return $this->entranceMessageAudioMediaTypeList;
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
    public function setEntranceMessageVideoUrlList(CallCenterAnnouncementURLList $entranceMessageVideoUrlList = null)
    {
        if (!$entranceMessageVideoUrlList) return $this;
        $this->entranceMessageVideoUrlList = $entranceMessageVideoUrlList;
        $this->entranceMessageVideoUrlList->setName('entranceMessageVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList
     */
    public function getEntranceMessageVideoUrlList()
    {
        return $this->entranceMessageVideoUrlList;
    }

    /**
     * 
     */
    public function setEntranceMessageVideoFileList(CallCenterAnnouncementDescriptionList $entranceMessageVideoFileList = null)
    {
        if (!$entranceMessageVideoFileList) return $this;
        $this->entranceMessageVideoFileList = $entranceMessageVideoFileList;
        $this->entranceMessageVideoFileList->setName('entranceMessageVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList
     */
    public function getEntranceMessageVideoFileList()
    {
        return $this->entranceMessageVideoFileList;
    }

    /**
     * 
     */
    public function setEntranceMessageVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $entranceMessageVideoMediaTypeList = null)
    {
        if (!$entranceMessageVideoMediaTypeList) return $this;
        $this->entranceMessageVideoMediaTypeList = $entranceMessageVideoMediaTypeList;
        $this->entranceMessageVideoMediaTypeList->setName('entranceMessageVideoMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList
     */
    public function getEntranceMessageVideoMediaTypeList()
    {
        return $this->entranceMessageVideoMediaTypeList;
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
    public function setPeriodicComfortMessageAudioUrlList(CallCenterAnnouncementURLList $periodicComfortMessageAudioUrlList = null)
    {
        if (!$periodicComfortMessageAudioUrlList) return $this;
        $this->periodicComfortMessageAudioUrlList = $periodicComfortMessageAudioUrlList;
        $this->periodicComfortMessageAudioUrlList->setName('periodicComfortMessageAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList
     */
    public function getPeriodicComfortMessageAudioUrlList()
    {
        return $this->periodicComfortMessageAudioUrlList;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioFileList(CallCenterAnnouncementDescriptionList $periodicComfortMessageAudioFileList = null)
    {
        if (!$periodicComfortMessageAudioFileList) return $this;
        $this->periodicComfortMessageAudioFileList = $periodicComfortMessageAudioFileList;
        $this->periodicComfortMessageAudioFileList->setName('periodicComfortMessageAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList
     */
    public function getPeriodicComfortMessageAudioFileList()
    {
        return $this->periodicComfortMessageAudioFileList;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageAudioMediaTypeList = null)
    {
        if (!$periodicComfortMessageAudioMediaTypeList) return $this;
        $this->periodicComfortMessageAudioMediaTypeList = $periodicComfortMessageAudioMediaTypeList;
        $this->periodicComfortMessageAudioMediaTypeList->setName('periodicComfortMessageAudioMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList
     */
    public function getPeriodicComfortMessageAudioMediaTypeList()
    {
        return $this->periodicComfortMessageAudioMediaTypeList;
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
    public function setPeriodicComfortMessageVideoUrlList(CallCenterAnnouncementURLList $periodicComfortMessageVideoUrlList = null)
    {
        if (!$periodicComfortMessageVideoUrlList) return $this;
        $this->periodicComfortMessageVideoUrlList = $periodicComfortMessageVideoUrlList;
        $this->periodicComfortMessageVideoUrlList->setName('periodicComfortMessageVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList
     */
    public function getPeriodicComfortMessageVideoUrlList()
    {
        return $this->periodicComfortMessageVideoUrlList;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageVideoFileList(CallCenterAnnouncementDescriptionList $periodicComfortMessageVideoFileList = null)
    {
        if (!$periodicComfortMessageVideoFileList) return $this;
        $this->periodicComfortMessageVideoFileList = $periodicComfortMessageVideoFileList;
        $this->periodicComfortMessageVideoFileList->setName('periodicComfortMessageVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList
     */
    public function getPeriodicComfortMessageVideoFileList()
    {
        return $this->periodicComfortMessageVideoFileList;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageVideoMediaTypeList = null)
    {
        if (!$periodicComfortMessageVideoMediaTypeList) return $this;
        $this->periodicComfortMessageVideoMediaTypeList = $periodicComfortMessageVideoMediaTypeList;
        $this->periodicComfortMessageVideoMediaTypeList->setName('periodicComfortMessageVideoMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList
     */
    public function getPeriodicComfortMessageVideoMediaTypeList()
    {
        return $this->periodicComfortMessageVideoMediaTypeList;
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
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource = null)
    {
        if (!$mediaOnHoldSource) return $this;
        $this->mediaOnHoldSource = $mediaOnHoldSource;
        $this->mediaOnHoldSource->setName('mediaOnHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceRead17
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
    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceRead17 $mediaOnHoldInternalSource = null)
    {
        if (!$mediaOnHoldInternalSource) return $this;
        $this->mediaOnHoldInternalSource = $mediaOnHoldInternalSource;
        $this->mediaOnHoldInternalSource->setName('mediaOnHoldInternalSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceRead17
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
    public function setWhisperMessageAudioUrlList(CallCenterAnnouncementURLList $whisperMessageAudioUrlList = null)
    {
        if (!$whisperMessageAudioUrlList) return $this;
        $this->whisperMessageAudioUrlList = $whisperMessageAudioUrlList;
        $this->whisperMessageAudioUrlList->setName('whisperMessageAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList
     */
    public function getWhisperMessageAudioUrlList()
    {
        return $this->whisperMessageAudioUrlList;
    }

    /**
     * 
     */
    public function setWhisperMessageAudioFileList(CallCenterAnnouncementDescriptionList $whisperMessageAudioFileList = null)
    {
        if (!$whisperMessageAudioFileList) return $this;
        $this->whisperMessageAudioFileList = $whisperMessageAudioFileList;
        $this->whisperMessageAudioFileList->setName('whisperMessageAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList
     */
    public function getWhisperMessageAudioFileList()
    {
        return $this->whisperMessageAudioFileList;
    }

    /**
     * 
     */
    public function setWhisperMessageAudioMediaTypeList(CallCenterAnnouncementMediaFileTypeList $whisperMessageAudioMediaTypeList = null)
    {
        if (!$whisperMessageAudioMediaTypeList) return $this;
        $this->whisperMessageAudioMediaTypeList = $whisperMessageAudioMediaTypeList;
        $this->whisperMessageAudioMediaTypeList->setName('whisperMessageAudioMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList
     */
    public function getWhisperMessageAudioMediaTypeList()
    {
        return $this->whisperMessageAudioMediaTypeList;
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
    public function setWhisperMessageVideoUrlList(CallCenterAnnouncementURLList $whisperMessageVideoUrlList = null)
    {
        if (!$whisperMessageVideoUrlList) return $this;
        $this->whisperMessageVideoUrlList = $whisperMessageVideoUrlList;
        $this->whisperMessageVideoUrlList->setName('whisperMessageVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList
     */
    public function getWhisperMessageVideoUrlList()
    {
        return $this->whisperMessageVideoUrlList;
    }

    /**
     * 
     */
    public function setWhisperMessageVideoFileList(CallCenterAnnouncementDescriptionList $whisperMessageVideoFileList = null)
    {
        if (!$whisperMessageVideoFileList) return $this;
        $this->whisperMessageVideoFileList = $whisperMessageVideoFileList;
        $this->whisperMessageVideoFileList->setName('whisperMessageVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList
     */
    public function getWhisperMessageVideoFileList()
    {
        return $this->whisperMessageVideoFileList;
    }

    /**
     * 
     */
    public function setWhisperMessageVideoMediaTypeList(CallCenterAnnouncementMediaFileTypeList $whisperMessageVideoMediaTypeList = null)
    {
        if (!$whisperMessageVideoMediaTypeList) return $this;
        $this->whisperMessageVideoMediaTypeList = $whisperMessageVideoMediaTypeList;
        $this->whisperMessageVideoMediaTypeList->setName('whisperMessageVideoMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList
     */
    public function getWhisperMessageVideoMediaTypeList()
    {
        return $this->whisperMessageVideoMediaTypeList;
    }

    /**
     * 
     */
    public function setEstimatedWaitMessageOptionsRead(EstimatedWaitMessageOptionsRead $estimatedWaitMessageOptionsRead = null)
    {
        if (!$estimatedWaitMessageOptionsRead) return $this;
        $this->estimatedWaitMessageOptionsRead = $estimatedWaitMessageOptionsRead;
        $this->estimatedWaitMessageOptionsRead->setName('estimatedWaitMessageOptionsRead');
        return $this;
    }

    /**
     * 
     * @return EstimatedWaitMessageOptionsRead
     */
    public function getEstimatedWaitMessageOptionsRead()
    {
        return $this->estimatedWaitMessageOptionsRead;
    }
}
