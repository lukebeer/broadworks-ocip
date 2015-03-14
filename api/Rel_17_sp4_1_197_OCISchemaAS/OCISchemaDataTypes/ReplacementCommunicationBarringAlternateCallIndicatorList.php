<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleContent;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * A list of Communication Barring Alternate Call Indicator that replaces
 *         a previously configured list. By convention, an element of this type
 *         may be set nill to clear the list.
 */
class ReplacementCommunicationBarringAlternateCallIndicatorList extends ComplexType implements ComplexInterface
{
    public    $name                   = 'ReplacementCommunicationBarringAlternateCallIndicatorList';
    protected $alternateCallIndicator = null;

    public function __construct(
         $alternateCallIndicator = null
    ) {
        $this->setAlternateCallIndicator($alternateCallIndicator);
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
    public function setAlternateCallIndicator($alternateCallIndicator = null)
    {
        if (!$alternateCallIndicator) return $this;
        $this->alternateCallIndicator = new SimpleContent($alternateCallIndicator);
        $this->alternateCallIndicator->setName('alternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $alternateCallIndicator
     */
    public function getAlternateCallIndicator()
    {
        return $this->alternateCallIndicator->getValue();
    }
}
