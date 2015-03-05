<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:token;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderDnGetAvailableListRequest.
 *         Contains a list of available DNs not yet assigned to any group.
 */
class ServiceProviderDnGetAvailableListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $availableDn=null
    ) {
        $this->availableDn = $availableDn;
        $this->args        = func_get_args();
    }

    public function setAvailableDn($availableDn)
    {
        $availableDn and $this->availableDn = new xs:token($availableDn);
    }

    public function getAvailableDn()
    {
        return (!$this->availableDn) ?: $this->availableDn->value();
    }
}
