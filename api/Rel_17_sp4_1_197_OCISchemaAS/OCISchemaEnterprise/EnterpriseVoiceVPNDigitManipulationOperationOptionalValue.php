<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Enterprise Voice VPN Digit Manipulation Operations that may or may not have a value.
 */
class EnterpriseVoiceVPNDigitManipulationOperationOptionalValue extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'Prepend',
            'Overwrite',
            'Right Trim',
            'Replace All',
            'Left Trim',
            'Append',
            'Insert',
            'Trim'
        ]));
    }
}
