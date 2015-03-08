<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCapacityManagement; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupCallCapacityManagementGetInstanceListRequest.
 *         Contains a table with column headings: "Name", "Is Default", "Maximum Calls", "Maximum Incoming Calls", "Maximum Outgoing Calls".
 */
class GroupCallCapacityManagementGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE           = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCapacityManagement\GroupCallCapacityManagementGetInstanceListResponse';
    public    $name                   = __CLASS__;
    protected $callCapacityGroupTable = null;


    /**
     * 
     */
    public function setCallCapacityGroupTable(core:OCITable $callCapacityGroupTable = null)
    {
        $this->callCapacityGroupTable = core:OCITable $callCapacityGroupTable;
    }

    /**
     * 
     */
    public function getCallCapacityGroupTable()
    {
        return (!$this->callCapacityGroupTable) ?: $this->callCapacityGroupTable->getValue();
    }
}
