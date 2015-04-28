<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVoiceMessaging; 

use BroadworksOCIP\Builder\Types\SimpleType;
use BroadworksOCIP\Builder\Restrictions\Enumeration;


/**
 * Voice Portal Scope.
 *         When set to System, users can call any group voice portal hosted on the same Application Server
 *         as themselves rather than only the voice portal of their own group to initiate the login process.
 *         When set to Service Providers, the voice portal scope is configured within the Service Provider.
 */
class SystemVoicePortalScope extends SimpleType
{
    public $elementName = "SystemVoicePortalScope";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Service Provider',
            'System'
        ]));
    }
}
