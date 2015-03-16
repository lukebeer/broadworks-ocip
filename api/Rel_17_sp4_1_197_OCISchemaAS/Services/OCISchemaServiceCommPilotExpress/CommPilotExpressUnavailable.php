<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CommPilot Express Unavailable Configuration used in the context of a get.
 */
class CommPilotExpressUnavailable extends ComplexType implements ComplexInterface
{
    public    $name = 'CommPilotExpressUnavailable';
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
        $this->incomingCalls->setName('incomingCalls');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $incomingCalls
     */
    public function getIncomingCalls()
    {
        return ($this->incomingCalls) ? $this->incomingCalls->getValue() : null;
    }

    /**
     * 
     */
    public function setVoiceMailGreeting($voiceMailGreeting = null)
    {
        $this->voiceMailGreeting = new SimpleContent($voiceMailGreeting);
        $this->voiceMailGreeting->setName('voiceMailGreeting');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $voiceMailGreeting
     */
    public function getVoiceMailGreeting()
    {
        return ($this->voiceMailGreeting) ? $this->voiceMailGreeting->getValue() : null;
    }
}
