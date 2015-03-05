<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Contains a simple list of all group domain names.
 */
class GroupDomainGetAssignedListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $groupDefaultDomain,
             $domain=null
    ) {
        $this->groupDefaultDomain = new NetAddress($groupDefaultDomain);
        $this->domain             = new NetAddress($domain);
        $this->args               = func_get_args();
    }

    public function setGroupDefaultDomain($groupDefaultDomain)
    {
        $groupDefaultDomain and $this->groupDefaultDomain = new NetAddress($groupDefaultDomain);
    }

    public function getGroupDefaultDomain()
    {
        return (!$this->groupDefaultDomain) ?: $this->groupDefaultDomain->value();
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
