<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * CommPilot Express SR Available In Office Configuration used in the context of a get.
 */
class CommPilotExpressSRBusy extends ComplexType implements ComplexInterface
{
    public    $name = 'CommPilotExpressSRBusy';
    protected $incomingCalls;
    protected $incomingCallNotify;

    public function __construct(
         $incomingCalls = '',
         $incomingCallNotify = ''
    ) {
        $this->setIncomingCalls($incomingCalls);
        $this->setIncomingCallNotify($incomingCallNotify);
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
    public function setIncomingCallNotify($incomingCallNotify = null)
    {
        $this->incomingCallNotify = new SimpleContent($incomingCallNotify);
        $this->incomingCallNotify->setName('incomingCallNotify');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $incomingCallNotify
     */
    public function getIncomingCallNotify()
    {
        return ($this->incomingCallNotify) ? $this->incomingCallNotify->getValue() : null;
    }
}
