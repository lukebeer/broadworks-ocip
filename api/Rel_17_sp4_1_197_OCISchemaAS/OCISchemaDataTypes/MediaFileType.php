<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * The media type of media data.
 *         WMA - Windows Media Audio file
 *         WAV - A WAV file
 *         3GP - A 3GP file
 *         MOV - A MOV file using a H.263 or H.264 codec.
 */
class MediaFileType extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this->addRestriction(new Enumeration([
            'WMA',
            'WAV',
            '3GP',
            'MOV'
        ]));
    }
}
