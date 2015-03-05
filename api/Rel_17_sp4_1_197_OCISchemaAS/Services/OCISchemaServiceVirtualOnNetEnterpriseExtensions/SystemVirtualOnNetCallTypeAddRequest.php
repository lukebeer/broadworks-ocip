<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetCallTypeCdrValue;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Virtual On-Net Call Type.
 *          The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemVirtualOnNetCallTypeAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $virtualOnNetCallTypeName,
             $virtualOnNetCallTypeCdrValue
    ) {
        $this->virtualOnNetCallTypeName     = new VirtualOnNetCallTypeName($virtualOnNetCallTypeName);
        $this->virtualOnNetCallTypeCdrValue = new VirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue);
        $this->args                         = func_get_args();
    }

    public function setVirtualOnNetCallTypeName($virtualOnNetCallTypeName)
    {
        $virtualOnNetCallTypeName and $this->virtualOnNetCallTypeName = new VirtualOnNetCallTypeName($virtualOnNetCallTypeName);
    }

    public function getVirtualOnNetCallTypeName()
    {
        return (!$this->virtualOnNetCallTypeName) ?: $this->virtualOnNetCallTypeName->value();
    }

    public function setVirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue)
    {
        $virtualOnNetCallTypeCdrValue and $this->virtualOnNetCallTypeCdrValue = new VirtualOnNetCallTypeCdrValue($virtualOnNetCallTypeCdrValue);
    }

    public function getVirtualOnNetCallTypeCdrValue()
    {
        return (!$this->virtualOnNetCallTypeCdrValue) ?: $this->virtualOnNetCallTypeCdrValue->value();
    }
}
