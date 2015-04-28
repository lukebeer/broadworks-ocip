<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVideoAddOn; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Maximum Originating Call Delay.
 */
class VideoAddOnMaxOriginatingCallDelaySeconds extends SimpleType
{
    public $elementName = "VideoAddOnMaxOriginatingCallDelaySeconds";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            '2',
            '5',
            '10'
        ]));
    }
}
