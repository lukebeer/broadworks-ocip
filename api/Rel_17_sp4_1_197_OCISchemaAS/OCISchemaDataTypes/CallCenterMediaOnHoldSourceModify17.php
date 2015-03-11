<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceModify17;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains the call center media on hold source configuration.
 */
class CallCenterMediaOnHoldSourceModify17 extends ComplexType implements ComplexInterface
{
    public    $responseType                = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallCenterMediaOnHoldSourceModify17';
    public    $name                        = 'CallCenterMediaOnHoldSourceModify17';
    protected $audioMessageSourceSelection = null;
    protected $audioUrlList                = null;
    protected $audioFileList               = null;
    protected $externalAudioSource         = null;
    protected $videoMessageSourceSelection = null;
    protected $videoUrlList                = null;
    protected $videoFileList               = null;
    protected $externalVideoSource         = null;

    public function __construct(
         $audioMessageSourceSelection = null,
         $audioUrlList = null,
         $audioFileList = null,
         $externalAudioSource = null,
         $videoMessageSourceSelection = null,
         $videoUrlList = null,
         $videoFileList = null,
         $externalVideoSource = null
    ) {
        $this->setAudioMessageSourceSelection($audioMessageSourceSelection);
        $this->setAudioUrlList($audioUrlList);
        $this->setAudioFileList($audioFileList);
        $this->setExternalAudioSource($externalAudioSource);
        $this->setVideoMessageSourceSelection($videoMessageSourceSelection);
        $this->setVideoUrlList($videoUrlList);
        $this->setVideoFileList($videoFileList);
        $this->setExternalVideoSource($externalVideoSource);
    }

    /**
     * @return CallCenterMediaOnHoldSourceModify17
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
    public function setAudioUrlList($audioUrlList = null)
    {
        if (!$audioUrlList) return $this;
        $this->audioUrlList = new SimpleContent($audioUrlList);
        $this->audioUrlList->setName('audioUrlList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAudioUrlList()
    {
        return $this->audioUrlList->getValue();
    }

    /**
     * 
     */
    public function setAudioFileList($audioFileList = null)
    {
        if (!$audioFileList) return $this;
        $this->audioFileList = new SimpleContent($audioFileList);
        $this->audioFileList->setName('audioFileList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAudioFileList()
    {
        return $this->audioFileList->getValue();
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
    public function setVideoUrlList($videoUrlList = null)
    {
        if (!$videoUrlList) return $this;
        $this->videoUrlList = new SimpleContent($videoUrlList);
        $this->videoUrlList->setName('videoUrlList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getVideoUrlList()
    {
        return $this->videoUrlList->getValue();
    }

    /**
     * 
     */
    public function setVideoFileList($videoFileList = null)
    {
        if (!$videoFileList) return $this;
        $this->videoFileList = new SimpleContent($videoFileList);
        $this->videoFileList->setName('videoFileList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getVideoFileList()
    {
        return $this->videoFileList->getValue();
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
