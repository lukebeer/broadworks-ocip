<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceRead16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupCallCenterGetAnnouncementRequest16.
 */
class GroupCallCenterGetAnnouncementResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $playEntranceMessage,
             $mandatoryEntranceMessage,
             $entranceAudioMessageSelection,
             $entranceAudioFileUrl=null,
             $entranceMessageAudioFileDescription=null,
             $entranceAudioFileMediaType=null,
             $entranceVideoMessageSelection=null,
             $entranceVideoFileUrl=null,
             $entranceMessageVideoFileDescription=null,
             $entranceVideoFileMediaType=null,
             $playPeriodicComfortMessage,
             $timeBetweenComfortMessagesSeconds,
             $periodicComfortAudioMessageSelection,
             $periodicComfortAudioFileUrl=null,
             $periodicComfortMessageAudioFileDescription=null,
             $periodicComfortAudioFileMediaType=null,
             $periodicComfortVideoMessageSelection=null,
             $periodicComfortVideoFileUrl=null,
             $periodicComfortMessageVideoFileDescription=null,
             $periodicComfortVideoFileMediaType=null,
             $enableMediaOnHoldForQueuedCalls,
             $mediaOnHoldSource,
             $mediaOnHoldUseAlternateSourceForInternalCalls=null,
             $mediaOnHoldInternalSource=null
    ) {
        $this->playEntranceMessage                           = $playEntranceMessage;
        $this->mandatoryEntranceMessage                      = $mandatoryEntranceMessage;
        $this->entranceAudioMessageSelection                 = new ExtendedFileResourceSelection($entranceAudioMessageSelection);
        $this->entranceAudioFileUrl                          = new URL($entranceAudioFileUrl);
        $this->entranceMessageAudioFileDescription           = new FileDescription($entranceMessageAudioFileDescription);
        $this->entranceAudioFileMediaType                    = new MediaFileType($entranceAudioFileMediaType);
        $this->entranceVideoMessageSelection                 = new ExtendedFileResourceSelection($entranceVideoMessageSelection);
        $this->entranceVideoFileUrl                          = new URL($entranceVideoFileUrl);
        $this->entranceMessageVideoFileDescription           = new FileDescription($entranceMessageVideoFileDescription);
        $this->entranceVideoFileMediaType                    = new MediaFileType($entranceVideoFileMediaType);
        $this->playPeriodicComfortMessage                    = $playPeriodicComfortMessage;
        $this->timeBetweenComfortMessagesSeconds             = $timeBetweenComfortMessagesSeconds;
        $this->periodicComfortAudioMessageSelection          = new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
        $this->periodicComfortAudioFileUrl                   = new URL($periodicComfortAudioFileUrl);
        $this->periodicComfortMessageAudioFileDescription    = new FileDescription($periodicComfortMessageAudioFileDescription);
        $this->periodicComfortAudioFileMediaType             = new MediaFileType($periodicComfortAudioFileMediaType);
        $this->periodicComfortVideoMessageSelection          = new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
        $this->periodicComfortVideoFileUrl                   = new URL($periodicComfortVideoFileUrl);
        $this->periodicComfortMessageVideoFileDescription    = new FileDescription($periodicComfortMessageVideoFileDescription);
        $this->periodicComfortVideoFileMediaType             = new MediaFileType($periodicComfortVideoFileMediaType);
        $this->enableMediaOnHoldForQueuedCalls               = $enableMediaOnHoldForQueuedCalls;
        $this->mediaOnHoldSource                             = $mediaOnHoldSource;
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = $mediaOnHoldUseAlternateSourceForInternalCalls;
        $this->mediaOnHoldInternalSource                     = $mediaOnHoldInternalSource;
        $this->args                                          = func_get_args();
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

    public function setEntranceAudioFileUrl($entranceAudioFileUrl)
    {
        $entranceAudioFileUrl and $this->entranceAudioFileUrl = new URL($entranceAudioFileUrl);
    }

    public function getEntranceAudioFileUrl()
    {
        return (!$this->entranceAudioFileUrl) ?: $this->entranceAudioFileUrl->value();
    }

    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription)
    {
        $entranceMessageAudioFileDescription and $this->entranceMessageAudioFileDescription = new FileDescription($entranceMessageAudioFileDescription);
    }

    public function getEntranceMessageAudioFileDescription()
    {
        return (!$this->entranceMessageAudioFileDescription) ?: $this->entranceMessageAudioFileDescription->value();
    }

    public function setEntranceAudioFileMediaType($entranceAudioFileMediaType)
    {
        $entranceAudioFileMediaType and $this->entranceAudioFileMediaType = new MediaFileType($entranceAudioFileMediaType);
    }

    public function getEntranceAudioFileMediaType()
    {
        return (!$this->entranceAudioFileMediaType) ?: $this->entranceAudioFileMediaType->value();
    }

    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection)
    {
        $entranceVideoMessageSelection and $this->entranceVideoMessageSelection = new ExtendedFileResourceSelection($entranceVideoMessageSelection);
    }

    public function getEntranceVideoMessageSelection()
    {
        return (!$this->entranceVideoMessageSelection) ?: $this->entranceVideoMessageSelection->value();
    }

    public function setEntranceVideoFileUrl($entranceVideoFileUrl)
    {
        $entranceVideoFileUrl and $this->entranceVideoFileUrl = new URL($entranceVideoFileUrl);
    }

    public function getEntranceVideoFileUrl()
    {
        return (!$this->entranceVideoFileUrl) ?: $this->entranceVideoFileUrl->value();
    }

    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription)
    {
        $entranceMessageVideoFileDescription and $this->entranceMessageVideoFileDescription = new FileDescription($entranceMessageVideoFileDescription);
    }

    public function getEntranceMessageVideoFileDescription()
    {
        return (!$this->entranceMessageVideoFileDescription) ?: $this->entranceMessageVideoFileDescription->value();
    }

    public function setEntranceVideoFileMediaType($entranceVideoFileMediaType)
    {
        $entranceVideoFileMediaType and $this->entranceVideoFileMediaType = new MediaFileType($entranceVideoFileMediaType);
    }

    public function getEntranceVideoFileMediaType()
    {
        return (!$this->entranceVideoFileMediaType) ?: $this->entranceVideoFileMediaType->value();
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

    public function setPeriodicComfortAudioFileUrl($periodicComfortAudioFileUrl)
    {
        $periodicComfortAudioFileUrl and $this->periodicComfortAudioFileUrl = new URL($periodicComfortAudioFileUrl);
    }

    public function getPeriodicComfortAudioFileUrl()
    {
        return (!$this->periodicComfortAudioFileUrl) ?: $this->periodicComfortAudioFileUrl->value();
    }

    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription)
    {
        $periodicComfortMessageAudioFileDescription and $this->periodicComfortMessageAudioFileDescription = new FileDescription($periodicComfortMessageAudioFileDescription);
    }

    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return (!$this->periodicComfortMessageAudioFileDescription) ?: $this->periodicComfortMessageAudioFileDescription->value();
    }

    public function setPeriodicComfortAudioFileMediaType($periodicComfortAudioFileMediaType)
    {
        $periodicComfortAudioFileMediaType and $this->periodicComfortAudioFileMediaType = new MediaFileType($periodicComfortAudioFileMediaType);
    }

    public function getPeriodicComfortAudioFileMediaType()
    {
        return (!$this->periodicComfortAudioFileMediaType) ?: $this->periodicComfortAudioFileMediaType->value();
    }

    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection)
    {
        $periodicComfortVideoMessageSelection and $this->periodicComfortVideoMessageSelection = new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
    }

    public function getPeriodicComfortVideoMessageSelection()
    {
        return (!$this->periodicComfortVideoMessageSelection) ?: $this->periodicComfortVideoMessageSelection->value();
    }

    public function setPeriodicComfortVideoFileUrl($periodicComfortVideoFileUrl)
    {
        $periodicComfortVideoFileUrl and $this->periodicComfortVideoFileUrl = new URL($periodicComfortVideoFileUrl);
    }

    public function getPeriodicComfortVideoFileUrl()
    {
        return (!$this->periodicComfortVideoFileUrl) ?: $this->periodicComfortVideoFileUrl->value();
    }

    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription)
    {
        $periodicComfortMessageVideoFileDescription and $this->periodicComfortMessageVideoFileDescription = new FileDescription($periodicComfortMessageVideoFileDescription);
    }

    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return (!$this->periodicComfortMessageVideoFileDescription) ?: $this->periodicComfortMessageVideoFileDescription->value();
    }

    public function setPeriodicComfortVideoFileMediaType($periodicComfortVideoFileMediaType)
    {
        $periodicComfortVideoFileMediaType and $this->periodicComfortVideoFileMediaType = new MediaFileType($periodicComfortVideoFileMediaType);
    }

    public function getPeriodicComfortVideoFileMediaType()
    {
        return (!$this->periodicComfortVideoFileMediaType) ?: $this->periodicComfortVideoFileMediaType->value();
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
        $mediaOnHoldSource and $this->mediaOnHoldSource = new CallCenterMediaOnHoldSourceRead16($mediaOnHoldSource);
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
        $mediaOnHoldInternalSource and $this->mediaOnHoldInternalSource = new CallCenterMediaOnHoldSourceRead16($mediaOnHoldInternalSource);
    }

    public function getMediaOnHoldInternalSource()
    {
        return (!$this->mediaOnHoldInternalSource) ?: $this->mediaOnHoldInternalSource->value();
    }
}
