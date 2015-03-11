<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingAlternateNoAnswerGreetingRead16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The configuration of a alternate no answer greeting.
 *         It is used when geting a user's voice messaging greeting.
 */
class VoiceMessagingAlternateNoAnswerGreetingRead16 extends ComplexType implements ComplexInterface
{
    public    $responseType   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging\VoiceMessagingAlternateNoAnswerGreetingRead16';
    public    $name           = 'VoiceMessagingAlternateNoAnswerGreetingRead16';
    protected $name           = null;
    protected $audioFile      = null;
    protected $audioMediaType = null;
    protected $videoFile      = null;
    protected $videoMediaType = null;

    public function __construct(
         $name,
         $audioFile = null,
         $audioMediaType = null,
         $videoFile = null,
         $videoMediaType = null
    ) {
        $this->setName($name);
        $this->setAudioFile($audioFile);
        $this->setAudioMediaType($audioMediaType);
        $this->setVideoFile($videoFile);
        $this->setVideoMediaType($videoMediaType);
    }

    /**
     * @return VoiceMessagingAlternateNoAnswerGreetingRead16
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = new SimpleContent($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setAudioFile($audioFile = null)
    {
        if (!$audioFile) return $this;
        $this->audioFile = new SimpleContent($audioFile);
        $this->audioFile->setName('audioFile');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAudioFile()
    {
        return $this->audioFile->getValue();
    }

    /**
     * 
     */
    public function setAudioMediaType($audioMediaType = null)
    {
        if (!$audioMediaType) return $this;
        $this->audioMediaType = new SimpleContent($audioMediaType);
        $this->audioMediaType->setName('audioMediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAudioMediaType()
    {
        return $this->audioMediaType->getValue();
    }

    /**
     * 
     */
    public function setVideoFile($videoFile = null)
    {
        if (!$videoFile) return $this;
        $this->videoFile = new SimpleContent($videoFile);
        $this->videoFile->setName('videoFile');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getVideoFile()
    {
        return $this->videoFile->getValue();
    }

    /**
     * 
     */
    public function setVideoMediaType($videoMediaType = null)
    {
        if (!$videoMediaType) return $this;
        $this->videoMediaType = new SimpleContent($videoMediaType);
        $this->videoMediaType->setName('videoMediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getVideoMediaType()
    {
        return $this->videoMediaType->getValue();
    }
}
