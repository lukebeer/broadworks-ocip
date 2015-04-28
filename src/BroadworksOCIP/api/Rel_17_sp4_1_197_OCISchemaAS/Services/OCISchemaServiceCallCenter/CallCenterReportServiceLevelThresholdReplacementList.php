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
 * A list of call center reporting service level threshold seconds that replaces a previously configured list.
 */
class CallCenterReportServiceLevelThresholdReplacementList extends ComplexType implements ComplexInterface
{
    public    $elementName = 'CallCenterReportServiceLevelThresholdReplacementList';
    protected $serviceLevelThresholdSeconds;

    public function __construct(
         $serviceLevelThresholdSeconds = null
    ) {
        $this->setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds);
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
    public function setServiceLevelThresholdSeconds($serviceLevelThresholdSeconds = null)
    {
        $this->serviceLevelThresholdSeconds = new SimpleContent($serviceLevelThresholdSeconds);
        $this->serviceLevelThresholdSeconds->setElementName('serviceLevelThresholdSeconds');
        return $this;
    }

    /**
     * 
     * @return SimpleContent $serviceLevelThresholdSeconds
     */
    public function getServiceLevelThresholdSeconds()
    {
        return ($this->serviceLevelThresholdSeconds)
            ? $this->serviceLevelThresholdSeconds->getElementValue()
            : null;
    }
}
