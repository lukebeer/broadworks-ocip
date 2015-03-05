<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceModify16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyAnnouncementRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $playEntranceMessage=null,
             $mandatoryEntranceMessage=null,
             $entranceAudioMessageSelection=null,
             ExtendedMediaFileResource $entranceMessageAudioFile=null,
             $entranceVideoMessageSelection=null,
             ExtendedMediaFileResource $entranceMessageVideoFile=null,
             $playPeriodicComfortMessage=null,
             $timeBetweenComfortMessagesSeconds=null,
             $periodicComfortAudioMessageSelection=null,
             ExtendedMediaFileResource $periodicComfortMessageAudioFile=null,
             $periodicComfortVideoMessageSelection=null,
             ExtendedMediaFileResource $periodicComfortMessageVideoFile=null,
             $enableMediaOnHoldForQueuedCalls=null,
             $mediaOnHoldSource=null,
             $mediaOnHoldUseAlternateSourceForInternalCalls=null,
             $mediaOnHoldInternalSource=null
    ) {
        $this->serviceUserId                                 = new UserId($serviceUserId);
        $this->playEntranceMessage                           = $playEntranceMessage;
        $this->mandatoryEntranceMessage                      = $mandatoryEntranceMessage;
        $this->entranceAudioMessageSelection                 = new ExtendedFileResourceSelection($entranceAudioMessageSelection);
        $this->entranceMessageAudioFile                      = $entranceMessageAudioFile;
        $this->entranceVideoMessageSelection                 = new ExtendedFileResourceSelection($entranceVideoMessageSelection);
        $this->entranceMessageVideoFile                      = $entranceMessageVideoFile;
        $this->playPeriodicComfortMessage                    = $playPeriodicComfortMessage;
        $this->timeBetweenComfortMessagesSeconds             = $timeBetweenComfortMessagesSeconds;
        $this->periodicComfortAudioMessageSelection          = new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
        $this->periodicComfortMessageAudioFile               = $periodicComfortMessageAudioFile;
        $this->periodicComfortVideoMessageSelection          = new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
        $this->periodicComfortMessageVideoFile               = $periodicComfortMessageVideoFile;
        $this->enableMediaOnHoldForQueuedCalls               = $enableMediaOnHoldForQueuedCalls;
        $this->mediaOnHoldSource                             = $mediaOnHoldSource;
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = $mediaOnHoldUseAlternateSourceForInternalCalls;
        $this->mediaOnHoldInternalSource                     = $mediaOnHoldInternalSource;
        $this->args                                          = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setPlayEntranceMessage($playEntranceMessage)
    {
        $playEntranceMessage and $this->playEntranceMessage = new xs:boolean($playEntranceMessage);
    }

    public function getPlayEntranceMessage()
    {
        return (!$this->playEntranceMessage) ?: $this->playEntranceMessage->value();
    }

    public function setMandatoryEntranceMessage($mandatoryEntranceMessage)
    {
        $mandatoryEntranceMessage and $this->mandatoryEntranceMessage = new xs:boolean($mandatoryEntranceMessage);
    }

    public function getMandatoryEntranceMessage()
    {
        return (!$this->mandatoryEntranceMessage) ?: $this->mandatoryEntranceMessage->value();
    }

    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection)
    {
        $entranceAudioMessageSelection and $this->entranceAudioMessageSelection = new ExtendedFileResourceSelection($entranceAudioMessageSelection);
    }

    public function getEntranceAudioMessageSelection()
    {
        return (!$this->entranceAudioMessageSelection) ?: $this->entranceAudioMessageSelection->value();
    }

    public function setEntranceMessageAudioFile($entranceMessageAudioFile)
    {
        $entranceMessageAudioFile and $this->entranceMessageAudioFile = new ExtendedMediaFileResource($entranceMessageAudioFile);
    }

    public function getEntranceMessageAudioFile()
    {
        return (!$this->entranceMessageAudioFile) ?: $this->entranceMessageAudioFile->value();
    }

    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection)
    {
        $entranceVideoMessageSelection and $this->entranceVideoMessageSelection = new ExtendedFileResourceSelection($entranceVideoMessageSelection);
    }

    public function getEntranceVideoMessageSelection()
    {
        return (!$this->entranceVideoMessageSelection) ?: $this->entranceVideoMessageSelection->value();
    }

    public function setEntranceMessageVideoFile($entranceMessageVideoFile)
    {
        $entranceMessageVideoFile and $this->entranceMessageVideoFile = new ExtendedMediaFileResource($entranceMessageVideoFile);
    }

    public function getEntranceMessageVideoFile()
    {
        return (!$this->entranceMessageVideoFile) ?: $this->entranceMessageVideoFile->value();
    }

    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage)
    {
        $playPeriodicComfortMessage and $this->playPeriodicComfortMessage = new xs:boolean($playPeriodicComfortMessage);
    }

    public function getPlayPeriodicComfortMessage()
    {
        return (!$this->playPeriodicComfortMessage) ?: $this->playPeriodicComfortMessage->value();
    }

    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds)
    {
        $timeBetweenComfortMessagesSeconds and $this->timeBetweenComfortMessagesSeconds = new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
    }

    public function getTimeBetweenComfortMessagesSeconds()
    {
        return (!$this->timeBetweenComfortMessagesSeconds) ?: $this->timeBetweenComfortMessagesSeconds->value();
    }

    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection)
    {
        $periodicComfortAudioMessageSelection and $this->periodicComfortAudioMessageSelection = new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
    }

    public function getPeriodicComfortAudioMessageSelection()
    {
        return (!$this->periodicComfortAudioMessageSelection) ?: $this->periodicComfortAudioMessageSelection->value();
    }

    public function setPeriodicComfortMessageAudioFile($periodicComfortMessageAudioFile)
    {
        $periodicComfortMessageAudioFile and $this->periodicComfortMessageAudioFile = new ExtendedMediaFileResource($periodicComfortMessageAudioFile);
    }

    public function getPeriodicComfortMessageAudioFile()
    {
        return (!$this->periodicComfortMessageAudioFile) ?: $this->periodicComfortMessageAudioFile->value();
    }

    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection)
    {
        $periodicComfortVideoMessageSelection and $this->periodicComfortVideoMessageSelection = new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
    }

    public function getPeriodicComfortVideoMessageSelection()
    {
        return (!$this->periodicComfortVideoMessageSelection) ?: $this->periodicComfortVideoMessageSelection->value();
    }

    public function setPeriodicComfortMessageVideoFile($periodicComfortMessageVideoFile)
    {
        $periodicComfortMessageVideoFile and $this->periodicComfortMessageVideoFile = new ExtendedMediaFileResource($periodicComfortMessageVideoFile);
    }

    public function getPeriodicComfortMessageVideoFile()
    {
        return (!$this->periodicComfortMessageVideoFile) ?: $this->periodicComfortMessageVideoFile->value();
    }

    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls)
    {
        $enableMediaOnHoldForQueuedCalls and $this->enableMediaOnHoldForQueuedCalls = new xs:boolean($enableMediaOnHoldForQueuedCalls);
    }

    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return (!$this->enableMediaOnHoldForQueuedCalls) ?: $this->enableMediaOnHoldForQueuedCalls->value();
    }

    public function setMediaOnHoldSource($mediaOnHoldSource)
    {
        $mediaOnHoldSource and $this->mediaOnHoldSource = new CallCenterMediaOnHoldSourceModify16($mediaOnHoldSource);
    }

    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->value();
    }

    public function setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls)
    {
        $mediaOnHoldUseAlternateSourceForInternalCalls and $this->mediaOnHoldUseAlternateSourceForInternalCalls = new xs:boolean($mediaOnHoldUseAlternateSourceForInternalCalls);
    }

    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return (!$this->mediaOnHoldUseAlternateSourceForInternalCalls) ?: $this->mediaOnHoldUseAlternateSourceForInternalCalls->value();
    }

    public function setMediaOnHoldInternalSource($mediaOnHoldInternalSource)
    {
        $mediaOnHoldInternalSource and $this->mediaOnHoldInternalSource = new CallCenterMediaOnHoldSourceModify16($mediaOnHoldInternalSource);
    }

    public function getMediaOnHoldInternalSource()
    {
        return (!$this->mediaOnHoldInternalSource) ?: $this->mediaOnHoldInternalSource->value();
    }
}
