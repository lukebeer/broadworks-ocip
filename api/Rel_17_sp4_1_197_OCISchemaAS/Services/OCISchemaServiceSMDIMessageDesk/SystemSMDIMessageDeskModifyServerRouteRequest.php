<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceSMDIMessageDesk\SMDIServerRouteDestination;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Replace the list of devices associated with a SMDI server route destination.
 *         There must be at least one device in the list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemSMDIMessageDeskModifyServerRouteRequest extends ComplexType implements ComplexInterface
{
    public    $name             = 'SystemSMDIMessageDeskModifyServerRouteRequest';
    protected $routeDestination = null;
    protected $deviceNameList   = null;

    public function __construct(
         $routeDestination,
         $deviceNameList = null
    ) {
        $this->setRouteDestination($routeDestination);
        $this->setDeviceNameList($deviceNameList);
    }

    /**
     * @return 
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
     * @return SMDIServerRouteDestination
     */
    public function getRouteDestination()
    {
        return $this->routeDestination->getValue();
    }

    /**
     * 
     */
    public function setDeviceNameList($deviceNameList = null)
    {
        if (!$deviceNameList) return $this;
        $this->deviceNameList->setName('deviceNameList');
        return $this;
    }

    /**
     * 
     * @return 
     */
    public function getDeviceNameList()
    {
        return $this->deviceNameList->getValue();
    }
}
