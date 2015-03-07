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
    public    $name                            = __CLASS__;
    protected $busyAnnouncementSelection       = null;
    protected $busyPersonalAudioFile           = null;
    protected $busyPersonalAudioMediaType      = null;
    protected $busyPersonalVideoFile           = null;
    protected $busyPersonalVideoMediaType      = null;
    protected $noAnswerAnnouncementSelection   = null;
    protected $noAnswerPersonalAudioFile       = null;
    protected $noAnswerPersonalAudioMediaType  = null;
    protected $noAnswerPersonalVideoFile       = null;
    protected $noAnswerPersonalVideoMediaType  = null;
    protected $noAnswerAlternateGreeting01     = null;
    protected $noAnswerAlternateGreeting02     = null;
    protected $noAnswerAlternateGreeting03     = null;
    protected $noAnswerNumberOfRings           = null;


    public function setBusyAnnouncementSelection($busyAnnouncementSelection = null)
    {
        $this->busyAnnouncementSelection = ($busyAnnouncementSelection InstanceOf AnnouncementSelection)
             ? $busyAnnouncementSelection
             : new AnnouncementSelection($busyAnnouncementSelection);
    }

    public function getBusyAnnouncementSelection()
    {
        return (!$this->busyAnnouncementSelection) ?: $this->busyAnnouncementSelection->value();
    }

    public function setBusyPersonalAudioFile($busyPersonalAudioFile = null)
    {
        $this->busyPersonalAudioFile = ($busyPersonalAudioFile InstanceOf FileDescription)
             ? $busyPersonalAudioFile
             : new FileDescription($busyPersonalAudioFile);
    }

    public function getBusyPersonalAudioFile()
    {
        return (!$this->busyPersonalAudioFile) ?: $this->busyPersonalAudioFile->value();
    }

    public function setBusyPersonalAudioMediaType($busyPersonalAudioMediaType = null)
    {
        $this->busyPersonalAudioMediaType = ($busyPersonalAudioMediaType InstanceOf MediaFileType)
             ? $busyPersonalAudioMediaType
             : new MediaFileType($busyPersonalAudioMediaType);
    }

    public function getBusyPersonalAudioMediaType()
    {
        return (!$this->busyPersonalAudioMediaType) ?: $this->busyPersonalAudioMediaType->value();
    }

    public function setBusyPersonalVideoFile($busyPersonalVideoFile = null)
    {
        $this->busyPersonalVideoFile = ($busyPersonalVideoFile InstanceOf FileDescription)
             ? $busyPersonalVideoFile
             : new FileDescription($busyPersonalVideoFile);
    }

    public function getBusyPersonalVideoFile()
    {
        return (!$this->busyPersonalVideoFile) ?: $this->busyPersonalVideoFile->value();
    }

    public function setBusyPersonalVideoMediaType($busyPersonalVideoMediaType = null)
    {
        $this->busyPersonalVideoMediaType = ($busyPersonalVideoMediaType InstanceOf MediaFileType)
             ? $busyPersonalVideoMediaType
             : new MediaFileType($busyPersonalVideoMediaType);
    }

    public function getBusyPersonalVideoMediaType()
    {
        return (!$this->busyPersonalVideoMediaType) ?: $this->busyPersonalVideoMediaType->value();
    }

    public function setNoAnswerAnnouncementSelection($noAnswerAnnouncementSelection = null)
    {
        $this->noAnswerAnnouncementSelection = ($noAnswerAnnouncementSelection InstanceOf VoiceMessagingNoAnswerGreetingSelection)
             ? $noAnswerAnnouncementSelection
             : new VoiceMessagingNoAnswerGreetingSelection($noAnswerAnnouncementSelection);
    }

    public function getNoAnswerAnnouncementSelection()
    {
        return (!$this->noAnswerAnnouncementSelection) ?: $this->noAnswerAnnouncementSelection->value();
    }

    public function setNoAnswerPersonalAudioFile($noAnswerPersonalAudioFile = null)
    {
        $this->noAnswerPersonalAudioFile = ($noAnswerPersonalAudioFile InstanceOf FileDescription)
             ? $noAnswerPersonalAudioFile
             : new FileDescription($noAnswerPersonalAudioFile);
    }

    public function getNoAnswerPersonalAudioFile()
    {
        return (!$this->noAnswerPersonalAudioFile) ?: $this->noAnswerPersonalAudioFile->value();
    }

    public function setNoAnswerPersonalAudioMediaType($noAnswerPersonalAudioMediaType = null)
    {
        $this->noAnswerPersonalAudioMediaType = ($noAnswerPersonalAudioMediaType InstanceOf MediaFileType)
             ? $noAnswerPersonalAudioMediaType
             : new MediaFileType($noAnswerPersonalAudioMediaType);
    }

    public function getNoAnswerPersonalAudioMediaType()
    {
        return (!$this->noAnswerPersonalAudioMediaType) ?: $this->noAnswerPersonalAudioMediaType->value();
    }

    public function setNoAnswerPersonalVideoFile($noAnswerPersonalVideoFile = null)
    {
        $this->noAnswerPersonalVideoFile = ($noAnswerPersonalVideoFile InstanceOf FileDescription)
             ? $noAnswerPersonalVideoFile
             : new FileDescription($noAnswerPersonalVideoFile);
    }

    public function getNoAnswerPersonalVideoFile()
    {
        return (!$this->noAnswerPersonalVideoFile) ?: $this->noAnswerPersonalVideoFile->value();
    }

    public function setNoAnswerPersonalVideoMediaType($noAnswerPersonalVideoMediaType = null)
    {
        $this->noAnswerPersonalVideoMediaType = ($noAnswerPersonalVideoMediaType InstanceOf MediaFileType)
             ? $noAnswerPersonalVideoMediaType
             : new MediaFileType($noAnswerPersonalVideoMediaType);
    }

    public function getNoAnswerPersonalVideoMediaType()
    {
        return (!$this->noAnswerPersonalVideoMediaType) ?: $this->noAnswerPersonalVideoMediaType->value();
    }

    public function setNoAnswerAlternateGreeting01(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting01 = null)
    {
    }

    public function getNoAnswerAlternateGreeting01()
    {
        return (!$this->noAnswerAlternateGreeting01) ?: $this->noAnswerAlternateGreeting01->value();
    }

    public function setNoAnswerAlternateGreeting02(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting02 = null)
    {
    }

    public function getNoAnswerAlternateGreeting02()
    {
        return (!$this->noAnswerAlternateGreeting02) ?: $this->noAnswerAlternateGreeting02->value();
    }

    public function setNoAnswerAlternateGreeting03(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting03 = null)
    {
    }

    public function getNoAnswerAlternateGreeting03()
    {
        return (!$this->noAnswerAlternateGreeting03) ?: $this->noAnswerAlternateGreeting03->value();
    }

    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf VoiceMessagingNumberOfRings)
             ? $noAnswerNumberOfRings
             : new VoiceMessagingNumberOfRings($noAnswerNumberOfRings);
    }

    public function getNoAnswerNumberOfRings()
    {
        return (!$this->noAnswerNumberOfRings) ?: $this->noAnswerNumberOfRings->value();
    }
}
