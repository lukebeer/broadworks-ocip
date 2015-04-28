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
 * Choices for Service Type
 */
class ServiceType extends SimpleType
{
    public $elementName = "ServiceType";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Auto Attendant',
            'BroadWorks Anywhere Portal',
            'Call Center',
            'Group Paging',
            'Hunt Group',
            'Instant Group Call',
            'Instant Conference Bridge',
            'Meet-Me Conference Bridge',
            'Route Point'
        ]));
    }
}
