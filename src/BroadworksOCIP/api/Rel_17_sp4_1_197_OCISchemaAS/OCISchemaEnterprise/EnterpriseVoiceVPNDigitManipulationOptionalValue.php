<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationOperationOptionalValue;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationValue;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Enterprise Voice VPN Digit Manipulation Entry that optionally has a value.
 */
class EnterpriseVoiceVPNDigitManipulationOptionalValue extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseVoiceVPNDigitManipulationOptionalValue';
    protected $operation;
    protected $value;

    public function __construct(
         $operation = '',
         $value = null
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
        $this->operation = ($operation InstanceOf EnterpriseVoiceVPNDigitManipulationOperationOptionalValue)
             ? $operation
             : new EnterpriseVoiceVPNDigitManipulationOperationOptionalValue($operation);
        $this->operation->setElementName('operation');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDigitManipulationOperationOptionalValue $operation
     */
    public function getOperation()
    {
        return ($this->operation)
            ? $this->operation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setValue($value = null)
    {
        $this->value = ($value InstanceOf EnterpriseVoiceVPNDigitManipulationValue)
             ? $value
             : new EnterpriseVoiceVPNDigitManipulationValue($value);
        $this->value->setElementName('value');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDigitManipulationValue $value
     */
    public function getValue()
    {
        return ($this->value)
            ? $this->value->getElementValue()
            : null;
    }
}
