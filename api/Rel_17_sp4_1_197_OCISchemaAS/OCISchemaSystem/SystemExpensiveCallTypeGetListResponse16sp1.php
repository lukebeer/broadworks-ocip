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
 * Response to SystemExpensiveCallTypeGetListRequest16sp1. 
 *         The column headings are:
 *         "Alternate Call Indicator", "Treatment Audio File".
 */
class SystemExpensiveCallTypeGetListResponse16sp1 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $alternateCallIndicatorTable
    ) {
        $this->alternateCallIndicatorTable = $alternateCallIndicatorTable;
        $this->args                        = func_get_args();
    }

    public function setAlternateCallIndicatorTable($alternateCallIndicatorTable)
    {
        $alternateCallIndicatorTable and $this->alternateCallIndicatorTable = new core:OCITable($alternateCallIndicatorTable);
    }

    public function getAlternateCallIndicatorTable()
    {
        return (!$this->alternateCallIndicatorTable) ?: $this->alternateCallIndicatorTable->value();
    }
}
