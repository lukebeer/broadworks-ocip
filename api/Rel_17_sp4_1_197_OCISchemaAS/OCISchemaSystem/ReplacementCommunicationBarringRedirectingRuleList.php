<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of Communication Barring Redirecting Rules that replaces a
 *         previously configured list. By convention, an element of this type 
 *         may be set nill to clear the list.
 */
class ReplacementCommunicationBarringRedirectingRuleList extends ComplexType implements ComplexInterface
{
    public    $name = 'ReplacementCommunicationBarringRedirectingRuleList';
    protected $rule = null;

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
        if (!$rule) return $this;
        $this->rule = new SimpleContent($rule);
        $this->rule->setName('rule');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $rule
     */
    public function getRule()
    {
        return $this->rule->getValue();
    }
}
