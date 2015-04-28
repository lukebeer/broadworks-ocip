<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaEnterprise\EnterpriseVoiceVPNDigitManipulationOperationNoValue;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Enterprise Voice VPN Digit Manipulation Entry that has no value.
 */
class EnterpriseVoiceVPNDigitManipulationNoValue extends ComplexType implements ComplexInterface
{
    public    $elementName = 'EnterpriseVoiceVPNDigitManipulationNoValue';
    protected $operation;

    public function __construct(
         $operation = ''
    ) {
        $this->setOperation($operation);
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
        $this->operation = ($operation InstanceOf EnterpriseVoiceVPNDigitManipulationOperationNoValue)
             ? $operation
             : new EnterpriseVoiceVPNDigitManipulationOperationNoValue($operation);
        $this->operation->setElementName('operation');
        return $this;
    }

    /**
     * 
     * @return EnterpriseVoiceVPNDigitManipulationOperationNoValue $operation
     */
    public function getOperation()
    {
        return ($this->operation)
            ? $this->operation->getElementValue()
            : null;
    }
}
