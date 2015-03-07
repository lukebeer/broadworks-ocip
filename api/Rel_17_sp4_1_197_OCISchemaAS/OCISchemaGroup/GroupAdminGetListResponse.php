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
 * Response to GroupAdminGetListRequest.
 *         Contains a 5 column table with column headings "Administrator ID",
 *         "Last Name", "First Name", "Department", "Language".
 */
class GroupAdminGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name             = __CLASS__;
    protected $groupAdminTable  = null;


    public function setGroupAdminTable(core:OCITable $groupAdminTable = null)
    {
    }

    public function getGroupAdminTable()
    {
        return (!$this->groupAdminTable) ?: $this->groupAdminTable->value();
    }
}
