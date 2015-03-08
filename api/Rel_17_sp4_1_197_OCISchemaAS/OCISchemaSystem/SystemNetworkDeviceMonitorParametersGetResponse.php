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


/**
     * Response to SystemNetworkDeviceMonitorParametersGetListRequest.
 *         Contains a list of system Network Device Polling parameters.
 */
class SystemNetworkDeviceMonitorParametersGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemNetworkDeviceMonitorParametersGetResponse';
    public    $name                         = __CLASS__;
    protected $pollingIntervalMinutes       = null;
    protected $failedPollingIntervalMinutes = null;


    /**
     * Network Device polling interval in minutes.
     */
    public function setPollingIntervalMinutes($pollingIntervalMinutes = null)
    {
        $this->pollingIntervalMinutes = ($pollingIntervalMinutes InstanceOf NetworkDeviceMonitorPollingIntervalMinutes)
             ? $pollingIntervalMinutes
             : new NetworkDeviceMonitorPollingIntervalMinutes($pollingIntervalMinutes);
    }

    /**
     * Network Device polling interval in minutes.
     */
    public function getPollingIntervalMinutes()
    {
        return (!$this->pollingIntervalMinutes) ?: $this->pollingIntervalMinutes->getValue();
    }

    /**
     * Network Device failed polling interval in minutes.
     */
    public function setFailedPollingIntervalMinutes($failedPollingIntervalMinutes = null)
    {
        $this->failedPollingIntervalMinutes = ($failedPollingIntervalMinutes InstanceOf NetworkDeviceMonitorFailedPollingIntervalMinutes)
             ? $failedPollingIntervalMinutes
             : new NetworkDeviceMonitorFailedPollingIntervalMinutes($failedPollingIntervalMinutes);
    }

    /**
     * Network Device failed polling interval in minutes.
     */
    public function getFailedPollingIntervalMinutes()
    {
        return (!$this->failedPollingIntervalMinutes) ?: $this->failedPollingIntervalMinutes->getValue();
    }
}
