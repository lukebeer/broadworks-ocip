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
 * Policy for a group administrator's access to enhanced service instances (e.g. - instances of Auto Attendants, Call Capacity Groups,
 *         Conference Bridges, Hunt Groups, Call Centers, Series Completion Groups, etc.).
 *         "Full" indicates full access to enhanced service instances.
 *         "Modify-Only" indicates
 *           1) the group administrator is restricted from adding or removing enhanced service instances, but
 *           2) may modify existing instances.
 */
class GroupAdminEnhancedServiceInstanceAccess extends SimpleType
{
    public $elementName = "GroupAdminEnhancedServiceInstanceAccess";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Full',
            'Modify-Only'
        ]));
    }
}
