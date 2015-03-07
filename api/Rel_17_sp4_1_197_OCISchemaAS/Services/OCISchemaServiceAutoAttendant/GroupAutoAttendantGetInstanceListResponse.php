<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceAutoAttendant; 


use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to the GroupAutoAttendantGetInstanceListRequest.
 *         Contains a table with column headings:
 *         "Service User Id", "Name", "Video", "Phone Number", "Extension", "Department", "Is Active".
 *         The column values for "Video" and "Is Active" can either be true, or false.
 */
class GroupAutoAttendantGetInstanceListResponse extends ComplexType implements ComplexInterface
{
    public    $name                = __CLASS__;
    protected $autoAttendantTable  = null;


    public function setAutoAttendantTable(core:OCITable $autoAttendantTable = null)
    {
    }

    public function getAutoAttendantTable()
    {
        return (!$this->autoAttendantTable) ?: $this->autoAttendantTable->value();
    }
}
