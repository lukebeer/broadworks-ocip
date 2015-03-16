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
 * CommPilot Express SR No Answer Settings used in the context of a get.
 */
class CommPilotExpressSRNoAnswer extends ComplexType implements ComplexInterface
{
    public    $name = 'CommPilotExpressSRNoAnswer';
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
        $this->ringForwardNumbers->setName('ringForwardNumbers');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $ringForwardNumbers
     */
    public function getRingForwardNumbers()
    {
        return ($this->ringForwardNumbers) ? $this->ringForwardNumbers->getValue() : null;
    }

    /**
     * 
     */
    public function setForwardingNumberList($forwardingNumberList = null)
    {
        $this->forwardingNumberList = new SimpleContent($forwardingNumberList);
        $this->forwardingNumberList->setName('forwardingNumberList');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $forwardingNumberList
     */
    public function getForwardingNumberList()
    {
        return ($this->forwardingNumberList) ? $this->forwardingNumberList->getValue() : null;
    }

    /**
     * 
     */
    public function setStillNoAnswer($stillNoAnswer = null)
    {
        $this->stillNoAnswer = new SimpleContent($stillNoAnswer);
        $this->stillNoAnswer->setName('stillNoAnswer');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $stillNoAnswer
     */
    public function getStillNoAnswer()
    {
        return ($this->stillNoAnswer) ? $this->stillNoAnswer->getValue() : null;
    }
}
