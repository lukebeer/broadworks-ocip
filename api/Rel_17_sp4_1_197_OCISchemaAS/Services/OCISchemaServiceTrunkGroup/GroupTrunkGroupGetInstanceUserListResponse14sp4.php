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
     * Response to GroupTrunkGroupGetInstanceUserListRequest14sp4.
 *         The response contains a 7 column table with column headings "User Id", "Last Name",
 *         "First Name", "Department", "Phone Number", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupTrunkGroupGetInstanceUserListResponse14sp4 extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $trunkGroupUserTable = null;


    /**
     * 
     */
    public function setTrunkGroupUserTable(core:OCITable $trunkGroupUserTable = null)
    {
        $this->trunkGroupUserTable =  $trunkGroupUserTable;
    }

    /**
     * 
     */
    public function getTrunkGroupUserTable()
    {
        return (!$this->trunkGroupUserTable) ?: $this->trunkGroupUserTable->getValue();
    }
}
