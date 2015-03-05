<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserPhoneDirectoryGetListRequest.
 *         Contains a table with  a row for each phone number and column headings :
 *         "Name", "Number", "Extension", "Mobile", "Email Address", "Department", "First Name", "Last Name", "User Id", "Title",
 */
class UserPhoneDirectoryGetListResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $directoryTable
    ) {
        $this->directoryTable = $directoryTable;
        $this->args           = func_get_args();
    }

    public function setDirectoryTable($directoryTable)
    {
        $directoryTable and $this->directoryTable = new core:OCITable($directoryTable);
    }

    public function getDirectoryTable()
    {
        return (!$this->directoryTable) ?: $this->directoryTable->value();
    }
}
