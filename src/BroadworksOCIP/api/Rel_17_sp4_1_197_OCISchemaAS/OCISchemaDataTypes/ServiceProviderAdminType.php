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
 * Service Provider Administrator type
 *         "Normal" indicates the service provider admin is a normal admin.
 *         "Customer" indicates the service provider admin is a customer admin.
 *         "Password Reset Only" indicates the service provider admin is a password reset only admin.
 */
class ServiceProviderAdminType extends SimpleType
{
    public $elementName = "ServiceProviderAdminType";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Normal',
            'Customer',
            'Password Reset Only'
        ]));
    }
}
