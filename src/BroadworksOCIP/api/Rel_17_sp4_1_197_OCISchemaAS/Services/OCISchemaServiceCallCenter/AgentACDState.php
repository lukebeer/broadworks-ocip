<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Agent Automatic Call Distribution (ACD) State.
 */
class AgentACDState extends SimpleType
{
    public $elementName = "AgentACDState";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Sign-In',
            'Sign-Out',
            'Available',
            'Unavailable',
            'Wrap-Up'
        ]));
    }
}
