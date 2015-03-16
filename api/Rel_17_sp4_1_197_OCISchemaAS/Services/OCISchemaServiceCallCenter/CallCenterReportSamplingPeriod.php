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
 * The call center enhanced reporting sampling period.
 */
class CallCenterReportSamplingPeriod extends SimpleType
{
    public $elementName = "CallCenterReportSamplingPeriod";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            '15 Minutes',
            '30 Minutes',
            'Hourly',
            'Daily',
            'Weekly',
            'Monthly'
        ]));
    }
}
