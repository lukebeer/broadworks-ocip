<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Returns true if the UserService or service pack is assigned, otherwise false.
 */
class UserServiceIsAssignedResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $isAssigned
    ) {
        $this->isAssigned = $isAssigned;
        $this->args       = func_get_args();
    }

    public function setIsAssigned($isAssigned)
    {
        $isAssigned and $this->isAssigned = new xs:boolean($isAssigned);
    }

    public function getIsAssigned()
    {
        return (!$this->isAssigned) ?: $this->isAssigned->value();
    }
}
