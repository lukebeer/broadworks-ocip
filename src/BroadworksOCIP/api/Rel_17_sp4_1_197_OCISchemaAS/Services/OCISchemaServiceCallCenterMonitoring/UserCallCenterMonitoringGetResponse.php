<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenterMonitoring; 

use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to UserCallCenterMonitoringGetRequest.
 */
class UserCallCenterMonitoringGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserCallCenterMonitoringGetResponse';
    protected $playToneToAgentForSilentMonitoring;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenterMonitoring\UserCallCenterMonitoringGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPlayToneToAgentForSilentMonitoring($playToneToAgentForSilentMonitoring = null)
    {
        $this->playToneToAgentForSilentMonitoring = new PrimitiveType($playToneToAgentForSilentMonitoring);
        $this->playToneToAgentForSilentMonitoring->setElementName('playToneToAgentForSilentMonitoring');
        return $this;
    }

    /**
     * 
     * @return boolean $playToneToAgentForSilentMonitoring
     */
    public function getPlayToneToAgentForSilentMonitoring()
    {
        return ($this->playToneToAgentForSilentMonitoring)
            ? $this->playToneToAgentForSilentMonitoring->getElementValue()
            : null;
    }
}
