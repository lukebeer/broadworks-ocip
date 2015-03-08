<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes; 

use Broadworks_OCIP\core\Builder\Types\SimpleType;
use Broadworks_OCIP\core\Builder\Restrictions\Enumeration;


/**
 * Policy for a group administrator's access to access devices.
 *        "Full" indicates full access to access devices.
 *        "Associate User With Device" indicates
 *          1) read-only access to devices, but
 *          2) the group administrator may associate users with devices
 *        "Read-Only" indicates read-only access to devices and user-device associations
 */
class GroupAdminAccessDeviceAccess extends SimpleType
{
    public $name = __CLASS__;
    protected $value;

    public function __construct($value) {
        $this->value    = $value;
        $this->dataType = (string);
        $this->addRestriction(new Enumeration([
            'Full',
            'Associate User With Device',
            'Read-Only'
        ]));
    }
}
