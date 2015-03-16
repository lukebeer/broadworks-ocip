<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallCenter; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * The call center enhanced reporting abadoned calls possible values for service level thresholds
 */
class CallCenterReportAbadonedCallsInServiceLevel extends SimpleType
{
    public $elementName = "CallCenterReportAbadonedCallsInServiceLevel";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Ignore All Abandoned Calls',
            'Include All Abandoned Calls',
            'Include Abandoned Calls Except Before Entrance Completes',
            'Include Abandoned Calls Except In Interval'
        ]));
    }
}
