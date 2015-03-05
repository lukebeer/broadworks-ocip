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
 * User types for which the System Password Rules apply.
 *         The rules could apply to the
 *           (1) System, Provisioning Administrator
 *           (2) System, Provisioning, Service Provider Administrator
 *           (3) Administrator (System, Provisioning, Service Provider, Group and Department) and Users.
 */
class SystemPasswordRulesApplyTo extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this-addRestriction(new Enumeration([
                                              'System, Provisioning Administrator',
                                              'System, Provisioning, Service Provider Administrator',
                                              'Administrator and User'
                                             ]);
    }
}
