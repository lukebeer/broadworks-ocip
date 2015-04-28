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
 * Unscreened Presentation Identity Policy Options
 */
class UnscreenedPresentationIdentityPolicy extends SimpleType
{
    public $elementName = "UnscreenedPresentationIdentityPolicy";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Profile Presentation Identity',
            'Unscreened Presentation Identity',
            'Unscreened Presentation Identity With Profile Domain'
        ]));
    }
}
