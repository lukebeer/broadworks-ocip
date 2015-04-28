<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterMediaOnHoldSourceModify16;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyAnnouncementRequest16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupCallCenterModifyAnnouncementRequest16';
    protected $serviceUserId;
    protected $playEntranceMessage;
    protected $mandatoryEntranceMessage;
    protected $entranceAudioMessageSelection;
    protected $entranceMessageAudioFile;
    protected $entranceVideoMessageSelection;
    protected $entranceMessageVideoFile;
    protected $playPeriodicComfortMessage;
    protected $timeBetweenComfortMessagesSeconds;
    protected $periodicComfortAudioMessageSelection;
    protected $periodicComfortMessageAudioFile;
    protected $periodicComfortVideoMessageSelection;
    protected $periodicComfortMessageVideoFile;
    protected $enableMediaOnHoldForQueuedCalls;
    protected $mediaOnHoldSource;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls;
    protected $mediaOnHoldInternalSource;

    public function __construct(
         $serviceUserId = '',
         $playEntranceMessage = null,
         $mandatoryEntranceMessage = null,
         $entranceAudioMessageSelection = null,
         $entranceMessageAudioFile = null,
         $entranceVideoMessageSelection = null,
         $entranceMessageVideoFile = null,
         $playPeriodicComfortMessage = null,
         $timeBetweenComfortMessagesSeconds = null,
         $periodicComfortAudioMessageSelection = null,
         $periodicComfortMessageAudioFile = null,
         $periodicComfortVideoMessageSelection = null,
         $periodicComfortMessageVideoFile = null,
         $enableMediaOnHoldForQueuedCalls = null,
         $mediaOnHoldSource = null,
         $mediaOnHoldUseAlternateSourceForInternalCalls = null,
         $mediaOnHoldInternalSource = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setPlayEntranceMessage($playEntranceMessage);
        $this->setMandatoryEntranceMessage($mandatoryEntranceMessage);
        $this->setEntranceAudioMessageSelection($entranceAudioMessageSelection);
        $this->setEntranceMessageAudioFile($entranceMessageAudioFile);
        $this->setEntranceVideoMessageSelection($entranceVideoMessageSelection);
        $this->setEntranceMessageVideoFile($entranceMessageVideoFile);
        $this->setPlayPeriodicComfortMessage($playPeriodicComfortMessage);
        $this->setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection);
        $this->setPeriodicComfortMessageAudioFile($periodicComfortMessageAudioFile);
        $this->setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection);
        $this->setPeriodicComfortMessageVideoFile($periodicComfortMessageVideoFile);
        $this->setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls);
        $this->setMediaOnHoldSource($mediaOnHoldSource);
        $this->setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls);
        $this->setMediaOnHoldInternalSource($mediaOnHoldInternalSource);
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
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPlayEntranceMessage($playEntranceMessage = null)
    {
        $this->playEntranceMessage = new PrimitiveType($playEntranceMessage);
        $this->playEntranceMessage->setElementName('playEntranceMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $playEntranceMessage
     */
    public function getPlayEntranceMessage()
    {
        return ($this->playEntranceMessage)
            ? $this->playEntranceMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMandatoryEntranceMessage($mandatoryEntranceMessage = null)
    {
        $this->mandatoryEntranceMessage = new PrimitiveType($mandatoryEntranceMessage);
        $this->mandatoryEntranceMessage->setElementName('mandatoryEntranceMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $mandatoryEntranceMessage
     */
    public function getMandatoryEntranceMessage()
    {
        return ($this->mandatoryEntranceMessage)
            ? $this->mandatoryEntranceMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection = null)
    {
        $this->entranceAudioMessageSelection = ($entranceAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceAudioMessageSelection
             : new ExtendedFileResourceSelection($entranceAudioMessageSelection);
        $this->entranceAudioMessageSelection->setElementName('entranceAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $entranceAudioMessageSelection
     */
    public function getEntranceAudioMessageSelection()
    {
        return ($this->entranceAudioMessageSelection)
            ? $this->entranceAudioMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntranceMessageAudioFile(ExtendedMediaFileResource $entranceMessageAudioFile = null)
    {
        $this->entranceMessageAudioFile = ($entranceMessageAudioFile InstanceOf ExtendedMediaFileResource)
             ? $entranceMessageAudioFile
             : new ExtendedMediaFileResource($entranceMessageAudioFile);
        $this->entranceMessageAudioFile->setElementName('entranceMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $entranceMessageAudioFile
     */
    public function getEntranceMessageAudioFile()
    {
        return $this->entranceMessageAudioFile;
    }

    /**
     * 
     */
    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection = null)
    {
        $this->entranceVideoMessageSelection = ($entranceVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceVideoMessageSelection
             : new ExtendedFileResourceSelection($entranceVideoMessageSelection);
        $this->entranceVideoMessageSelection->setElementName('entranceVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $entranceVideoMessageSelection
     */
    public function getEntranceVideoMessageSelection()
    {
        return ($this->entranceVideoMessageSelection)
            ? $this->entranceVideoMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEntranceMessageVideoFile(ExtendedMediaFileResource $entranceMessageVideoFile = null)
    {
        $this->entranceMessageVideoFile = ($entranceMessageVideoFile InstanceOf ExtendedMediaFileResource)
             ? $entranceMessageVideoFile
             : new ExtendedMediaFileResource($entranceMessageVideoFile);
        $this->entranceMessageVideoFile->setElementName('entranceMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $entranceMessageVideoFile
     */
    public function getEntranceMessageVideoFile()
    {
        return $this->entranceMessageVideoFile;
    }

    /**
     * 
     */
    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage = null)
    {
        $this->playPeriodicComfortMessage = new PrimitiveType($playPeriodicComfortMessage);
        $this->playPeriodicComfortMessage->setElementName('playPeriodicComfortMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $playPeriodicComfortMessage
     */
    public function getPlayPeriodicComfortMessage()
    {
        return ($this->playPeriodicComfortMessage)
            ? $this->playPeriodicComfortMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
        $this->timeBetweenComfortMessagesSeconds->setElementName('timeBetweenComfortMessagesSeconds');
        return $this;
    }

    /**
     * 
     * @return CallCenterTimeBetweenComfortMessagesSeconds $timeBetweenComfortMessagesSeconds
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return ($this->timeBetweenComfortMessagesSeconds)
            ? $this->timeBetweenComfortMessagesSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection = null)
    {
        $this->periodicComfortAudioMessageSelection = ($periodicComfortAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortAudioMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
        $this->periodicComfortAudioMessageSelection->setElementName('periodicComfortAudioMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $periodicComfortAudioMessageSelection
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return ($this->periodicComfortAudioMessageSelection)
            ? $this->periodicComfortAudioMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageAudioFile(ExtendedMediaFileResource $periodicComfortMessageAudioFile = null)
    {
        $this->periodicComfortMessageAudioFile = ($periodicComfortMessageAudioFile InstanceOf ExtendedMediaFileResource)
             ? $periodicComfortMessageAudioFile
             : new ExtendedMediaFileResource($periodicComfortMessageAudioFile);
        $this->periodicComfortMessageAudioFile->setElementName('periodicComfortMessageAudioFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $periodicComfortMessageAudioFile
     */
    public function getPeriodicComfortMessageAudioFile()
    {
        return $this->periodicComfortMessageAudioFile;
    }

    /**
     * 
     */
    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection = null)
    {
        $this->periodicComfortVideoMessageSelection = ($periodicComfortVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortVideoMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
        $this->periodicComfortVideoMessageSelection->setElementName('periodicComfortVideoMessageSelection');
        return $this;
    }

    /**
     * 
     * @return ExtendedFileResourceSelection $periodicComfortVideoMessageSelection
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return ($this->periodicComfortVideoMessageSelection)
            ? $this->periodicComfortVideoMessageSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPeriodicComfortMessageVideoFile(ExtendedMediaFileResource $periodicComfortMessageVideoFile = null)
    {
        $this->periodicComfortMessageVideoFile = ($periodicComfortMessageVideoFile InstanceOf ExtendedMediaFileResource)
             ? $periodicComfortMessageVideoFile
             : new ExtendedMediaFileResource($periodicComfortMessageVideoFile);
        $this->periodicComfortMessageVideoFile->setElementName('periodicComfortMessageVideoFile');
        return $this;
    }

    /**
     * 
     * @return ExtendedMediaFileResource $periodicComfortMessageVideoFile
     */
    public function getPeriodicComfortMessageVideoFile()
    {
        return $this->periodicComfortMessageVideoFile;
    }

    /**
     * 
     */
    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls = null)
    {
        $this->enableMediaOnHoldForQueuedCalls = new PrimitiveType($enableMediaOnHoldForQueuedCalls);
        $this->enableMediaOnHoldForQueuedCalls->setElementName('enableMediaOnHoldForQueuedCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMediaOnHoldForQueuedCalls
     */
    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return ($this->enableMediaOnHoldForQueuedCalls)
            ? $this->enableMediaOnHoldForQueuedCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceModify16 $mediaOnHoldSource = null)
    {
        $this->mediaOnHoldSource = ($mediaOnHoldSource InstanceOf CallCenterMediaOnHoldSourceModify16)
             ? $mediaOnHoldSource
             : new CallCenterMediaOnHoldSourceModify16($mediaOnHoldSource);
        $this->mediaOnHoldSource->setElementName('mediaOnHoldSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceModify16 $mediaOnHoldSource
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
        $this->mediaOnHoldUseAlternateSourceForInternalCalls->setElementName('mediaOnHoldUseAlternateSourceForInternalCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $mediaOnHoldUseAlternateSourceForInternalCalls
     */
    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return ($this->mediaOnHoldUseAlternateSourceForInternalCalls)
            ? $this->mediaOnHoldUseAlternateSourceForInternalCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceModify16 $mediaOnHoldInternalSource = null)
    {
        $this->mediaOnHoldInternalSource = ($mediaOnHoldInternalSource InstanceOf CallCenterMediaOnHoldSourceModify16)
             ? $mediaOnHoldInternalSource
             : new CallCenterMediaOnHoldSourceModify16($mediaOnHoldInternalSource);
        $this->mediaOnHoldInternalSource->setElementName('mediaOnHoldInternalSource');
        return $this;
    }

    /**
     * 
     * @return CallCenterMediaOnHoldSourceModify16 $mediaOnHoldInternalSource
     */
    public function getMediaOnHoldInternalSource()
    {
        return $this->mediaOnHoldInternalSource;
    }
}
