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
 * Type of enhanced configuration supported by an access device.
 *         "2 File Configuration" was formerly called "CPE Type 1"
 *         "3 File Configuration" was formerly called "CPE Type 2"
 */
class AccessDeviceEnhancedConfigurationType14 extends SimpleType
{
    public $elementName = "AccessDeviceEnhancedConfigurationType14";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            '2 File Configuration',
            '3 File Configuration',
            'SNAP'
        ]));
    }
}
