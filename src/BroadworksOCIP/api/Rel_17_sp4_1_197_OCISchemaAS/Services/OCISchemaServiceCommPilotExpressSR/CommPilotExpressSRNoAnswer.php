<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpressSR; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * CommPilot Express SR No Answer Settings used in the context of a get.
 */
class CommPilotExpressSRNoAnswer extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommPilotExpressSRNoAnswer';
    protected $ringForwardNumbers;
    protected $forwardingNumberList;
    protected $stillNoAnswer;

    public function __construct(
         $ringForwardNumbers = '',
         $forwardingNumberList = '',
         $stillNoAnswer = ''
    ) {
        $this->setRingForwardNumbers($ringForwardNumbers);
        $this->setForwardingNumberList($forwardingNumberList);
        $this->setStillNoAnswer($stillNoAnswer);
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
    public function setRingForwardNumbers($ringForwardNumbers = null)
    {
        $this->ringForwardNumbers = new SimpleContent($ringForwardNumbers);
        $this->ringForwardNumbers->setElementName('ringForwardNumbers');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $ringForwardNumbers
     */
    public function getRingForwardNumbers()
    {
        return ($this->ringForwardNumbers)
            ? $this->ringForwardNumbers->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setForwardingNumberList($forwardingNumberList = null)
    {
        $this->forwardingNumberList = new SimpleContent($forwardingNumberList);
        $this->forwardingNumberList->setElementName('forwardingNumberList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $forwardingNumberList
     */
    public function getForwardingNumberList()
    {
        return ($this->forwardingNumberList)
            ? $this->forwardingNumberList->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStillNoAnswer($stillNoAnswer = null)
    {
        $this->stillNoAnswer = new SimpleContent($stillNoAnswer);
        $this->stillNoAnswer->setElementName('stillNoAnswer');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $stillNoAnswer
     */
    public function getStillNoAnswer()
    {
        return ($this->stillNoAnswer)
            ? $this->stillNoAnswer->getElementValue()
            : null;
    }
}
