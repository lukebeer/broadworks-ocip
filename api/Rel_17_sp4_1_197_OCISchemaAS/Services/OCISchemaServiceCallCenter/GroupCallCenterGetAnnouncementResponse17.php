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
    public    $name = 'GroupCallCenterGetAnnouncementResponse17';
    protected $playEntranceMessage;
    protected $mandatoryEntranceMessage;
    protected $entranceAudioMessageSelection;
    protected $entranceMessageAudioUrlList;
    protected $entranceMessageAudioFileList;
    protected $entranceMessageAudioMediaTypeList;
    protected $entranceVideoMessageSelection;
    protected $entranceMessageVideoUrlList;
    protected $entranceMessageVideoFileList;
    protected $entranceMessageVideoMediaTypeList;
    protected $playPeriodicComfortMessage;
    protected $timeBetweenComfortMessagesSeconds;
    protected $periodicComfortAudioMessageSelection;
    protected $periodicComfortMessageAudioUrlList;
    protected $periodicComfortMessageAudioFileList;
    protected $periodicComfortMessageAudioMediaTypeList;
    protected $periodicComfortVideoMessageSelection;
    protected $periodicComfortMessageVideoUrlList;
    protected $periodicComfortMessageVideoFileList;
    protected $periodicComfortMessageVideoMediaTypeList;
    protected $enableMediaOnHoldForQueuedCalls;
    protected $mediaOnHoldSource;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls;
    protected $mediaOnHoldInternalSource;
    protected $playWhisperMessage;
    protected $whisperAudioMessageSelection;
    protected $whisperMessageAudioUrlList;
    protected $whisperMessageAudioFileList;
    protected $whisperMessageAudioMediaTypeList;
    protected $whisperVideoMessageSelection;
    protected $whisperMessageVideoUrlList;
    protected $whisperMessageVideoFileList;
    protected $whisperMessageVideoMediaTypeList;
    protected $estimatedWaitMessageOptionsRead;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\GroupCallCenterGetAnnouncementResponse17 $response
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
        $this->playEntranceMessage = new PrimitiveType($playEntranceMessage);
        $this->playEntranceMessage->setName('playEntranceMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $playEntranceMessage
     */
    public function getPlayEntranceMessage()
    {
        return ($this->playEntranceMessage) ? $this->playEntranceMessage->getValue() : null;
    }

    /**
     * 
     */
    public function setMandatoryEntranceMessage($mandatoryEntranceMessage = null)
    {
        $this->mandatoryEntranceMessage = new PrimitiveType($mandatoryEntranceMessage);
        $this->mandatoryEntranceMessage->setName('mandatoryEntranceMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $mandatoryEntranceMessage
     */
    public function getMandatoryEntranceMessage()
    {
        return ($this->mandatoryEntranceMessage) ? $this->mandatoryEntranceMessage->getValue() : null;
    }

    /**
     * 
     */
    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection = null)
    {
        $this->entranceAudioMessageSelection = ($entranceAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceAudioMessageSelection
             : new ExtendedFileResourceSelection($entranceAudioMessageSelection);
        $this->entranceAudioMessageSelection->setName('entranceAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $entranceAudioMessageSelection
     */
    public function getEntranceAudioMessageSelection()
    {
        return ($this->entranceAudioMessageSelection) ? $this->entranceAudioMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setEntranceMessageAudioUrlList(CallCenterAnnouncementURLList $entranceMessageAudioUrlList = null)
    {
        $this->entranceMessageAudioUrlList = ($entranceMessageAudioUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $entranceMessageAudioUrlList
             : new CallCenterAnnouncementURLList($entranceMessageAudioUrlList);
        $this->entranceMessageAudioUrlList->setName('entranceMessageAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $entranceMessageAudioUrlList
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
        $this->entranceMessageAudioFileList = ($entranceMessageAudioFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $entranceMessageAudioFileList
             : new CallCenterAnnouncementDescriptionList($entranceMessageAudioFileList);
        $this->entranceMessageAudioFileList->setName('entranceMessageAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $entranceMessageAudioFileList
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
        $this->entranceMessageAudioMediaTypeList = ($entranceMessageAudioMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $entranceMessageAudioMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($entranceMessageAudioMediaTypeList);
        $this->entranceMessageAudioMediaTypeList->setName('entranceMessageAudioMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $entranceMessageAudioMediaTypeList
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
        $this->entranceVideoMessageSelection = ($entranceVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceVideoMessageSelection
             : new ExtendedFileResourceSelection($entranceVideoMessageSelection);
        $this->entranceVideoMessageSelection->setName('entranceVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $entranceVideoMessageSelection
     */
    public function getEntranceVideoMessageSelection()
    {
        return ($this->entranceVideoMessageSelection) ? $this->entranceVideoMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setEntranceMessageVideoUrlList(CallCenterAnnouncementURLList $entranceMessageVideoUrlList = null)
    {
        $this->entranceMessageVideoUrlList = ($entranceMessageVideoUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $entranceMessageVideoUrlList
             : new CallCenterAnnouncementURLList($entranceMessageVideoUrlList);
        $this->entranceMessageVideoUrlList->setName('entranceMessageVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $entranceMessageVideoUrlList
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
        $this->entranceMessageVideoFileList = ($entranceMessageVideoFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $entranceMessageVideoFileList
             : new CallCenterAnnouncementDescriptionList($entranceMessageVideoFileList);
        $this->entranceMessageVideoFileList->setName('entranceMessageVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $entranceMessageVideoFileList
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
        $this->entranceMessageVideoMediaTypeList = ($entranceMessageVideoMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $entranceMessageVideoMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($entranceMessageVideoMediaTypeList);
        $this->entranceMessageVideoMediaTypeList->setName('entranceMessageVideoMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $entranceMessageVideoMediaTypeList
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
        $this->playPeriodicComfortMessage = new PrimitiveType($playPeriodicComfortMessage);
        $this->playPeriodicComfortMessage->setName('playPeriodicComfortMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $playPeriodicComfortMessage
     */
    public function getPlayPeriodicComfortMessage()
    {
        return ($this->playPeriodicComfortMessage) ? $this->playPeriodicComfortMessage->getValue() : null;
    }

    /**
     * 
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->timeBetweenComfortMessagesSeconds->setName('timeBetweenComfortMessagesSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterTimeBetweenComfortMessagesSeconds $timeBetweenComfortMessagesSeconds
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return ($this->timeBetweenComfortMessagesSeconds) ? $this->timeBetweenComfortMessagesSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection = null)
    {
        $this->periodicComfortAudioMessageSelection = ($periodicComfortAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortAudioMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
        $this->periodicComfortAudioMessageSelection->setName('periodicComfortAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $periodicComfortAudioMessageSelection
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return ($this->periodicComfortAudioMessageSelection) ? $this->periodicComfortAudioMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioUrlList(CallCenterAnnouncementURLList $periodicComfortMessageAudioUrlList = null)
    {
        $this->periodicComfortMessageAudioUrlList = ($periodicComfortMessageAudioUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $periodicComfortMessageAudioUrlList
             : new CallCenterAnnouncementURLList($periodicComfortMessageAudioUrlList);
        $this->periodicComfortMessageAudioUrlList->setName('periodicComfortMessageAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $periodicComfortMessageAudioUrlList
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
        $this->periodicComfortMessageAudioFileList = ($periodicComfortMessageAudioFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $periodicComfortMessageAudioFileList
             : new CallCenterAnnouncementDescriptionList($periodicComfortMessageAudioFileList);
        $this->periodicComfortMessageAudioFileList->setName('periodicComfortMessageAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $periodicComfortMessageAudioFileList
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
        $this->periodicComfortMessageAudioMediaTypeList = ($periodicComfortMessageAudioMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $periodicComfortMessageAudioMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($periodicComfortMessageAudioMediaTypeList);
        $this->periodicComfortMessageAudioMediaTypeList->setName('periodicComfortMessageAudioMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageAudioMediaTypeList
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
        $this->periodicComfortVideoMessageSelection = ($periodicComfortVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortVideoMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
        $this->periodicComfortVideoMessageSelection->setName('periodicComfortVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $periodicComfortVideoMessageSelection
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return ($this->periodicComfortVideoMessageSelection) ? $this->periodicComfortVideoMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageVideoUrlList(CallCenterAnnouncementURLList $periodicComfortMessageVideoUrlList = null)
    {
        $this->periodicComfortMessageVideoUrlList = ($periodicComfortMessageVideoUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $periodicComfortMessageVideoUrlList
             : new CallCenterAnnouncementURLList($periodicComfortMessageVideoUrlList);
        $this->periodicComfortMessageVideoUrlList->setName('periodicComfortMessageVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $periodicComfortMessageVideoUrlList
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
        $this->periodicComfortMessageVideoFileList = ($periodicComfortMessageVideoFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $periodicComfortMessageVideoFileList
             : new CallCenterAnnouncementDescriptionList($periodicComfortMessageVideoFileList);
        $this->periodicComfortMessageVideoFileList->setName('periodicComfortMessageVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $periodicComfortMessageVideoFileList
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
        $this->periodicComfortMessageVideoMediaTypeList = ($periodicComfortMessageVideoMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $periodicComfortMessageVideoMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($periodicComfortMessageVideoMediaTypeList);
        $this->periodicComfortMessageVideoMediaTypeList->setName('periodicComfortMessageVideoMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $periodicComfortMessageVideoMediaTypeList
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
        $this->enableMediaOnHoldForQueuedCalls = new PrimitiveType($enableMediaOnHoldForQueuedCalls);
        $this->enableMediaOnHoldForQueuedCalls->setName('enableMediaOnHoldForQueuedCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMediaOnHoldForQueuedCalls
     */
    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return ($this->enableMediaOnHoldForQueuedCalls) ? $this->enableMediaOnHoldForQueuedCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource = null)
    {
        $this->mediaOnHoldSource = ($mediaOnHoldSource InstanceOf CallCenterMediaOnHoldSourceRead17)
             ? $mediaOnHoldSource
             : new CallCenterMediaOnHoldSourceRead17($mediaOnHoldSource);
        $this->mediaOnHoldSource->setName('mediaOnHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceRead17 $mediaOnHoldSource
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
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = new PrimitiveType($mediaOnHoldUseAlternateSourceForInternalCalls);
        $this->mediaOnHoldUseAlternateSourceForInternalCalls->setName('mediaOnHoldUseAlternateSourceForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $mediaOnHoldUseAlternateSourceForInternalCalls
     */
    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return ($this->mediaOnHoldUseAlternateSourceForInternalCalls) ? $this->mediaOnHoldUseAlternateSourceForInternalCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceRead17 $mediaOnHoldInternalSource = null)
    {
        $this->mediaOnHoldInternalSource = ($mediaOnHoldInternalSource InstanceOf CallCenterMediaOnHoldSourceRead17)
             ? $mediaOnHoldInternalSource
             : new CallCenterMediaOnHoldSourceRead17($mediaOnHoldInternalSource);
        $this->mediaOnHoldInternalSource->setName('mediaOnHoldInternalSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceRead17 $mediaOnHoldInternalSource
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
        $this->playWhisperMessage = new PrimitiveType($playWhisperMessage);
        $this->playWhisperMessage->setName('playWhisperMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $playWhisperMessage
     */
    public function getPlayWhisperMessage()
    {
        return ($this->playWhisperMessage) ? $this->playWhisperMessage->getValue() : null;
    }

    /**
     * 
     */
    public function setWhisperAudioMessageSelection($whisperAudioMessageSelection = null)
    {
        $this->whisperAudioMessageSelection = ($whisperAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $whisperAudioMessageSelection
             : new ExtendedFileResourceSelection($whisperAudioMessageSelection);
        $this->whisperAudioMessageSelection->setName('whisperAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $whisperAudioMessageSelection
     */
    public function getWhisperAudioMessageSelection()
    {
        return ($this->whisperAudioMessageSelection) ? $this->whisperAudioMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setWhisperMessageAudioUrlList(CallCenterAnnouncementURLList $whisperMessageAudioUrlList = null)
    {
        $this->whisperMessageAudioUrlList = ($whisperMessageAudioUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $whisperMessageAudioUrlList
             : new CallCenterAnnouncementURLList($whisperMessageAudioUrlList);
        $this->whisperMessageAudioUrlList->setName('whisperMessageAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $whisperMessageAudioUrlList
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
        $this->whisperMessageAudioFileList = ($whisperMessageAudioFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $whisperMessageAudioFileList
             : new CallCenterAnnouncementDescriptionList($whisperMessageAudioFileList);
        $this->whisperMessageAudioFileList->setName('whisperMessageAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $whisperMessageAudioFileList
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
        $this->whisperMessageAudioMediaTypeList = ($whisperMessageAudioMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $whisperMessageAudioMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($whisperMessageAudioMediaTypeList);
        $this->whisperMessageAudioMediaTypeList->setName('whisperMessageAudioMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $whisperMessageAudioMediaTypeList
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
        $this->whisperVideoMessageSelection = ($whisperVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $whisperVideoMessageSelection
             : new ExtendedFileResourceSelection($whisperVideoMessageSelection);
        $this->whisperVideoMessageSelection->setName('whisperVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $whisperVideoMessageSelection
     */
    public function getWhisperVideoMessageSelection()
    {
        return ($this->whisperVideoMessageSelection) ? $this->whisperVideoMessageSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setWhisperMessageVideoUrlList(CallCenterAnnouncementURLList $whisperMessageVideoUrlList = null)
    {
        $this->whisperMessageVideoUrlList = ($whisperMessageVideoUrlList InstanceOf CallCenterAnnouncementURLList)
             ? $whisperMessageVideoUrlList
             : new CallCenterAnnouncementURLList($whisperMessageVideoUrlList);
        $this->whisperMessageVideoUrlList->setName('whisperMessageVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLList $whisperMessageVideoUrlList
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
        $this->whisperMessageVideoFileList = ($whisperMessageVideoFileList InstanceOf CallCenterAnnouncementDescriptionList)
             ? $whisperMessageVideoFileList
             : new CallCenterAnnouncementDescriptionList($whisperMessageVideoFileList);
        $this->whisperMessageVideoFileList->setName('whisperMessageVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementDescriptionList $whisperMessageVideoFileList
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
        $this->whisperMessageVideoMediaTypeList = ($whisperMessageVideoMediaTypeList InstanceOf CallCenterAnnouncementMediaFileTypeList)
             ? $whisperMessageVideoMediaTypeList
             : new CallCenterAnnouncementMediaFileTypeList($whisperMessageVideoMediaTypeList);
        $this->whisperMessageVideoMediaTypeList->setName('whisperMessageVideoMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementMediaFileTypeList $whisperMessageVideoMediaTypeList
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
        $this->estimatedWaitMessageOptionsRead = ($estimatedWaitMessageOptionsRead InstanceOf EstimatedWaitMessageOptionsRead)
             ? $estimatedWaitMessageOptionsRead
             : new EstimatedWaitMessageOptionsRead($estimatedWaitMessageOptionsRead);
        $this->estimatedWaitMessageOptionsRead->setName('estimatedWaitMessageOptionsRead');
        return $this;
    }

    /**
     * 
     * @return EstimatedWaitMessageOptionsRead $estimatedWaitMessageOptionsRead
     */
    public function getEstimatedWaitMessageOptionsRead()
    {
        return $this->estimatedWaitMessageOptionsRead;
    }
}
