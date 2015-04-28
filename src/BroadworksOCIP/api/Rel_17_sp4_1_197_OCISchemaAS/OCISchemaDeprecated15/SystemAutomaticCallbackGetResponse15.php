<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackTerminatorIdleGuardSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxMonitorsPerOriginator;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxMonitorsPerTerminator;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxCallbackRings;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMonitorMinutes;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemAutomaticCallbackGetRequest15.
 * 
 *             Replaced By: SystemAutomaticCallbackGetResponse15sp2
 */
class SystemAutomaticCallbackGetResponse15 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAutomaticCallbackGetResponse15';
    protected $monitorMinutes;
    protected $maxMonitorsPerOriginator;
    protected $maxCallbackRings;
    protected $maxMonitorsPerTerminator;
    protected $terminatorIdleGuardSeconds;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\SystemAutomaticCallbackGetResponse15 $response
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
}
