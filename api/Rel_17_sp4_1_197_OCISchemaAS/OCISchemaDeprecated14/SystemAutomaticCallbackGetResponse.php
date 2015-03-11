<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxMonitorsPerOriginator;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxCallbackRings;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMonitorMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\AutomaticCallbackWaitBetweenRetryOriginatorMinutes;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\AutomaticCallbackMaxRetryOriginatorMinutes;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to SystemAutomaticCallbackGetRequest.
 *         Replaced By: SystemAutomaticCallbackGetResponse15
 */
class SystemAutomaticCallbackGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                              = 'SystemAutomaticCallbackGetResponse';
    protected $monitorMinutes                    = null;
    protected $waitBetweenRetryOriginatorMinutes = null;
    protected $maxMonitorsPerOriginator          = null;
    protected $maxCallbackRings                  = null;
    protected $maxRetryOriginatorMinutes         = null;

    /**
     * @return SystemAutomaticCallbackGetResponse
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
    public function setWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes = null)
    {
        if (!$waitBetweenRetryOriginatorMinutes) return $this;
        $this->waitBetweenRetryOriginatorMinutes = ($waitBetweenRetryOriginatorMinutes InstanceOf AutomaticCallbackWaitBetweenRetryOriginatorMinutes)
             ? $waitBetweenRetryOriginatorMinutes
             : new AutomaticCallbackWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes);
        $this->waitBetweenRetryOriginatorMinutes->setName('waitBetweenRetryOriginatorMinutes');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackWaitBetweenRetryOriginatorMinutes
     */
    public function getWaitBetweenRetryOriginatorMinutes()
    {
        return $this->waitBetweenRetryOriginatorMinutes->getValue();
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
    public function setMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes = null)
    {
        if (!$maxRetryOriginatorMinutes) return $this;
        $this->maxRetryOriginatorMinutes = ($maxRetryOriginatorMinutes InstanceOf AutomaticCallbackMaxRetryOriginatorMinutes)
             ? $maxRetryOriginatorMinutes
             : new AutomaticCallbackMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes);
        $this->maxRetryOriginatorMinutes->setName('maxRetryOriginatorMinutes');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMaxRetryOriginatorMinutes
     */
    public function getMaxRetryOriginatorMinutes()
    {
        return $this->maxRetryOriginatorMinutes->getValue();
    }
}
