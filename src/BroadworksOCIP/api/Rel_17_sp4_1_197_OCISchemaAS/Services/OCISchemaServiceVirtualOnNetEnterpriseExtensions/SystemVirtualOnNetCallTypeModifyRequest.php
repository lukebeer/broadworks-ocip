<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeCdrValue;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeName;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a Virtual On-Net Call Type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemVirtualOnNetCallTypeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemVirtualOnNetCallTypeModifyRequest';
    protected $virtualOnNetCallTypeName;
    protected $virtualOnNetCallTypeCdrValue;

    public function __construct(
         $virtualOnNetCallTypeName = '',
         $virtualOnNetCallTypeCdrValue = null
    ) {
        $this->setVirtualOnNetCallTypeName($virtualOnNetCallTypeName);
        $this->setVirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue);
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
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName = null)
    {
        $this->virtualOnNetCallTypeName = ($virtualOnNetCallTypeName InstanceOf VirtualOnNetCallTypeName)
             ? $virtualOnNetCallTypeName
             : new VirtualOnNetCallTypeName($virtualOnNetCallTypeName);
        $this->virtualOnNetCallTypeName->setElementName('virtualOnNetCallTypeName');
        return $this;
    }

    /**
     * 
     * @return VirtualOnNetCallTypeName $virtualOnNetCallTypeName
     */
    public function getVirtualOnNetCallTypeName()
    {
        return ($this->virtualOnNetCallTypeName)
            ? $this->virtualOnNetCallTypeName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setVirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue = null)
    {
        $this->virtualOnNetCallTypeCdrValue = ($virtualOnNetCallTypeCdrValue InstanceOf VirtualOnNetCallTypeCdrValue)
             ? $virtualOnNetCallTypeCdrValue
             : new VirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue);
        $this->virtualOnNetCallTypeCdrValue->setElementName('virtualOnNetCallTypeCdrValue');
        return $this;
    }

    /**
     * 
     * @return VirtualOnNetCallTypeCdrValue $virtualOnNetCallTypeCdrValue
     */
    public function getVirtualOnNetCallTypeCdrValue()
    {
        return ($this->virtualOnNetCallTypeCdrValue)
            ? $this->virtualOnNetCallTypeCdrValue->getElementValue()
            : null;
    }
}
