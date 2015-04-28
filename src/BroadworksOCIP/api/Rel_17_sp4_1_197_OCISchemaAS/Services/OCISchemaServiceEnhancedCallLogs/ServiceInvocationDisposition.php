<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Indicates the type of service invocation that caused the call to be detached.
 */
class ServiceInvocationDisposition extends SimpleType
{
    public $elementName = "ServiceInvocationDisposition";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Automatic Hold/Retrieve',
            'Call Forward Always',
            'Call Forward Busy',
            'Call Forward No Answer',
            'Call Forward Not Reachable',
            'Call Forward Selective',
            'Call Park',
            'Call Pickup',
            'Deflection',
            'Directed Call Pickup',
            'Distribution from Call Center',
            'Distribution from Hunt Group',
            'Distribution from Route Point',
            'Do Not Disturb',
            'Fax Deposit',
            'Sequential Ring',
            'Series Completion',
            'Simultaneous Ring',
            'Third Party Deflection',
            'Third Party Voice Mail Support',
            'Transfer Consult',
            'Trunk Group Forward Capacity Exceeded',
            'Trunk Group Forward Unreachable',
            'Trunk Group Forward Unconditional',
            'Voice Mail Transfer',
            'Voice Messaging'
        ]));
    }
}
