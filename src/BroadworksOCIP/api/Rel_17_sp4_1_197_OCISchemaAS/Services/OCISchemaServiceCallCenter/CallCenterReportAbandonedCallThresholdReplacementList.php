<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\SimpleContent;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * A list of call center reporting abandoned call threshold seconds that replaces a previously configured list.
 */
class CallCenterReportAbandonedCallThresholdReplacementList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterReportAbandonedCallThresholdReplacementList';
    protected $abandonedCallThresholdSeconds;

    public function __construct(
         $abandonedCallThresholdSeconds = null
    ) {
        $this->setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds);
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
    public function setAbandonedCallThresholdSeconds($abandonedCallThresholdSeconds = null)
    {
        $this->abandonedCallThresholdSeconds = new SimpleContent($abandonedCallThresholdSeconds);
        $this->abandonedCallThresholdSeconds->setElementName('abandonedCallThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $abandonedCallThresholdSeconds
     */
    public function getAbandonedCallThresholdSeconds()
    {
        return ($this->abandonedCallThresholdSeconds)
            ? $this->abandonedCallThresholdSeconds->getElementValue()
            : null;
    }
}
