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
 * Timer that controls the frequency of Device-Watchdog messages (when no other messages are exchanged on the peer connection) and is used in the connection failure detection algorithm.
 */
class BwDiameterTwTimerSeconds extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = (int);
        $this->addRestriction(new MinInclusive("6"));
        $this->addRestriction(new MaxInclusive("60"));
    }
}
