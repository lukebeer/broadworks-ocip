<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackTerminatorIdleGuardSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxMonitorsPerTerminator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxMonitorsPerOriginator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackPollingIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxCallbackRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackActivationDigit;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMonitorMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMethod;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAutomaticCallbackGetRequest17.
 */
class SystemAutomaticCallbackGetResponse17 extends ComplexType implements ComplexInterface
{
    public    $name                       = 'SystemAutomaticCallbackGetResponse17';
    protected $monitorMinutes             = null;
    protected $maxMonitorsPerOriginator   = null;
    protected $maxCallbackRings           = null;
    protected $maxMonitorsPerTerminator   = null;
    protected $terminatorIdleGuardSeconds = null;
    protected $callbackMethod             = null;
    protected $pollingIntervalSeconds     = null;
    protected $activationDigit            = null;

    /**
     * @return SystemAutomaticCallbackGetResponse17
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
        if (!$monitorMinutes) return $this;
        $this->monitorMinutes = ($monitorMinutes InstanceOf AutomaticCallbackMonitorMinutes)
             ? $monitorMinutes
             : new AutomaticCallbackMonitorMinutes($monitorMinutes);
        $this->monitorMinutes->setName('monitorMinutes');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMonitorMinutes
     */
    public function getMonitorMinutes()
    {
        return $this->monitorMinutes->getValue();
    }

    /**
     * 
     */
    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator = null)
    {
        if (!$maxMonitorsPerOriginator) return $this;
        $this->maxMonitorsPerOriginator = ($maxMonitorsPerOriginator InstanceOf AutomaticCallbackMaxMonitorsPerOriginator)
             ? $maxMonitorsPerOriginator
             : new AutomaticCallbackMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
        $this->maxMonitorsPerOriginator->setName('maxMonitorsPerOriginator');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMaxMonitorsPerOriginator
     */
    public function getMaxMonitorsPerOriginator()
    {
        return $this->maxMonitorsPerOriginator->getValue();
    }

    /**
     * 
     */
    public function setMaxCallbackRings($maxCallbackRings = null)
    {
        if (!$maxCallbackRings) return $this;
        $this->maxCallbackRings = ($maxCallbackRings InstanceOf AutomaticCallbackMaxCallbackRings)
             ? $maxCallbackRings
             : new AutomaticCallbackMaxCallbackRings($maxCallbackRings);
        $this->maxCallbackRings->setName('maxCallbackRings');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMaxCallbackRings
     */
    public function getMaxCallbackRings()
    {
        return $this->maxCallbackRings->getValue();
    }

    /**
     * 
     */
    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator = null)
    {
        if (!$maxMonitorsPerTerminator) return $this;
        $this->maxMonitorsPerTerminator = ($maxMonitorsPerTerminator InstanceOf AutomaticCallbackMaxMonitorsPerTerminator)
             ? $maxMonitorsPerTerminator
             : new AutomaticCallbackMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
        $this->maxMonitorsPerTerminator->setName('maxMonitorsPerTerminator');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMaxMonitorsPerTerminator
     */
    public function getMaxMonitorsPerTerminator()
    {
        return $this->maxMonitorsPerTerminator->getValue();
    }

    /**
     * 
     */
    public function setTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds = null)
    {
        if (!$terminatorIdleGuardSeconds) return $this;
        $this->terminatorIdleGuardSeconds = ($terminatorIdleGuardSeconds InstanceOf AutomaticCallbackTerminatorIdleGuardSeconds)
             ? $terminatorIdleGuardSeconds
             : new AutomaticCallbackTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds);
        $this->terminatorIdleGuardSeconds->setName('terminatorIdleGuardSeconds');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackTerminatorIdleGuardSeconds
     */
    public function getTerminatorIdleGuardSeconds()
    {
        return $this->terminatorIdleGuardSeconds->getValue();
    }

    /**
     * 
     */
    public function setCallbackMethod($callbackMethod = null)
    {
        if (!$callbackMethod) return $this;
        $this->callbackMethod = ($callbackMethod InstanceOf AutomaticCallbackMethod)
             ? $callbackMethod
             : new AutomaticCallbackMethod($callbackMethod);
        $this->callbackMethod->setName('callbackMethod');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMethod
     */
    public function getCallbackMethod()
    {
        return $this->callbackMethod->getValue();
    }

    /**
     * 
     */
    public function setPollingIntervalSeconds($pollingIntervalSeconds = null)
    {
        if (!$pollingIntervalSeconds) return $this;
        $this->pollingIntervalSeconds = ($pollingIntervalSeconds InstanceOf AutomaticCallbackPollingIntervalSeconds)
             ? $pollingIntervalSeconds
             : new AutomaticCallbackPollingIntervalSeconds($pollingIntervalSeconds);
        $this->pollingIntervalSeconds->setName('pollingIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackPollingIntervalSeconds
     */
    public function getPollingIntervalSeconds()
    {
        return $this->pollingIntervalSeconds->getValue();
    }

    /**
     * 
     */
    public function setActivationDigit($activationDigit = null)
    {
        if (!$activationDigit) return $this;
        $this->activationDigit = ($activationDigit InstanceOf AutomaticCallbackActivationDigit)
             ? $activationDigit
             : new AutomaticCallbackActivationDigit($activationDigit);
        $this->activationDigit->setName('activationDigit');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackActivationDigit
     */
    public function getActivationDigit()
    {
        return $this->activationDigit->getValue();
    }
}
