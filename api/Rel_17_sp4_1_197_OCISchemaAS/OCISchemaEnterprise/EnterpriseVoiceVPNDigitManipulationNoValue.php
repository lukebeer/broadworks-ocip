<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationOperationNoValue;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Enterprise Voice VPN Digit Manipulation Entry that has no value.
 */
class EnterpriseVoiceVPNDigitManipulationNoValue extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $operation  = null;

    public function __construct(
         $operation
    ) {
        $this->setOperation($operation);
    }

    public function setOperation($operation = null)
    {
        $this->operation = ($operation InstanceOf EnterpriseVoiceVPNDigitManipulationOperationNoValue)
             ? $operation
             : new EnterpriseVoiceVPNDigitManipulationOperationNoValue($operation);
    }

    public function getOperation()
    {
        return (!$this->operation) ?: $this->operation->value();
    }
}
