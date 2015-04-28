<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicator; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request to modify the Configuration URL. The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderBroadWorksCommunicatorModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderBroadWorksCommunicatorModifyRequest';
    protected $serviceProviderId;
    protected $configurationServerURL;

    public function __construct(
         $serviceProviderId = null,
         $configurationServerURL = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setConfigurationServerURL($configurationServerURL);
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
    public function setConfigurationServerURL($configurationServerURL = null)
    {
        $this->configurationServerURL = ($configurationServerURL InstanceOf URL)
             ? $configurationServerURL
             : new URL($configurationServerURL);
        $this->configurationServerURL->setElementName('configurationServerURL');
        return $this;
    }

    /**
     * 
     * @return URL $configurationServerURL
     */
    public function getConfigurationServerURL()
    {
        return ($this->configurationServerURL)
            ? $this->configurationServerURL->getElementValue()
            : null;
    }
}
