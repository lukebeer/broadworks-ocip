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
 * Group's policy for user access to his voice messaging configuration.
 *         "Full" indicates full control over the voice messaging configuration.
 *         "Restricted" indicates that the choice to either use unified messaging option (whereby the user can configure a mail server on which messages are stored)
 *         or to forward the voice message to a designated email address is not available.
 */
class GroupVoiceMessagingAccess extends SimpleType
{
    public $elementName = "GroupVoiceMessagingAccess";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Full',
            'Restricted'
        ]));
    }
}
