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
 * Response to a SystemConfigurableTreatmentGetListRequest. Contains a table with one row per treatment.
 *         The table columns are: "Treatment Id", "Description".
 */
class SystemConfigurableTreatmentGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $treatmentTable
    ) {
        $this->treatmentTable = $treatmentTable;
        $this->args           = func_get_args();
    }

    public function setTreatmentTable($treatmentTable)
    {
        $treatmentTable and $this->treatmentTable = new core:OCITable($treatmentTable);
    }

    public function getTreatmentTable()
    {
        return (!$this->treatmentTable) ?: $this->treatmentTable->value();
    }
}
