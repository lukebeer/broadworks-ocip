<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BroadWorksMobileManagerDomainName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the EnterpriseBroadWorksMobileManagerGetDomainListRequest.
 *         Contains the list of domains.
 */
class EnterpriseBroadWorksMobileManagerGetDomainListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $domainName=null
    ) {
        $this->domainName = new BroadWorksMobileManagerDomainName($domainName);
        $this->args       = func_get_args();
    }

    public function setDomainName($domainName)
    {
        $domainName and $this->domainName = new BroadWorksMobileManagerDomainName($domainName);
    }

    public function getDomainName()
    {
        return (!$this->domainName) ?: $this->domainName->value();
    }
}
