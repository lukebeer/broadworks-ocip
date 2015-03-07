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
    public    $name      = __CLASS__;
    protected $userType  = null;

    public function __construct(
         $userType
    ) {
        $this->setUserType($userType);
    }

    public function setUserType($userType = null)
    {
        $this->userType = ($userType InstanceOf UserType)
             ? $userType
             : new UserType($userType);
    }

    public function getUserType()
    {
        return (!$this->userType) ?: $this->userType->value();
    }
}
