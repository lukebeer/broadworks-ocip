<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeCdrValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a Virtual On-Net Call Type.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemVirtualOnNetCallTypeModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemVirtualOnNetCallTypeModifyRequest';
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
        $this->virtualOnNetCallTypeName->setName('virtualOnNetCallTypeName');
        return $this;
    }

    /**
     * 
     * @return VirtualOnNetCallTypeName $virtualOnNetCallTypeName
     */
    public function getVirtualOnNetCallTypeName()
    {
        return ($this->virtualOnNetCallTypeName) ? $this->virtualOnNetCallTypeName->getValue() : null;
    }

    /**
     * 
     */
    public function setVirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue = null)
    {
        $this->virtualOnNetCallTypeCdrValue = ($virtualOnNetCallTypeCdrValue InstanceOf VirtualOnNetCallTypeCdrValue)
             ? $virtualOnNetCallTypeCdrValue
             : new VirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue);
        $this->virtualOnNetCallTypeCdrValue->setName('virtualOnNetCallTypeCdrValue');
        return $this;
    }

    /**
     * 
     * @return VirtualOnNetCallTypeCdrValue $virtualOnNetCallTypeCdrValue
     */
    public function getVirtualOnNetCallTypeCdrValue()
    {
        return ($this->virtualOnNetCallTypeCdrValue) ? $this->virtualOnNetCallTypeCdrValue->getValue() : null;
    }
}
