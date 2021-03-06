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
 * Possible values for the protocol-neutral internal release cause.
 */
class InternalReleaseCause16 extends SimpleType
{
    public $elementName = "InternalReleaseCause16";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Busy',
            'Forbidden',
            'Routing Failure',
            'Global Failure',
            'Request Failure',
            'Server Failure',
            'Translation Failure',
            'Temporarily Unavailable',
            'User Not Found',
            'Request Timeout',
            'Dial Tone Timeout',
            'Insufficient Credits'
        ]));
    }
}
