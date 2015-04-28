<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Reorder the lines of a Service Provider device. You can not add or delete line ports, only
 *         re-ordering the list is allowed. The ordered list of line ports can be obtained
 *         with the ServiceProviderAccessDeviceGetRequest command.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderCPEConfigReorderDeviceLinePortsRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderCPEConfigReorderDeviceLinePortsRequest';
    protected $serviceProviderId;
    protected $deviceName;
    protected $orderedLinePortList;

    public function __construct(
         $serviceProviderId = '',
         $deviceName = '',
         $orderedLinePortList = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setDeviceName($deviceName);
        $this->setOrderedLinePortList($orderedLinePortList);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDeviceName($deviceName = null)
    {
        $this->deviceName = ($deviceName InstanceOf AccessDeviceName)
             ? $deviceName
             : new AccessDeviceName($deviceName);
        $this->deviceName->setElementName('deviceName');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceName $deviceName
     */
    public function getDeviceName()
    {
        return ($this->deviceName)
            ? $this->deviceName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOrderedLinePortList($orderedLinePortList = null)
    {
        $this->orderedLinePortList = ($orderedLinePortList InstanceOf AccessDeviceEndpointLinePort)
             ? $orderedLinePortList
             : new AccessDeviceEndpointLinePort($orderedLinePortList);
        $this->orderedLinePortList->setElementName('orderedLinePortList');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointLinePort $orderedLinePortList
     */
    public function getOrderedLinePortList()
    {
        return ($this->orderedLinePortList)
            ? $this->orderedLinePortList->getElementValue()
            : null;
    }
}
