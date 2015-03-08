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
     * Response to the SystemApplicationControllerGetListRequest.
 *       Contains a table with column headings: "Name", "Subscriber Id", "Channel Set Id", "Status".
 *       The column values for "Status" can either be "ready" or "notReady".
 */
class SystemApplicationControllerGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                       = __CLASS__;
    protected $applicationControllerTable = null;


    /**
     * 
     */
    public function setApplicationControllerTable(core:OCITable $applicationControllerTable = null)
    {
        $this->applicationControllerTable =  $applicationControllerTable;
    }

    /**
     * 
     */
    public function getApplicationControllerTable()
    {
        return (!$this->applicationControllerTable) ?: $this->applicationControllerTable->getValue();
    }
}
