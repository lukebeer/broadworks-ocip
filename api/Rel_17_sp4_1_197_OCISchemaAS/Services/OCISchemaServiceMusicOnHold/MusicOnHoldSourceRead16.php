<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMusicOnHold; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains the music on hold source configuration.
 */
class MusicOnHoldSourceRead16 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'MusicOnHoldSourceRead16';
    protected $audioFilePreferredCodec;
    protected $messageSourceSelection;
    protected $customSource;
    protected $externalSource;

    public function __construct(
         $audioFilePreferredCodec = '',
         $messageSourceSelection = '',
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
