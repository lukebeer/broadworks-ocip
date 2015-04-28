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
 * CommPilot Express SR Forward Numbers with number of times to ring.
 */
class CommPilotExpressSRRedirectionWithRingList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CommPilotExpressSRRedirectionWithRingList';
    protected $numberEntry;

    public function __construct(
         $numberEntry = null
    ) {
        $this->setNumberEntry($numberEntry);
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
    public function setNumberEntry($numberEntry = null)
    {
        $this->numberEntry = new SimpleContent($numberEntry);
        $this->numberEntry->setElementName('numberEntry');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $numberEntry
     */
    public function getNumberEntry()
    {
        return ($this->numberEntry)
            ? $this->numberEntry->getElementValue()
            : null;
    }
}
