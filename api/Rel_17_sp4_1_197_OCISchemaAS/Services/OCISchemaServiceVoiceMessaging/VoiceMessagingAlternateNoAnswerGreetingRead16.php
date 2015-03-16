<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
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
    public    $name = 'VoiceMessagingAlternateNoAnswerGreetingRead16';
    protected $name;
    protected $audioFile;
    protected $audioMediaType;
    protected $videoFile;
    protected $videoMediaType;

    public function __construct(
         $name = '',
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
     * @return mixed $response
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
        $this->name = new SimpleContent($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $name
     */
    public function getName()
    {
        return ($this->name) ? $this->name->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioFile($audioFile = null)
    {
        $this->audioFile = new SimpleContent($audioFile);
        $this->audioFile->setName('audioFile');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFile
     */
    public function getAudioFile()
    {
        return ($this->audioFile) ? $this->audioFile->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = new SimpleContent($audioMediaType);
        $this->audioMediaType->setName('audioMediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioMediaType
     */
    public function getAudioMediaType()
    {
        return ($this->audioMediaType) ? $this->audioMediaType->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoFile($videoFile = null)
    {
        $this->videoFile = new SimpleContent($videoFile);
        $this->videoFile->setName('videoFile');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoFile
     */
    public function getVideoFile()
    {
        return ($this->videoFile) ? $this->videoFile->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = new SimpleContent($videoMediaType);
        $this->videoMediaType->setName('videoMediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoMediaType
     */
    public function getVideoMediaType()
    {
        return ($this->videoMediaType) ? $this->videoMediaType->getValue() : null;
    }
}
