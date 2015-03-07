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
 * Possible values for administrative access policy settings.
 */
class PolicyAccess extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this->addRestriction(new Enumeration([
            'Full',
            'Restricted-FullProfile',
            'Restricted',
            'Restricted-NoAuthorize',
            'Restricted-NoUserAssociation',
            'Restricted-ReadProfile',
            'Restricted-NoProfile',
            'Restricted-NoGroup',
            'Restricted-FullResource',
            'Restricted-ReadResource',
            'None'
        ]));
    }
}
