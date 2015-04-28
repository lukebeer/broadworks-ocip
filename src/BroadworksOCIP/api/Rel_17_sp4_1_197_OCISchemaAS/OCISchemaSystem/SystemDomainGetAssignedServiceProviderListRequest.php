<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Request a list of service providers that have a given domain assigned.
 *         The response is either SystemDomainGetAssignedServiceProviderListResponse or ErrorResponse.
 */
class SystemDomainGetAssignedServiceProviderListRequest extends ComplexType implements ComplexInterface
{
    public    $responseType = 'BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDomainGetAssignedServiceProviderListResponse';
    public    $elementName = 'SystemDomainGetAssignedServiceProviderListRequest';
    protected $domain;

    public function __construct(
         $domain = ''
    ) {
        $this->setDomain($domain);
    }

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDomainGetAssignedServiceProviderListResponse $response
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
        $this->domain->setElementName('domain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $domain
     */
    public function getDomain()
    {
        return ($this->domain)
            ? $this->domain->getElementValue()
            : null;
    }
}
