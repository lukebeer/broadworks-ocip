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
 * Device type signaling address types.
 */
class SignalingAddressType extends SimpleType
{
    public $elementName = "SignalingAddressType";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Non-intelligent Device Addressing',
            'Non-intelligent Proxy Addressing',
            'Intelligent Device Addressing',
            'Intelligent Proxy Addressing'
        ]));
    }
}
