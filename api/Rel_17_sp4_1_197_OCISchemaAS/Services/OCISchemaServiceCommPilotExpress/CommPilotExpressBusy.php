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
 * CommPilot Express Available In Office Configuration used in the context of a get.
 */
class CommPilotExpressBusy extends ComplexType implements ComplexInterface
{
    public    $name            = 'CommPilotExpressBusy';
    protected $incomingCalls   = null;
    protected $voiceMailNotify = null;

    public function __construct(
         $incomingCalls,
         $voiceMailNotify
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
        if (!$incomingCalls) return $this;
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
        return $this->incomingCalls->getValue();
    }

    /**
     * 
     */
    public function setVoiceMailNotify($voiceMailNotify = null)
    {
        if (!$voiceMailNotify) return $this;
        $this->voiceMailNotify = new SimpleContent($voiceMailNotify);
        $this->voiceMailNotify->setName('voiceMailNotify');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $voiceMailNotify
     */
    public function getVoiceMailNotify()
    {
        return $this->voiceMailNotify->getValue();
    }
}
