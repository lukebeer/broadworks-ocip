<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksAnywhere; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * BroadWorks Anywhere Prompt for CLID options.
 */
class BroadWorksAnywhereCLIDPrompt extends SimpleType
{
    public $name = "BroadWorksAnywhereCLIDPrompt";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'Always Prompt ',
            'Never Prompt ',
            'Prompt When Not Available'
        ]));
    }
}
