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
 * Delete a system domain from the system.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemDomainDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name    = __CLASS__;
    protected $domain  = null;

    public function __construct(
         $domain
    ) {
        $this->setDomain($domain);
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
