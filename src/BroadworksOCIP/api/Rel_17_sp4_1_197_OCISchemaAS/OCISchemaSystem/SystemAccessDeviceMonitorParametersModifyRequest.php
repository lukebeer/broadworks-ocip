<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\AccessDeviceMonitorPollingIntervalMinutes;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify Access Device Monitor system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAccessDeviceMonitorParametersModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemAccessDeviceMonitorParametersModifyRequest';
    protected $pollingIntervalMinutes;

    public function __construct(
         $pollingIntervalMinutes = null
    ) {
        $this->setPollingIntervalMinutes($pollingIntervalMinutes);
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
    public function setPollingIntervalMinutes($pollingIntervalMinutes = null)
    {
        $this->pollingIntervalMinutes = ($pollingIntervalMinutes InstanceOf AccessDeviceMonitorPollingIntervalMinutes)
             ? $pollingIntervalMinutes
             : new AccessDeviceMonitorPollingIntervalMinutes($pollingIntervalMinutes);
        $this->pollingIntervalMinutes->setElementName('pollingIntervalMinutes');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceMonitorPollingIntervalMinutes $pollingIntervalMinutes
     */
    public function getPollingIntervalMinutes()
    {
        return ($this->pollingIntervalMinutes)
            ? $this->pollingIntervalMinutes->getElementValue()
            : null;
    }
}
