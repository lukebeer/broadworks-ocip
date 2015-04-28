<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkDeviceMonitorFailedPollingIntervalMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkDeviceMonitorPollingIntervalMinutes;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemNetworkDeviceMonitorParametersGetListRequest.
 *         Contains a list of system Network Device Polling parameters.
 */
class SystemNetworkDeviceMonitorParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemNetworkDeviceMonitorParametersGetResponse';
    protected $pollingIntervalMinutes;
    protected $failedPollingIntervalMinutes;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkDeviceMonitorParametersGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setPollingIntervalMinutes($pollingIntervalMinutes = null)
    {
        $this->pollingIntervalMinutes = ($pollingIntervalMinutes InstanceOf NetworkDeviceMonitorPollingIntervalMinutes)
             ? $pollingIntervalMinutes
             : new NetworkDeviceMonitorPollingIntervalMinutes($pollingIntervalMinutes);
        $this->pollingIntervalMinutes->setElementName('pollingIntervalMinutes');
        return $this;
    }

    /**
     * 
     * @return NetworkDeviceMonitorPollingIntervalMinutes $pollingIntervalMinutes
     */
    public function getPollingIntervalMinutes()
    {
        return ($this->pollingIntervalMinutes)
            ? $this->pollingIntervalMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFailedPollingIntervalMinutes($failedPollingIntervalMinutes = null)
    {
        $this->failedPollingIntervalMinutes = ($failedPollingIntervalMinutes InstanceOf NetworkDeviceMonitorFailedPollingIntervalMinutes)
             ? $failedPollingIntervalMinutes
             : new NetworkDeviceMonitorFailedPollingIntervalMinutes($failedPollingIntervalMinutes);
        $this->failedPollingIntervalMinutes->setElementName('failedPollingIntervalMinutes');
        return $this;
    }

    /**
     * 
     * @return NetworkDeviceMonitorFailedPollingIntervalMinutes $failedPollingIntervalMinutes
     */
    public function getFailedPollingIntervalMinutes()
    {
        return ($this->failedPollingIntervalMinutes)
            ? $this->failedPollingIntervalMinutes->getElementValue()
            : null;
    }
}
