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
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationNoValue';
    public    $name      = __CLASS__;
    protected $operation = null;

    public function __construct(
         $operation
    ) {
        $this->setOperation($operation);
    }

    /**
     * Enterprise Voice VPN Digit Manipulation Operations that have no value.
     */
    public function setOperation($operation = null)
    {
        $this->operation = ($operation InstanceOf EnterpriseVoiceVPNDigitManipulationOperationNoValue)
             ? $operation
             : new EnterpriseVoiceVPNDigitManipulationOperationNoValue($operation);
    }

    /**
     * Enterprise Voice VPN Digit Manipulation Operations that have no value.
     */
    public function getOperation()
    {
        return (!$this->operation) ?: $this->operation->getValue();
    }
}
