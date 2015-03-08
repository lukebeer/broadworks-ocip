<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Hold period for expired conferences, in days.
 */
class MeetMeConferencingExpiredConferenceHoldPeriodDays extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = (int);
        $this->addRestriction(new Enumeration([
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '15',
            '30',
            '60'
        ]));
    }
}
