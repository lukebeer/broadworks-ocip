<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains the call center media on hold source configuration.
 */
class CallCenterMediaOnHoldSourceRead16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterMediaOnHoldSourceRead16';
    protected $audioMessageSourceSelection;
    protected $audioFileUrl;
    protected $audioFileDescription;
    protected $audioFileMediaType;
    protected $externalAudioSource;
    protected $videoMessageSourceSelection;
    protected $videoFileUrl;
    protected $videoFileDescription;
    protected $videoFileMediaType;
    protected $externalVideoSource;

    public function __construct(
         $audioMessageSourceSelection = '',
         $audioFileUrl = null,
         $audioFileDescription = null,
         $audioFileMediaType = null,
         $externalAudioSource = null,
         $videoMessageSourceSelection = null,
         $videoFileUrl = null,
         $videoFileDescription = null,
         $videoFileMediaType = null,
         $externalVideoSource = null
    ) {
        $this->setAudioMessageSourceSelection($audioMessageSourceSelection);
        $this->setAudioFileUrl($audioFileUrl);
        $this->setAudioFileDescription($audioFileDescription);
        $this->setAudioFileMediaType($audioFileMediaType);
        $this->setExternalAudioSource($externalAudioSource);
        $this->setVideoMessageSourceSelection($videoMessageSourceSelection);
        $this->setVideoFileUrl($videoFileUrl);
        $this->setVideoFileDescription($videoFileDescription);
        $this->setVideoFileMediaType($videoFileMediaType);
        $this->setExternalVideoSource($externalVideoSource);
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
    public function setAudioMessageSourceSelection($audioMessageSourceSelection = null)
    {
        $this->audioMessageSourceSelection = new SimpleContent($audioMessageSourceSelection);
        $this->audioMessageSourceSelection->setElementName('audioMessageSourceSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioMessageSourceSelection
     */
    public function getAudioMessageSourceSelection()
    {
        return ($this->audioMessageSourceSelection)
            ? $this->audioMessageSourceSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFileUrl($audioFileUrl = null)
    {
        $this->audioFileUrl = new SimpleContent($audioFileUrl);
        $this->audioFileUrl->setElementName('audioFileUrl');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFileUrl
     */
    public function getAudioFileUrl()
    {
        return ($this->audioFileUrl)
            ? $this->audioFileUrl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        $this->audioFileDescription = new SimpleContent($audioFileDescription);
        $this->audioFileDescription->setElementName('audioFileDescription');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFileDescription
     */
    public function getAudioFileDescription()
    {
        return ($this->audioFileDescription)
            ? $this->audioFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFileMediaType($audioFileMediaType = null)
    {
        $this->audioFileMediaType = new SimpleContent($audioFileMediaType);
        $this->audioFileMediaType->setElementName('audioFileMediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFileMediaType
     */
    public function getAudioFileMediaType()
    {
        return ($this->audioFileMediaType)
            ? $this->audioFileMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExternalAudioSource($externalAudioSource = null)
    {
        $this->externalAudioSource = new SimpleContent($externalAudioSource);
        $this->externalAudioSource->setElementName('externalAudioSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $externalAudioSource
     */
    public function getExternalAudioSource()
    {
        return ($this->externalAudioSource)
            ? $this->externalAudioSource->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoMessageSourceSelection($videoMessageSourceSelection = null)
    {
        $this->videoMessageSourceSelection = new SimpleContent($videoMessageSourceSelection);
        $this->videoMessageSourceSelection->setElementName('videoMessageSourceSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoMessageSourceSelection
     */
    public function getVideoMessageSourceSelection()
    {
        return ($this->videoMessageSourceSelection)
            ? $this->videoMessageSourceSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFileUrl($videoFileUrl = null)
    {
        $this->videoFileUrl = new SimpleContent($videoFileUrl);
        $this->videoFileUrl->setElementName('videoFileUrl');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoFileUrl
     */
    public function getVideoFileUrl()
    {
        return ($this->videoFileUrl)
            ? $this->videoFileUrl->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        $this->videoFileDescription = new SimpleContent($videoFileDescription);
        $this->videoFileDescription->setElementName('videoFileDescription');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoFileDescription
     */
    public function getVideoFileDescription()
    {
        return ($this->videoFileDescription)
            ? $this->videoFileDescription->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFileMediaType($videoFileMediaType = null)
    {
        $this->videoFileMediaType = new SimpleContent($videoFileMediaType);
        $this->videoFileMediaType->setElementName('videoFileMediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoFileMediaType
     */
    public function getVideoFileMediaType()
    {
        return ($this->videoFileMediaType)
            ? $this->videoFileMediaType->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExternalVideoSource($externalVideoSource = null)
    {
        $this->externalVideoSource = new SimpleContent($externalVideoSource);
        $this->externalVideoSource->setElementName('externalVideoSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $externalVideoSource
     */
    public function getExternalVideoSource()
    {
        return ($this->externalVideoSource)
            ? $this->externalVideoSource->getElementValue()
            : null;
    }
}
