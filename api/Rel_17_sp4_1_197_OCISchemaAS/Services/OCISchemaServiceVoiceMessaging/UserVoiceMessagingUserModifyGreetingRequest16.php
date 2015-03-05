<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingNoAnswerGreetingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingAlternateNoAnswerGreetingModify16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VoiceMessagingNumberOfRings;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's voice messaging greeting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserVoiceMessagingUserModifyGreetingRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userId,
             $busyAnnouncementSelection=null,
             LabeledMediaFileResource $busyPersonalAudioFile=null,
             LabeledMediaFileResource $busyPersonalVideoFile=null,
             $noAnswerAnnouncementSelection=null,
             LabeledMediaFileResource $noAnswerPersonalAudioFile=null,
             LabeledMediaFileResource $noAnswerPersonalVideoFile=null,
             $noAnswerAlternateGreeting01=null,
             $noAnswerAlternateGreeting02=null,
             $noAnswerAlternateGreeting03=null,
             $noAnswerNumberOfRings=null
    ) {
        $this->userId                        = new UserId($userId);
        $this->busyAnnouncementSelection     = new AnnouncementSelection($busyAnnouncementSelection);
        $this->busyPersonalAudioFile         = $busyPersonalAudioFile;
        $this->busyPersonalVideoFile         = $busyPersonalVideoFile;
        $this->noAnswerAnnouncementSelection = $noAnswerAnnouncementSelection;
        $this->noAnswerPersonalAudioFile     = $noAnswerPersonalAudioFile;
        $this->noAnswerPersonalVideoFile     = $noAnswerPersonalVideoFile;
        $this->noAnswerAlternateGreeting01   = $noAnswerAlternateGreeting01;
        $this->noAnswerAlternateGreeting02   = $noAnswerAlternateGreeting02;
        $this->noAnswerAlternateGreeting03   = $noAnswerAlternateGreeting03;
        $this->noAnswerNumberOfRings         = $noAnswerNumberOfRings;
        $this->args                          = func_get_args();
    }

    public function setUserId($userId)
    {
        $userId and $this->userId = new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
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
        $busyPersonalAudioFile and $this->busyPersonalAudioFile = new LabeledMediaFileResource($busyPersonalAudioFile);
    }

    public function getBusyPersonalAudioFile()
    {
        return (!$this->busyPersonalAudioFile) ?: $this->busyPersonalAudioFile->value();
    }

    public function setBusyPersonalVideoFile($busyPersonalVideoFile)
    {
        $busyPersonalVideoFile and $this->busyPersonalVideoFile = new LabeledMediaFileResource($busyPersonalVideoFile);
    }

    public function getBusyPersonalVideoFile()
    {
        return (!$this->busyPersonalVideoFile) ?: $this->busyPersonalVideoFile->value();
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
        $noAnswerPersonalAudioFile and $this->noAnswerPersonalAudioFile = new LabeledMediaFileResource($noAnswerPersonalAudioFile);
    }

    public function getNoAnswerPersonalAudioFile()
    {
        return (!$this->noAnswerPersonalAudioFile) ?: $this->noAnswerPersonalAudioFile->value();
    }

    public function setNoAnswerPersonalVideoFile($noAnswerPersonalVideoFile)
    {
        $noAnswerPersonalVideoFile and $this->noAnswerPersonalVideoFile = new LabeledMediaFileResource($noAnswerPersonalVideoFile);
    }

    public function getNoAnswerPersonalVideoFile()
    {
        return (!$this->noAnswerPersonalVideoFile) ?: $this->noAnswerPersonalVideoFile->value();
    }

    public function setNoAnswerAlternateGreeting01($noAnswerAlternateGreeting01)
    {
        $noAnswerAlternateGreeting01 and $this->noAnswerAlternateGreeting01 = new VoiceMessagingAlternateNoAnswerGreetingModify16($noAnswerAlternateGreeting01);
    }

    public function getNoAnswerAlternateGreeting01()
    {
        return (!$this->noAnswerAlternateGreeting01) ?: $this->noAnswerAlternateGreeting01->value();
    }

    public function setNoAnswerAlternateGreeting02($noAnswerAlternateGreeting02)
    {
        $noAnswerAlternateGreeting02 and $this->noAnswerAlternateGreeting02 = new VoiceMessagingAlternateNoAnswerGreetingModify16($noAnswerAlternateGreeting02);
    }

    public function getNoAnswerAlternateGreeting02()
    {
        return (!$this->noAnswerAlternateGreeting02) ?: $this->noAnswerAlternateGreeting02->value();
    }

    public function setNoAnswerAlternateGreeting03($noAnswerAlternateGreeting03)
    {
        $noAnswerAlternateGreeting03 and $this->noAnswerAlternateGreeting03 = new VoiceMessagingAlternateNoAnswerGreetingModify16($noAnswerAlternateGreeting03);
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
