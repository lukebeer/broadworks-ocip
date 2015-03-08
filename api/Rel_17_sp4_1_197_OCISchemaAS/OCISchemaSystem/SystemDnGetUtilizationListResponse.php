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
     * Response to SystemDnUtilizationGetListRequest.
 *         The table columns are: "Service Provider Id", "Phone Numbers", "Assigned to Groups",
 *         "Percentage Assigned", "Is Enterprise" and "Activated on Groups".
 */
class SystemDnGetUtilizationListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE       = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemDnGetUtilizationListResponse';
    public    $name               = __CLASS__;
    protected $dnUtilizationTable = null;


    /**
     * 
     */
    public function setDnUtilizationTable(core:OCITable $dnUtilizationTable = null)
    {
        $this->dnUtilizationTable = core:OCITable $dnUtilizationTable;
    }

    /**
     * 
     */
    public function getDnUtilizationTable()
    {
        return (!$this->dnUtilizationTable) ?: $this->dnUtilizationTable->getValue();
    }
}
