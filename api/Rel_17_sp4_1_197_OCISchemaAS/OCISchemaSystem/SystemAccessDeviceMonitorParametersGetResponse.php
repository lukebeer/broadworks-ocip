<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\AccessDeviceMonitorPollingIntervalMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemAccessDeviceMonitorParametersGetListRequest.
 *         Contains a list of system Access Device Monitor parameters.
 */
class SystemAccessDeviceMonitorParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                   = __CLASS__;
    protected $pollingIntervalMinutes = null;


    /**
     * Polling interval in minutes.
     *         Setting the monitoring interval to zero will turn it off.
     */
    public function setPollingIntervalMinutes($pollingIntervalMinutes = null)
    {
        $this->pollingIntervalMinutes = ($pollingIntervalMinutes InstanceOf AccessDeviceMonitorPollingIntervalMinutes)
             ? $pollingIntervalMinutes
             : new AccessDeviceMonitorPollingIntervalMinutes($pollingIntervalMinutes);
    }

    /**
     * Polling interval in minutes.
     *         Setting the monitoring interval to zero will turn it off.
     */
    public function getPollingIntervalMinutes()
    {
        return (!$this->pollingIntervalMinutes) ?: $this->pollingIntervalMinutes->getValue();
    }
}
