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
     * Response to GroupTrunkGroupGetInstanceUserListRequest.
 *         The response contains a 7 column table with column headings "User Id", "Last Name",
 *         "First Name", "Department", "Phone Number", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupTrunkGroupGetInstanceUserListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupTrunkGroupGetInstanceUserListResponse';
    public    $name                = __CLASS__;
    protected $trunkGroupUserTable = null;


    /**
     * 
     */
    public function setTrunkGroupUserTable(core:OCITable $trunkGroupUserTable = null)
    {
        $this->trunkGroupUserTable = core:OCITable $trunkGroupUserTable;
    }

    /**
     * 
     */
    public function getTrunkGroupUserTable()
    {
        return (!$this->trunkGroupUserTable) ?: $this->trunkGroupUserTable->getValue();
    }
}
