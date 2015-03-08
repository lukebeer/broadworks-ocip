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
     * Response to a SystemTreatmentMappingInternalReleaseCauseGetListRequest. Contains a table with one row per mapping.
 *         The table columns are: "Internal Release Cause", "Treatment Id".
 */
class SystemTreatmentMappingInternalReleaseCauseGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name                  = __CLASS__;
    protected $treatmentMappingTable = null;


    /**
     * 
     */
    public function setTreatmentMappingTable(core:OCITable $treatmentMappingTable = null)
    {
        $this->treatmentMappingTable =  $treatmentMappingTable;
    }

    /**
     * 
     */
    public function getTreatmentMappingTable()
    {
        return (!$this->treatmentMappingTable) ?: $this->treatmentMappingTable->getValue();
    }
}
