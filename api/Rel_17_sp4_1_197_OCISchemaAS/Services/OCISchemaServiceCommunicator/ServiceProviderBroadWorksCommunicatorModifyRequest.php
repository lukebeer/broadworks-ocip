<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommunicator; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\URL;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify the Configuration URL. The response is either a SuccessResponse or an ErrorResponse.
 */
class ServiceProviderBroadWorksCommunicatorModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = 'ServiceProviderBroadWorksCommunicatorModifyRequest';
    protected $serviceProviderId      = null;
    protected $configurationServerURL = null;

    public function __construct(
         $serviceProviderId = null,
         $configurationServerURL = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setConfigurationServerURL($configurationServerURL);
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setConfigurationServerURL($configurationServerURL = null)
    {
        if (!$configurationServerURL) return $this;
        $this->configurationServerURL = ($configurationServerURL InstanceOf URL)
             ? $configurationServerURL
             : new URL($configurationServerURL);
        $this->configurationServerURL->setName('configurationServerURL');
        return $this;
    }

    /**
     * 
     * @return URL
     */
    public function getConfigurationServerURL()
    {
        return $this->configurationServerURL->getValue();
    }
}
