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
 * Enterprise Voice VPN Digit Manipulation Operations that have no value.
 */
class EnterpriseVoiceVPNDigitManipulationOperationNoValue extends SimpleType
{
    public $elementName = "EnterpriseVoiceVPNDigitManipulationOperationNoValue";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration("End"));
    }
}
