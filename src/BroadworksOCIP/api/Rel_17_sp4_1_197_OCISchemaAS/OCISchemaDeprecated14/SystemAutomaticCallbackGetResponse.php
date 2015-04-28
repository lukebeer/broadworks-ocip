<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxMonitorsPerOriginator;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMaxCallbackRings;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback\AutomaticCallbackMonitorMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\AutomaticCallbackWaitBetweenRetryOriginatorMinutes;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\AutomaticCallbackMaxRetryOriginatorMinutes;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to SystemAutomaticCallbackGetRequest.
 *         Replaced By: SystemAutomaticCallbackGetResponse15
 */
class SystemAutomaticCallbackGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAutomaticCallbackGetResponse';
    protected $monitorMinutes;
    protected $waitBetweenRetryOriginatorMinutes;
    protected $maxMonitorsPerOriginator;
    protected $maxCallbackRings;
    protected $maxRetryOriginatorMinutes;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\SystemAutomaticCallbackGetResponse $response
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
    public function setWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes = null)
    {
        $this->waitBetweenRetryOriginatorMinutes = ($waitBetweenRetryOriginatorMinutes InstanceOf AutomaticCallbackWaitBetweenRetryOriginatorMinutes)
             ? $waitBetweenRetryOriginatorMinutes
             : new AutomaticCallbackWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes);
        $this->waitBetweenRetryOriginatorMinutes->setElementName('waitBetweenRetryOriginatorMinutes');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackWaitBetweenRetryOriginatorMinutes $waitBetweenRetryOriginatorMinutes
     */
    public function getWaitBetweenRetryOriginatorMinutes()
    {
        return ($this->waitBetweenRetryOriginatorMinutes)
            ? $this->waitBetweenRetryOriginatorMinutes->getElementValue()
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
    public function setMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes = null)
    {
        $this->maxRetryOriginatorMinutes = ($maxRetryOriginatorMinutes InstanceOf AutomaticCallbackMaxRetryOriginatorMinutes)
             ? $maxRetryOriginatorMinutes
             : new AutomaticCallbackMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes);
        $this->maxRetryOriginatorMinutes->setElementName('maxRetryOriginatorMinutes');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMaxRetryOriginatorMinutes $maxRetryOriginatorMinutes
     */
    public function getMaxRetryOriginatorMinutes()
    {
        return ($this->maxRetryOriginatorMinutes)
            ? $this->maxRetryOriginatorMinutes->getElementValue()
            : null;
    }
}
