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
 * Service Provider Administrator type
 *         "Normal" indicates the service provider admin is a normal admin.
 *         "Customer" indicates the service provider admin is a customer admin.
 *         "Password Reset Only" indicates the service provider admin is a password reset only admin.
 */
class ServiceProviderAdminType extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this-addRestriction(new Enumeration([
                                              'Normal',
                                              'Customer',
                                              'Password Reset Only'
                                             ]);
    }
}
