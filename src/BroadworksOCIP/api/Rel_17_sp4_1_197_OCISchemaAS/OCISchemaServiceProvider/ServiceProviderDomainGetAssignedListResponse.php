<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Contains a simple list of all service provider domain names.
 */
class ServiceProviderDomainGetAssignedListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderDomainGetAssignedListResponse';
    protected $serviceProviderDefaultDomain;
    protected $domain;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderDomainGetAssignedListResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderDefaultDomain($serviceProviderDefaultDomain = null)
    {
        $this->serviceProviderDefaultDomain = ($serviceProviderDefaultDomain InstanceOf NetAddress)
             ? $serviceProviderDefaultDomain
             : new NetAddress($serviceProviderDefaultDomain);
        $this->serviceProviderDefaultDomain->setElementName('serviceProviderDefaultDomain');
        return $this;
    }

    /**
     * 
     * @return NetAddress $serviceProviderDefaultDomain
     */
    public function getServiceProviderDefaultDomain()
    {
        return ($this->serviceProviderDefaultDomain)
            ? $this->serviceProviderDefaultDomain->getElementValue()
            : null;
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
