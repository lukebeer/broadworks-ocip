<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceHuntGroup; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Hunt group Uniform Call Distribution Policy Scope.
 */
class HuntGroupUniformCallDistributionPolicyScope extends SimpleType
{
    public $elementName = "HuntGroupUniformCallDistributionPolicyScope";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Agent',
            'Hunt Group'
        ]));
    }
}
