<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceReceptionistEnterprise; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaximumMonitoredUsers;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceReceptionistEnterprise\SystemBroadWorksReceptionistEnterpriseModifyResponse;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify BroadWorks Receptionist - Enterprise settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemBroadWorksReceptionistEnterpriseModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = __CLASS__;
    protected $maxMonitoredUsers = null;

    public function __construct(
         $maxMonitoredUsers = null
    ) {
        $this->setMaxMonitoredUsers($maxMonitoredUsers);
    }

    /**
     * @return SystemBroadWorksReceptionistEnterpriseModifyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

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
