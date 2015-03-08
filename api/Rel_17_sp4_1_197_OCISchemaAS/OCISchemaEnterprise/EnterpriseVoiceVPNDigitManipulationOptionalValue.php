<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationOperationOptionalValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationValue;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Enterprise Voice VPN Digit Manipulation Entry that optionally has a value.
 */
class EnterpriseVoiceVPNDigitManipulationOptionalValue extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationOptionalValue';
    public    $name      = __CLASS__;
    protected $operation = null;
    protected $value     = null;

    public function __construct(
         $operation,
         $value = null
    ) {
        $this->setOperation($operation);
        $this->setValue($value);
    }

    /**
     * Enterprise Voice VPN Digit Manipulation Operations that may or may not have a value.
     */
    public function setOperation($operation = null)
    {
        $this->operation = ($operation InstanceOf EnterpriseVoiceVPNDigitManipulationOperationOptionalValue)
             ? $operation
             : new EnterpriseVoiceVPNDigitManipulationOperationOptionalValue($operation);
    }

    /**
     * Enterprise Voice VPN Digit Manipulation Operations that may or may not have a value.
     */
    public function getOperation()
    {
        return (!$this->operation) ?: $this->operation->getValue();
    }

    /**
     * Enterprise Voice VPN Digit Manipulation value.
     */
    public function setValue($value = null)
    {
        $this->value = ($value InstanceOf EnterpriseVoiceVPNDigitManipulationValue)
             ? $value
             : new EnterpriseVoiceVPNDigitManipulationValue($value);
    }

    /**
     * Enterprise Voice VPN Digit Manipulation value.
     */
    public function getValue()
    {
        return (!$this->value) ?: $this->value->getValue();
    }
}