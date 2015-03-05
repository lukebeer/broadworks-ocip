<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for a particular User Type.
 */
class SearchCriteriaExactUserType extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userType
    ) {
        $this->userType = new UserType($userType);
        $this->args     = func_get_args();
    }

    public function setUserType($userType)
    {
        $userType and $this->userType = new UserType($userType);
    }

    public function getUserType()
    {
        return (!$this->userType) ?: $this->userType->value();
    }
}
