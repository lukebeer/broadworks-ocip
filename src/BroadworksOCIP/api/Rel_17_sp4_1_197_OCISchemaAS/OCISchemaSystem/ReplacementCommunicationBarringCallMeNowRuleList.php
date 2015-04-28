<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A list of Communication Barring CallMeNow Rules that replaces a
 *         previously configured list. By convention, an element of this type 
 *         may be set nill to clear the list.
 */
class ReplacementCommunicationBarringCallMeNowRuleList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ReplacementCommunicationBarringCallMeNowRuleList';
    protected $rule;

    public function __construct(
         $rule = null
    ) {
        $this->setRule($rule);
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
    public function setRule($rule = null)
    {
        $this->rule = new SimpleContent($rule);
        $this->rule->setElementName('rule');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $rule
     */
    public function getRule()
    {
        return ($this->rule)
            ? $this->rule->getElementValue()
            : null;
    }
}
