<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceBroadWorksAnywhere; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the UserBroadWorksAnywhereGetAvailablePortalListRequest.
 *         Contains a table with column headings: "Portal Name", "Phone Number", "Extension", "Language".
 */
class UserBroadWorksAnywhereGetAvailablePortalListResponse extends ComplexType implements ComplexInterface
{
    public    $name         = __CLASS__;
    protected $portalTable  = null;


    public function setPortalTable(core:OCITable $portalTable = null)
    {
    }

    public function getPortalTable()
    {
        return (!$this->portalTable) ?: $this->portalTable->value();
    }
}
