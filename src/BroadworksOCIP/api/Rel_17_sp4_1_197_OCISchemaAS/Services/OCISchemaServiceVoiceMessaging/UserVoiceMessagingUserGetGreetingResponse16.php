<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingAlternateNoAnswerGreetingRead16;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNoAnswerGreetingSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNumberOfRings;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\FileDescription;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MediaFileType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserVoiceMessagingUserGetGreetingRequest16.
 *         Contains the greeting configuration for a user's voice messaging.
 */
class UserVoiceMessagingUserGetGreetingResponse16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserVoiceMessagingUserGetGreetingResponse16';
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
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\UserVoiceMessagingUserGetGreetingResponse16 $response
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
        $this->busyAnnouncementSelection->setElementName('busyAnnouncementSelection');
        return $this;
    }

    /**
     * 
     * @return AnnouncementSelection $busyAnnouncementSelection
     */
    public function getBusyAnnouncementSelection()
    {
        return ($this->busyAnnouncementSelection)
            ? $this->busyAnnouncementSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusyPersonalAudioFile($busyPersonalAudioFile = null)
    {
        $this->busyPersonalAudioFile = ($busyPersonalAudioFile InstanceOf FileDescription)
             ? $busyPersonalAudioFile
             : new FileDescription($busyPersonalAudioFile);
        $this->busyPersonalAudioFile->setElementName('busyPersonalAudioFile');
        return $this;
    }

    /**
     * 
     * @return FileDescription $busyPersonalAudioFile
     */
    public function getBusyPersonalAudioFile()
    {
        return ($this->busyPersonalAudioFile)
            ? $this->busyPersonalAudioFile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusyPersonalAudioMediaType($busyPersonalAudioMediaType = null)
    {
        $this->busyPersonalAudioMediaType = ($busyPersonalAudioMediaType InstanceOf MediaFileType)
             ? $busyPersonalAudioMediaType
             : new MediaFileType($busyPersonalAudioMediaType);
        $this->busyPersonalAudioMediaType->setElementName('busyPersonalAudioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $busyPersonalAudioMediaType
     */
    public function getBusyPersonalAudioMediaType()
    {
        return ($this->busyPersonalAudioMediaType)
            ? $this->busyPersonalAudioMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusyPersonalVideoFile($busyPersonalVideoFile = null)
    {
        $this->busyPersonalVideoFile = ($busyPersonalVideoFile InstanceOf FileDescription)
             ? $busyPersonalVideoFile
             : new FileDescription($busyPersonalVideoFile);
        $this->busyPersonalVideoFile->setElementName('busyPersonalVideoFile');
        return $this;
    }

    /**
     * 
     * @return FileDescription $busyPersonalVideoFile
     */
    public function getBusyPersonalVideoFile()
    {
        return ($this->busyPersonalVideoFile)
            ? $this->busyPersonalVideoFile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBusyPersonalVideoMediaType($busyPersonalVideoMediaType = null)
    {
        $this->busyPersonalVideoMediaType = ($busyPersonalVideoMediaType InstanceOf MediaFileType)
             ? $busyPersonalVideoMediaType
             : new MediaFileType($busyPersonalVideoMediaType);
        $this->busyPersonalVideoMediaType->setElementName('busyPersonalVideoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $busyPersonalVideoMediaType
     */
    public function getBusyPersonalVideoMediaType()
    {
        return ($this->busyPersonalVideoMediaType)
            ? $this->busyPersonalVideoMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerAnnouncementSelection($noAnswerAnnouncementSelection = null)
    {
        $this->noAnswerAnnouncementSelection = ($noAnswerAnnouncementSelection InstanceOf VoiceMessagingNoAnswerGreetingSelection)
             ? $noAnswerAnnouncementSelection
             : new VoiceMessagingNoAnswerGreetingSelection($noAnswerAnnouncementSelection);
        $this->noAnswerAnnouncementSelection->setElementName('noAnswerAnnouncementSelection');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingNoAnswerGreetingSelection $noAnswerAnnouncementSelection
     */
    public function getNoAnswerAnnouncementSelection()
    {
        return ($this->noAnswerAnnouncementSelection)
            ? $this->noAnswerAnnouncementSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerPersonalAudioFile($noAnswerPersonalAudioFile = null)
    {
        $this->noAnswerPersonalAudioFile = ($noAnswerPersonalAudioFile InstanceOf FileDescription)
             ? $noAnswerPersonalAudioFile
             : new FileDescription($noAnswerPersonalAudioFile);
        $this->noAnswerPersonalAudioFile->setElementName('noAnswerPersonalAudioFile');
        return $this;
    }

    /**
     * 
     * @return FileDescription $noAnswerPersonalAudioFile
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return ($this->noAnswerPersonalAudioFile)
            ? $this->noAnswerPersonalAudioFile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerPersonalAudioMediaType($noAnswerPersonalAudioMediaType = null)
    {
        $this->noAnswerPersonalAudioMediaType = ($noAnswerPersonalAudioMediaType InstanceOf MediaFileType)
             ? $noAnswerPersonalAudioMediaType
             : new MediaFileType($noAnswerPersonalAudioMediaType);
        $this->noAnswerPersonalAudioMediaType->setElementName('noAnswerPersonalAudioMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $noAnswerPersonalAudioMediaType
     */
    public function getNoAnswerPersonalAudioMediaType()
    {
        return ($this->noAnswerPersonalAudioMediaType)
            ? $this->noAnswerPersonalAudioMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerPersonalVideoFile($noAnswerPersonalVideoFile = null)
    {
        $this->noAnswerPersonalVideoFile = ($noAnswerPersonalVideoFile InstanceOf FileDescription)
             ? $noAnswerPersonalVideoFile
             : new FileDescription($noAnswerPersonalVideoFile);
        $this->noAnswerPersonalVideoFile->setElementName('noAnswerPersonalVideoFile');
        return $this;
    }

    /**
     * 
     * @return FileDescription $noAnswerPersonalVideoFile
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return ($this->noAnswerPersonalVideoFile)
            ? $this->noAnswerPersonalVideoFile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerPersonalVideoMediaType($noAnswerPersonalVideoMediaType = null)
    {
        $this->noAnswerPersonalVideoMediaType = ($noAnswerPersonalVideoMediaType InstanceOf MediaFileType)
             ? $noAnswerPersonalVideoMediaType
             : new MediaFileType($noAnswerPersonalVideoMediaType);
        $this->noAnswerPersonalVideoMediaType->setElementName('noAnswerPersonalVideoMediaType');
        return $this;
    }

    /**
     * 
     * @return MediaFileType $noAnswerPersonalVideoMediaType
     */
    public function getNoAnswerPersonalVideoMediaType()
    {
        return ($this->noAnswerPersonalVideoMediaType)
            ? $this->noAnswerPersonalVideoMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting01(VoiceMessagingAlternateNoAnswerGreetingRead16 $noAnswerAlternateGreeting01 = null)
    {
        $this->noAnswerAlternateGreeting01 = ($noAnswerAlternateGreeting01 InstanceOf VoiceMessagingAlternateNoAnswerGreetingRead16)
             ? $noAnswerAlternateGreeting01
             : new VoiceMessagingAlternateNoAnswerGreetingRead16($noAnswerAlternateGreeting01);
        $this->noAnswerAlternateGreeting01->setElementName('noAnswerAlternateGreeting01');
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
        $this->noAnswerAlternateGreeting02->setElementName('noAnswerAlternateGreeting02');
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
        $this->noAnswerAlternateGreeting03->setElementName('noAnswerAlternateGreeting03');
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
        $this->noAnswerNumberOfRings->setElementName('noAnswerNumberOfRings');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingNumberOfRings $noAnswerNumberOfRings
     */
    public function getNoAnswerNumberOfRings()
    {
        return ($this->noAnswerNumberOfRings)
            ? $this->noAnswerNumberOfRings->getElementValue()
            : null;
    }
}
