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
 * Choices for the group Dial Plan Policy to decide which type of settings shall be used.
 *         Notes: Choice cannot be 'sp' or 'group' if Service Provider or group does not have
 *         public digit map set.
 */
class GroupDialPlanPolicySettingLevel extends SimpleType
{
    public $elementName = "GroupDialPlanPolicySettingLevel";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'System',
            'Service Provider',
            'Group'
        ]));
    }
}
