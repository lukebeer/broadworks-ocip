<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemVirtualOnNetCallTypeGetListRequest.
 *         Contains a table with column headings: 
 *         "Virtual On-Net Call Type Name", "Virtual On-Net Call Type CDR Value" 
 *         in a row for each Virtual On-Net Call Type.
 */
class SystemVirtualOnNetCallTypeGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $virtualOnNetCallTypeTable  = null;


    public function setVirtualOnNetCallTypeTable(core:OCITable $virtualOnNetCallTypeTable = null)
    {
    }

    public function getVirtualOnNetCallTypeTable()
    {
        return (!$this->virtualOnNetCallTypeTable) ?: $this->virtualOnNetCallTypeTable->value();
    }
}
