<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Call center manual night service announcement mode.
 */
class CallCenterManualNightServiceAnnouncementMode extends SimpleType
{
    public $elementName = "CallCenterManualNightServiceAnnouncementMode";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Normal Announcement',
            'Manual Announcement'
        ]));
    }
}
