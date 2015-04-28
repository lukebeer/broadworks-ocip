<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCommPilotExpress; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * CommPilot Express Voice Messaging Greeting Choices.
 */
class CommPilotExpressVoiceMailGreeting extends SimpleType
{
    public $elementName = "CommPilotExpressVoiceMailGreeting";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'No Answer',
            'Unavailable'
        ]));
    }
}
