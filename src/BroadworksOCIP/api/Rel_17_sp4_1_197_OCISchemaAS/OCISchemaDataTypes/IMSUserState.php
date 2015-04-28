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
 * IMS User State per the 3GPP TS 29.328 V6.3.0 spec.
 */
class IMSUserState extends SimpleType
{
    public $elementName = "IMSUserState";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Not Registered',
            'Registered',
            'Registered UnReg Services',
            'Authentication Pending'
        ]));
    }
}
