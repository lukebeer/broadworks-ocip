<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIServerRouteDestination;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIDeviceName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to add a SMDI Server route to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMDIMessageDeskAddServerRouteRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemSMDIMessageDeskAddServerRouteRequest';
    protected $routeDestination;
    protected $deviceName;

    public function __construct(
         $routeDestination = '',
         $deviceName = ''
    ) {
        $this->setRouteDestination($routeDestination);
        $this->setDeviceName($deviceName);
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
    public function setRouteDestination($routeDestination = null)
    {
        $this->routeDestination = ($routeDestination InstanceOf SMDIServerRouteDestination)
             ? $routeDestination
             : new SMDIServerRouteDestination($routeDestination);
        $this->routeDestination->setElementName('routeDestination');
        return $this;
    }

    /**
     * 
     * @return SMDIServerRouteDestination $routeDestination
     */
    public function getRouteDestination()
    {
        return ($this->routeDestination)
            ? $this->routeDestination->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf SMDIDeviceName)
             ? $deviceName
             : new SMDIDeviceName($deviceName);
        $this->deviceName->setElementName('deviceName');
        return $this;
    }

    /**
     * 
     * @return SMDIDeviceName $deviceName
     */
    public function getDeviceName()
    {
        return ($this->deviceName)
            ? $this->deviceName->getElementValue()
            : null;
    }
}
