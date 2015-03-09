<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNoAnswerGreetingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\VoiceMessagingAlternateNoAnswerGreetingRead;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\UserVoiceMessagingUserGetGreetingResponse13mp16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserVoiceMessagingUserGetGreetingRequest13mp16.
 *         Contains the greeting configuration for a user's voice messaging.
 *         Replaced By: UserVoiceMessagingUserGetGreetingResponse16
 */
class UserVoiceMessagingUserGetGreetingResponse13mp16 extends ComplexType implements ComplexInterface
{
    public    $name                          = __CLASS__;
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

    /**
     * @return UserVoiceMessagingUserGetGreetingResponse13mp16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * The configuration of a alternate no answer greeting.
     *         It is used when geting a user's voice messaging greeting.
     */
    public function setNoAnswerAlternateGreeting01(VoiceMessagingAlternateNoAnswerGreetingRead $noAnswerAlternateGreeting01 = null)
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
    public function setNoAnswerAlternateGreeting02(VoiceMessagingAlternateNoAnswerGreetingRead $noAnswerAlternateGreeting02 = null)
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
    public function setNoAnswerAlternateGreeting03(VoiceMessagingAlternateNoAnswerGreetingRead $noAnswerAlternateGreeting03 = null)
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
