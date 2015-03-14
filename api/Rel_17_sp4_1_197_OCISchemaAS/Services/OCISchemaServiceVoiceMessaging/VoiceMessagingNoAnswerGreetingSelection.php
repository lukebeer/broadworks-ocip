<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Announcement Selection.
 */
class VoiceMessagingNoAnswerGreetingSelection extends SimpleType
{
    public $name = "VoiceMessagingNoAnswerGreetingSelection";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'Default',
            'Personal',
            'Alternate01',
            'Alternate02',
            'Alternate03'
        ]));
    }
}
