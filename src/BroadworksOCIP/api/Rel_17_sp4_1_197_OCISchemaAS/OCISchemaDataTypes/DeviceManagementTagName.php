<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;
use BroadworksOCIP\Builder\Restrictions\MaxLength;


/**
 * A static tag name for access device files managed by the Device Management System on BroadWorks.
 *         The static tag name must start and end with a % with no other % in between. The tag must not
 *         start with %BW.
 */
class DeviceManagementTagName extends SimpleType
{
    public $elementName = "DeviceManagementTagName";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("1"));
        $this->addRestriction(new MaxLength("64"));
    }
}
