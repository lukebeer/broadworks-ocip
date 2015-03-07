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
 * Response to ServiceProviderServicePackMigrationTaskGetAvailableGroupListRequest.
 *         The groupTable column headings are: "Group Id", "Group Name", "User Count".
 */
class ServiceProviderServicePackMigrationTaskGetAvailableGroupListResponse extends ComplexType implements ComplexInterface
{
    public    $name        = __CLASS__;
    protected $groupTable  = null;


    public function setGroupTable(core:OCITable $groupTable = null)
    {
    }

    public function getGroupTable()
    {
        return (!$this->groupTable) ?: $this->groupTable->value();
    }
}
