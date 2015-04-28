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
 * CommPilot Express Available In Office Configuration used in the context of a modify.
 */
class CommPilotExpressBusyModify extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommPilotExpressBusyModify';
    protected $incomingCalls;
    protected $voiceMailNotify;

    public function __construct(
         $incomingCalls = null,
         $voiceMailNotify = null
    ) {
        $this->setIncomingCalls($incomingCalls);
        $this->setVoiceMailNotify($voiceMailNotify);
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
    public function setVoiceMailNotify($voiceMailNotify = null)
    {
        $this->voiceMailNotify = new SimpleContent($voiceMailNotify);
        $this->voiceMailNotify->setElementName('voiceMailNotify');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $voiceMailNotify
     */
    public function getVoiceMailNotify()
    {
        return ($this->voiceMailNotify)
            ? $this->voiceMailNotify->getElementValue()
            : null;
    }
}
