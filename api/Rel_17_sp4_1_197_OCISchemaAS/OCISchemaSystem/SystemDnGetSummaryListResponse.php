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
 * Response to SystemDnGetSummaryListRequest.
 *         The column headings are "Phone Numbers, "Service Provider Id" and "Is Enterprise"
 */
class SystemDnGetSummaryListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $dnSummaryTable
    ) {
        $this->dnSummaryTable = $dnSummaryTable;
        $this->args           = func_get_args();
    }

    public function setDnSummaryTable($dnSummaryTable)
    {
        $dnSummaryTable and $this->dnSummaryTable = new core:OCITable($dnSummaryTable);
    }

    public function getDnSummaryTable()
    {
        return (!$this->dnSummaryTable) ?: $this->dnSummaryTable->value();
    }
}
