<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * BroadWorks Anywhere Prompt for CLID options.
 */
class BroadWorksAnywhereCLIDPrompt extends SimpleType
{
    public $elementName = "BroadWorksAnywhereCLIDPrompt";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Always Prompt ',
            'Never Prompt ',
            'Prompt When Not Available'
        ]));
    }
}
