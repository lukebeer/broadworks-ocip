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
 * Response to the ServiceProviderGetDefaultRequest. All values are default values for
 *         a service provider or enterprise's profile.
 */
class ServiceProviderGetDefaultResponse extends ComplexType implements ComplexInterface
{
    public    $name           = __CLASS__;
    protected $isEnterprise   = null;
    protected $defaultDomain  = null;


    public function setIsEnterprise(xs:boolean $isEnterprise = null)
    {
    }

    public function getIsEnterprise()
    {
        return (!$this->isEnterprise) ?: $this->isEnterprise->value();
    }

    public function setDefaultDomain($defaultDomain = null)
    {
        $this->defaultDomain = ($defaultDomain InstanceOf NetAddress)
             ? $defaultDomain
             : new NetAddress($defaultDomain);
    }

    public function getDefaultDomain()
    {
        return (!$this->defaultDomain) ?: $this->defaultDomain->value();
    }
}
