<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Voice Portal Scope.
 *         When set to System, users can call any group voice portal hosted on the same Application Server
 *         as themselves rather than only the voice portal of their own group to initiate the login process.
 *         When set to Service Providers, the voice portal scope is configured within the Service Provider.
 */
class SystemVoicePortalScope extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this->addRestriction(new Enumeration([
            'Service Provider',
            'System'
        ]));
    }
}
