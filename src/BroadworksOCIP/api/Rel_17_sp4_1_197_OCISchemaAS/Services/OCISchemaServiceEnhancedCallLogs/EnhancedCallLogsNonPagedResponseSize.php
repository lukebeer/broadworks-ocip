<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceEnhancedCallLogs; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\MinInclusive;
use BroadworksOCIP\Builder\Restrictions\MaxInclusive;


/**
 * The maximum number of call log entries to return when paging information is
 *         not specified in the request.
 */
class EnhancedCallLogsNonPagedResponseSize extends SimpleType
{
    public $elementName = "EnhancedCallLogsNonPagedResponseSize";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new MinInclusive("100"));
        $this->addRestriction(new MaxInclusive("1000"));
    }
}
