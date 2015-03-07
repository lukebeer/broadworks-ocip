<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTwoStageDialing; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserTwoStageDialingGetRequest13Mp20.
 */
class UserTwoStageDialingGetResponse13Mp20 extends ComplexType implements ComplexInterface
{
    public    $name                              = __CLASS__;
    protected $isActive                          = null;
    protected $allowActivationWithUserAddresses  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setAllowActivationWithUserAddresses(xs:boolean $allowActivationWithUserAddresses = null)
    {
    }

    public function getAllowActivationWithUserAddresses()
    {
        return (!$this->allowActivationWithUserAddresses) ?: $this->allowActivationWithUserAddresses->value();
    }
}
