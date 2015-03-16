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
 *         It is used when modifying a user's voice messaging greeting.
 */
class VoiceMessagingAlternateNoAnswerGreetingModify16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'VoiceMessagingAlternateNoAnswerGreetingModify16';
    protected $name;
    protected $audioFile;
    protected $videoFile;

    public function __construct(
         $name = null,
         $audioFile = null,
         $videoFile = null
    ) {
        $this->setName($name);
        $this->setAudioFile($audioFile);
        $this->setVideoFile($videoFile);
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
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFile($audioFile = null)
    {
        $this->audioFile = new SimpleContent($audioFile);
        $this->audioFile->setElementName('audioFile');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFile
     */
    public function getAudioFile()
    {
        return ($this->audioFile)
            ? $this->audioFile->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFile($videoFile = null)
    {
        $this->videoFile = new SimpleContent($videoFile);
        $this->videoFile->setElementName('videoFile');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoFile
     */
    public function getVideoFile()
    {
        return ($this->videoFile)
            ? $this->videoFile->getElementValue()
            : null;
    }
}
