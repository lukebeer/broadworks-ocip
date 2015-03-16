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
 * Possible algorithms for digital signatures supported by the provisioning server.
 */
class DigitalSignatureAlgorithm extends SimpleType
{
    public $elementName = "DigitalSignatureAlgorithm";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration("MD5"));
    }
}
