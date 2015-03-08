<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * System License type.
 */
class SystemLicenseType extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = (string);
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
