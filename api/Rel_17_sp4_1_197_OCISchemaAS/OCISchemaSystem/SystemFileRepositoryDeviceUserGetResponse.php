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
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemFileRepositoryDeviceUserGetResponse';
    public    $name        = __CLASS__;
    protected $allowPut    = null;
    protected $allowDelete = null;
    protected $allowGet    = null;


    /**
     * 
     */
    public function setAllowPut($allowPut = null)
    {
        $this->allowPut = (boolean) $allowPut;
    }

    /**
     * 
     */
    public function getAllowPut()
    {
        return (!$this->allowPut) ?: $this->allowPut->getValue();
    }

    /**
     * 
     */
    public function setAllowDelete($allowDelete = null)
    {
        $this->allowDelete = (boolean) $allowDelete;
    }

    /**
     * 
     */
    public function getAllowDelete()
    {
        return (!$this->allowDelete) ?: $this->allowDelete->getValue();
    }

    /**
     * 
     */
    public function setAllowGet($allowGet = null)
    {
        $this->allowGet = (boolean) $allowGet;
    }

    /**
     * 
     */
    public function getAllowGet()
    {
        return (!$this->allowGet) ?: $this->allowGet->getValue();
    }
}
