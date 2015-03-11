<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressUnavailableModify;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CommPilot Express Unavailable Configuration used in the context of a modify.
 */
class CommPilotExpressUnavailableModify extends ComplexType implements ComplexInterface
{
    public    $responseType      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress\CommPilotExpressUnavailableModify';
    public    $name              = 'CommPilotExpressUnavailableModify';
    protected $incomingCalls     = null;
    protected $voiceMailGreeting = null;

    public function __construct(
         $incomingCalls = null,
         $voiceMailGreeting = null
    ) {
        $this->setIncomingCalls($incomingCalls);
        $this->setVoiceMailGreeting($voiceMailGreeting);
    }

    /**
     * @return CommPilotExpressUnavailableModify
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
        if (!$incomingCalls) return $this;
        $this->incomingCalls = new SimpleContent($incomingCalls);
        $this->incomingCalls->setName('incomingCalls');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getIncomingCalls()
    {
        return $this->incomingCalls->getValue();
    }

    /**
     * 
     */
    public function setVoiceMailGreeting($voiceMailGreeting = null)
    {
        if (!$voiceMailGreeting) return $this;
        $this->voiceMailGreeting = new SimpleContent($voiceMailGreeting);
        $this->voiceMailGreeting->setName('voiceMailGreeting');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getVoiceMailGreeting()
    {
        return $this->voiceMailGreeting->getValue();
    }
}
