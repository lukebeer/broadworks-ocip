<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to ServiceProviderOfficeZoneGetAssignedGroupListRequest.  Contains a table of groups that have the Office Zone assigned. The column headings are: "Group Id" and "Group Name".
 */
class ServiceProviderOfficeZoneGetAssignedGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $groupTable
    ) {
        $this->groupTable = $groupTable;
        $this->args       = func_get_args();
    }

    public function setGroupTable($groupTable)
    {
        $groupTable and $this->groupTable = new core:OCITable($groupTable);
    }

    public function getGroupTable()
    {
        return (!$this->groupTable) ?: $this->groupTable->value();
    }
}
