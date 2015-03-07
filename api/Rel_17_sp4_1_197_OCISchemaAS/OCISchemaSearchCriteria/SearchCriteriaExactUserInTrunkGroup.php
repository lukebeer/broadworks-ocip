<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for user in/not in a trunk group.
 */
class SearchCriteriaExactUserInTrunkGroup extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $userInTrunkGroup  = null;

    public function __construct(
         $userInTrunkGroup
    ) {
        $this->setUserInTrunkGroup($userInTrunkGroup);
    }

    public function setUserInTrunkGroup(xs:boolean $userInTrunkGroup = null)
    {
    }

    public function getUserInTrunkGroup()
    {
        return (!$this->userInTrunkGroup) ?: $this->userInTrunkGroup->value();
    }
}
