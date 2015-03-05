<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutomaticCallbackMonitorMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutomaticCallbackMaxMonitorsPerOriginator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutomaticCallbackMaxCallbackRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutomaticCallbackMaxMonitorsPerTerminator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AutomaticCallbackTerminatorIdleGuardSeconds;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemAutomaticCallbackGetRequest15.
 * 
 *             Replaced By: SystemAutomaticCallbackGetResponse15sp2
 */
class SystemAutomaticCallbackGetResponse15 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $monitorMinutes,
             $maxMonitorsPerOriginator,
             $maxCallbackRings,
             $maxMonitorsPerTerminator,
             $terminatorIdleGuardSeconds
    ) {
        $this->monitorMinutes             = $monitorMinutes;
        $this->maxMonitorsPerOriginator   = $maxMonitorsPerOriginator;
        $this->maxCallbackRings           = $maxCallbackRings;
        $this->maxMonitorsPerTerminator   = $maxMonitorsPerTerminator;
        $this->terminatorIdleGuardSeconds = $terminatorIdleGuardSeconds;
        $this->args                       = func_get_args();
    }

    public function setMonitorMinutes($monitorMinutes)
    {
        $monitorMinutes and $this->monitorMinutes = new AutomaticCallbackMonitorMinutes($monitorMinutes);
    }

    public function getMonitorMinutes()
    {
        return (!$this->monitorMinutes) ?: $this->monitorMinutes->value();
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

    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator)
    {
        $maxMonitorsPerTerminator and $this->maxMonitorsPerTerminator = new AutomaticCallbackMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
    }

    public function getMaxMonitorsPerTerminator()
    {
        return (!$this->maxMonitorsPerTerminator) ?: $this->maxMonitorsPerTerminator->value();
    }

    public function setTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds)
    {
        $terminatorIdleGuardSeconds and $this->terminatorIdleGuardSeconds = new AutomaticCallbackTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds);
    }

    public function getTerminatorIdleGuardSeconds()
    {
        return (!$this->terminatorIdleGuardSeconds) ?: $this->terminatorIdleGuardSeconds->value();
    }
}
