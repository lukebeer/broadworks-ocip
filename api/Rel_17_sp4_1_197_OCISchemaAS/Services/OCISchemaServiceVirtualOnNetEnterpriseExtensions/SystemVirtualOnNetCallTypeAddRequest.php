<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeCdrValue;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a Virtual On-Net Call Type.
 *          The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemVirtualOnNetCallTypeAddRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $virtualOnNetCallTypeName     = null;
    protected $virtualOnNetCallTypeCdrValue = null;

    public function __construct(
         $virtualOnNetCallTypeName,
         $virtualOnNetCallTypeCdrValue
    ) {
        $this->setVirtualOnNetCallTypeName($virtualOnNetCallTypeName);
        $this->setVirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue);
    }

    /**
     * Virtual On-Net Call Type name.
     */
    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName = null)
    {
        $this->virtualOnNetCallTypeName = ($virtualOnNetCallTypeName InstanceOf VirtualOnNetCallTypeName)
             ? $virtualOnNetCallTypeName
             : new VirtualOnNetCallTypeName($virtualOnNetCallTypeName);
    }

    /**
     * Virtual On-Net Call Type name.
     */
    public function getVirtualOnNetCallTypeName()
    {
        return (!$this->virtualOnNetCallTypeName) ?: $this->virtualOnNetCallTypeName->getValue();
    }

    /**
     * Virtual On-Net Call Type CDR value.
     */
    public function setVirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue = null)
    {
        $this->virtualOnNetCallTypeCdrValue = ($virtualOnNetCallTypeCdrValue InstanceOf VirtualOnNetCallTypeCdrValue)
             ? $virtualOnNetCallTypeCdrValue
             : new VirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue);
    }

    /**
     * Virtual On-Net Call Type CDR value.
     */
    public function getVirtualOnNetCallTypeCdrValue()
    {
        return (!$this->virtualOnNetCallTypeCdrValue) ?: $this->virtualOnNetCallTypeCdrValue->getValue();
    }
}
