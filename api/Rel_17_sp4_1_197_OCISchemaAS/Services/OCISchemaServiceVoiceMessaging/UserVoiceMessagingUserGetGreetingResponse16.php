<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingAlternateNoAnswerGreetingRead16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNoAnswerGreetingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to UserVoiceMessagingUserGetGreetingRequest16.
 *         Contains the greeting configuration for a user's voice messaging.
 */
class UserVoiceMessagingUserGetGreetingResponse16 extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $busyAnnouncementSelection      = null;
    protected $busyPersonalAudioFile          = null;
    protected $busyPersonalAudioMediaType     = null;
    protected $busyPersonalVideoFile          = null;
    protected $busyPersonalVideoMediaType     = null;
    protected $noAnswerAnnouncementSelection  = null;
    protected $noAnswerPersonalAudioFile      = null;
    protected $noAnswerPersonalAudioMediaType = null;
    protected $noAnswerPersonalVideoFile      = null;
    protected $noAnswerPersonalVideoMediaType = null;
    protected $noAnswerAlternateGreeting01    = null;
    protected $noAnswerAlternateGreeting02    = null;
    protected $noAnswerAlternateGreeting03    = null;
    protected $noAnswerNumberOfRings          = null;


    /**
     * Announcement Selection.
     */
    public function setBusyAnnouncementSelection($busyAnnouncementSelection = null)
    {
        $this->busyAnnouncementSelection = ($busyAnnouncementSelection InstanceOf AnnouncementSelection)
             ? $busyAnnouncementSelection
             : new AnnouncementSelection($busyAnnouncementSelection);
    }

    /**
     * Announcement Selection.
     */
    public function getBusyAnnouncementSelection()
    {
        return (!$this->busyAnnouncementSelection) ?: $this->busyAnnouncementSelection->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setBusyPersonalAudioFile($busyPersonalAudioFile = null)
    {
        $this->busyPersonalAudioFile = ($busyPersonalAudioFile InstanceOf FileDescription)
             ? $busyPersonalAudioFile
             : new FileDescription($busyPersonalAudioFile);
    }

    /**
     * Description of a file resource.
     */
    public function getBusyPersonalAudioFile()
    {
        return (!$this->busyPersonalAudioFile) ?: $this->busyPersonalAudioFile->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setBusyPersonalAudioMediaType($busyPersonalAudioMediaType = null)
    {
        $this->busyPersonalAudioMediaType = ($busyPersonalAudioMediaType InstanceOf MediaFileType)
             ? $busyPersonalAudioMediaType
             : new MediaFileType($busyPersonalAudioMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getBusyPersonalAudioMediaType()
    {
        return (!$this->busyPersonalAudioMediaType) ?: $this->busyPersonalAudioMediaType->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setBusyPersonalVideoFile($busyPersonalVideoFile = null)
    {
        $this->busyPersonalVideoFile = ($busyPersonalVideoFile InstanceOf FileDescription)
             ? $busyPersonalVideoFile
             : new FileDescription($busyPersonalVideoFile);
    }

    /**
     * Description of a file resource.
     */
    public function getBusyPersonalVideoFile()
    {
        return (!$this->busyPersonalVideoFile) ?: $this->busyPersonalVideoFile->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setBusyPersonalVideoMediaType($busyPersonalVideoMediaType = null)
    {
        $this->busyPersonalVideoMediaType = ($busyPersonalVideoMediaType InstanceOf MediaFileType)
             ? $busyPersonalVideoMediaType
             : new MediaFileType($busyPersonalVideoMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getBusyPersonalVideoMediaType()
    {
        return (!$this->busyPersonalVideoMediaType) ?: $this->busyPersonalVideoMediaType->getValue();
    }

    /**
     * Announcement Selection.
     */
    public function setNoAnswerAnnouncementSelection($noAnswerAnnouncementSelection = null)
    {
        $this->noAnswerAnnouncementSelection = ($noAnswerAnnouncementSelection InstanceOf VoiceMessagingNoAnswerGreetingSelection)
             ? $noAnswerAnnouncementSelection
             : new VoiceMessagingNoAnswerGreetingSelection($noAnswerAnnouncementSelection);
    }

    /**
     * Announcement Selection.
     */
    public function getNoAnswerAnnouncementSelection()
    {
        return (!$this->noAnswerAnnouncementSelection) ?: $this->noAnswerAnnouncementSelection->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setNoAnswerPersonalAudioFile($noAnswerPersonalAudioFile = null)
    {
        $this->noAnswerPersonalAudioFile = ($noAnswerPersonalAudioFile InstanceOf FileDescription)
             ? $noAnswerPersonalAudioFile
             : new FileDescription($noAnswerPersonalAudioFile);
    }

    /**
     * Description of a file resource.
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return (!$this->noAnswerPersonalAudioFile) ?: $this->noAnswerPersonalAudioFile->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setNoAnswerPersonalAudioMediaType($noAnswerPersonalAudioMediaType = null)
    {
        $this->noAnswerPersonalAudioMediaType = ($noAnswerPersonalAudioMediaType InstanceOf MediaFileType)
             ? $noAnswerPersonalAudioMediaType
             : new MediaFileType($noAnswerPersonalAudioMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getNoAnswerPersonalAudioMediaType()
    {
        return (!$this->noAnswerPersonalAudioMediaType) ?: $this->noAnswerPersonalAudioMediaType->getValue();
    }

    /**
     * Description of a file resource.
     */
    public function setNoAnswerPersonalVideoFile($noAnswerPersonalVideoFile = null)
    {
        $this->noAnswerPersonalVideoFile = ($noAnswerPersonalVideoFile InstanceOf FileDescription)
             ? $noAnswerPersonalVideoFile
             : new FileDescription($noAnswerPersonalVideoFile);
    }

    /**
     * Description of a file resource.
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return (!$this->noAnswerPersonalVideoFile) ?: $this->noAnswerPersonalVideoFile->getValue();
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function setNoAnswerPersonalVideoMediaType($noAnswerPersonalVideoMediaType = null)
    {
        $this->noAnswerPersonalVideoMediaType = ($noAnswerPersonalVideoMediaType InstanceOf MediaFileType)
             ? $noAnswerPersonalVideoMediaType
             : new MediaFileType($noAnswerPersonalVideoMediaType);
    }

    /**
     * The media type of media data.
     *         WMA - Windows Media Audio file
     *         WAV - A WAV file
     *         3GP - A 3GP file
     *         MOV - A MOV file using a H.263 or H.264 codec.
     */
    public function getNoAnswerPersonalVideoMediaType()
    {
        return (!$this->noAnswerPersonalVideoMediaType) ?: $this->noAnswerPersonalVideoMediaType->getValue();
    }

    /**
     * The configuration of a alternate no answer greeting.
     *         It is used when geting a user's voice messaging greeting.
     */
    public function setNoAnswerAlternateGreeting01(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting01 = null)
    {
        $this->noAnswerAlternateGreeting01 =  $noAnswerAlternateGreeting01;
    }

    /**
     * The configuration of a alternate no answer greeting.
     *         It is used when geting a user's voice messaging greeting.
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return (!$this->noAnswerAlternateGreeting01) ?: $this->noAnswerAlternateGreeting01->getValue();
    }

    /**
     * The configuration of a alternate no answer greeting.
     *         It is used when geting a user's voice messaging greeting.
     */
    public function setNoAnswerAlternateGreeting02(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting02 = null)
    {
        $this->noAnswerAlternateGreeting02 =  $noAnswerAlternateGreeting02;
    }

    /**
     * The configuration of a alternate no answer greeting.
     *         It is used when geting a user's voice messaging greeting.
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return (!$this->noAnswerAlternateGreeting02) ?: $this->noAnswerAlternateGreeting02->getValue();
    }

    /**
     * The configuration of a alternate no answer greeting.
     *         It is used when geting a user's voice messaging greeting.
     */
    public function setNoAnswerAlternateGreeting03(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting03 = null)
    {
        $this->noAnswerAlternateGreeting03 =  $noAnswerAlternateGreeting03;
    }

    /**
     * The configuration of a alternate no answer greeting.
     *         It is used when geting a user's voice messaging greeting.
     */
    public function getNoAnswerAlternateGreeting03()
    {
        return (!$this->noAnswerAlternateGreeting03) ?: $this->noAnswerAlternateGreeting03->getValue();
    }

    /**
     * The number of rings before greeting.
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf VoiceMessagingNumberOfRings)
             ? $noAnswerNumberOfRings
             : new VoiceMessagingNumberOfRings($noAnswerNumberOfRings);
    }

    /**
     * The number of rings before greeting.
     */
    public function getNoAnswerNumberOfRings()
    {
        return (!$this->noAnswerNumberOfRings) ?: $this->noAnswerNumberOfRings->getValue();
    }
}
