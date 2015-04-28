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
 * A list of Communication Barring Alternate Call Indicator that replaces
 *         a previously configured list. By convention, an element of this type
 *         may be set nill to clear the list.
 */
class ReplacementCommunicationBarringAlternateCallIndicatorList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ReplacementCommunicationBarringAlternateCallIndicatorList';
    protected $alternateCallIndicator;

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
        $this->alternateCallIndicator = new SimpleContent($alternateCallIndicator);
        $this->alternateCallIndicator->setElementName('alternateCallIndicator');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $alternateCallIndicator
     */
    public function getAlternateCallIndicator()
    {
        return ($this->alternateCallIndicator)
            ? $this->alternateCallIndicator->getElementValue()
            : null;
    }
}
