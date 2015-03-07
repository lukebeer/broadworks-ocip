<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSharedCallAppearance; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserSharedCallAppearanceGetEndpointRequest.
 */
class UserSharedCallAppearanceGetEndpointResponse extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $isActive          = null;
    protected $allowOrigination  = null;
    protected $allowTermination  = null;


    public function setIsActive(xs:boolean $isActive = null)
    {
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setAllowOrigination(xs:boolean $allowOrigination = null)
    {
    }

    public function getAllowOrigination()
    {
        return (!$this->allowOrigination) ?: $this->allowOrigination->value();
    }

    public function setAllowTermination(xs:boolean $allowTermination = null)
    {
    }

    public function getAllowTermination()
    {
        return (!$this->allowTermination) ?: $this->allowTermination->value();
    }
}
