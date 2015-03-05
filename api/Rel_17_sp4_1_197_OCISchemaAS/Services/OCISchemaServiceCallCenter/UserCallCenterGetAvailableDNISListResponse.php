<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DNISKey;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserCallCenterGetAvailableDNISListRequest.
 *         Contains a list of available DNIS for agent to select.
 */
class UserCallCenterGetAvailableDNISListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             DNISKey $availableDNIS=null
    ) {
        $this->availableDNIS = $availableDNIS;
        $this->args          = func_get_args();
    }

    public function setAvailableDNIS($availableDNIS)
    {
        $availableDNIS and $this->availableDNIS = new DNISKey($availableDNIS);
    }

    public function getAvailableDNIS()
    {
        return (!$this->availableDNIS) ?: $this->availableDNIS->value();
    }
}
