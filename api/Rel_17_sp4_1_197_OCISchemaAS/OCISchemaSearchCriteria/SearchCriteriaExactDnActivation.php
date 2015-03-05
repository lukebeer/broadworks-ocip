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
 * Criteria for searching for a particular Dn activation state.
 */
class SearchCriteriaExactDnActivation extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $activated
    ) {
        $this->activated = $activated;
        $this->args      = func_get_args();
    }

    public function setActivated($activated)
    {
        $activated and $this->activated = new xs:boolean($activated);
    }

    public function getActivated()
    {
        return (!$this->activated) ?: $this->activated->value();
    }
}
