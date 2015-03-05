<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DN;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the SystemHomeNetworkGetListRequest.
 */
class SystemHomeNetworkGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $mscAddress=null
    ) {
        $this->mscAddress = new DN($mscAddress);
        $this->args       = func_get_args();
    }

    public function setMscAddress($mscAddress)
    {
        $mscAddress and $this->mscAddress = new DN($mscAddress);
    }

    public function getMscAddress()
    {
        return (!$this->mscAddress) ?: $this->mscAddress->value();
    }
}
