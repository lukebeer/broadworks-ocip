<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Trunk group details (order and weight) for each trunk group
 */
class EnterpriseTrunkPriorityWeightedTrunkGroup extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseTrunkPriorityWeightedTrunkGroup';
    protected $trunkGroup;
    protected $priority;
    protected $weight;

    public function __construct(
         $trunkGroup = '',
         $priority = '',
         $weight = ''
    ) {
        $this->setTrunkGroup($trunkGroup);
        $this->setPriority($priority);
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
    public function setTrunkGroup($trunkGroup = null)
    {
        $this->trunkGroup = new SimpleContent($trunkGroup);
        $this->trunkGroup->setElementName('trunkGroup');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $trunkGroup
     */
    public function getTrunkGroup()
    {
        return ($this->trunkGroup)
            ? $this->trunkGroup->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPriority($priority = null)
    {
        $this->priority = new SimpleContent($priority);
        $this->priority->setElementName('priority');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $priority
     */
    public function getPriority()
    {
        return ($this->priority)
            ? $this->priority->getElementValue()
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
