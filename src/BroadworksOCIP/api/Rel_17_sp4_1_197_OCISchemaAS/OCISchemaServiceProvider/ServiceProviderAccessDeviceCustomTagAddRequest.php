<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagValue;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DeviceManagementTagName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to add a static configuration tag for a service provider access device.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderAccessDeviceCustomTagAddRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderAccessDeviceCustomTagAddRequest';
    protected $serviceProviderId;
    protected $deviceName;
    protected $tagName;
    protected $tagValue;

    public function __construct(
         $serviceProviderId = '',
         $deviceName = '',
         $tagName = '',
         $tagValue = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setDeviceName($deviceName);
        $this->setTagName($tagName);
        $this->setTagValue($tagValue);
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
    public function setTagName($tagName = null)
    {
        $this->tagName = ($tagName InstanceOf DeviceManagementTagName)
             ? $tagName
             : new DeviceManagementTagName($tagName);
        $this->tagName->setElementName('tagName');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementTagName $tagName
     */
    public function getTagName()
    {
        return ($this->tagName)
            ? $this->tagName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setTagValue($tagValue = null)
    {
        $this->tagValue = ($tagValue InstanceOf DeviceManagementTagValue)
             ? $tagValue
             : new DeviceManagementTagValue($tagValue);
        $this->tagValue->setElementName('tagValue');
        return $this;
    }

    /**
     * 
     * @return DeviceManagementTagValue $tagValue
     */
    public function getTagValue()
    {
        return ($this->tagValue)
            ? $this->tagValue->getElementValue()
            : null;
    }
}
