<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Callback Release Cause.
 */
class AutomaticCallbackReleaseCause extends SimpleType
{
    public $elementName = "AutomaticCallbackReleaseCause";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Busy',
            'Forbidden',
            'Global Failure',
            'Request Failure',
            'Server Failure',
            'Translation Failure',
            'Temporarily Unavailable',
            'User Not Found',
            'Request Timeout'
        ]));
    }
}
