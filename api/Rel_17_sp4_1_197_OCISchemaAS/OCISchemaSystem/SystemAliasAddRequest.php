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
 * Add a system-level Application Server alias to the system.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemAliasAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $aliasNetAddress
    ) {
        $this->aliasNetAddress = new NetAddress($aliasNetAddress);
        $this->args            = func_get_args();
    }

    public function setAliasNetAddress($aliasNetAddress)
    {
        $aliasNetAddress and $this->aliasNetAddress = new NetAddress($aliasNetAddress);
    }

    public function getAliasNetAddress()
    {
        return (!$this->aliasNetAddress) ?: $this->aliasNetAddress->value();
    }
}
