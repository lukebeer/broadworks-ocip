<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSearchCriteria; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OrganizationType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Criteria for searching for an organization type.
 */
class SearchCriteriaExactOrganizationType extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $organizationType
    ) {
        $this->organizationType = new OrganizationType($organizationType);
        $this->args             = func_get_args();
    }

    public function setOrganizationType($organizationType)
    {
        $organizationType and $this->organizationType = new OrganizationType($organizationType);
    }

    public function getOrganizationType()
    {
        return (!$this->organizationType) ?: $this->organizationType->value();
    }
}
