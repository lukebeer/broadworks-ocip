<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackTerminatorIdleGuardSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxMonitorsPerOriginator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxMonitorsPerTerminator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxCallbackRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMonitorMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemAutomaticCallbackGetResponse15;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAutomaticCallbackGetRequest15.
 * 
 *             Replaced By: SystemAutomaticCallbackGetResponse15sp2
 */
class SystemAutomaticCallbackGetResponse15 extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $monitorMinutes             = null;
    protected $maxMonitorsPerOriginator   = null;
    protected $maxCallbackRings           = null;
    protected $maxMonitorsPerTerminator   = null;
    protected $terminatorIdleGuardSeconds = null;

    /**
     * @return SystemAutomaticCallbackGetResponse15
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Automatic Callback monitor minutes.
     */
    public function setMonitorMinutes($monitorMinutes = null)
    {
        $this->monitorMinutes = ($monitorMinutes InstanceOf AutomaticCallbackMonitorMinutes)
             ? $monitorMinutes
             : new AutomaticCallbackMonitorMinutes($monitorMinutes);
    }

    /**
     * Automatic Callback monitor minutes.
     */
    public function getMonitorMinutes()
    {
        return (!$this->monitorMinutes) ?: $this->monitorMinutes->getValue();
    }

    /**
     * Maximum monitors per originator.
     */
    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator = null)
    {
        $this->maxMonitorsPerOriginator = ($maxMonitorsPerOriginator InstanceOf AutomaticCallbackMaxMonitorsPerOriginator)
             ? $maxMonitorsPerOriginator
             : new AutomaticCallbackMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
    }

    /**
     * Maximum monitors per originator.
     */
    public function getMaxMonitorsPerOriginator()
    {
        return (!$this->maxMonitorsPerOriginator) ?: $this->maxMonitorsPerOriginator->getValue();
    }

    /**
     * Maximum callback rings.
     */
    public function setMaxCallbackRings($maxCallbackRings = null)
    {
        $this->maxCallbackRings = ($maxCallbackRings InstanceOf AutomaticCallbackMaxCallbackRings)
             ? $maxCallbackRings
             : new AutomaticCallbackMaxCallbackRings($maxCallbackRings);
    }

    /**
     * Maximum callback rings.
     */
    public function getMaxCallbackRings()
    {
        return (!$this->maxCallbackRings) ?: $this->maxCallbackRings->getValue();
    }

    /**
     * Maximum monitors per terminator.
     */
    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator = null)
    {
        $this->maxMonitorsPerTerminator = ($maxMonitorsPerTerminator InstanceOf AutomaticCallbackMaxMonitorsPerTerminator)
             ? $maxMonitorsPerTerminator
             : new AutomaticCallbackMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
    }

    /**
     * Maximum monitors per terminator.
     */
    public function getMaxMonitorsPerTerminator()
    {
        return (!$this->maxMonitorsPerTerminator) ?: $this->maxMonitorsPerTerminator->getValue();
    }

    /**
     * Idle guard timer seconds.
     */
    public function setTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds = null)
    {
        $this->terminatorIdleGuardSeconds = ($terminatorIdleGuardSeconds InstanceOf AutomaticCallbackTerminatorIdleGuardSeconds)
             ? $terminatorIdleGuardSeconds
             : new AutomaticCallbackTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds);
    }

    /**
     * Idle guard timer seconds.
     */
    public function getTerminatorIdleGuardSeconds()
    {
        return (!$this->terminatorIdleGuardSeconds) ?: $this->terminatorIdleGuardSeconds->getValue();
    }
}
