<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to a SystemCommunicationBarringCallTypeGetListRequest. Contains a table with one row per Communication Barring Call Type.  The table column headings are: "Call Type" and "Network Server Call Type".
 */
class SystemCommunicationBarringCallTypeGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE  = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemCommunicationBarringCallTypeGetListResponse';
    public    $name          = __CLASS__;
    protected $callTypeTable = null;


    /**
     * 
     */
    public function setCallTypeTable(core:OCITable $callTypeTable = null)
    {
        $this->callTypeTable = core:OCITable $callTypeTable;
    }

    /**
     * 
     */
    public function getCallTypeTable()
    {
        return (!$this->callTypeTable) ?: $this->callTypeTable->getValue();
    }
}