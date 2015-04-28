<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * The weighted call distribution weight for an agent.
 */
class HuntAgentWeight extends ComplexType implements ComplexInterface
{
    public    $elementName = 'HuntAgentWeight';
    protected $agentUserId;
    protected $weight;

    public function __construct(
         $agentUserId = '',
         $weight = ''
    ) {
        $this->setAgentUserId($agentUserId);
        $this->setWeight($weight);
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
    public function setAgentUserId($agentUserId = null)
    {
        $this->agentUserId = new SimpleContent($agentUserId);
        $this->agentUserId->setElementName('agentUserId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $agentUserId
     */
    public function getAgentUserId()
    {
        return ($this->agentUserId)
            ? $this->agentUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setWeight($weight = null)
    {
        $this->weight = new SimpleContent($weight);
        $this->weight->setElementName('weight');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $weight
     */
    public function getWeight()
    {
        return ($this->weight)
            ? $this->weight->getElementValue()
            : null;
    }
}
