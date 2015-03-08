<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter\CallCenterTimeBetweenComfortMessagesSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterMediaOnHoldSourceRead16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ExtendedFileResourceSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupCallCenterGetAnnouncementRequest16.
 */
class GroupCallCenterGetAnnouncementResponse16 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                                  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupCallCenterGetAnnouncementResponse16';
    public    $name                                          = __CLASS__;
    protected $playEntranceMessage                           = null;
    protected $mandatoryEntranceMessage                      = null;
    protected $entranceAudioMessageSelection                 = null;
    protected $entranceAudioFileUrl                          = null;
    protected $entranceMessageAudioFileDescription           = null;
    protected $entranceAudioFileMediaType                    = null;
    protected $entranceVideoMessageSelection                 = null;
    protected $entranceVideoFileUrl                          = null;
    protected $entranceMessageVideoFileDescription           = null;
    protected $entranceVideoFileMediaType                    = null;
    protected $playPeriodicComfortMessage                    = null;
    protected $timeBetweenComfortMessagesSeconds             = null;
    protected $periodicComfortAudioMessageSelection          = null;
    protected $periodicComfortAudioFileUrl                   = null;
    protected $periodicComfortMessageAudioFileDescription    = null;
    protected $periodicComfortAudioFileMediaType             = null;
    protected $periodicComfortVideoMessageSelection          = null;
    protected $periodicComfortVideoFileUrl                   = null;
    protected $periodicComfortMessageVideoFileDescription    = null;
    protected $periodicComfortVideoFileMediaType             = null;
    protected $enableMediaOnHoldForQueuedCalls               = null;
    protected $mediaOnHoldSource                             = null;
    protected $mediaOnHoldUseAlternateSourceForInternalCalls = null;
    protected $mediaOnHoldInternalSource                     = null;


    /**
     * 
     */
    public function setPlayEntranceMessage($playEntranceMessage = null)
    {
        $this->playEntranceMessage = (boolean) $playEntranceMessage;
    }

    /**
     * 
     */
    public function getPlayEntranceMessage()
    {
        return (!$this->playEntranceMessage) ?: $this->playEntranceMessage->getValue();
    }

    /**
     * 
     */
    public function setMandatoryEntranceMessage($mandatoryEntranceMessage = null)
    {
        $this->mandatoryEntranceMessage = (boolean) $mandatoryEntranceMessage;
    }

    /**
     * 
     */
    public function getMandatoryEntranceMessage()
    {
        return (!$this->mandatoryEntranceMessage) ?: $this->mandatoryEntranceMessage->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setEntranceAudioMessageSelection($entranceAudioMessageSelection = null)
    {
        $this->entranceAudioMessageSelection = ($entranceAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceAudioMessageSelection
             : new ExtendedFileResourceSelection($entranceAudioMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getEntranceAudioMessageSelection()
    {
        return (!$this->entranceAudioMessageSelection) ?: $this->entranceAudioMessageSelection->getValue();
    }

    /**
     * URL.
     */
    public function setEntranceAudioFileUrl($entranceAudioFileUrl = null)
    {
        $this->entranceAudioFileUrl = ($entranceAudioFileUrl InstanceOf URL)
             ? $entranceAudioFileUrl
             : new URL($entranceAudioFileUrl);
    }

    /**
     * URL.
     */
    public function getEntranceAudioFileUrl()
    {
        return (!$this->entranceAudioFileUrl) ?: $this->entranceAudioFileUrl->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setEntranceMessageAudioFileDescription($entranceMessageAudioFileDescription = null)
    {
        $this->entranceMessageAudioFileDescription = ($entranceMessageAudioFileDescription InstanceOf FileDescription)
             ? $entranceMessageAudioFileDescription
             : new FileDescription($entranceMessageAudioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getEntranceMessageAudioFileDescription()
    {
        return (!$this->entranceMessageAudioFileDescription) ?: $this->entranceMessageAudioFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setEntranceAudioFileMediaType($entranceAudioFileMediaType = null)
    {
        $this->entranceAudioFileMediaType = ($entranceAudioFileMediaType InstanceOf MediaFileType)
             ? $entranceAudioFileMediaType
             : new MediaFileType($entranceAudioFileMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getEntranceAudioFileMediaType()
    {
        return (!$this->entranceAudioFileMediaType) ?: $this->entranceAudioFileMediaType->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setEntranceVideoMessageSelection($entranceVideoMessageSelection = null)
    {
        $this->entranceVideoMessageSelection = ($entranceVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $entranceVideoMessageSelection
             : new ExtendedFileResourceSelection($entranceVideoMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getEntranceVideoMessageSelection()
    {
        return (!$this->entranceVideoMessageSelection) ?: $this->entranceVideoMessageSelection->getValue();
    }

    /**
     * URL.
     */
    public function setEntranceVideoFileUrl($entranceVideoFileUrl = null)
    {
        $this->entranceVideoFileUrl = ($entranceVideoFileUrl InstanceOf URL)
             ? $entranceVideoFileUrl
             : new URL($entranceVideoFileUrl);
    }

    /**
     * URL.
     */
    public function getEntranceVideoFileUrl()
    {
        return (!$this->entranceVideoFileUrl) ?: $this->entranceVideoFileUrl->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setEntranceMessageVideoFileDescription($entranceMessageVideoFileDescription = null)
    {
        $this->entranceMessageVideoFileDescription = ($entranceMessageVideoFileDescription InstanceOf FileDescription)
             ? $entranceMessageVideoFileDescription
             : new FileDescription($entranceMessageVideoFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getEntranceMessageVideoFileDescription()
    {
        return (!$this->entranceMessageVideoFileDescription) ?: $this->entranceMessageVideoFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setEntranceVideoFileMediaType($entranceVideoFileMediaType = null)
    {
        $this->entranceVideoFileMediaType = ($entranceVideoFileMediaType InstanceOf MediaFileType)
             ? $entranceVideoFileMediaType
             : new MediaFileType($entranceVideoFileMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getEntranceVideoFileMediaType()
    {
        return (!$this->entranceVideoFileMediaType) ?: $this->entranceVideoFileMediaType->getValue();
    }

    /**
     * 
     */
    public function setPlayPeriodicComfortMessage($playPeriodicComfortMessage = null)
    {
        $this->playPeriodicComfortMessage = (boolean) $playPeriodicComfortMessage;
    }

    /**
     * 
     */
    public function getPlayPeriodicComfortMessage()
    {
        return (!$this->playPeriodicComfortMessage) ?: $this->playPeriodicComfortMessage->getValue();
    }

    /**
     * The interval in seconds between each repetition of the comfort message played to queued users.
     */
    public function setTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds = null)
    {
        $this->timeBetweenComfortMessagesSeconds = ($timeBetweenComfortMessagesSeconds InstanceOf CallCenterTimeBetweenComfortMessagesSeconds)
             ? $timeBetweenComfortMessagesSeconds
             : new CallCenterTimeBetweenComfortMessagesSeconds($timeBetweenComfortMessagesSeconds);
    }

    /**
     * The interval in seconds between each repetition of the comfort message played to queued users.
     */
    public function getTimeBetweenComfortMessagesSeconds()
    {
        return (!$this->timeBetweenComfortMessagesSeconds) ?: $this->timeBetweenComfortMessagesSeconds->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setPeriodicComfortAudioMessageSelection($periodicComfortAudioMessageSelection = null)
    {
        $this->periodicComfortAudioMessageSelection = ($periodicComfortAudioMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortAudioMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortAudioMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getPeriodicComfortAudioMessageSelection()
    {
        return (!$this->periodicComfortAudioMessageSelection) ?: $this->periodicComfortAudioMessageSelection->getValue();
    }

    /**
     * URL.
     */
    public function setPeriodicComfortAudioFileUrl($periodicComfortAudioFileUrl = null)
    {
        $this->periodicComfortAudioFileUrl = ($periodicComfortAudioFileUrl InstanceOf URL)
             ? $periodicComfortAudioFileUrl
             : new URL($periodicComfortAudioFileUrl);
    }

    /**
     * URL.
     */
    public function getPeriodicComfortAudioFileUrl()
    {
        return (!$this->periodicComfortAudioFileUrl) ?: $this->periodicComfortAudioFileUrl->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setPeriodicComfortMessageAudioFileDescription($periodicComfortMessageAudioFileDescription = null)
    {
        $this->periodicComfortMessageAudioFileDescription = ($periodicComfortMessageAudioFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageAudioFileDescription
             : new FileDescription($periodicComfortMessageAudioFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getPeriodicComfortMessageAudioFileDescription()
    {
        return (!$this->periodicComfortMessageAudioFileDescription) ?: $this->periodicComfortMessageAudioFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setPeriodicComfortAudioFileMediaType($periodicComfortAudioFileMediaType = null)
    {
        $this->periodicComfortAudioFileMediaType = ($periodicComfortAudioFileMediaType InstanceOf MediaFileType)
             ? $periodicComfortAudioFileMediaType
             : new MediaFileType($periodicComfortAudioFileMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getPeriodicComfortAudioFileMediaType()
    {
        return (!$this->periodicComfortAudioFileMediaType) ?: $this->periodicComfortAudioFileMediaType->getValue();
    }

    /**
     * Choices for extended file resource usage.
     */
    public function setPeriodicComfortVideoMessageSelection($periodicComfortVideoMessageSelection = null)
    {
        $this->periodicComfortVideoMessageSelection = ($periodicComfortVideoMessageSelection InstanceOf ExtendedFileResourceSelection)
             ? $periodicComfortVideoMessageSelection
             : new ExtendedFileResourceSelection($periodicComfortVideoMessageSelection);
    }

    /**
     * Choices for extended file resource usage.
     */
    public function getPeriodicComfortVideoMessageSelection()
    {
        return (!$this->periodicComfortVideoMessageSelection) ?: $this->periodicComfortVideoMessageSelection->getValue();
    }

    /**
     * URL.
     */
    public function setPeriodicComfortVideoFileUrl($periodicComfortVideoFileUrl = null)
    {
        $this->periodicComfortVideoFileUrl = ($periodicComfortVideoFileUrl InstanceOf URL)
             ? $periodicComfortVideoFileUrl
             : new URL($periodicComfortVideoFileUrl);
    }

    /**
     * URL.
     */
    public function getPeriodicComfortVideoFileUrl()
    {
        return (!$this->periodicComfortVideoFileUrl) ?: $this->periodicComfortVideoFileUrl->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setPeriodicComfortMessageVideoFileDescription($periodicComfortMessageVideoFileDescription = null)
    {
        $this->periodicComfortMessageVideoFileDescription = ($periodicComfortMessageVideoFileDescription InstanceOf FileDescription)
             ? $periodicComfortMessageVideoFileDescription
             : new FileDescription($periodicComfortMessageVideoFileDescription);
    }

    /**
     * Description of a file resource.
     */
    public function getPeriodicComfortMessageVideoFileDescription()
    {
        return (!$this->periodicComfortMessageVideoFileDescription) ?: $this->periodicComfortMessageVideoFileDescription->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setPeriodicComfortVideoFileMediaType($periodicComfortVideoFileMediaType = null)
    {
        $this->periodicComfortVideoFileMediaType = ($periodicComfortVideoFileMediaType InstanceOf MediaFileType)
             ? $periodicComfortVideoFileMediaType
             : new MediaFileType($periodicComfortVideoFileMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getPeriodicComfortVideoFileMediaType()
    {
        return (!$this->periodicComfortVideoFileMediaType) ?: $this->periodicComfortVideoFileMediaType->getValue();
    }

    /**
     * 
     */
    public function setEnableMediaOnHoldForQueuedCalls($enableMediaOnHoldForQueuedCalls = null)
    {
        $this->enableMediaOnHoldForQueuedCalls = (boolean) $enableMediaOnHoldForQueuedCalls;
    }

    /**
     * 
     */
    public function getEnableMediaOnHoldForQueuedCalls()
    {
        return (!$this->enableMediaOnHoldForQueuedCalls) ?: $this->enableMediaOnHoldForQueuedCalls->getValue();
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function setMediaOnHoldSource(CallCenterMediaOnHoldSourceRead16 $mediaOnHoldSource = null)
    {
        $this->mediaOnHoldSource = CallCenterMediaOnHoldSourceRead16 $mediaOnHoldSource;
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function getMediaOnHoldSource()
    {
        return (!$this->mediaOnHoldSource) ?: $this->mediaOnHoldSource->getValue();
    }

    /**
     * 
     */
    public function setMediaOnHoldUseAlternateSourceForInternalCalls($mediaOnHoldUseAlternateSourceForInternalCalls = null)
    {
        $this->mediaOnHoldUseAlternateSourceForInternalCalls = (boolean) $mediaOnHoldUseAlternateSourceForInternalCalls;
    }

    /**
     * 
     */
    public function getMediaOnHoldUseAlternateSourceForInternalCalls()
    {
        return (!$this->mediaOnHoldUseAlternateSourceForInternalCalls) ?: $this->mediaOnHoldUseAlternateSourceForInternalCalls->getValue();
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function setMediaOnHoldInternalSource(CallCenterMediaOnHoldSourceRead16 $mediaOnHoldInternalSource = null)
    {
        $this->mediaOnHoldInternalSource = CallCenterMediaOnHoldSourceRead16 $mediaOnHoldInternalSource;
    }

    /**
     * Contains the call center media on hold source configuration.
     */
    public function getMediaOnHoldInternalSource()
    {
        return (!$this->mediaOnHoldInternalSource) ?: $this->mediaOnHoldInternalSource->getValue();
    }
}
