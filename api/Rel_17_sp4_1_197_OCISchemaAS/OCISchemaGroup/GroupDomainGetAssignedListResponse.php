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
    const     RESPONSE_TYPE       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupDomainGetAssignedListResponse';
    public    $name               = __CLASS__;
    protected $groupDefaultDomain = null;
    protected $domain             = null;


    /**
     * IP Address, hostname, or domain.
     */
    public function setGroupDefaultDomain($groupDefaultDomain = null)
    {
        $this->groupDefaultDomain = ($groupDefaultDomain InstanceOf NetAddress)
             ? $groupDefaultDomain
             : new NetAddress($groupDefaultDomain);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getGroupDefaultDomain()
    {
        return (!$this->groupDefaultDomain) ?: $this->groupDefaultDomain->getValue();
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
