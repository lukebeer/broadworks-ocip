<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Restrictions\MaxLength;


/**
 * The description for the entry in the OCI call control application list.
 */
class OCICallControlApplicationDescription extends SimpleType
{
    public $elementName = "OCICallControlApplicationDescription";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("1"));
        $this->addRestriction(new MaxLength("80"));
    }
}
