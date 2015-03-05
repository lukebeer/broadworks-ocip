<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingNoAnswerGreetingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingAlternateNoAnswerGreetingRead16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingNumberOfRings;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserVoiceMessagingUserGetGreetingRequest16.
 *         Contains the greeting configuration for a user's voice messaging.
 */
class UserVoiceMessagingUserGetGreetingResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $busyAnnouncementSelection,
             $busyPersonalAudioFile=null,
             $busyPersonalAudioMediaType=null,
             $busyPersonalVideoFile=null,
             $busyPersonalVideoMediaType=null,
             $noAnswerAnnouncementSelection,
             $noAnswerPersonalAudioFile=null,
             $noAnswerPersonalAudioMediaType=null,
             $noAnswerPersonalVideoFile=null,
             $noAnswerPersonalVideoMediaType=null,
             $noAnswerAlternateGreeting01=null,
             $noAnswerAlternateGreeting02=null,
             $noAnswerAlternateGreeting03=null,
             $noAnswerNumberOfRings
    ) {
        $this->busyAnnouncementSelection      = new AnnouncementSelection($busyAnnouncementSelection);
        $this->busyPersonalAudioFile          = new FileDescription($busyPersonalAudioFile);
        $this->busyPersonalAudioMediaType     = new MediaFileType($busyPersonalAudioMediaType);
        $this->busyPersonalVideoFile          = new FileDescription($busyPersonalVideoFile);
        $this->busyPersonalVideoMediaType     = new MediaFileType($busyPersonalVideoMediaType);
        $this->noAnswerAnnouncementSelection  = $noAnswerAnnouncementSelection;
        $this->noAnswerPersonalAudioFile      = new FileDescription($noAnswerPersonalAudioFile);
        $this->noAnswerPersonalAudioMediaType = new MediaFileType($noAnswerPersonalAudioMediaType);
        $this->noAnswerPersonalVideoFile      = new FileDescription($noAnswerPersonalVideoFile);
        $this->noAnswerPersonalVideoMediaType = new MediaFileType($noAnswerPersonalVideoMediaType);
        $this->noAnswerAlternateGreeting01    = $noAnswerAlternateGreeting01;
        $this->noAnswerAlternateGreeting02    = $noAnswerAlternateGreeting02;
        $this->noAnswerAlternateGreeting03    = $noAnswerAlternateGreeting03;
        $this->noAnswerNumberOfRings          = $noAnswerNumberOfRings;
        $this->args                           = func_get_args();
    }

    public function setBusyAnnouncementSelection($busyAnnouncementSelection)
    {
        $busyAnnouncementSelection and $this->busyAnnouncementSelection = new AnnouncementSelection($busyAnnouncementSelection);
    }

    public function getBusyAnnouncementSelection()
    {
        return (!$this->busyAnnouncementSelection) ?: $this->busyAnnouncementSelection->value();
    }

    public function setBusyPersonalAudioFile($busyPersonalAudioFile)
    {
        $busyPersonalAudioFile and $this->busyPersonalAudioFile = new FileDescription($busyPersonalAudioFile);
    }

    public function getBusyPersonalAudioFile()
    {
        return (!$this->busyPersonalAudioFile) ?: $this->busyPersonalAudioFile->value();
    }

    public function setBusyPersonalAudioMediaType($busyPersonalAudioMediaType)
    {
        $busyPersonalAudioMediaType and $this->busyPersonalAudioMediaType = new MediaFileType($busyPersonalAudioMediaType);
    }

    public function getBusyPersonalAudioMediaType()
    {
        return (!$this->busyPersonalAudioMediaType) ?: $this->busyPersonalAudioMediaType->value();
    }

    public function setBusyPersonalVideoFile($busyPersonalVideoFile)
    {
        $busyPersonalVideoFile and $this->busyPersonalVideoFile = new FileDescription($busyPersonalVideoFile);
    }

    public function getBusyPersonalVideoFile()
    {
        return (!$this->busyPersonalVideoFile) ?: $this->busyPersonalVideoFile->value();
    }

    public function setBusyPersonalVideoMediaType($busyPersonalVideoMediaType)
    {
        $busyPersonalVideoMediaType and $this->busyPersonalVideoMediaType = new MediaFileType($busyPersonalVideoMediaType);
    }

    public function getBusyPersonalVideoMediaType()
    {
        return (!$this->busyPersonalVideoMediaType) ?: $this->busyPersonalVideoMediaType->value();
    }

    public function setNoAnswerAnnouncementSelection($noAnswerAnnouncementSelection)
    {
        $noAnswerAnnouncementSelection and $this->noAnswerAnnouncementSelection = new VoiceMessagingNoAnswerGreetingSelection($noAnswerAnnouncementSelection);
    }

    public function getNoAnswerAnnouncementSelection()
    {
        return (!$this->noAnswerAnnouncementSelection) ?: $this->noAnswerAnnouncementSelection->value();
    }

    public function setNoAnswerPersonalAudioFile($noAnswerPersonalAudioFile)
    {
        $noAnswerPersonalAudioFile and $this->noAnswerPersonalAudioFile = new FileDescription($noAnswerPersonalAudioFile);
    }

    public function getNoAnswerPersonalAudioFile()
    {
        return (!$this->noAnswerPersonalAudioFile) ?: $this->noAnswerPersonalAudioFile->value();
    }

    public function setNoAnswerPersonalAudioMediaType($noAnswerPersonalAudioMediaType)
    {
        $noAnswerPersonalAudioMediaType and $this->noAnswerPersonalAudioMediaType = new MediaFileType($noAnswerPersonalAudioMediaType);
    }

    public function getNoAnswerPersonalAudioMediaType()
    {
        return (!$this->noAnswerPersonalAudioMediaType) ?: $this->noAnswerPersonalAudioMediaType->value();
    }

    public function setNoAnswerPersonalVideoFile($noAnswerPersonalVideoFile)
    {
        $noAnswerPersonalVideoFile and $this->noAnswerPersonalVideoFile = new FileDescription($noAnswerPersonalVideoFile);
    }

    public function getNoAnswerPersonalVideoFile()
    {
        return (!$this->noAnswerPersonalVideoFile) ?: $this->noAnswerPersonalVideoFile->value();
    }

    public function setNoAnswerPersonalVideoMediaType($noAnswerPersonalVideoMediaType)
    {
        $noAnswerPersonalVideoMediaType and $this->noAnswerPersonalVideoMediaType = new MediaFileType($noAnswerPersonalVideoMediaType);
    }

    public function getNoAnswerPersonalVideoMediaType()
    {
        return (!$this->noAnswerPersonalVideoMediaType) ?: $this->noAnswerPersonalVideoMediaType->value();
    }

    public function setNoAnswerAlternateGreeting01($noAnswerAlternateGreeting01)
    {
        $noAnswerAlternateGreeting01 and $this->noAnswerAlternateGreeting01 = new VoiceMessagingAlternateNoAnswerGreetingRead16($noAnswerAlternateGreeting01);
    }

    public function getNoAnswerAlternateGreeting01()
    {
        return (!$this->noAnswerAlternateGreeting01) ?: $this->noAnswerAlternateGreeting01->value();
    }

    public function setNoAnswerAlternateGreeting02($noAnswerAlternateGreeting02)
    {
        $noAnswerAlternateGreeting02 and $this->noAnswerAlternateGreeting02 = new VoiceMessagingAlternateNoAnswerGreetingRead16($noAnswerAlternateGreeting02);
    }

    public function getNoAnswerAlternateGreeting02()
    {
        return (!$this->noAnswerAlternateGreeting02) ?: $this->noAnswerAlternateGreeting02->value();
    }

    public function setNoAnswerAlternateGreeting03($noAnswerAlternateGreeting03)
    {
        $noAnswerAlternateGreeting03 and $this->noAnswerAlternateGreeting03 = new VoiceMessagingAlternateNoAnswerGreetingRead16($noAnswerAlternateGreeting03);
    }

    public function getNoAnswerAlternateGreeting03()
    {
        return (!$this->noAnswerAlternateGreeting03) ?: $this->noAnswerAlternateGreeting03->value();
    }

    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings)
    {
        $noAnswerNumberOfRings and $this->noAnswerNumberOfRings = new VoiceMessagingNumberOfRings($noAnswerNumberOfRings);
    }

    public function getNoAnswerNumberOfRings()
    {
        return (!$this->noAnswerNumberOfRings) ?: $this->noAnswerNumberOfRings->value();
    }
}
