<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceLegacyAutomaticCallback; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Legacy Automatic Callback line type.
 */
class LegacyAutomaticCallbackLineType extends SimpleType
{
    public $elementName = "LegacyAutomaticCallbackLineType";
    public function __construct($value) {
        $this->setElementValue($value);
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
