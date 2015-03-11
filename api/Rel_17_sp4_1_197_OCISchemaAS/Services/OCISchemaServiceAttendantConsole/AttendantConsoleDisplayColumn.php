<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Attendant Console Display Columns.
 */
class AttendantConsoleDisplayColumn extends SimpleType
{
    public $name = "AttendantConsoleDisplayColumn";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'Action',
            'Department',
            'Email',
            'Extension',
            'Mobile',
            'Name',
            'Phone Number',
            'Pager',
            'Status',
            'Title'
        ]));
    }
}
