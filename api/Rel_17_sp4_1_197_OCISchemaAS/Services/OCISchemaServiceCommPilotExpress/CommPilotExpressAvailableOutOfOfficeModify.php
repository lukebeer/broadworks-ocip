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
 * CommPilot Express Available Out Of Office Configuration used in the context of a modify.
 */
class CommPilotExpressAvailableOutOfOfficeModify extends ComplexType implements ComplexInterface
{
    public    $name               = 'CommPilotExpressAvailableOutOfOfficeModify';
    protected $incomingCalls      = null;
    protected $incomingCallNotify = null;

    public function __construct(
         $incomingCalls = null,
         $incomingCallNotify = null
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
    public function setIncomingCallNotify($incomingCallNotify = null)
    {
        if (!$incomingCallNotify) return $this;
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
        return $this->incomingCallNotify->getValue();
    }
}
