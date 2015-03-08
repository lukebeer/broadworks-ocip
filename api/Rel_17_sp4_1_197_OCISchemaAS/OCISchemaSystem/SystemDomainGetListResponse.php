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
    const     RESPONSE_TYPE        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDomainGetListResponse';
    public    $name                = __CLASS__;
    protected $systemDefaultDomain = null;
    protected $domain              = null;


    /**
     * IP Address, hostname, or domain.
     */
    public function setSystemDefaultDomain($systemDefaultDomain = null)
    {
        $this->systemDefaultDomain = ($systemDefaultDomain InstanceOf NetAddress)
             ? $systemDefaultDomain
             : new NetAddress($systemDefaultDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getSystemDefaultDomain()
    {
        return (!$this->systemDefaultDomain) ?: $this->systemDefaultDomain->getValue();
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
