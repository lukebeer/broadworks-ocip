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
 * Possible values for administrative access policy settings.
 */
class PolicyAccess extends SimpleType
{
    public $elementName = "PolicyAccess";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Full',
            'Restricted-FullProfile',
            'Restricted',
            'Restricted-NoAuthorize',
            'Restricted-NoUserAssociation',
            'Restricted-ReadProfile',
            'Restricted-NoProfile',
            'Restricted-NoGroup',
            'Restricted-FullResource',
            'Restricted-ReadResource',
            'None'
        ]));
    }
}
