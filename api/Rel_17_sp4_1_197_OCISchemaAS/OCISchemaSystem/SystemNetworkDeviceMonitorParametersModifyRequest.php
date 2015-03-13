<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkDeviceMonitorFailedPollingIntervalMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\NetworkDeviceMonitorPollingIntervalMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify Network Device Polling system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemNetworkDeviceMonitorParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = 'SystemNetworkDeviceMonitorParametersModifyRequest';
    protected $pollingIntervalMinutes       = null;
    protected $failedPollingIntervalMinutes = null;

    public function __construct(
         $pollingIntervalMinutes = null,
         $failedPollingIntervalMinutes = null
    ) {
        $this->setPollingIntervalMinutes($pollingIntervalMinutes);
        $this->setFailedPollingIntervalMinutes($failedPollingIntervalMinutes);
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
    public function setPollingIntervalMinutes($pollingIntervalMinutes = null)
    {
        if (!$pollingIntervalMinutes) return $this;
        $this->pollingIntervalMinutes = ($pollingIntervalMinutes InstanceOf NetworkDeviceMonitorPollingIntervalMinutes)
             ? $pollingIntervalMinutes
             : new NetworkDeviceMonitorPollingIntervalMinutes($pollingIntervalMinutes);
        $this->pollingIntervalMinutes->setName('pollingIntervalMinutes');
        return $this;
    }

    /**
     * 
     * @return NetworkDeviceMonitorPollingIntervalMinutes $pollingIntervalMinutes
     */
    public function getPollingIntervalMinutes()
    {
        return $this->pollingIntervalMinutes->getValue();
    }

    /**
     * 
     */
    public function setFailedPollingIntervalMinutes($failedPollingIntervalMinutes = null)
    {
        if (!$failedPollingIntervalMinutes) return $this;
        $this->failedPollingIntervalMinutes = ($failedPollingIntervalMinutes InstanceOf NetworkDeviceMonitorFailedPollingIntervalMinutes)
             ? $failedPollingIntervalMinutes
             : new NetworkDeviceMonitorFailedPollingIntervalMinutes($failedPollingIntervalMinutes);
        $this->failedPollingIntervalMinutes->setName('failedPollingIntervalMinutes');
        return $this;
    }

    /**
     * 
     * @return NetworkDeviceMonitorFailedPollingIntervalMinutes $failedPollingIntervalMinutes
     */
    public function getFailedPollingIntervalMinutes()
    {
        return $this->failedPollingIntervalMinutes->getValue();
    }
}
