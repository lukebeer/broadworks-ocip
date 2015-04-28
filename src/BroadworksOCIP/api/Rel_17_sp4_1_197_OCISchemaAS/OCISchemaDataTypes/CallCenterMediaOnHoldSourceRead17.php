<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains the call center media on hold source configuration.
 */
class CallCenterMediaOnHoldSourceRead17 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterMediaOnHoldSourceRead17';
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
    public function setAudioUrlList($audioUrlList = null)
    {
        $this->audioUrlList = new SimpleContent($audioUrlList);
        $this->audioUrlList->setElementName('audioUrlList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioUrlList
     */
    public function getAudioUrlList()
    {
        return ($this->audioUrlList)
            ? $this->audioUrlList->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioFileList($audioFileList = null)
    {
        $this->audioFileList = new SimpleContent($audioFileList);
        $this->audioFileList->setElementName('audioFileList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFileList
     */
    public function getAudioFileList()
    {
        return ($this->audioFileList)
            ? $this->audioFileList->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAudioMediaTypeList($audioMediaTypeList = null)
    {
        $this->audioMediaTypeList = new SimpleContent($audioMediaTypeList);
        $this->audioMediaTypeList->setElementName('audioMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioMediaTypeList
     */
    public function getAudioMediaTypeList()
    {
        return ($this->audioMediaTypeList)
            ? $this->audioMediaTypeList->getElementValue()
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
    public function setVideoUrlList($videoUrlList = null)
    {
        $this->videoUrlList = new SimpleContent($videoUrlList);
        $this->videoUrlList->setElementName('videoUrlList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoUrlList
     */
    public function getVideoUrlList()
    {
        return ($this->videoUrlList)
            ? $this->videoUrlList->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoFileList($videoFileList = null)
    {
        $this->videoFileList = new SimpleContent($videoFileList);
        $this->videoFileList->setElementName('videoFileList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoFileList
     */
    public function getVideoFileList()
    {
        return ($this->videoFileList)
            ? $this->videoFileList->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVideoMediaTypeList($videoMediaTypeList = null)
    {
        $this->videoMediaTypeList = new SimpleContent($videoMediaTypeList);
        $this->videoMediaTypeList->setElementName('videoMediaTypeList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $videoMediaTypeList
     */
    public function getVideoMediaTypeList()
    {
        return ($this->videoMediaTypeList)
            ? $this->videoMediaTypeList->getElementValue()
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
