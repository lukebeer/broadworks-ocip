<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemFileRepositoryDeviceUserGetRequest.
 */
class SystemFileRepositoryDeviceUserGetResponse extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $allowPut     = null;
    protected $allowDelete  = null;
    protected $allowGet     = null;


    public function setAllowPut(xs:boolean $allowPut = null)
    {
    }

    public function getAllowPut()
    {
        return (!$this->allowPut) ?: $this->allowPut->value();
    }

    public function setAllowDelete(xs:boolean $allowDelete = null)
    {
    }

    public function getAllowDelete()
    {
        return (!$this->allowDelete) ?: $this->allowDelete->value();
    }

    public function setAllowGet(xs:boolean $allowGet = null)
    {
    }

    public function getAllowGet()
    {
        return (!$this->allowGet) ?: $this->allowGet->value();
    }
}
