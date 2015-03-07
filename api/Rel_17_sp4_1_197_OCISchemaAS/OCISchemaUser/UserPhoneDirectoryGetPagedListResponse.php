<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to UserPhoneDirectoryGetPagedListRequest.
 *         Returns the number of entries that would be returned if the response 
 *         Was not page size restricted.
 *         Contains a table with a row for each user and column headings:
 *         "User Id", "First Name", "Last Name", "First Name Unicode", 
 *         "Last Name Unicode", "Hiragana First Name", "Hiragana Last Name",
 *         "Title", "Phone Number", "Extension", "Mobile", "Pager", 
 *         "Email Address", "Yahoo Id", "Department", "Group Id", "Location",
 *         "Address Line 1", "Address Line 2", "City", "State", "Zip", "Country".
 *         The response entries are sorted by "Last Name Unicode" first and
 *         "First Name unicode" secondarily.
 */
class UserPhoneDirectoryGetPagedListResponse extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $totalNumberOfRows  = null;
    protected $directoryTable     = null;


    public function setTotalNumberOfRows(xs:int $totalNumberOfRows = null)
    {
    }

    public function getTotalNumberOfRows()
    {
        return (!$this->totalNumberOfRows) ?: $this->totalNumberOfRows->value();
    }

    public function setDirectoryTable(core:OCITable $directoryTable = null)
    {
    }

    public function getDirectoryTable()
    {
        return (!$this->directoryTable) ?: $this->directoryTable->value();
    }
}
