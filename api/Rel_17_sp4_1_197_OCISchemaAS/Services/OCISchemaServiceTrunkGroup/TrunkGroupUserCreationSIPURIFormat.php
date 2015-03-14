<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * SIP URI format for Trunk Group User Creation.
 */
class TrunkGroupUserCreationSIPURIFormat extends SimpleType
{
    public $name = "TrunkGroupUserCreationSIPURIFormat";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'Extension',
            'National DN',
            'E164 Format No Plus',
            'E164 Format'
        ]));
    }
}
