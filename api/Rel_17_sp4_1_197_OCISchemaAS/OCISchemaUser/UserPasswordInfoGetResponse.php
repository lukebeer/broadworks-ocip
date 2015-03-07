<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserPasswordInfoGetRequest.
 */
class UserPasswordInfoGetResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $isLoginDisabled  = null;


    public function setIsLoginDisabled(xs:boolean $isLoginDisabled = null)
    {
    }

    public function getIsLoginDisabled()
    {
        return (!$this->isLoginDisabled) ?: $this->isLoginDisabled->value();
    }
}
