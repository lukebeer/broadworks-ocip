<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackTerminatorIdleGuardSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxMonitorsPerTerminator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxMonitorsPerOriginator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackPollingIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxCallbackRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMonitorMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMethod;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAutomaticCallbackGetRequest15sp2.
 */
class SystemAutomaticCallbackGetResponse15sp2 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemAutomaticCallbackGetResponse15sp2';
    protected $monitorMinutes;
    protected $maxMonitorsPerOriginator;
    protected $maxCallbackRings;
    protected $maxMonitorsPerTerminator;
    protected $terminatorIdleGuardSeconds;
    protected $callbackMethod;
    protected $pollingIntervalSeconds;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\SystemAutomaticCallbackGetResponse15sp2 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMonitorMinutes($monitorMinutes = null)
    {
        $this->monitorMinutes = ($monitorMinutes InstanceOf AutomaticCallbackMonitorMinutes)
             ? $monitorMinutes
             : new AutomaticCallbackMonitorMinutes($monitorMinutes);
        $this->monitorMinutes->setName('monitorMinutes');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMonitorMinutes $monitorMinutes
     */
    public function getMonitorMinutes()
    {
        return ($this->monitorMinutes) ? $this->monitorMinutes->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator = null)
    {
        $this->maxMonitorsPerOriginator = ($maxMonitorsPerOriginator InstanceOf AutomaticCallbackMaxMonitorsPerOriginator)
             ? $maxMonitorsPerOriginator
             : new AutomaticCallbackMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
        $this->maxMonitorsPerOriginator->setName('maxMonitorsPerOriginator');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMaxMonitorsPerOriginator $maxMonitorsPerOriginator
     */
    public function getMaxMonitorsPerOriginator()
    {
        return ($this->maxMonitorsPerOriginator) ? $this->maxMonitorsPerOriginator->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxCallbackRings($maxCallbackRings = null)
    {
        $this->maxCallbackRings = ($maxCallbackRings InstanceOf AutomaticCallbackMaxCallbackRings)
             ? $maxCallbackRings
             : new AutomaticCallbackMaxCallbackRings($maxCallbackRings);
        $this->maxCallbackRings->setName('maxCallbackRings');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMaxCallbackRings $maxCallbackRings
     */
    public function getMaxCallbackRings()
    {
        return ($this->maxCallbackRings) ? $this->maxCallbackRings->getValue() : null;
    }

    /**
     * 
     */
    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator = null)
    {
        $this->maxMonitorsPerTerminator = ($maxMonitorsPerTerminator InstanceOf AutomaticCallbackMaxMonitorsPerTerminator)
             ? $maxMonitorsPerTerminator
             : new AutomaticCallbackMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
        $this->maxMonitorsPerTerminator->setName('maxMonitorsPerTerminator');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMaxMonitorsPerTerminator $maxMonitorsPerTerminator
     */
    public function getMaxMonitorsPerTerminator()
    {
        return ($this->maxMonitorsPerTerminator) ? $this->maxMonitorsPerTerminator->getValue() : null;
    }

    /**
     * 
     */
    public function setTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds = null)
    {
        $this->terminatorIdleGuardSeconds = ($terminatorIdleGuardSeconds InstanceOf AutomaticCallbackTerminatorIdleGuardSeconds)
             ? $terminatorIdleGuardSeconds
             : new AutomaticCallbackTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds);
        $this->terminatorIdleGuardSeconds->setName('terminatorIdleGuardSeconds');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackTerminatorIdleGuardSeconds $terminatorIdleGuardSeconds
     */
    public function getTerminatorIdleGuardSeconds()
    {
        return ($this->terminatorIdleGuardSeconds) ? $this->terminatorIdleGuardSeconds->getValue() : null;
    }

    /**
     * 
     */
    public function setCallbackMethod($callbackMethod = null)
    {
        $this->callbackMethod = ($callbackMethod InstanceOf AutomaticCallbackMethod)
             ? $callbackMethod
             : new AutomaticCallbackMethod($callbackMethod);
        $this->callbackMethod->setName('callbackMethod');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMethod $callbackMethod
     */
    public function getCallbackMethod()
    {
        return ($this->callbackMethod) ? $this->callbackMethod->getValue() : null;
    }

    /**
     * 
     */
    public function setPollingIntervalSeconds($pollingIntervalSeconds = null)
    {
        $this->pollingIntervalSeconds = ($pollingIntervalSeconds InstanceOf AutomaticCallbackPollingIntervalSeconds)
             ? $pollingIntervalSeconds
             : new AutomaticCallbackPollingIntervalSeconds($pollingIntervalSeconds);
        $this->pollingIntervalSeconds->setName('pollingIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackPollingIntervalSeconds $pollingIntervalSeconds
     */
    public function getPollingIntervalSeconds()
    {
        return ($this->pollingIntervalSeconds) ? $this->pollingIntervalSeconds->getValue() : null;
    }
}
