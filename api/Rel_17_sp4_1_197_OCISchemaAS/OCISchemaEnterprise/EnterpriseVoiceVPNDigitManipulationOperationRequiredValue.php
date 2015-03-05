<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\core\Builder\Types\SimpleInterface;
use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Enterprise Voice VPN Digit Manipulation Operations that have a value.
 */
class EnterpriseVoiceVPNDigitManipulationOperationRequiredValue extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = EnterpriseVoiceVPNDigitManipulationOperation;
        $this-addRestriction(new Enumeration([
                                              'Position',
                                              'Delete',
                                              'Move'
                                             ]);
    }
}
