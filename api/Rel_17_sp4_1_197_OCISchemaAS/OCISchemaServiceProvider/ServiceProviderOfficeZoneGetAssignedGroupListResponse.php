<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to ServiceProviderOfficeZoneGetAssignedGroupListRequest.  Contains a table of groups that have the Office Zone assigned. The column headings are: "Group Id" and "Group Name".
 */
class ServiceProviderOfficeZoneGetAssignedGroupListResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceProvider\ServiceProviderOfficeZoneGetAssignedGroupListResponse';
    public    $name       = __CLASS__;
    protected $groupTable = null;


    /**
     * 
     */
    public function setGroupTable(core:OCITable $groupTable = null)
    {
        $this->groupTable = core:OCITable $groupTable;
    }

    /**
     * 
     */
    public function getGroupTable()
    {
        return (!$this->groupTable) ?: $this->groupTable->getValue();
    }
}
