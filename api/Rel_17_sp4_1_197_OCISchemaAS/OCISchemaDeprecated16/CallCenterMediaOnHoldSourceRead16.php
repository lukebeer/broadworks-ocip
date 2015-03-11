<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterMediaOnHoldSourceRead16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains the call center media on hold source configuration.
 */
class CallCenterMediaOnHoldSourceRead16 extends ComplexType implements ComplexInterface
{
    public    $responseType                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterMediaOnHoldSourceRead16';
    public    $name                        = 'CallCenterMediaOnHoldSourceRead16';
    protected $audioMessageSourceSelection = null;
    protected $audioFileUrl                = null;
    protected $audioFileDescription        = null;
    protected $audioFileMediaType          = null;
    protected $externalAudioSource         = null;
    protected $videoMessageSourceSelection = null;
    protected $videoFileUrl                = null;
    protected $videoFileDescription        = null;
    protected $videoFileMediaType          = null;
    protected $externalVideoSource         = null;

    public function __construct(
         $audioMessageSourceSelection,
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
     * @return CallCenterMediaOnHoldSourceRead16
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
        if (!$audioMessageSourceSelection) return $this;
        $this->audioMessageSourceSelection = new SimpleContent($audioMessageSourceSelection);
        $this->audioMessageSourceSelection->setName('audioMessageSourceSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAudioMessageSourceSelection()
    {
        return $this->audioMessageSourceSelection->getValue();
    }

    /**
     * 
     */
    public function setAudioFileUrl($audioFileUrl = null)
    {
        if (!$audioFileUrl) return $this;
        $this->audioFileUrl = new SimpleContent($audioFileUrl);
        $this->audioFileUrl->setName('audioFileUrl');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAudioFileUrl()
    {
        return $this->audioFileUrl->getValue();
    }

    /**
     * 
     */
    public function setAudioFileDescription($audioFileDescription = null)
    {
        if (!$audioFileDescription) return $this;
        $this->audioFileDescription = new SimpleContent($audioFileDescription);
        $this->audioFileDescription->setName('audioFileDescription');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAudioFileDescription()
    {
        return $this->audioFileDescription->getValue();
    }

    /**
     * 
     */
    public function setAudioFileMediaType($audioFileMediaType = null)
    {
        if (!$audioFileMediaType) return $this;
        $this->audioFileMediaType = new SimpleContent($audioFileMediaType);
        $this->audioFileMediaType->setName('audioFileMediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAudioFileMediaType()
    {
        return $this->audioFileMediaType->getValue();
    }

    /**
     * 
     */
    public function setExternalAudioSource($externalAudioSource = null)
    {
        if (!$externalAudioSource) return $this;
        $this->externalAudioSource = new SimpleContent($externalAudioSource);
        $this->externalAudioSource->setName('externalAudioSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getExternalAudioSource()
    {
        return $this->externalAudioSource->getValue();
    }

    /**
     * 
     */
    public function setVideoMessageSourceSelection($videoMessageSourceSelection = null)
    {
        if (!$videoMessageSourceSelection) return $this;
        $this->videoMessageSourceSelection = new SimpleContent($videoMessageSourceSelection);
        $this->videoMessageSourceSelection->setName('videoMessageSourceSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getVideoMessageSourceSelection()
    {
        return $this->videoMessageSourceSelection->getValue();
    }

    /**
     * 
     */
    public function setVideoFileUrl($videoFileUrl = null)
    {
        if (!$videoFileUrl) return $this;
        $this->videoFileUrl = new SimpleContent($videoFileUrl);
        $this->videoFileUrl->setName('videoFileUrl');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getVideoFileUrl()
    {
        return $this->videoFileUrl->getValue();
    }

    /**
     * 
     */
    public function setVideoFileDescription($videoFileDescription = null)
    {
        if (!$videoFileDescription) return $this;
        $this->videoFileDescription = new SimpleContent($videoFileDescription);
        $this->videoFileDescription->setName('videoFileDescription');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getVideoFileDescription()
    {
        return $this->videoFileDescription->getValue();
    }

    /**
     * 
     */
    public function setVideoFileMediaType($videoFileMediaType = null)
    {
        if (!$videoFileMediaType) return $this;
        $this->videoFileMediaType = new SimpleContent($videoFileMediaType);
        $this->videoFileMediaType->setName('videoFileMediaType');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getVideoFileMediaType()
    {
        return $this->videoFileMediaType->getValue();
    }

    /**
     * 
     */
    public function setExternalVideoSource($externalVideoSource = null)
    {
        if (!$externalVideoSource) return $this;
        $this->externalVideoSource = new SimpleContent($externalVideoSource);
        $this->externalVideoSource->setName('externalVideoSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getExternalVideoSource()
    {
        return $this->externalVideoSource->getValue();
    }
}
