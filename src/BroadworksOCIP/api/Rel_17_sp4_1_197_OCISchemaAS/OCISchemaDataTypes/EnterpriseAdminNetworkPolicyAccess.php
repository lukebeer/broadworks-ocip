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
 * This data type is applicable only for an Enterprise administrator.
 *         It specifies the Enterprise Administrator's policy for accessing network policies (e.g. - VoiceVPN).
 */
class EnterpriseAdminNetworkPolicyAccess extends SimpleType
{
    public $elementName = "EnterpriseAdminNetworkPolicyAccess";
    public function __construct($value) {
        $this->setElementValue($value);
        $this->addRestriction(new Enumeration([
            'Full',
            'None'
        ]));
    }
}
