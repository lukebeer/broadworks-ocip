<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request a list of service providers that have a given domain assigned.
 *         The response is either SystemDomainGetAssignedServiceProviderListResponse or ErrorResponse.
 */
class SystemDomainGetAssignedServiceProviderListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDomainGetAssignedServiceProviderListResponse';
    public    $name = 'SystemDomainGetAssignedServiceProviderListRequest';
    protected $domain;

    public function __construct(
         $domain = ''
    ) {
        $this->setDomain($domain);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDomainGetAssignedServiceProviderListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
