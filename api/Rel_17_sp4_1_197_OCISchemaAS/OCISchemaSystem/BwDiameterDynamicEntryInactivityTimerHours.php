<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinInclusive;
use Broadworks_OCIP\core\Builder\Restrictions\MaxInclusive;


/**
 * Idle time allowed for a dynamic entry (either Realm Routing Table entry or Peer Table entry) before it is removed.
 */
class BwDiameterDynamicEntryInactivityTimerHours extends SimpleType
{
    public $name = "BwDiameterDynamicEntryInactivityTimerHours";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new MinInclusive("1"));
        $this->addRestriction(new MaxInclusive("168"));
    }
}
