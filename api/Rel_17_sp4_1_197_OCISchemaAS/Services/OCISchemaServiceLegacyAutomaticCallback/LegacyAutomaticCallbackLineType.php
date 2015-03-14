<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Legacy Automatic Callback line type.
 */
class LegacyAutomaticCallbackLineType extends SimpleType
{
    public $name = "LegacyAutomaticCallbackLineType";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'Individual',
            'Coin',
            'Series',
            'Hunt',
            'Unassigned',
            'PBX',
            'Multiparty',
            'Choke',
            'Oos',
            'Nonspecific',
            'Telecampus',
            'ISDN',
            'Telekibutz',
            'Spare'
        ]));
    }
}
