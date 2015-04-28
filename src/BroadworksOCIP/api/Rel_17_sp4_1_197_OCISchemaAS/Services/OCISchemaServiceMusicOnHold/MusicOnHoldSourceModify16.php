<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains the music on hold source configuration.
 */
class MusicOnHoldSourceModify16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'MusicOnHoldSourceModify16';
    protected $audioFilePreferredCodec;
    protected $messageSourceSelection;
    protected $customSource;
    protected $externalSource;

    public function __construct(
         $audioFilePreferredCodec = null,
         $messageSourceSelection = null,
         $customSource = null,
         $externalSource = null
    ) {
        $this->setAudioFilePreferredCodec($audioFilePreferredCodec);
        $this->setMessageSourceSelection($messageSourceSelection);
        $this->setCustomSource($customSource);
        $this->setExternalSource($externalSource);
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
    public function setAudioFilePreferredCodec($audioFilePreferredCodec = null)
    {
        $this->audioFilePreferredCodec = new SimpleContent($audioFilePreferredCodec);
        $this->audioFilePreferredCodec->setElementName('audioFilePreferredCodec');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFilePreferredCodec
     */
    public function getAudioFilePreferredCodec()
    {
        return ($this->audioFilePreferredCodec)
            ? $this->audioFilePreferredCodec->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMessageSourceSelection($messageSourceSelection = null)
    {
        $this->messageSourceSelection = new SimpleContent($messageSourceSelection);
        $this->messageSourceSelection->setElementName('messageSourceSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $messageSourceSelection
     */
    public function getMessageSourceSelection()
    {
        return ($this->messageSourceSelection)
            ? $this->messageSourceSelection->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCustomSource($customSource = null)
    {
        $this->customSource = new SimpleContent($customSource);
        $this->customSource->setElementName('customSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $customSource
     */
    public function getCustomSource()
    {
        return ($this->customSource)
            ? $this->customSource->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExternalSource($externalSource = null)
    {
        $this->externalSource = new SimpleContent($externalSource);
        $this->externalSource->setElementName('externalSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $externalSource
     */
    public function getExternalSource()
    {
        return ($this->externalSource)
            ? $this->externalSource->getElementValue()
            : null;
    }
}
