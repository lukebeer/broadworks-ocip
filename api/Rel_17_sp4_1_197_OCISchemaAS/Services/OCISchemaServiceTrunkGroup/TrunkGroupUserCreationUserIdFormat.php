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
 * User Id format for Trunk Group User Creation.
 */
class TrunkGroupUserCreationUserIdFormat extends SimpleType
{
    public $elementName = "TrunkGroupUserCreationUserIdFormat";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Extension',
            'National DN',
            'E164 Format No Plus'
        ]));
    }
}
