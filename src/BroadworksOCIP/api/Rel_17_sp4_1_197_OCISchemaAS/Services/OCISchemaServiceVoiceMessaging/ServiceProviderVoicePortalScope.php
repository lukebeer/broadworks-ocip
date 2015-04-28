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
 *         The Service Provider option allows users to log in to their voice portal using the voice portal
 *         of any group that is both hosted on the same application server and within the same service provider
 *         or enterprise.
 *         The Group option keeps groups completely independent. Users can only log in to their voice portal
 *         using the access number for their group.
 */
class ServiceProviderVoicePortalScope extends SimpleType
{
    public $elementName = "ServiceProviderVoicePortalScope";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Group',
            'Service Provider'
        ]));
    }
}
