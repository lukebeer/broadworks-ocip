<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * The configuration of a alternate no answer greeting.
 *         It is used when geting a user's voice messaging greeting.
 */
class VoiceMessagingAlternateNoAnswerGreetingRead16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'VoiceMessagingAlternateNoAnswerGreetingRead16';
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
    public function setAudioMediaType($audioMediaType = null)
    {
        $this->audioMediaType = new SimpleContent($audioMediaType);
        $this->audioMediaType->setElementName('audioMediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioMediaType
     */
    public function getAudioMediaType()
    {
        return ($this->audioMediaType)
            ? $this->audioMediaType->getElementValue()
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

    /**
     * 
     */
    public function setVideoMediaType($videoMediaType = null)
    {
        $this->videoMediaType = new SimpleContent($videoMediaType);
        $this->videoMediaType->setElementName('videoMediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoMediaType
     */
    public function getVideoMediaType()
    {
        return ($this->videoMediaType)
            ? $this->videoMediaType->getElementValue()
            : null;
    }
}
