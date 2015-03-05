<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleInterface;
use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Type of enhanced configuration supported by an access device.
 *         "2 File Configuration" was formerly called "CPE Type 1"
 *         "3 File Configuration" was formerly called "CPE Type 2"
 */
class AccessDeviceEnhancedConfigurationType14 extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this-addRestriction(new Enumeration([
                                              '2 File Configuration',
                                              '3 File Configuration',
                                              'SNAP'
                                             ]);
    }
}
