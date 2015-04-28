<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;


/**
 * Conference document slide number.
 */
class InstantConferencingSlideNumber extends SimpleType
{
    public $elementName = "InstantConferencingSlideNumber";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("1"));
    }
}
