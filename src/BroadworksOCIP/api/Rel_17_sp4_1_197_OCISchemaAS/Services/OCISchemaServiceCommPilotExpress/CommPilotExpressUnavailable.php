<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * CommPilot Express Unavailable Configuration used in the context of a get.
 */
class CommPilotExpressUnavailable extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommPilotExpressUnavailable';
    protected $incomingCalls;
    protected $voiceMailGreeting;

    public function __construct(
         $incomingCalls = '',
         $voiceMailGreeting = ''
    ) {
        $this->setIncomingCalls($incomingCalls);
        $this->setVoiceMailGreeting($voiceMailGreeting);
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
    public function setIncomingCalls($incomingCalls = null)
    {
        $this->incomingCalls = new SimpleContent($incomingCalls);
        $this->incomingCalls->setElementName('incomingCalls');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $incomingCalls
     */
    public function getIncomingCalls()
    {
        return ($this->incomingCalls)
            ? $this->incomingCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVoiceMailGreeting($voiceMailGreeting = null)
    {
        $this->voiceMailGreeting = new SimpleContent($voiceMailGreeting);
        $this->voiceMailGreeting->setElementName('voiceMailGreeting');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $voiceMailGreeting
     */
    public function getVoiceMailGreeting()
    {
        return ($this->voiceMailGreeting)
            ? $this->voiceMailGreeting->getElementValue()
            : null;
    }
}
