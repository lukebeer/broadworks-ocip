<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceThirdPartyVoiceMailSupport; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Third Party Voice Mail user-level voice mail server choices.
 */
class ThirdPartyVoiceMailSupportServerSelection extends SimpleType
{
    public $elementName = "ThirdPartyVoiceMailSupportServerSelection";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Group Mail Server',
            'User Specific Mail Server'
        ]));
    }
}
