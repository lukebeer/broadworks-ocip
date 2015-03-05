<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemDomainParametersGetRequest.
 *         Contains the system Domain parameters.
 */
class SystemDomainParametersGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $useAliasForDomain,
             $defaultDomain
    ) {
        $this->useAliasForDomain = $useAliasForDomain;
        $this->defaultDomain     = new NetAddress($defaultDomain);
        $this->args              = func_get_args();
    }

    public function setUseAliasForDomain($useAliasForDomain)
    {
        $useAliasForDomain and $this->useAliasForDomain = new xs:boolean($useAliasForDomain);
    }

    public function getUseAliasForDomain()
    {
        return (!$this->useAliasForDomain) ?: $this->useAliasForDomain->value();
    }

    public function setDefaultDomain($defaultDomain)
    {
        $defaultDomain and $this->defaultDomain = new NetAddress($defaultDomain);
    }

    public function getDefaultDomain()
    {
        return (!$this->defaultDomain) ?: $this->defaultDomain->value();
    }
}
