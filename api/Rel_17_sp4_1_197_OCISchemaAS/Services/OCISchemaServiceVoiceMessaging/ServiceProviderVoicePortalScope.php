<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVoiceMessaging; 

use Broadworks_OCIP\core\Builder\Types\SimpleInterface;
use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


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
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this-addRestriction(new Enumeration([
                                              'Group',
                                              'Service Provider'
                                             ]);
    }
}
