<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupGetListInServiceProviderRequest.
 *         Contains a 3 column table with column headings: "Group Id", "Group Name", "User Limit"
 *         and a row for each group.
 */
class GroupGetListInServiceProviderResponse extends ComplexType implements ComplexInterface
{
    public    $name       = __CLASS__;
    protected $groupTable = null;


    /**
     * 
     */
    public function setGroupTable(core:OCITable $groupTable = null)
    {
        $this->groupTable =  $groupTable;
    }

    /**
     * 
     */
    public function getGroupTable()
    {
        return (!$this->groupTable) ?: $this->groupTable->getValue();
    }
}
