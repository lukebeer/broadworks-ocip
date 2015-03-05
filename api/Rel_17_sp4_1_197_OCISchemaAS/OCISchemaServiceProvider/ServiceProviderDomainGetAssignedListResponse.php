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
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderDefaultDomain,
             $domain=null
    ) {
        $this->serviceProviderDefaultDomain = new NetAddress($serviceProviderDefaultDomain);
        $this->domain                       = new NetAddress($domain);
        $this->args                         = func_get_args();
    }

    public function setServiceProviderDefaultDomain($serviceProviderDefaultDomain)
    {
        $serviceProviderDefaultDomain and $this->serviceProviderDefaultDomain = new NetAddress($serviceProviderDefaultDomain);
    }

    public function getServiceProviderDefaultDomain()
    {
        return (!$this->serviceProviderDefaultDomain) ?: $this->serviceProviderDefaultDomain->value();
    }

    public function setDomain($domain)
    {
        $domain and $this->domain = new NetAddress($domain);
    }

    public function getDomain()
    {
        return (!$this->domain) ?: $this->domain->value();
    }
}
