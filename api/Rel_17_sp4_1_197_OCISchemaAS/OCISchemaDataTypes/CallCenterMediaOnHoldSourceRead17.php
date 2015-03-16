<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains the call center media on hold source configuration.
 */
class CallCenterMediaOnHoldSourceRead17 extends ComplexType implements ComplexInterface
{
    public    $name = 'CallCenterMediaOnHoldSourceRead17';
    protected $audioMessageSourceSelection;
    protected $audioUrlList;
    protected $audioFileList;
    protected $audioMediaTypeList;
    protected $externalAudioSource;
    protected $videoMessageSourceSelection;
    protected $videoUrlList;
    protected $videoFileList;
    protected $videoMediaTypeList;
    protected $externalVideoSource;

    public function __construct(
         $audioMessageSourceSelection = '',
         $audioUrlList = null,
         $audioFileList = null,
         $audioMediaTypeList = null,
         $externalAudioSource = null,
         $videoMessageSourceSelection = null,
         $videoUrlList = null,
         $videoFileList = null,
         $videoMediaTypeList = null,
         $externalVideoSource = null
    ) {
        $this->setAudioMessageSourceSelection($audioMessageSourceSelection);
        $this->setAudioUrlList($audioUrlList);
        $this->setAudioFileList($audioFileList);
        $this->setAudioMediaTypeList($audioMediaTypeList);
        $this->setExternalAudioSource($externalAudioSource);
        $this->setVideoMessageSourceSelection($videoMessageSourceSelection);
        $this->setVideoUrlList($videoUrlList);
        $this->setVideoFileList($videoFileList);
        $this->setVideoMediaTypeList($videoMediaTypeList);
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
        $this->audioMessageSourceSelection->setName('audioMessageSourceSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioMessageSourceSelection
     */
    public function getAudioMessageSourceSelection()
    {
        return ($this->audioMessageSourceSelection) ? $this->audioMessageSourceSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioUrlList($audioUrlList = null)
    {
        $this->audioUrlList = new SimpleContent($audioUrlList);
        $this->audioUrlList->setName('audioUrlList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioUrlList
     */
    public function getAudioUrlList()
    {
        return ($this->audioUrlList) ? $this->audioUrlList->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioFileList($audioFileList = null)
    {
        $this->audioFileList = new SimpleContent($audioFileList);
        $this->audioFileList->setName('audioFileList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFileList
     */
    public function getAudioFileList()
    {
        return ($this->audioFileList) ? $this->audioFileList->getValue() : null;
    }

    /**
     * 
     */
    public function setAudioMediaTypeList($audioMediaTypeList = null)
    {
        $this->audioMediaTypeList = new SimpleContent($audioMediaTypeList);
        $this->audioMediaTypeList->setName('audioMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioMediaTypeList
     */
    public function getAudioMediaTypeList()
    {
        return ($this->audioMediaTypeList) ? $this->audioMediaTypeList->getValue() : null;
    }

    /**
     * 
     */
    public function setExternalAudioSource($externalAudioSource = null)
    {
        $this->externalAudioSource = new SimpleContent($externalAudioSource);
        $this->externalAudioSource->setName('externalAudioSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $externalAudioSource
     */
    public function getExternalAudioSource()
    {
        return ($this->externalAudioSource) ? $this->externalAudioSource->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoMessageSourceSelection($videoMessageSourceSelection = null)
    {
        $this->videoMessageSourceSelection = new SimpleContent($videoMessageSourceSelection);
        $this->videoMessageSourceSelection->setName('videoMessageSourceSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoMessageSourceSelection
     */
    public function getVideoMessageSourceSelection()
    {
        return ($this->videoMessageSourceSelection) ? $this->videoMessageSourceSelection->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoUrlList($videoUrlList = null)
    {
        $this->videoUrlList = new SimpleContent($videoUrlList);
        $this->videoUrlList->setName('videoUrlList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoUrlList
     */
    public function getVideoUrlList()
    {
        return ($this->videoUrlList) ? $this->videoUrlList->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoFileList($videoFileList = null)
    {
        $this->videoFileList = new SimpleContent($videoFileList);
        $this->videoFileList->setName('videoFileList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoFileList
     */
    public function getVideoFileList()
    {
        return ($this->videoFileList) ? $this->videoFileList->getValue() : null;
    }

    /**
     * 
     */
    public function setVideoMediaTypeList($videoMediaTypeList = null)
    {
        $this->videoMediaTypeList = new SimpleContent($videoMediaTypeList);
        $this->videoMediaTypeList->setName('videoMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoMediaTypeList
     */
    public function getVideoMediaTypeList()
    {
        return ($this->videoMediaTypeList) ? $this->videoMediaTypeList->getValue() : null;
    }

    /**
     * 
     */
    public function setExternalVideoSource($externalVideoSource = null)
    {
        $this->externalVideoSource = new SimpleContent($externalVideoSource);
        $this->externalVideoSource->setName('externalVideoSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $externalVideoSource
     */
    public function getExternalVideoSource()
    {
        return ($this->externalVideoSource) ? $this->externalVideoSource->getValue() : null;
    }
}
