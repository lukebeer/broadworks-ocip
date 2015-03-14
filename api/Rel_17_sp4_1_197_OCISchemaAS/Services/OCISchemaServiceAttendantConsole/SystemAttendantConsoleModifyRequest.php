<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaximumMonitoredUsers;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify Attendant Console settings.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class SystemAttendantConsoleModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name              = 'SystemAttendantConsoleModifyRequest';
    protected $maxMonitoredUsers = null;

    public function __construct(
         $maxMonitoredUsers = null
    ) {
        $this->setMaxMonitoredUsers($maxMonitoredUsers);
    }

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setMaxMonitoredUsers($maxMonitoredUsers = null)
    {
        if (!$maxMonitoredUsers) return $this;
        $this->maxMonitoredUsers = ($maxMonitoredUsers InstanceOf MaximumMonitoredUsers)
             ? $maxMonitoredUsers
             : new MaximumMonitoredUsers($maxMonitoredUsers);
        $this->maxMonitoredUsers->setName('maxMonitoredUsers');
        return $this;
    }

    /**
     * 
     * @return MaximumMonitoredUsers $maxMonitoredUsers
     */
    public function getMaxMonitoredUsers()
    {
        return $this->maxMonitoredUsers->getValue();
    }
}
