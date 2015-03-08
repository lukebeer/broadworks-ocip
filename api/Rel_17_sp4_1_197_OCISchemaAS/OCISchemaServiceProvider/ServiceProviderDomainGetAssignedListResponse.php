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


/**
     * Contains a simple list of all service provider domain names.
 */
class ServiceProviderDomainGetAssignedListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                 = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderDomainGetAssignedListResponse';
    public    $name                         = __CLASS__;
    protected $serviceProviderDefaultDomain = null;
    protected $domain                       = null;


    /**
     * IP Address, hostname, or domain.
     */
    public function setServiceProviderDefaultDomain($serviceProviderDefaultDomain = null)
    {
        $this->serviceProviderDefaultDomain = ($serviceProviderDefaultDomain InstanceOf NetAddress)
             ? $serviceProviderDefaultDomain
             : new NetAddress($serviceProviderDefaultDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getServiceProviderDefaultDomain()
    {
        return (!$this->serviceProviderDefaultDomain) ?: $this->serviceProviderDefaultDomain->getValue();
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setDomain($domain = null)
    {
        $this->domain = ($domain InstanceOf NetAddress)
             ? $domain
             : new NetAddress($domain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getDomain()
    {
        return (!$this->domain) ?: $this->domain->getValue();
    }
}
