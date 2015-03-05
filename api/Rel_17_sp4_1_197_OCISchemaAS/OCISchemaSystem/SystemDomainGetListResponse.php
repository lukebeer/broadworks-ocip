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
    public    $name = __CLASS__;

    public function __construct(
             $systemDefaultDomain,
             $domain=null
    ) {
        $this->systemDefaultDomain = new NetAddress($systemDefaultDomain);
        $this->domain              = new NetAddress($domain);
        $this->args                = func_get_args();
    }

    public function setSystemDefaultDomain($systemDefaultDomain)
    {
        $systemDefaultDomain and $this->systemDefaultDomain = new NetAddress($systemDefaultDomain);
    }

    public function getSystemDefaultDomain()
    {
        return (!$this->systemDefaultDomain) ?: $this->systemDefaultDomain->value();
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
