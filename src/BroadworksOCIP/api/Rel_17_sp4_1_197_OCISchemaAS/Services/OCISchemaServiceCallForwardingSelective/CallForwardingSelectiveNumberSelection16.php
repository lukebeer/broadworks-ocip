<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallForwardingSelective; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Forward to Number Selection.
 */
class CallForwardingSelectiveNumberSelection16 extends SimpleType
{
    public $elementName = "CallForwardingSelectiveNumberSelection16";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Forward To Default Number',
            'Forward To Specified Number',
            'Do not forward'
        ]));
    }
}
