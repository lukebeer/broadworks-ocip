<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingAlternateNoAnswerGreetingModify16;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNoAnswerGreetingSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingNumberOfRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\LabeledMediaFileResource;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AnnouncementSelection;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify the user's voice messaging greeting.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Engineering Note: This command is used internally by Call Processing.
 */
class UserVoiceMessagingUserModifyGreetingRequest16 extends ComplexType implements ComplexInterface
{
    public    $name = 'UserVoiceMessagingUserModifyGreetingRequest16';
    protected $userId;
    protected $busyAnnouncementSelection;
    protected $busyPersonalAudioFile;
    protected $busyPersonalVideoFile;
    protected $noAnswerAnnouncementSelection;
    protected $noAnswerPersonalAudioFile;
    protected $noAnswerPersonalVideoFile;
    protected $noAnswerAlternateGreeting01;
    protected $noAnswerAlternateGreeting02;
    protected $noAnswerAlternateGreeting03;
    protected $noAnswerNumberOfRings;

    public function __construct(
         $userId = '',
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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
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
    public function setBusyPersonalAudioFile(LabeledMediaFileResource $busyPersonalAudioFile = null)
    {
        $this->busyPersonalAudioFile = ($busyPersonalAudioFile InstanceOf LabeledMediaFileResource)
             ? $busyPersonalAudioFile
             : new LabeledMediaFileResource($busyPersonalAudioFile);
        $this->busyPersonalAudioFile->setName('busyPersonalAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $busyPersonalAudioFile
     */
    public function getBusyPersonalAudioFile()
    {
        return $this->busyPersonalAudioFile;
    }

    /**
     * 
     */
    public function setBusyPersonalVideoFile(LabeledMediaFileResource $busyPersonalVideoFile = null)
    {
        $this->busyPersonalVideoFile = ($busyPersonalVideoFile InstanceOf LabeledMediaFileResource)
             ? $busyPersonalVideoFile
             : new LabeledMediaFileResource($busyPersonalVideoFile);
        $this->busyPersonalVideoFile->setName('busyPersonalVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $busyPersonalVideoFile
     */
    public function getBusyPersonalVideoFile()
    {
        return $this->busyPersonalVideoFile;
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
    public function setNoAnswerPersonalAudioFile(LabeledMediaFileResource $noAnswerPersonalAudioFile = null)
    {
        $this->noAnswerPersonalAudioFile = ($noAnswerPersonalAudioFile InstanceOf LabeledMediaFileResource)
             ? $noAnswerPersonalAudioFile
             : new LabeledMediaFileResource($noAnswerPersonalAudioFile);
        $this->noAnswerPersonalAudioFile->setName('noAnswerPersonalAudioFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $noAnswerPersonalAudioFile
     */
    public function getNoAnswerPersonalAudioFile()
    {
        return $this->noAnswerPersonalAudioFile;
    }

    /**
     * 
     */
    public function setNoAnswerPersonalVideoFile(LabeledMediaFileResource $noAnswerPersonalVideoFile = null)
    {
        $this->noAnswerPersonalVideoFile = ($noAnswerPersonalVideoFile InstanceOf LabeledMediaFileResource)
             ? $noAnswerPersonalVideoFile
             : new LabeledMediaFileResource($noAnswerPersonalVideoFile);
        $this->noAnswerPersonalVideoFile->setName('noAnswerPersonalVideoFile');
        return $this;
    }

    /**
     * 
     * @return LabeledMediaFileResource $noAnswerPersonalVideoFile
     */
    public function getNoAnswerPersonalVideoFile()
    {
        return $this->noAnswerPersonalVideoFile;
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting01(VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting01 = null)
    {
        $this->noAnswerAlternateGreeting01 = ($noAnswerAlternateGreeting01 InstanceOf VoiceMessagingAlternateNoAnswerGreetingModify16)
             ? $noAnswerAlternateGreeting01
             : new VoiceMessagingAlternateNoAnswerGreetingModify16($noAnswerAlternateGreeting01);
        $this->noAnswerAlternateGreeting01->setName('noAnswerAlternateGreeting01');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting01
     */
    public function getNoAnswerAlternateGreeting01()
    {
        return $this->noAnswerAlternateGreeting01;
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting02(VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting02 = null)
    {
        $this->noAnswerAlternateGreeting02 = ($noAnswerAlternateGreeting02 InstanceOf VoiceMessagingAlternateNoAnswerGreetingModify16)
             ? $noAnswerAlternateGreeting02
             : new VoiceMessagingAlternateNoAnswerGreetingModify16($noAnswerAlternateGreeting02);
        $this->noAnswerAlternateGreeting02->setName('noAnswerAlternateGreeting02');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting02
     */
    public function getNoAnswerAlternateGreeting02()
    {
        return $this->noAnswerAlternateGreeting02;
    }

    /**
     * 
     */
    public function setNoAnswerAlternateGreeting03(VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting03 = null)
    {
        $this->noAnswerAlternateGreeting03 = ($noAnswerAlternateGreeting03 InstanceOf VoiceMessagingAlternateNoAnswerGreetingModify16)
             ? $noAnswerAlternateGreeting03
             : new VoiceMessagingAlternateNoAnswerGreetingModify16($noAnswerAlternateGreeting03);
        $this->noAnswerAlternateGreeting03->setName('noAnswerAlternateGreeting03');
        return $this;
    }

    /**
     * 
     * @return VoiceMessagingAlternateNoAnswerGreetingModify16 $noAnswerAlternateGreeting03
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
