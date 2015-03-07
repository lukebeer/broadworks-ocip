<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup\ShInterfaceUserListEntry;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupShInterfaceGetUserListRequest.
 *         The response contains the Sh Non Transparent data and associated Public User Identity
 *         information for every Public User Identity in the group.
 */
class GroupShInterfaceGetUserListResponse extends ComplexType implements ComplexInterface
{
    public    $name   = __CLASS__;
    protected $entry  = null;


    public function setEntry(ShInterfaceUserListEntry $entry = null)
    {
    }

    public function getEntry()
    {
        return (!$this->entry) ?: $this->entry->value();
    }
}
