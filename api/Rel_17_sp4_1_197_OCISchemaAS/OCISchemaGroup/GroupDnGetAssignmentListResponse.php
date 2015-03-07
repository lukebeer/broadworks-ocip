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
 * Response to the GroupDnGetAssignmentListRequest.
 *         The response contains a table with columns: "Phone Numbers", "Assigned To", "Department".
 *         The "Phone Numbers" column contains either a single DN or a range of DNs.
 *         The "Assigned To" column contains the user name or service instance name possessing the DN(s).
 *         The "Department" column contains the department of the DN, not the department of the user or service instance.
 *         The "Activated" column indicates if the DN or DN range has been activated.  Only has a value if the DN(s) is assigned to a user.
 */
class GroupDnGetAssignmentListResponse extends ComplexType implements ComplexInterface
{
    public    $name     = __CLASS__;
    protected $dnTable  = null;


    public function setDnTable(core:OCITable $dnTable = null)
    {
    }

    public function getDnTable()
    {
        return (!$this->dnTable) ?: $this->dnTable->value();
    }
}
