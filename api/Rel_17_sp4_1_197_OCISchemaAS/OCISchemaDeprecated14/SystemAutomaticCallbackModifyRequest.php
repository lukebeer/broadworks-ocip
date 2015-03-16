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
 * Modifies the system's automatic callback attributes.
 *         The response is either a SuccessResponse or an ErrorResponse.
 *         Replaced By: SystemAutomaticCallbackModifyRequest15
 */
class SystemAutomaticCallbackModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemAutomaticCallbackModifyRequest';
    protected $monitorMinutes;
    protected $waitBetweenRetryOriginatorMinutes;
    protected $maxMonitorsPerOriginator;
    protected $maxCallbackRings;
    protected $maxRetryOriginatorMinutes;

    public function __construct(
         $monitorMinutes = null,
         $waitBetweenRetryOriginatorMinutes = null,
         $maxMonitorsPerOriginator = null,
         $maxCallbackRings = null,
         $maxRetryOriginatorMinutes = null
    ) {
        $this->setMonitorMinutes($monitorMinutes);
        $this->setWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes);
        $this->setMaxMonitorsPerOriginator($maxMonitorsPerOriginator);
        $this->setMaxCallbackRings($maxCallbackRings);
        $this->setMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes);
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
    public function setWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes = null)
    {
        $this->waitBetweenRetryOriginatorMinutes = ($waitBetweenRetryOriginatorMinutes InstanceOf AutomaticCallbackWaitBetweenRetryOriginatorMinutes)
             ? $waitBetweenRetryOriginatorMinutes
             : new AutomaticCallbackWaitBetweenRetryOriginatorMinutes($waitBetweenRetryOriginatorMinutes);
        $this->waitBetweenRetryOriginatorMinutes->setName('waitBetweenRetryOriginatorMinutes');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackWaitBetweenRetryOriginatorMinutes $waitBetweenRetryOriginatorMinutes
     */
    public function getWaitBetweenRetryOriginatorMinutes()
    {
        return ($this->waitBetweenRetryOriginatorMinutes) ? $this->waitBetweenRetryOriginatorMinutes->getValue() : null;
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
    public function setMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes = null)
    {
        $this->maxRetryOriginatorMinutes = ($maxRetryOriginatorMinutes InstanceOf AutomaticCallbackMaxRetryOriginatorMinutes)
             ? $maxRetryOriginatorMinutes
             : new AutomaticCallbackMaxRetryOriginatorMinutes($maxRetryOriginatorMinutes);
        $this->maxRetryOriginatorMinutes->setName('maxRetryOriginatorMinutes');
        return $this;
    }

    /**
     * 
     * @return AutomaticCallbackMaxRetryOriginatorMinutes $maxRetryOriginatorMinutes
     */
    public function getMaxRetryOriginatorMinutes()
    {
        return ($this->maxRetryOriginatorMinutes) ? $this->maxRetryOriginatorMinutes->getValue() : null;
    }
}
