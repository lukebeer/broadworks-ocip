<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallCenter; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the EnterpriseCallCenterCallDispositionCodeGetUsageListRequest.
 *         The Type column contains either "Call Center" or "Route Point".
 *         Contains a table with column headings: "Group Id", "Id", "Name" and "Type".
 */
class EnterpriseCallCenterCallDispositionCodeGetUsageListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $callCenterTable = null;


    /**
     * 
     */
    public function setCallCenterTable(core:OCITable $callCenterTable = null)
    {
        $this->callCenterTable =  $callCenterTable;
    }

    /**
     * 
     */
    public function getCallCenterTable()
    {
        return (!$this->callCenterTable) ?: $this->callCenterTable->getValue();
    }
}
