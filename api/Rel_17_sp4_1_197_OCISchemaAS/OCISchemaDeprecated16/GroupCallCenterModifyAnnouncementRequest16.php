<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterMediaOnHoldSourceModify16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a call center's announcement settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupCallCenterModifyAnnouncementRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                                           = __CLASS__;
    protected $serviceUserId                                  = null;
    protected $playEntranceMessage                            = null;
    protected $mandatoryEntranceMessage                       = null;
    protected $entranceAudioMessageSelection                  = null;
    protected $entranceMessageAudioFile                       = null;
    protected $entranceVideoMessageSelection                  = null;
    protected $entranceMessageVideoFile                       = null;
    protected $playPeriodicComfortMessage                     = null;
    protected $timeBetweenComfortMessagesSeconds              = null;
    protected $periodicComfortAudioMessageSelection           = null;
    protected $periodicComfortMessageAudioFile                = null;
    protected $periodicComfortVideoMessageSelection           = null;
    protected $periodicComfortMessageVideoFile                = null;
    protected $enableMediaOnHoldForQueuedCalls                = null;
    protected $mediaOnHoldSource                              = null;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls  = null;
    protected $mediaOnHoldInternalSource                      = null;

    public function __construct(
         $serviceUserId,
         $playEntranceMessage = null,
         $mandatoryEntranceMessage = null,
         $entranceAudioMessageSelection = null,
         ExtendedMediaFileResource $entranceMessageAudioFile = null,
         $entranceVideoMessageSelection = null,
         ExtendedMediaFileResource $entranceMessageVideoFile = null,
         $playPeriodicComfortMessage = null,
         $timeBetweenComfortMessagesSeconds = null,
         $periodicComfortAudioMessageSelection = null,
         ExtendedMediaFileResource $periodicComfortMessageAudioFile = null,
         $periodicComfortVideoMessageSelection = null,
         ExtendedMediaFileResource $periodicComfortMessageVideoFile = null,
         $enableMediaOnHoldForQueuedCalls = null,
         CallCenterMediaOnHoldSourceModify16 $mediaOnHoldSource = null,
         $mediaOnHoldUseAlternateSourceForInternalCalls = null,
         CallCenterMediaOnHoldSourceModify16 $mediaOnHoldInternalSource = null
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

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setPlayEntranceMessage(xs:boolean $playEntranceMessage = null)
    {
    }

    public function getPlayEntranceMessage()
    {
        return (!$this->playEntranceMessage) ?: $this->playEntranceMessage->value();
    }

    public function setMandatoryEntranceMessage(xs:boolean $mandatoryEntranceMessage = null)
    {
    }

    public function getMandatoryEntranceMessage()
    {
        return (!$this->mandatoryEntranceMessage) ?: $this->mandatoryEntranceMessage->value();
    }

    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection = null)
    {
        $this->entranceAudioMessageSelection = ($entranceAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceAudioMessageSelection
             : new ExtendedFileResourceSelection($entranceAudioMessageSelection);
    }

    public function getEntranceAudioMessageSelection()
    {
        return (!$this->entranceAudioMessageSelection) ?: $this->entranceAudioMessageSelection->value();
    }

    public function setEntranceMessageAudioFile(ExtendedMediaFileResource $entranceMessageAudioFile = null)
    {
    }

    public function getEntranceMessageAudioFile()
    {
        return (!$this->entranceMessageAudioFile) ?: $this->entranceMessageAudioFile->value();
    }

    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection = null)
    {
        $this->entranceVideoMessageSelection = ($entranceVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceVideoMessageSelection
             : new ExtendedFileResourceSelection($entranceVideoMessageSelection);
    }

    public function getEntranceVideoMessageSelection()
    {
        return (!$this->entranceVideoMessageSelection) ?: $this->entranceVideoMessageSelection->value();
    }

    public function setEntranceMessageVideoFile(ExtendedMediaFileResource $entranceMessageVideoFile = null)
    {
    }

    public function getEntranceMessageVideoFile()
    {
        return (!$this->entranceMessageVideoFile) ?: $this->entranceMessageVideoFile->value();
    }

    public function setPlayPeriodicComfortMessage(xs:boolean $playPeriodicComfortMessage = null)
    {
    }

    public function getPlayPeriodicComfortMessage()
    {
        return (!$this->playPeriodicComfortMessage) ?: $this->playPeriodicComfortMessage->value();
    }

    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
    }

    public function getTimeBetweenComfortMessagesSeconds()
    {
        return (!$this->timeBetweenComfortMessagesSeconds) ?: $this->timeBetweenComfortMessagesSeconds->value();
    }

    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection = null)
    {
        $this->periodicComfortAudioMessageSelection = ($periodicComfortAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortAudioMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
    }

    public function getPeriodicComfortAudioMessageSelection()
    {
        return (!$this->periodicComfortAudioMessageSelection) ?: $this->periodicComfortAudioMessageSelection->value();
    }

    public function setPeriodicComfortMessageAudioFile(ExtendedMediaFileResource $periodicComfortMessageAudioFile = null)
    {
    }

    public function getPeriodicComfortMessageAudioFile()
    {
        return (!$this->periodicComfortMessageAudioFile) ?: $this->periodicComfortMessageAudioFile->value();
    }

    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection = null)
    {
        $this->periodicComfortVideoMessageSelection = ($periodicComfortVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortVideoMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
    }

    public function getPeriodicComfortVideoMessageSelection()
    {
        return (!$this->periodicComfortVideoMessageSelection) ?: $this->periodicComfortVideoMessageSelection->value();
    }

    public function setPeriodicComfortMessageVideoFile(ExtendedMediaFileResource $periodicComfortMessageVideoFile = null)
    {
    }

    public function getPeriodicComfortMessageVideoFile()
    {
        return (!$this->periodicComfortMessageVideoFile) ?: $this->periodicComfortMessageVideoFile->value();
    }

    public function setEnableMediaOnHoldForQueuedCalls(xs:boolean $enableMediaOnHoldForQueuedCalls = null)
    {
    }

    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return (!$this->enableMediaOnHoldForQueuedCalls) ?: $this->enableMediaOnHoldForQueuedCalls->value();
    }

    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceModify16 $mediaOnHoldSource = null)
    {
    }

    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->value();
    }

    public function setMediaOnHoldUseAlternateSourceForInternalCalls(xs:boolean $mediaOnHoldUseAlternateSourceForInternalCalls = null)
    {
    }

    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return (!$this->mediaOnHoldUseAlternateSourceForInternalCalls) ?: $this->mediaOnHoldUseAlternateSourceForInternalCalls->value();
    }

    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceModify16 $mediaOnHoldInternalSource = null)
    {
    }

    public function getMediaOnHoldInternalSource()
    {
        return (!$this->mediaOnHoldInternalSource) ?: $this->mediaOnHoldInternalSource->value();
    }
}
