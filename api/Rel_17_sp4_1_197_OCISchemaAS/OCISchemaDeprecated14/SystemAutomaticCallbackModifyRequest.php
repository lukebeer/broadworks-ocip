<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutomaticCallbackMonitorMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutomaticCallbackWaitBetweenRetryOriginatorMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutomaticCallbackMaxMonitorsPerOriginator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutomaticCallbackMaxCallbackRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutomaticCallbackMaxRetryOriginatorMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the system's automatic callback attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: SystemAutomaticCallbackModifyRequest15
 */
class SystemAutomaticCallbackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $monitorMinutes=null,
             $waitBetweenRetryOriginatorMinutes=null,
             $maxMonitorsPerOriginator=null,
             $maxCallbackRings=null,
             $maxRetryOriginatorMinutes=null
    ) {
        $this->monitorMinutes                    = $monitorMinutes;
        $this->waitBetweenRetryOriginatorMinutes = $waitBetweenRetryOriginatorMinutes;
        $this->maxMonitorsPerOriginator          = $maxMonitorsPerOriginator;
        $this->maxCallbackRings                  = $maxCallbackRings;
        $this->maxRetryOriginatorMinutes         = $maxRetryOriginatorMinutes;
        $this->args                              = func_get_args();
    }

    public function setMonitorMinutes($monitorMinutes)
    {
        $monitorMinutes and $this->monitorMinutes = new AutomaticCallbackMonitorMinutes($monitorMinutes);
    }

    public function getMonitorMinutes()
    {
        return (!$this->monitorMinutes) ?: $this->monitorMinutes->value();
    }

    public function setWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes)
    {
        $waitBetweenRetryOriginatorMinutes and $this->waitBetweenRetryOriginatorMinutes = new AutomaticCallbackWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes);
    }

    public function getWaitBetweenRetryOriginatorMinutes()
    {
        return (!$this->waitBetweenRetryOriginatorMinutes) ?: $this->waitBetweenRetryOriginatorMinutes->value();
    }

    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator)
    {
        $maxMonitorsPerOriginator and $this->maxMonitorsPerOriginator = new AutomaticCallbackMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
    }

    public function getMaxMonitorsPerOriginator()
    {
        return (!$this->maxMonitorsPerOriginator) ?: $this->maxMonitorsPerOriginator->value();
    }

    public function setMaxCallbackRings($maxCallbackRings)
    {
        $maxCallbackRings and $this->maxCallbackRings = new AutomaticCallbackMaxCallbackRings($maxCallbackRings);
    }

    public function getMaxCallbackRings()
    {
        return (!$this->maxCallbackRings) ?: $this->maxCallbackRings->value();
    }

    public function setMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes)
    {
        $maxRetryOriginatorMinutes and $this->maxRetryOriginatorMinutes = new AutomaticCallbackMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes);
    }

    public function getMaxRetryOriginatorMinutes()
    {
        return (!$this->maxRetryOriginatorMinutes) ?: $this->maxRetryOriginatorMinutes->value();
    }
}
