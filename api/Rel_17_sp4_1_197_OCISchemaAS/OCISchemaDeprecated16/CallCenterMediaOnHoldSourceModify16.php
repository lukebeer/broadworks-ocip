<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterMediaOnHoldSourceModify16;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains the call center media on hold source configuration.
 */
class CallCenterMediaOnHoldSourceModify16 extends ComplexType implements ComplexInterface
{
    public    $responseType                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\CallCenterMediaOnHoldSourceModify16';
    public    $name                        = 'CallCenterMediaOnHoldSourceModify16';
    protected $audioMessageSourceSelection = null;
    protected $audioFile                   = null;
    protected $externalAudioSource         = null;
    protected $videoMessageSourceSelection = null;
    protected $videoFile                   = null;
    protected $externalVideoSource         = null;

    public function __construct(
         $audioMessageSourceSelection = null,
         $audioFile = null,
         $externalAudioSource = null,
         $videoMessageSourceSelection = null,
         $videoFile = null,
         $externalVideoSource = null
    ) {
        $this->setAudioMessageSourceSelection($audioMessageSourceSelection);
        $this->setAudioFile($audioFile);
        $this->setExternalAudioSource($externalAudioSource);
        $this->setVideoMessageSourceSelection($videoMessageSourceSelection);
        $this->setVideoFile($videoFile);
        $this->setExternalVideoSource($externalVideoSource);
    }

    /**
     * @return CallCenterMediaOnHoldSourceModify16
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
