<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * The media type of media data.
 *         WMA - Windows Media Audio file
 *         WAV - A WAV file
 *         3GP - A 3GP file
 *         MOV - A MOV file using a H.263 or H.264 codec.
 */
class MediaFileType extends SimpleType
{
    public $elementName = "MediaFileType";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'WMA',
            'WAV',
            '3GP',
            'MOV'
        ]));
    }
}
