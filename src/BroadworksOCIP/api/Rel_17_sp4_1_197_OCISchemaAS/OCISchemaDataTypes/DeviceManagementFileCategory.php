<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * The file category for an access device file managed by the Device Management System on BroadWorks. A static file has no variable content and only one copy is required on the repository.
 */
class DeviceManagementFileCategory extends SimpleType
{
    public $elementName = "DeviceManagementFileCategory";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Static',
            'Dynamic Group',
            'Dynamic Profile'
        ]));
    }
}
