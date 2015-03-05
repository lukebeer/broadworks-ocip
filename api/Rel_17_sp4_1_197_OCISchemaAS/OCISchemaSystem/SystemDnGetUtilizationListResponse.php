<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to SystemDnUtilizationGetListRequest.
 *         The table columns are: "Service Provider Id", "Phone Numbers", "Assigned to Groups",
 *         "Percentage Assigned", "Is Enterprise" and "Activated on Groups".
 */
class SystemDnGetUtilizationListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $dnUtilizationTable
    ) {
        $this->dnUtilizationTable = $dnUtilizationTable;
        $this->args               = func_get_args();
    }

    public function setDnUtilizationTable($dnUtilizationTable)
    {
        $dnUtilizationTable and $this->dnUtilizationTable = new core:OCITable($dnUtilizationTable);
    }

    public function getDnUtilizationTable()
    {
        return (!$this->dnUtilizationTable) ?: $this->dnUtilizationTable->value();
    }
}
