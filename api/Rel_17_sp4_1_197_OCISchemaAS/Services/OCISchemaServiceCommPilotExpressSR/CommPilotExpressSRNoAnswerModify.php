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
 * CommPilot Express SR No Answer Settings used in the context of a modify.
 */
class CommPilotExpressSRNoAnswerModify extends ComplexType implements ComplexInterface
{
    public    $name = 'CommPilotExpressSRNoAnswerModify';
    protected $ringFowardNumbers;
    protected $forwardingNumberList;
    protected $stillNoAnswer;

    public function __construct(
         $ringFowardNumbers = null,
         $forwardingNumberList = null,
         $stillNoAnswer = null
    ) {
        $this->setRingFowardNumbers($ringFowardNumbers);
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
    public function setRingFowardNumbers($ringFowardNumbers = null)
    {
        $this->ringFowardNumbers = new SimpleContent($ringFowardNumbers);
        $this->ringFowardNumbers->setName('ringFowardNumbers');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $ringFowardNumbers
     */
    public function getRingFowardNumbers()
    {
        return ($this->ringFowardNumbers) ? $this->ringFowardNumbers->getValue() : null;
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
