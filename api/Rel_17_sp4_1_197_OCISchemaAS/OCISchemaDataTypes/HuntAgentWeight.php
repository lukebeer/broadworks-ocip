<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntAgentWeight;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The weighted call distribution weight for an agent.
 */
class HuntAgentWeight extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\HuntAgentWeight';
    public    $name        = 'HuntAgentWeight';
    protected $agentUserId = null;
    protected $weight      = null;

    public function __construct(
         $agentUserId,
         $weight
    ) {
        $this->setAgentUserId($agentUserId);
        $this->setWeight($weight);
    }

    /**
     * @return HuntAgentWeight
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
        if (!$agentUserId) return $this;
        $this->agentUserId = new SimpleContent($agentUserId);
        $this->agentUserId->setName('agentUserId');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getAgentUserId()
    {
        return $this->agentUserId->getValue();
    }

    /**
     * 
     */
    public function setWeight($weight = null)
    {
        if (!$weight) return $this;
        $this->weight = new SimpleContent($weight);
        $this->weight->setName('weight');
        return $this;
    }

    /**
     * 
     * @return SimpleContent
     */
    public function getWeight()
    {
        return $this->weight->getValue();
    }
}
