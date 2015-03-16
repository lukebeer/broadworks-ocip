<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Contains a simple list of all service provider domain names.
 */
class ServiceProviderDomainGetAssignedListResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'ServiceProviderDomainGetAssignedListResponse';
    protected $serviceProviderDefaultDomain;
    protected $domain;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderDomainGetAssignedListResponse $response
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
