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
 * Types of Endpoints in Broadworks.
 */
class EndpointType extends SimpleType
{
    public $elementName = "EndpointType";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Primary',
            'Shared Call Appearance',
            'Video Add On',
            'Public Service Identity',
            'Music On Hold Internal'
        ]));
    }
}
