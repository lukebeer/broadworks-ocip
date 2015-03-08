<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupTrunkGroupGetInstanceListRequest14sp4.
 *         Contains a table with column headings "Name", "Department", "Device Name", "Device Level",
 *         "Group Id".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 */
class GroupTrunkGroupGetInstanceListResponse14sp4 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE    = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup\GroupTrunkGroupGetInstanceListResponse14sp4';
    public    $name            = __CLASS__;
    protected $trunkGroupTable = null;


    /**
     * 
     */
    public function setTrunkGroupTable(core:OCITable $trunkGroupTable = null)
    {
        $this->trunkGroupTable = core:OCITable $trunkGroupTable;
    }

    /**
     * 
     */
    public function getTrunkGroupTable()
    {
        return (!$this->trunkGroupTable) ?: $this->trunkGroupTable->getValue();
    }
}
