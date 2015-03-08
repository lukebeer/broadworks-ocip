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
    public    $name                          = __CLASS__;
    protected $userId                        = null;
    protected $busyAnnouncementSelection     = null;
    protected $busyPersonalAudioFile         = null;
    protected $busyPersonalVideoFile         = null;
    protected $noAnswerAnnouncementSelection = null;
    protected $noAnswerPersonalAudioFile     = null;
    protected $noAnswerPersonalVideoFile     = null;
    protected $noAnswerAlternateGreeting01   = null;
    protected $noAnswerAlternateGreeting02   = null;
    protected $noAnswerAlternateGreeting03   = null;
    protected $noAnswerNumberOfRings         = null;

    public function __construct(
         $userId,
         $busyAnnouncementSelection = null,
          $busyPersonalAudioFile = null,
          $busyPersonalVideoFile = null,
         $noAnswerAnnouncementSelection = null,
          $noAnswerPersonalAudioFile = null,
          $noAnswerPersonalVideoFile = null,
          $noAnswerAlternateGreeting01 = null,
          $noAnswerAlternateGreeting02 = null,
          $noAnswerAlternateGreeting03 = null,
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

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

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
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setBusyPersonalAudioFile(LabeledMediaFileResource $busyPersonalAudioFile = null)
    {
        $this->busyPersonalAudioFile =  $busyPersonalAudioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getBusyPersonalAudioFile()
    {
        return (!$this->busyPersonalAudioFile) ?: $this->busyPersonalAudioFile->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setBusyPersonalVideoFile(LabeledMediaFileResource $busyPersonalVideoFile = null)
    {
        $this->busyPersonalVideoFile =  $busyPersonalVideoFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getBusyPersonalVideoFile()
    {
        return (!$this->busyPersonalVideoFile) ?: $this->busyPersonalVideoFile->getValue();
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
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setNoAnswerPersonalAudioFile(LabeledMediaFileResource $noAnswerPersonalAudioFile = null)
    {
        $this->noAnswerPersonalAudioFile =  $noAnswerPersonalAudioFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return (!$this->noAnswerPersonalAudioFile) ?: $this->noAnswerPersonalAudioFile->getValue();
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function setNoAnswerPersonalVideoFile(LabeledMediaFileResource $noAnswerPersonalVideoFile = null)
    {
        $this->noAnswerPersonalVideoFile =  $noAnswerPersonalVideoFile;
    }

    /**
     * Represents either an existing file for the application server to use, or
     *         the contents of a file to transfer with a description.
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return (!$this->noAnswerPersonalVideoFile) ?: $this->noAnswerPersonalVideoFile->getValue();
    }

    /**
     * The configuration of a alternate no answer greeting.
     *         It is used when modifying a user's voice messaging greeting.
     */
    public function setNoAnswerAlternateGreeting01(VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting01 = null)
    {
        $this->noAnswerAlternateGreeting01 =  $noAnswerAlternateGreeting01;
    }

    /**
     * The configuration of a alternate no answer greeting.
     *         It is used when modifying a user's voice messaging greeting.
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return (!$this->noAnswerAlternateGreeting01) ?: $this->noAnswerAlternateGreeting01->getValue();
    }

    /**
     * The configuration of a alternate no answer greeting.
     *         It is used when modifying a user's voice messaging greeting.
     */
    public function setNoAnswerAlternateGreeting02(VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting02 = null)
    {
        $this->noAnswerAlternateGreeting02 =  $noAnswerAlternateGreeting02;
    }

    /**
     * The configuration of a alternate no answer greeting.
     *         It is used when modifying a user's voice messaging greeting.
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return (!$this->noAnswerAlternateGreeting02) ?: $this->noAnswerAlternateGreeting02->getValue();
    }

    /**
     * The configuration of a alternate no answer greeting.
     *         It is used when modifying a user's voice messaging greeting.
     */
    public function setNoAnswerAlternateGreeting03(VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting03 = null)
    {
        $this->noAnswerAlternateGreeting03 =  $noAnswerAlternateGreeting03;
    }

    /**
     * The configuration of a alternate no answer greeting.
     *         It is used when modifying a user's voice messaging greeting.
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
