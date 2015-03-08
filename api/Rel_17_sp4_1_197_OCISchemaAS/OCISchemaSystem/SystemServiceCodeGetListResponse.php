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
     * Response to SystemServiceCodeGetListRequest.
 *         Contains a table of defined service codes
 *         The column headings are: "Service Code", and "Description".
 */
class SystemServiceCodeGetListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE     = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemServiceCodeGetListResponse';
    public    $name             = __CLASS__;
    protected $serviceCodeTable = null;


    /**
     * 
     */
    public function setServiceCodeTable(core:OCITable $serviceCodeTable = null)
    {
        $this->serviceCodeTable = core:OCITable $serviceCodeTable;
    }

    /**
     * 
     */
    public function getServiceCodeTable()
    {
        return (!$this->serviceCodeTable) ?: $this->serviceCodeTable->getValue();
    }
}
