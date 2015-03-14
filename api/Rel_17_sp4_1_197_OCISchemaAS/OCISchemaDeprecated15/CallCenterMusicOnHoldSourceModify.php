<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains the music on hold source configuration.
 */
class CallCenterMusicOnHoldSourceModify extends ComplexType implements ComplexInterface
{
    public    $name                    = 'CallCenterMusicOnHoldSourceModify';
    protected $audioFilePreferredCodec = null;
    protected $messageSourceSelection  = null;
    protected $customSource            = null;

    public function __construct(
         $audioFilePreferredCodec = null,
         $messageSourceSelection = null,
         $customSource = null
    ) {
        $this->setAudioFilePreferredCodec($audioFilePreferredCodec);
        $this->setMessageSourceSelection($messageSourceSelection);
        $this->setCustomSource($customSource);
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
        if (!$audioFilePreferredCodec) return $this;
        $this->audioFilePreferredCodec = new SimpleContent($audioFilePreferredCodec);
        $this->audioFilePreferredCodec->setName('audioFilePreferredCodec');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $audioFilePreferredCodec
     */
    public function getAudioFilePreferredCodec()
    {
        return $this->audioFilePreferredCodec->getValue();
    }

    /**
     * 
     */
    public function setMessageSourceSelection($messageSourceSelection = null)
    {
        if (!$messageSourceSelection) return $this;
        $this->messageSourceSelection = new SimpleContent($messageSourceSelection);
        $this->messageSourceSelection->setName('messageSourceSelection');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $messageSourceSelection
     */
    public function getMessageSourceSelection()
    {
        return $this->messageSourceSelection->getValue();
    }

    /**
     * 
     */
    public function setCustomSource($customSource = null)
    {
        if (!$customSource) return $this;
        $this->customSource = new SimpleContent($customSource);
        $this->customSource->setName('customSource');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $customSource
     */
    public function getCustomSource()
    {
        return $this->customSource->getValue();
    }
}
