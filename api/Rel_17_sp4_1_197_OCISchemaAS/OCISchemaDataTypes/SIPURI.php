<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\MinLength;
use Broadworks_OCIP\core\Builder\Restrictions\MaxLength;


/**
 * SIP URI.
 *         The SIP URI is used in many different places in the schema.
 *         If the SIPURI is an alias, the Validation rules are:
 *         - don't allow sip:
 *         - allow the following characters:
 *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
 *         - exactly one @ symbol
 *         - user portion and host portion are both required
 */
class SIPURI extends SimpleType
{
    public $name = "SIPURI";
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = "";
        $this->addRestriction(new MinLength("1"));
        $this->addRestriction(new MaxLength("161"));
    }
}
