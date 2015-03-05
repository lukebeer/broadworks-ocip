<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemFileRepositoryDeviceUserGetRequest.
 */
class SystemFileRepositoryDeviceUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $allowPut,
             $allowDelete,
             $allowGet
    ) {
        $this->allowPut    = $allowPut;
        $this->allowDelete = $allowDelete;
        $this->allowGet    = $allowGet;
        $this->args        = func_get_args();
    }

    public function setAllowPut($allowPut)
    {
        $allowPut and $this->allowPut = new xs:boolean($allowPut);
    }

    public function getAllowPut()
    {
        return (!$this->allowPut) ?: $this->allowPut->value();
    }

    public function setAllowDelete($allowDelete)
    {
        $allowDelete and $this->allowDelete = new xs:boolean($allowDelete);
    }

    public function getAllowDelete()
    {
        return (!$this->allowDelete) ?: $this->allowDelete->value();
    }

    public function setAllowGet($allowGet)
    {
        $allowGet and $this->allowGet = new xs:boolean($allowGet);
    }

    public function getAllowGet()
    {
        return (!$this->allowGet) ?: $this->allowGet->value();
    }
}
