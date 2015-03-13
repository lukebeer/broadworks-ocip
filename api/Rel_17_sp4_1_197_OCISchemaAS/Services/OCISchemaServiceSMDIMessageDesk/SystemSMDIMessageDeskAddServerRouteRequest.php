<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIServerRouteDestination;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIDeviceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to add a SMDI Server route to the system.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMDIMessageDeskAddServerRouteRequest extends ComplexType implements ComplexInterface
{
    public    $name             = 'SystemSMDIMessageDeskAddServerRouteRequest';
    protected $routeDestination = null;
    protected $deviceName       = null;

    public function __construct(
         $routeDestination,
         $deviceName
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
        if (!$routeDestination) return $this;
        $this->routeDestination = ($routeDestination InstanceOf SMDIServerRouteDestination)
             ? $routeDestination
             : new SMDIServerRouteDestination($routeDestination);
        $this->routeDestination->setName('routeDestination');
        return $this;
    }

    /**
     * 
     * @return SMDIServerRouteDestination $routeDestination
     */
    public function getRouteDestination()
    {
        return $this->routeDestination->getValue();
    }

    /**
     * 
     */
    public function setDeviceName($deviceName = null)
    {
        if (!$deviceName) return $this;
        $this->deviceName = ($deviceName InstanceOf SMDIDeviceName)
             ? $deviceName
             : new SMDIDeviceName($deviceName);
        $this->deviceName->setName('deviceName');
        return $this;
    }

    /**
     * 
     * @return SMDIDeviceName $deviceName
     */
    public function getDeviceName()
    {
        return $this->deviceName->getValue();
    }
}
