<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * User types for which the Service Provider Password Rules apply.
 *         The rules could apply to the Administrators (Group and Department) or
 *         Administrators (Group and Department) and Users.
 */
class ServiceProviderPasswordRulesApplyTo extends SimpleType
{
    public $elementName = "ServiceProviderPasswordRulesApplyTo";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Administrator',
            'Administrator and User',
            'Group Administrator and User External Authentication'
        ]));
    }
}
