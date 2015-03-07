<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupTrunkGroupGetInstanceListRequest14.
 *         Contains a table with column headings "Service User Id", "Name", "Department", "Device Name", "Device Level",
 *         "Group Id".
 *         The "Device Level" column contains one of the AccessDeviceLevel enumerated constants.
 */
class GroupTrunkGroupGetInstanceListResponse14 extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $trunkGroupTable  = null;


    public function setTrunkGroupTable(core:OCITable $trunkGroupTable = null)
    {
    }

    public function getTrunkGroupTable()
    {
        return (!$this->trunkGroupTable) ?: $this->trunkGroupTable->value();
    }
}
