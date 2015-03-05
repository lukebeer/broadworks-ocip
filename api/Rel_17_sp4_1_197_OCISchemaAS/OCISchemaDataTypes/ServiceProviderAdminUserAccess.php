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
 * Policy for a service provider administrator's access to user configuration.
 *         "Full" indicates full access to users in the service provider.
 *         "Full Profile" indicates
 *           1) the service provider administrator is restricted from adding or removing users, but
 *           2) has full access to the user's profile
 *         "Read-Only Profile" indicates
 *           1) the service provider administrator is restricted from adding or removing users, and
 *           2) read-only access is granted to the user's profile.
 *         "No Profile" indicates
 *           1) the service provider administrator is restricted from adding or removing users, and
 *           2) no access is granted to the user's profile.
 *         "None" indicates no access to users in the service provider.
 */
class ServiceProviderAdminUserAccess extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = 'string';
        $this-addRestriction(new Enumeration([
                                              'Full',
                                              'Full Profile',
                                              'Read-Only Profile',
                                              'No Profile',
                                              'None'
                                             ]);
    }
}
