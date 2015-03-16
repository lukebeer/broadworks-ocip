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
    public    $name = 'GroupCallCenterModifyAnnouncementRequest17';
    protected $serviceUserId;
    protected $playEntranceMessage;
    protected $mandatoryEntranceMessage;
    protected $entranceAudioMessageSelection;
    protected $entranceMessageAudioUrlList;
    protected $entranceMessageAudioFileList;
    protected $entranceVideoMessageSelection;
    protected $entranceMessageVideoUrlList;
    protected $entranceMessageVideoFileList;
    protected $playPeriodicComfortMessage;
    protected $timeBetweenComfortMessagesSeconds;
    protected $periodicComfortAudioMessageSelection;
    protected $periodicComfortMessageAudioUrlList;
    protected $periodicComfortMessageAudioFileList;
    protected $periodicComfortVideoMessageSelection;
    protected $periodicComfortMessageVideoUrlList;
    protected $periodicComfortMessageVideoFileList;
    protected $enableMediaOnHoldForQueuedCalls;
    protected $mediaOnHoldSource;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls;
    protected $mediaOnHoldInternalSource;
    protected $playWhisperMessage;
    protected $whisperAudioMessageSelection;
    protected $whisperMessageAudioUrlList;
    protected $whisperMessageAudioFileList;
    protected $whisperVideoMessageSelection;
    protected $whisperMessageVideoUrlList;
    protected $whisperMessageVideoFileList;
    protected $estimatedWaitMessageOptionsModify;

    public function __construct(
         $serviceUserId = '',
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
     * @return mixed $response
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
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
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
    public function setEntranceMessageAudioUrlList(CallCenterAnnouncementURLListModify $entranceMessageAudioUrlList = null)
    {
        $this->entranceMessageAudioUrlList = ($entranceMessageAudioUrlList InstanceOf CallCenterAnnouncementURLListModify)
             ? $entranceMessageAudioUrlList
             : new CallCenterAnnouncementURLListModify($entranceMessageAudioUrlList);
        $this->entranceMessageAudioUrlList->setName('entranceMessageAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify $entranceMessageAudioUrlList
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
        $this->entranceMessageAudioFileList = ($entranceMessageAudioFileList InstanceOf CallCenterAnnouncementFileListModify)
             ? $entranceMessageAudioFileList
             : new CallCenterAnnouncementFileListModify($entranceMessageAudioFileList);
        $this->entranceMessageAudioFileList->setName('entranceMessageAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify $entranceMessageAudioFileList
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
    public function setEntranceMessageVideoUrlList(CallCenterAnnouncementURLListModify $entranceMessageVideoUrlList = null)
    {
        $this->entranceMessageVideoUrlList = ($entranceMessageVideoUrlList InstanceOf CallCenterAnnouncementURLListModify)
             ? $entranceMessageVideoUrlList
             : new CallCenterAnnouncementURLListModify($entranceMessageVideoUrlList);
        $this->entranceMessageVideoUrlList->setName('entranceMessageVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify $entranceMessageVideoUrlList
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
        $this->entranceMessageVideoFileList = ($entranceMessageVideoFileList InstanceOf CallCenterAnnouncementFileListModify)
             ? $entranceMessageVideoFileList
             : new CallCenterAnnouncementFileListModify($entranceMessageVideoFileList);
        $this->entranceMessageVideoFileList->setName('entranceMessageVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify $entranceMessageVideoFileList
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
    public function setPeriodicComfortMessageAudioUrlList(CallCenterAnnouncementURLListModify $periodicComfortMessageAudioUrlList = null)
    {
        $this->periodicComfortMessageAudioUrlList = ($periodicComfortMessageAudioUrlList InstanceOf CallCenterAnnouncementURLListModify)
             ? $periodicComfortMessageAudioUrlList
             : new CallCenterAnnouncementURLListModify($periodicComfortMessageAudioUrlList);
        $this->periodicComfortMessageAudioUrlList->setName('periodicComfortMessageAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify $periodicComfortMessageAudioUrlList
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
        $this->periodicComfortMessageAudioFileList = ($periodicComfortMessageAudioFileList InstanceOf CallCenterAnnouncementFileListModify)
             ? $periodicComfortMessageAudioFileList
             : new CallCenterAnnouncementFileListModify($periodicComfortMessageAudioFileList);
        $this->periodicComfortMessageAudioFileList->setName('periodicComfortMessageAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify $periodicComfortMessageAudioFileList
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
    public function setPeriodicComfortMessageVideoUrlList(CallCenterAnnouncementURLListModify $periodicComfortMessageVideoUrlList = null)
    {
        $this->periodicComfortMessageVideoUrlList = ($periodicComfortMessageVideoUrlList InstanceOf CallCenterAnnouncementURLListModify)
             ? $periodicComfortMessageVideoUrlList
             : new CallCenterAnnouncementURLListModify($periodicComfortMessageVideoUrlList);
        $this->periodicComfortMessageVideoUrlList->setName('periodicComfortMessageVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify $periodicComfortMessageVideoUrlList
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
        $this->periodicComfortMessageVideoFileList = ($periodicComfortMessageVideoFileList InstanceOf CallCenterAnnouncementFileListModify)
             ? $periodicComfortMessageVideoFileList
             : new CallCenterAnnouncementFileListModify($periodicComfortMessageVideoFileList);
        $this->periodicComfortMessageVideoFileList->setName('periodicComfortMessageVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify $periodicComfortMessageVideoFileList
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
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource = null)
    {
        $this->mediaOnHoldSource = ($mediaOnHoldSource InstanceOf CallCenterMediaOnHoldSourceModify17)
             ? $mediaOnHoldSource
             : new CallCenterMediaOnHoldSourceModify17($mediaOnHoldSource);
        $this->mediaOnHoldSource->setName('mediaOnHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceModify17 $mediaOnHoldSource
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
    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceModify17 $mediaOnHoldInternalSource = null)
    {
        $this->mediaOnHoldInternalSource = ($mediaOnHoldInternalSource InstanceOf CallCenterMediaOnHoldSourceModify17)
             ? $mediaOnHoldInternalSource
             : new CallCenterMediaOnHoldSourceModify17($mediaOnHoldInternalSource);
        $this->mediaOnHoldInternalSource->setName('mediaOnHoldInternalSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceModify17 $mediaOnHoldInternalSource
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
    public function setWhisperMessageAudioUrlList(CallCenterAnnouncementURLListModify $whisperMessageAudioUrlList = null)
    {
        $this->whisperMessageAudioUrlList = ($whisperMessageAudioUrlList InstanceOf CallCenterAnnouncementURLListModify)
             ? $whisperMessageAudioUrlList
             : new CallCenterAnnouncementURLListModify($whisperMessageAudioUrlList);
        $this->whisperMessageAudioUrlList->setName('whisperMessageAudioUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify $whisperMessageAudioUrlList
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
        $this->whisperMessageAudioFileList = ($whisperMessageAudioFileList InstanceOf CallCenterAnnouncementFileListModify)
             ? $whisperMessageAudioFileList
             : new CallCenterAnnouncementFileListModify($whisperMessageAudioFileList);
        $this->whisperMessageAudioFileList->setName('whisperMessageAudioFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify $whisperMessageAudioFileList
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
    public function setWhisperMessageVideoUrlList(CallCenterAnnouncementURLListModify $whisperMessageVideoUrlList = null)
    {
        $this->whisperMessageVideoUrlList = ($whisperMessageVideoUrlList InstanceOf CallCenterAnnouncementURLListModify)
             ? $whisperMessageVideoUrlList
             : new CallCenterAnnouncementURLListModify($whisperMessageVideoUrlList);
        $this->whisperMessageVideoUrlList->setName('whisperMessageVideoUrlList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementURLListModify $whisperMessageVideoUrlList
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
        $this->whisperMessageVideoFileList = ($whisperMessageVideoFileList InstanceOf CallCenterAnnouncementFileListModify)
             ? $whisperMessageVideoFileList
             : new CallCenterAnnouncementFileListModify($whisperMessageVideoFileList);
        $this->whisperMessageVideoFileList->setName('whisperMessageVideoFileList');
        return $this;
    }

    /**
     * 
     * @return CallCenterAnnouncementFileListModify $whisperMessageVideoFileList
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
        $this->estimatedWaitMessageOptionsModify = ($estimatedWaitMessageOptionsModify InstanceOf EstimatedWaitMessageOptionsModify)
             ? $estimatedWaitMessageOptionsModify
             : new EstimatedWaitMessageOptionsModify($estimatedWaitMessageOptionsModify);
        $this->estimatedWaitMessageOptionsModify->setName('estimatedWaitMessageOptionsModify');
        return $this;
    }

    /**
     * 
     * @return EstimatedWaitMessageOptionsModify $estimatedWaitMessageOptionsModify
     */
    public function getEstimatedWaitMessageOptionsModify()
    {
        return $this->estimatedWaitMessageOptionsModify;
    }
}
