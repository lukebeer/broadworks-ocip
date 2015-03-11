<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAutomaticCallback; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Callback Release Cause.
 */
class AutomaticCallbackReleaseCause extends SimpleType
{
    public $name = "AutomaticCallbackReleaseCause";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new Enumeration([
            'Busy',
            'Forbidden',
            'Global Failure',
            'Request Failure',
            'Server Failure',
            'Translation Failure',
            'Temporarily Unavailable',
            'User Not Found',
            'Request Timeout'
        ]));
    }
}
