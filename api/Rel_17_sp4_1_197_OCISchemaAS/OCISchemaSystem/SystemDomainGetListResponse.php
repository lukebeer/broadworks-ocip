<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Contains a simple list of all system-level domain names.
 */
class SystemDomainGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                 = __CLASS__;
    protected $systemDefaultDomain  = null;
    protected $domain               = null;


    public function setSystemDefaultDomain($systemDefaultDomain = null)
    {
        $this->systemDefaultDomain = ($systemDefaultDomain InstanceOf NetAddress)
             ? $systemDefaultDomain
             : new NetAddress($systemDefaultDomain);
    }

    public function getSystemDefaultDomain()
    {
        return (!$this->systemDefaultDomain) ?: $this->systemDefaultDomain->value();
    }

    public function setDomain($domain = null)
    {
        $this->domain = ($domain InstanceOf NetAddress)
             ? $domain
             : new NetAddress($domain);
    }

    public function getDomain()
    {
        return (!$this->domain) ?: $this->domain->value();
    }
}
