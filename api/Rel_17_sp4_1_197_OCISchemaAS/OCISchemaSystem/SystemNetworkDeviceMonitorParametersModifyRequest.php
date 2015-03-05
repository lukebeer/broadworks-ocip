<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkDeviceMonitorPollingIntervalMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkDeviceMonitorFailedPollingIntervalMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify Network Device Polling system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemNetworkDeviceMonitorParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $pollingIntervalMinutes=null,
             $failedPollingIntervalMinutes=null
    ) {
        $this->pollingIntervalMinutes       = $pollingIntervalMinutes;
        $this->failedPollingIntervalMinutes = $failedPollingIntervalMinutes;
        $this->args                         = func_get_args();
    }

    public function setPollingIntervalMinutes($pollingIntervalMinutes)
    {
        $pollingIntervalMinutes and $this->pollingIntervalMinutes = new NetworkDeviceMonitorPollingIntervalMinutes($pollingIntervalMinutes);
    }

    public function getPollingIntervalMinutes()
    {
        return (!$this->pollingIntervalMinutes) ?: $this->pollingIntervalMinutes->value();
    }

    public function setFailedPollingIntervalMinutes($failedPollingIntervalMinutes)
    {
        $failedPollingIntervalMinutes and $this->failedPollingIntervalMinutes = new NetworkDeviceMonitorFailedPollingIntervalMinutes($failedPollingIntervalMinutes);
    }

    public function getFailedPollingIntervalMinutes()
    {
        return (!$this->failedPollingIntervalMinutes) ?: $this->failedPollingIntervalMinutes->value();
    }
}
