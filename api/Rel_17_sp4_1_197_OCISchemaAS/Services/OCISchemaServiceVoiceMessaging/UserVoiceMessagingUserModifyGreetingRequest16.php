<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingAlternateNoAnswerGreetingModify16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNoAnswerGreetingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the user's voice messaging greeting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserVoiceMessagingUserModifyGreetingRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $userId                         = null;
    protected $busyAnnouncementSelection      = null;
    protected $busyPersonalAudioFile          = null;
    protected $busyPersonalVideoFile          = null;
    protected $noAnswerAnnouncementSelection  = null;
    protected $noAnswerPersonalAudioFile      = null;
    protected $noAnswerPersonalVideoFile      = null;
    protected $noAnswerAlternateGreeting01    = null;
    protected $noAnswerAlternateGreeting02    = null;
    protected $noAnswerAlternateGreeting03    = null;
    protected $noAnswerNumberOfRings          = null;

    public function __construct(
         $userId,
         $busyAnnouncementSelection = null,
         LabeledMediaFileResource $busyPersonalAudioFile = null,
         LabeledMediaFileResource $busyPersonalVideoFile = null,
         $noAnswerAnnouncementSelection = null,
         LabeledMediaFileResource $noAnswerPersonalAudioFile = null,
         LabeledMediaFileResource $noAnswerPersonalVideoFile = null,
         VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting01 = null,
         VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting02 = null,
         VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting03 = null,
         $noAnswerNumberOfRings = null
    ) {
        $this->setUserId($userId);
        $this->setBusyAnnouncementSelection($busyAnnouncementSelection);
        $this->setBusyPersonalAudioFile($busyPersonalAudioFile);
        $this->setBusyPersonalVideoFile($busyPersonalVideoFile);
        $this->setNoAnswerAnnouncementSelection($noAnswerAnnouncementSelection);
        $this->setNoAnswerPersonalAudioFile($noAnswerPersonalAudioFile);
        $this->setNoAnswerPersonalVideoFile($noAnswerPersonalVideoFile);
        $this->setNoAnswerAlternateGreeting01($noAnswerAlternateGreeting01);
        $this->setNoAnswerAlternateGreeting02($noAnswerAlternateGreeting02);
        $this->setNoAnswerAlternateGreeting03($noAnswerAlternateGreeting03);
        $this->setNoAnswerNumberOfRings($noAnswerNumberOfRings);
    }

    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->value();
    }

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

    public function setBusyPersonalAudioFile(LabeledMediaFileResource $busyPersonalAudioFile = null)
    {
    }

    public function getBusyPersonalAudioFile()
    {
        return (!$this->busyPersonalAudioFile) ?: $this->busyPersonalAudioFile->value();
    }

    public function setBusyPersonalVideoFile(LabeledMediaFileResource $busyPersonalVideoFile = null)
    {
    }

    public function getBusyPersonalVideoFile()
    {
        return (!$this->busyPersonalVideoFile) ?: $this->busyPersonalVideoFile->value();
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

    public function setNoAnswerPersonalAudioFile(LabeledMediaFileResource $noAnswerPersonalAudioFile = null)
    {
    }

    public function getNoAnswerPersonalAudioFile()
    {
        return (!$this->noAnswerPersonalAudioFile) ?: $this->noAnswerPersonalAudioFile->value();
    }

    public function setNoAnswerPersonalVideoFile(LabeledMediaFileResource $noAnswerPersonalVideoFile = null)
    {
    }

    public function getNoAnswerPersonalVideoFile()
    {
        return (!$this->noAnswerPersonalVideoFile) ?: $this->noAnswerPersonalVideoFile->value();
    }

    public function setNoAnswerAlternateGreeting01(VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting01 = null)
    {
    }

    public function getNoAnswerAlternateGreeting01()
    {
        return (!$this->noAnswerAlternateGreeting01) ?: $this->noAnswerAlternateGreeting01->value();
    }

    public function setNoAnswerAlternateGreeting02(VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting02 = null)
    {
    }

    public function getNoAnswerAlternateGreeting02()
    {
        return (!$this->noAnswerAlternateGreeting02) ?: $this->noAnswerAlternateGreeting02->value();
    }

    public function setNoAnswerAlternateGreeting03(VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting03 = null)
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
