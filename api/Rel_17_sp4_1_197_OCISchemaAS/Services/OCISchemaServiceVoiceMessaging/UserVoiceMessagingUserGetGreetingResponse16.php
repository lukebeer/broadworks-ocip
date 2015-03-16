<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingAlternateNoAnswerGreetingRead16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNoAnswerGreetingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to UserVoiceMessagingUserGetGreetingRequest16.
 *         Contains the greeting configuration for a user's voice messaging.
 */
class UserVoiceMessagingUserGetGreetingResponse16 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserVoiceMessagingUserGetGreetingResponse16';
    protected $busyAnnouncementSelection;
    protected $busyPersonalAudioFile;
    protected $busyPersonalAudioMediaType;
    protected $busyPersonalVideoFile;
    protected $busyPersonalVideoMediaType;
    protected $noAnswerAnnouncementSelection;
    protected $noAnswerPersonalAudioFile;
    protected $noAnswerPersonalAudioMediaType;
    protected $noAnswerPersonalVideoFile;
    protected $noAnswerPersonalVideoMediaType;
    protected $noAnswerAlternateGreeting01;
    protected $noAnswerAlternateGreeting02;
    protected $noAnswerAlternateGreeting03;
    protected $noAnswerNumberOfRings;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserGetGreetingResponse16 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setBusyAnnouncementSelection($busyAnnouncementSelection = null)
    {
        $this->busyAnnouncementSelection = ($busyAnnouncementSelection InstanceOf AnnouncementSelection)
             ? $busyAnnouncementSelection
             : new AnnouncementSelection($busyAnnouncementSelection);
        $this->busyAnnouncementSelection->setName('busyAnnouncementSelection');
        return $this;
    }

    /**
     * 
     * @return AnnouncementSelection $busyAnnouncementSelection
     */
    public function getBusyAnnouncementSelection()
    {
        return ($this->busyAnnouncementSelection) ? $this->busyAnnouncementSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setBusyPersonalAudioFile($busyPersonalAudioFile = null)
    {
        $this->busyPersonalAudioFile = ($busyPersonalAudioFile InstanceOf FileDescription)
             ? $busyPersonalAudioFile
             : new FileDescription($busyPersonalAudioFile);
        $this->busyPersonalAudioFile->setName('busyPersonalAudioFile');
        return $this;
    }

    /**
     * 
     * @return FileDescription $busyPersonalAudioFile
     */
    public function getBusyPersonalAudioFile()
    {
        return ($this->busyPersonalAudioFile) ? $this->busyPersonalAudioFile->getValue() : null;
    }

    /**
     * 
     */
    public function setBusyPersonalAudioMediaType($busyPersonalAudioMediaType = null)
    {
        $this->busyPersonalAudioMediaType = ($busyPersonalAudioMediaType InstanceOf MediaFileType)
             ? $busyPersonalAudioMediaType
             : new MediaFileType($busyPersonalAudioMediaType);
        $this->busyPersonalAudioMediaType->setName('busyPersonalAudioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $busyPersonalAudioMediaType
     */
    public function getBusyPersonalAudioMediaType()
    {
        return ($this->busyPersonalAudioMediaType) ? $this->busyPersonalAudioMediaType->getValue() : null;
    }

    /**
     * 
     */
    public function setBusyPersonalVideoFile($busyPersonalVideoFile = null)
    {
        $this->busyPersonalVideoFile = ($busyPersonalVideoFile InstanceOf FileDescription)
             ? $busyPersonalVideoFile
             : new FileDescription($busyPersonalVideoFile);
        $this->busyPersonalVideoFile->setName('busyPersonalVideoFile');
        return $this;
    }

    /**
     * 
     * @return FileDescription $busyPersonalVideoFile
     */
    public function getBusyPersonalVideoFile()
    {
        return ($this->busyPersonalVideoFile) ? $this->busyPersonalVideoFile->getValue() : null;
    }

    /**
     * 
     */
    public function setBusyPersonalVideoMediaType($busyPersonalVideoMediaType = null)
    {
        $this->busyPersonalVideoMediaType = ($busyPersonalVideoMediaType InstanceOf MediaFileType)
             ? $busyPersonalVideoMediaType
             : new MediaFileType($busyPersonalVideoMediaType);
        $this->busyPersonalVideoMediaType->setName('busyPersonalVideoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $busyPersonalVideoMediaType
     */
    public function getBusyPersonalVideoMediaType()
    {
        return ($this->busyPersonalVideoMediaType) ? $this->busyPersonalVideoMediaType->getValue() : null;
    }

    /**
     * 
     */
    public function setNoAnswerAnnouncementSelection($noAnswerAnnouncementSelection = null)
    {
        $this->noAnswerAnnouncementSelection = ($noAnswerAnnouncementSelection InstanceOf VoiceMessagingNoAnswerGreetingSelection)
             ? $noAnswerAnnouncementSelection
             : new VoiceMessagingNoAnswerGreetingSelection($noAnswerAnnouncementSelection);
        $this->noAnswerAnnouncementSelection->setName('noAnswerAnnouncementSelection');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingNoAnswerGreetingSelection $noAnswerAnnouncementSelection
     */
    public function getNoAnswerAnnouncementSelection()
    {
        return ($this->noAnswerAnnouncementSelection) ? $this->noAnswerAnnouncementSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setNoAnswerPersonalAudioFile($noAnswerPersonalAudioFile = null)
    {
        $this->noAnswerPersonalAudioFile = ($noAnswerPersonalAudioFile InstanceOf FileDescription)
             ? $noAnswerPersonalAudioFile
             : new FileDescription($noAnswerPersonalAudioFile);
        $this->noAnswerPersonalAudioFile->setName('noAnswerPersonalAudioFile');
        return $this;
    }

    /**
     * 
     * @return FileDescription $noAnswerPersonalAudioFile
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return ($this->noAnswerPersonalAudioFile) ? $this->noAnswerPersonalAudioFile->getValue() : null;
    }

    /**
     * 
     */
    public function setNoAnswerPersonalAudioMediaType($noAnswerPersonalAudioMediaType = null)
    {
        $this->noAnswerPersonalAudioMediaType = ($noAnswerPersonalAudioMediaType InstanceOf MediaFileType)
             ? $noAnswerPersonalAudioMediaType
             : new MediaFileType($noAnswerPersonalAudioMediaType);
        $this->noAnswerPersonalAudioMediaType->setName('noAnswerPersonalAudioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $noAnswerPersonalAudioMediaType
     */
    public function getNoAnswerPersonalAudioMediaType()
    {
        return ($this->noAnswerPersonalAudioMediaType) ? $this->noAnswerPersonalAudioMediaType->getValue() : null;
    }

    /**
     * 
     */
    public function setNoAnswerPersonalVideoFile($noAnswerPersonalVideoFile = null)
    {
        $this->noAnswerPersonalVideoFile = ($noAnswerPersonalVideoFile InstanceOf FileDescription)
             ? $noAnswerPersonalVideoFile
             : new FileDescription($noAnswerPersonalVideoFile);
        $this->noAnswerPersonalVideoFile->setName('noAnswerPersonalVideoFile');
        return $this;
    }

    /**
     * 
     * @return FileDescription $noAnswerPersonalVideoFile
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return ($this->noAnswerPersonalVideoFile) ? $this->noAnswerPersonalVideoFile->getValue() : null;
    }

    /**
     * 
     */
    public function setNoAnswerPersonalVideoMediaType($noAnswerPersonalVideoMediaType = null)
    {
        $this->noAnswerPersonalVideoMediaType = ($noAnswerPersonalVideoMediaType InstanceOf MediaFileType)
             ? $noAnswerPersonalVideoMediaType
             : new MediaFileType($noAnswerPersonalVideoMediaType);
        $this->noAnswerPersonalVideoMediaType->setName('noAnswerPersonalVideoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $noAnswerPersonalVideoMediaType
     */
    public function getNoAnswerPersonalVideoMediaType()
    {
        return ($this->noAnswerPersonalVideoMediaType) ? $this->noAnswerPersonalVideoMediaType->getValue() : null;
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting01(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting01 = null)
    {
        $this->noAnswerAlternateGreeting01 = ($noAnswerAlternateGreeting01 InstanceOf VoiceMessagingAlternateNoAnswerGreetingRead16)
             ? $noAnswerAlternateGreeting01
             : new VoiceMessagingAlternateNoAnswerGreetingRead16($noAnswerAlternateGreeting01);
        $this->noAnswerAlternateGreeting01->setName('noAnswerAlternateGreeting01');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting01
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return $this->noAnswerAlternateGreeting01;
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting02(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting02 = null)
    {
        $this->noAnswerAlternateGreeting02 = ($noAnswerAlternateGreeting02 InstanceOf VoiceMessagingAlternateNoAnswerGreetingRead16)
             ? $noAnswerAlternateGreeting02
             : new VoiceMessagingAlternateNoAnswerGreetingRead16($noAnswerAlternateGreeting02);
        $this->noAnswerAlternateGreeting02->setName('noAnswerAlternateGreeting02');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting02
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return $this->noAnswerAlternateGreeting02;
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting03(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting03 = null)
    {
        $this->noAnswerAlternateGreeting03 = ($noAnswerAlternateGreeting03 InstanceOf VoiceMessagingAlternateNoAnswerGreetingRead16)
             ? $noAnswerAlternateGreeting03
             : new VoiceMessagingAlternateNoAnswerGreetingRead16($noAnswerAlternateGreeting03);
        $this->noAnswerAlternateGreeting03->setName('noAnswerAlternateGreeting03');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting03
     */
    public function getNoAnswerAlternateGreeting03()
    {
        return $this->noAnswerAlternateGreeting03;
    }

    /**
     * 
     */
    public function setNoAnswerNumberOfRings($noAnswerNumberOfRings = null)
    {
        $this->noAnswerNumberOfRings = ($noAnswerNumberOfRings InstanceOf VoiceMessagingNumberOfRings)
             ? $noAnswerNumberOfRings
             : new VoiceMessagingNumberOfRings($noAnswerNumberOfRings);
        $this->noAnswerNumberOfRings->setName('noAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingNumberOfRings $noAnswerNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return ($this->noAnswerNumberOfRings) ? $this->noAnswerNumberOfRings->getValue() : null;
    }
}
