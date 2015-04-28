<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Codec.
 */
class Codec extends SimpleType
{
    public $elementName = "Codec";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Clear',
            'G711alaw',
            'G711ulaw',
            'G722',
            'G723-53',
            'G723-63',
            'G723A-53',
            'G723A-63',
            'G726-16',
            'G726-24',
            'G726-32',
            'G726-40',
            'G728',
            'G729-8',
            'G729B-8',
            'GSMEFR',
            'GSMFR'
        ]));
    }
}
