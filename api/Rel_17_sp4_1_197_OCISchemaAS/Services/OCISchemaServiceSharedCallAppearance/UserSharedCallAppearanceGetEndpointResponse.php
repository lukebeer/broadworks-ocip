<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceSharedCallAppearance; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserSharedCallAppearanceGetEndpointRequest.
 */
class UserSharedCallAppearanceGetEndpointResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isActive,
             $allowOrigination,
             $allowTermination
    ) {
        $this->isActive         = $isActive;
        $this->allowOrigination = $allowOrigination;
        $this->allowTermination = $allowTermination;
        $this->args             = func_get_args();
    }

    public function setIsActive($isActive)
    {
        $isActive and $this->isActive = new xs:boolean($isActive);
    }

    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->value();
    }

    public function setAllowOrigination($allowOrigination)
    {
        $allowOrigination and $this->allowOrigination = new xs:boolean($allowOrigination);
    }

    public function getAllowOrigination()
    {
        return (!$this->allowOrigination) ?: $this->allowOrigination->value();
    }

    public function setAllowTermination($allowTermination)
    {
        $allowTermination and $this->allowTermination = new xs:boolean($allowTermination);
    }

    public function getAllowTermination()
    {
        return (!$this->allowTermination) ?: $this->allowTermination->value();
    }
}
