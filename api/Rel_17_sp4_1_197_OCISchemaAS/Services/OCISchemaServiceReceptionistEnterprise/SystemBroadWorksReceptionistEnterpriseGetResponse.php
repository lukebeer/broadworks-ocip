<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceReceptionistEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaximumMonitoredUsers;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to SystemBroadWorksReceptionistEnterpriseGetRequest.
 *         Contains a list of BroadWorks Receptionist - Enterprise parameters.
 */
class SystemBroadWorksReceptionistEnterpriseGetResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE      = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceReceptionistEnterprise\SystemBroadWorksReceptionistEnterpriseGetResponse';
    public    $name              = __CLASS__;
    protected $maxMonitoredUsers = null;


    /**
     * Maximum number of users allowed in a monitored user list.
     */
    public function setMaxMonitoredUsers($maxMonitoredUsers = null)
    {
        $this->maxMonitoredUsers = ($maxMonitoredUsers InstanceOf MaximumMonitoredUsers)
             ? $maxMonitoredUsers
             : new MaximumMonitoredUsers($maxMonitoredUsers);
    }

    /**
     * Maximum number of users allowed in a monitored user list.
     */
    public function getMaxMonitoredUsers()
    {
        return (!$this->maxMonitoredUsers) ?: $this->maxMonitoredUsers->getValue();
    }
}
