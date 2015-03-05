<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\EnterpriseVoiceVPNDigitManipulationOperationNoValue;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Enterprise Voice VPN Digit Manipulation Entry that has no value.
 */
class EnterpriseVoiceVPNDigitManipulationNoValue extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $operation
    ) {
        $this->operation = $operation;
        $this->args      = func_get_args();
    }

    public function setOperation($operation)
    {
        $operation and $this->operation = new EnterpriseVoiceVPNDigitManipulationOperationNoValue($operation);
    }

    public function getOperation()
    {
        return (!$this->operation) ?: $this->operation->value();
    }
}
