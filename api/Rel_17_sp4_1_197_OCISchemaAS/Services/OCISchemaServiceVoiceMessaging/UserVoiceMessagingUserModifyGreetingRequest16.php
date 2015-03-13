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
    public    $name                          = 'UserVoiceMessagingUserModifyGreetingRequest16';
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
        if (!$userId) return $this;
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
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setBusyAnnouncementSelection($busyAnnouncementSelection = null)
    {
        if (!$busyAnnouncementSelection) return $this;
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
        return $this->busyAnnouncementSelection->getValue();
    }

    /**
     * 
     */
    public function setBusyPersonalAudioFile(LabeledMediaFileResource $busyPersonalAudioFile = null)
    {
        if (!$busyPersonalAudioFile) return $this;
        $this->busyPersonalAudioFile = $busyPersonalAudioFile;
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
        if (!$busyPersonalVideoFile) return $this;
        $this->busyPersonalVideoFile = $busyPersonalVideoFile;
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
        if (!$noAnswerAnnouncementSelection) return $this;
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
        return $this->noAnswerAnnouncementSelection->getValue();
    }

    /**
     * 
     */
    public function setNoAnswerPersonalAudioFile(LabeledMediaFileResource $noAnswerPersonalAudioFile = null)
    {
        if (!$noAnswerPersonalAudioFile) return $this;
        $this->noAnswerPersonalAudioFile = $noAnswerPersonalAudioFile;
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
        if (!$noAnswerPersonalVideoFile) return $this;
        $this->noAnswerPersonalVideoFile = $noAnswerPersonalVideoFile;
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
        if (!$noAnswerAlternateGreeting01) return $this;
        $this->noAnswerAlternateGreeting01 = $noAnswerAlternateGreeting01;
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
        if (!$noAnswerAlternateGreeting02) return $this;
        $this->noAnswerAlternateGreeting02 = $noAnswerAlternateGreeting02;
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
        if (!$noAnswerAlternateGreeting03) return $this;
        $this->noAnswerAlternateGreeting03 = $noAnswerAlternateGreeting03;
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
        if (!$noAnswerNumberOfRings) return $this;
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
        return $this->noAnswerNumberOfRings->getValue();
    }
}
