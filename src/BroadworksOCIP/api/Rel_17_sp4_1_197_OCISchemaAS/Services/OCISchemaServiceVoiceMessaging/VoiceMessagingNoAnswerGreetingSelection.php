<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Announcement Selection.
 */
class VoiceMessagingNoAnswerGreetingSelection extends SimpleType
{
    public $elementName = "VoiceMessagingNoAnswerGreetingSelection";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Default',
            'Personal',
            'Alternate01',
            'Alternate02',
            'Alternate03'
        ]));
    }
}
