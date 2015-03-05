<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for user in/not in a trunk group.
 */
class SearchCriteriaExactUserInTrunkGroup extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $userInTrunkGroup
    ) {
        $this->userInTrunkGroup = $userInTrunkGroup;
        $this->args             = func_get_args();
    }

    public function setUserInTrunkGroup($userInTrunkGroup)
    {
        $userInTrunkGroup and $this->userInTrunkGroup = new xs:boolean($userInTrunkGroup);
    }

    public function getUserInTrunkGroup()
    {
        return (!$this->userInTrunkGroup) ?: $this->userInTrunkGroup->value();
    }
}
