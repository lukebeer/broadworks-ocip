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
 * CommPilot Express Available Out Of Office Configuration used in the context of a get.
 */
class CommPilotExpressAvailableOutOfOffice extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommPilotExpressAvailableOutOfOffice';
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
    public function setIncomingCallNotify($incomingCallNotify = null)
    {
        $this->incomingCallNotify = new SimpleContent($incomingCallNotify);
        $this->incomingCallNotify->setElementName('incomingCallNotify');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $incomingCallNotify
     */
    public function getIncomingCallNotify()
    {
        return ($this->incomingCallNotify)
            ? $this->incomingCallNotify->getElementValue()
            : null;
    }
}
