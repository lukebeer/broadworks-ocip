<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceDoNotDisturb; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserDoNotDisturbGetRequest.
 */
class UserDoNotDisturbGetResponse extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $isActive    = null;
    protected $ringSplash  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setRingSplash(xs:boolean $ringSplash = null)
    {
    }

    public function getRingSplash()
    {
        return (!$this->ringSplash) ?: $this->ringSplash->value();
    }
}
