<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLDAPIntegration; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinLength;


/**
 * LDAP column attribute value.
 */
class LDAPColumnAttributeValue extends SimpleType
{
    public $elementName = "LDAPColumnAttributeValue";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinLength("1"));
    }
}
