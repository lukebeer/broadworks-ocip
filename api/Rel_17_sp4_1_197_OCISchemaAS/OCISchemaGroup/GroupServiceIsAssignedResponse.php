<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Returns true if the GroupService is assigned, otherwise false.
 */
class GroupServiceIsAssignedResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\GroupServiceIsAssignedResponse';
    public    $name       = __CLASS__;
    protected $isAssigned = null;


    /**
     * 
     */
    public function setIsAssigned($isAssigned = null)
    {
        $this->isAssigned = (boolean) $isAssigned;
    }

    /**
     * 
     */
    public function getIsAssigned()
    {
        return (!$this->isAssigned) ?: $this->isAssigned->getValue();
    }
}
