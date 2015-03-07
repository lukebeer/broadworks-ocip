<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Get a route point's DNIS.
 *         The response is either a GroupRoutePointGetDNISResponse or an ErrorResponse.
 */
class GroupRoutePointGetDNISRequest extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $dnisKey  = null;

    public function __construct(
         DNISKey $dnisKey
    ) {
        $this->setDnisKey($dnisKey);
    }

    public function setDnisKey(DNISKey $dnisKey = null)
    {
    }

    public function getDnisKey()
    {
        return (!$this->dnisKey) ?: $this->dnisKey->value();
    }
}
