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
     * Delete a system-level Application Server alias from the system.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAliasDeleteRequest extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $aliasNetAddress = null;

    public function __construct(
         $aliasNetAddress
    ) {
        $this->setAliasNetAddress($aliasNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setAliasNetAddress($aliasNetAddress = null)
    {
        $this->aliasNetAddress = ($aliasNetAddress InstanceOf NetAddress)
             ? $aliasNetAddress
             : new NetAddress($aliasNetAddress);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getAliasNetAddress()
    {
        return (!$this->aliasNetAddress) ?: $this->aliasNetAddress->getValue();
    }
}