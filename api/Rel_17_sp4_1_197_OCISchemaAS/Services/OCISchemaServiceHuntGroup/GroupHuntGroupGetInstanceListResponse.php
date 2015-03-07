<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceHuntGroup; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupHuntGroupGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Phone Number", "Extension", "Department", "Is Active", "Policy".
 *         The column values for "Is Active" can either be true, or false.
 *         NOTE: prior to release 14, the policy column did not match the HuntPolicy enumerated type.
 */
class GroupHuntGroupGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $name            = __CLASS__;
    protected $huntGroupTable  = null;


    public function setHuntGroupTable(core:OCITable $huntGroupTable = null)
    {
    }

    public function getHuntGroupTable()
    {
        return (!$this->huntGroupTable) ?: $this->huntGroupTable->value();
    }
}
