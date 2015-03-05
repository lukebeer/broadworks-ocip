<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\core\Builder\Types\SimpleInterface;
use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Codec.
 */
class Codec extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this-addRestriction(new Enumeration([
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
                                             ]);
    }
}
