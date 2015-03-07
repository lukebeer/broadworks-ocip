<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Early Media Support types. This is typically used to configure the ringback tone delivery mode.
 *         When there is no early media, the call originator typically supplies ringback tone locally.
 *         RTP - Early Session refers to RFC 3959.
 */
class EarlyMediaSupportType extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this->addRestriction(new Enumeration([
            'No Early Media',
            'RTP - Session',
            'RTP - Early Session'
        ]));
    }
}
