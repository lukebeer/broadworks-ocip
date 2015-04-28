<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Early Media Support types. This is typically used to configure the ringback tone delivery mode.
 *         When there is no early media, the call originator typically supplies ringback tone locally.
 *         RTP - Early Session refers to RFC 3959.
 */
class EarlyMediaSupportType extends SimpleType
{
    public $elementName = "EarlyMediaSupportType";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'No Early Media',
            'RTP - Session',
            'RTP - Early Session'
        ]));
    }
}
