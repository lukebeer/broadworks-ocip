<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationOperationRequiredValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationRequiredValue;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Enterprise Voice VPN Digit Manipulation Entry that has a value.
 */
class EnterpriseVoiceVPNDigitManipulationRequiredValue extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationRequiredValue';
    public    $name      = __CLASS__;
    protected $operation = null;
    protected $value     = null;

    public function __construct(
         $operation,
         $value
    ) {
        $this->setOperation($operation);
        $this->setValue($value);
    }

    /**
     * @return EnterpriseVoiceVPNDigitManipulationRequiredValue
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Enterprise Voice VPN Digit Manipulation Operations that have a value.
     */
    public function setOperation($operation = null)
    {
        $this->operation = ($operation InstanceOf EnterpriseVoiceVPNDigitManipulationOperationRequiredValue)
             ? $operation
             : new EnterpriseVoiceVPNDigitManipulationOperationRequiredValue($operation);
    }

    /**
     * Enterprise Voice VPN Digit Manipulation Operations that have a value.
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
