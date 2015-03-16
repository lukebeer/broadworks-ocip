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
 * Modifies the system's automatic callback attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAutomaticCallbackModifyRequest15 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAutomaticCallbackModifyRequest15';
    protected $monitorMinutes;
    protected $maxMonitorsPerOriginator;
    protected $maxCallbackRings;
    protected $maxMonitorsPerTerminator;
    protected $terminatorIdleGuardSeconds;
    protected $callbackMethod;
    protected $pollingIntervalSeconds;
    protected $activationDigit;

    public function __construct(
         $monitorMinutes = null,
         $maxMonitorsPerOriginator = null,
         $maxCallbackRings = null,
         $maxMonitorsPerTerminator = null,
         $terminatorIdleGuardSeconds = null,
         $callbackMethod = null,
         $pollingIntervalSeconds = null,
         $activationDigit = null
    ) {
        $this->setMonitorMinutes($monitorMinutes);
        $this->setMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
        $this->setMaxCallbackRings($maxCallbackRings);
        $this->setMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
        $this->setTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds);
        $this->setCallbackMethod($callbackMethod);
        $this->setPollingIntervalSeconds($pollingIntervalSeconds);
        $this->setActivationDigit($activationDigit);
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
    public function setMonitorMinutes($monitorMinutes = null)
    {
        $this->monitorMinutes = ($monitorMinutes InstanceOf AutomaticCallbackMonitorMinutes)
             ? $monitorMinutes
             : new AutomaticCallbackMonitorMinutes($monitorMinutes);
        $this->monitorMinutes->setElementName('monitorMinutes');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMonitorMinutes $monitorMinutes
     */
    public function getMonitorMinutes()
    {
        return ($this->monitorMinutes)
            ? $this->monitorMinutes->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxMonitorsPerOriginator($maxMonitorsPerOriginator = null)
    {
        $this->maxMonitorsPerOriginator = ($maxMonitorsPerOriginator InstanceOf AutomaticCallbackMaxMonitorsPerOriginator)
             ? $maxMonitorsPerOriginator
             : new AutomaticCallbackMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
        $this->maxMonitorsPerOriginator->setElementName('maxMonitorsPerOriginator');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMaxMonitorsPerOriginator $maxMonitorsPerOriginator
     */
    public function getMaxMonitorsPerOriginator()
    {
        return ($this->maxMonitorsPerOriginator)
            ? $this->maxMonitorsPerOriginator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxCallbackRings($maxCallbackRings = null)
    {
        $this->maxCallbackRings = ($maxCallbackRings InstanceOf AutomaticCallbackMaxCallbackRings)
             ? $maxCallbackRings
             : new AutomaticCallbackMaxCallbackRings($maxCallbackRings);
        $this->maxCallbackRings->setElementName('maxCallbackRings');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMaxCallbackRings $maxCallbackRings
     */
    public function getMaxCallbackRings()
    {
        return ($this->maxCallbackRings)
            ? $this->maxCallbackRings->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxMonitorsPerTerminator($maxMonitorsPerTerminator = null)
    {
        $this->maxMonitorsPerTerminator = ($maxMonitorsPerTerminator InstanceOf AutomaticCallbackMaxMonitorsPerTerminator)
             ? $maxMonitorsPerTerminator
             : new AutomaticCallbackMaxMonitorsPerTerminator($maxMonitorsPerTerminator);
        $this->maxMonitorsPerTerminator->setElementName('maxMonitorsPerTerminator');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMaxMonitorsPerTerminator $maxMonitorsPerTerminator
     */
    public function getMaxMonitorsPerTerminator()
    {
        return ($this->maxMonitorsPerTerminator)
            ? $this->maxMonitorsPerTerminator->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds = null)
    {
        $this->terminatorIdleGuardSeconds = ($terminatorIdleGuardSeconds InstanceOf AutomaticCallbackTerminatorIdleGuardSeconds)
             ? $terminatorIdleGuardSeconds
             : new AutomaticCallbackTerminatorIdleGuardSeconds($terminatorIdleGuardSeconds);
        $this->terminatorIdleGuardSeconds->setElementName('terminatorIdleGuardSeconds');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackTerminatorIdleGuardSeconds $terminatorIdleGuardSeconds
     */
    public function getTerminatorIdleGuardSeconds()
    {
        return ($this->terminatorIdleGuardSeconds)
            ? $this->terminatorIdleGuardSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallbackMethod($callbackMethod = null)
    {
        $this->callbackMethod = ($callbackMethod InstanceOf AutomaticCallbackMethod)
             ? $callbackMethod
             : new AutomaticCallbackMethod($callbackMethod);
        $this->callbackMethod->setElementName('callbackMethod');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMethod $callbackMethod
     */
    public function getCallbackMethod()
    {
        return ($this->callbackMethod)
            ? $this->callbackMethod->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPollingIntervalSeconds($pollingIntervalSeconds = null)
    {
        $this->pollingIntervalSeconds = ($pollingIntervalSeconds InstanceOf AutomaticCallbackPollingIntervalSeconds)
             ? $pollingIntervalSeconds
             : new AutomaticCallbackPollingIntervalSeconds($pollingIntervalSeconds);
        $this->pollingIntervalSeconds->setElementName('pollingIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackPollingIntervalSeconds $pollingIntervalSeconds
     */
    public function getPollingIntervalSeconds()
    {
        return ($this->pollingIntervalSeconds)
            ? $this->pollingIntervalSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setActivationDigit($activationDigit = null)
    {
        $this->activationDigit = ($activationDigit InstanceOf AutomaticCallbackActivationDigit)
             ? $activationDigit
             : new AutomaticCallbackActivationDigit($activationDigit);
        $this->activationDigit->setElementName('activationDigit');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackActivationDigit $activationDigit
     */
    public function getActivationDigit()
    {
        return ($this->activationDigit)
            ? $this->activationDigit->getElementValue()
            : null;
    }
}
