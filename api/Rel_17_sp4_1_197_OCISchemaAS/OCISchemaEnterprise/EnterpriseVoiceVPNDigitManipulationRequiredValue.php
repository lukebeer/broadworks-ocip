<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationOperationRequiredValue;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Enterprise Voice VPN Digit Manipulation Entry that has a value.
 */
class EnterpriseVoiceVPNDigitManipulationRequiredValue extends ComplexType implements ComplexInterface
{
    public    $name = 'EnterpriseVoiceVPNDigitManipulationRequiredValue';
    protected $operation;
    protected $value;

    public function __construct(
         $operation = '',
         $value = ''
    ) {
        $this->setOperation($operation);
        $this->setValue($value);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setOperation($operation = null)
    {
        $this->operation = ($operation InstanceOf EnterpriseVoiceVPNDigitManipulationOperationRequiredValue)
             ? $operation
             : new EnterpriseVoiceVPNDigitManipulationOperationRequiredValue($operation);
        $this->operation->setName('operation');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDigitManipulationOperationRequiredValue $operation
     */
    public function getOperation()
    {
        return ($this->operation) ? $this->operation->getValue() : null;
    }

    /**
     * 
     */
    public function setValue($value = null)
    {
        $this->value = ($value InstanceOf EnterpriseVoiceVPNDigitManipulationValue)
             ? $value
             : new EnterpriseVoiceVPNDigitManipulationValue($value);
        $this->value->setName('value');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDigitManipulationValue $value
     */
    public function getValue()
    {
        return ($this->value) ? $this->value->getValue() : null;
    }
}
