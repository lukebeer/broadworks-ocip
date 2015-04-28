<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * System License type.
 */
class SystemLicenseType extends SimpleType
{
    public $elementName = "SystemLicenseType";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Lawful Intercept Event Monitoring',
            'Lawful Intercept Media Monitoring',
            'Enterprise Voice Portal',
            'Service Packs',
            'SIP TCP',
            'Realtime Accounting',
            'Network-Wide Messaging',
            'Sh Interface',
            'Destination Trunk Group',
            'Deployment Studio',
            'Session Admission Control',
            'Session Data Replication',
            'BroadWorks Mobile Manager'
        ]));
    }
}
