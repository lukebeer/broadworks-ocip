<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Enterprise Voice VPN Digit Manipulation operations.
 */
class EnterpriseVoiceVPNDigitManipulationOperation extends SimpleType
{
    public $elementName = "EnterpriseVoiceVPNDigitManipulationOperation";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Prepend',
            'End',
            'Overwrite',
            'Right Trim',
            'Replace All',
            'Left Trim',
            'Append',
            'Position',
            'Insert',
            'Trim',
            'Delete',
            'Move'
        ]));
    }
}
