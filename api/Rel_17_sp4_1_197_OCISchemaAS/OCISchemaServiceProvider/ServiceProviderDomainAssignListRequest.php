<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Assign a list of domains to a service provider.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class ServiceProviderDomainAssignListRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'ServiceProviderDomainAssignListRequest';
    protected $serviceProviderId;
    protected $domain;

    public function __construct(
         $serviceProviderId = '',
         $domain = ''
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setDomain($domain);
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
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId) ? $this->serviceProviderId->getValue() : null;
    }

    /**
     * 
     */
    public function setDomain($domain = null)
    {
        $this->domain = ($domain InstanceOf NetAddress)
             ? $domain
             : new NetAddress($domain);
        $this->domain->setName('domain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $domain
     */
    public function getDomain()
    {
        return ($this->domain) ? $this->domain->getValue() : null;
    }
}
