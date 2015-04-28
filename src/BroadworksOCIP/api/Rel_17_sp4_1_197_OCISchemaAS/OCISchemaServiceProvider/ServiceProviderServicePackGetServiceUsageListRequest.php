<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserService;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to get the list of service packs containing a specified service.
 *         The response is either ServiceProviderServicePackGetServiceUsageListResponse or ErrorResponse.
 */
class ServiceProviderServicePackGetServiceUsageListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackGetServiceUsageListResponse';
    public    $elementName = 'ServiceProviderServicePackGetServiceUsageListRequest';
    protected $serviceProviderId;
    protected $serviceName;

    public function __construct(
         $serviceProviderId = '',
         $serviceName = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setServiceName($serviceName);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderServicePackGetServiceUsageListResponse $response
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
    public function setServiceName($serviceName = null)
    {
        $this->serviceName = ($serviceName InstanceOf UserService)
             ? $serviceName
             : new UserService($serviceName);
        $this->serviceName->setElementName('serviceName');
        return $this;
    }

    /**
     * 
     * @return UserService $serviceName
     */
    public function getServiceName()
    {
        return ($this->serviceName)
            ? $this->serviceName->getElementValue()
            : null;
    }
}
