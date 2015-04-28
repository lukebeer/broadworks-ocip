<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceAttendantConsole; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add users to the Attendant Console monitored users list.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserAttendantConsoleAddUserListRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserAttendantConsoleAddUserListRequest';
    protected $userId;
    protected $monitoredUserId;

    public function __construct(
         $userId = '',
         $monitoredUserId = null
    ) {
        $this->setUserId($userId);
        $this->setMonitoredUserId($monitoredUserId);
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
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
        $this->userId->setElementName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId)
            ? $this->userId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMonitoredUserId($monitoredUserId = null)
    {
        $this->monitoredUserId = ($monitoredUserId InstanceOf UserId)
             ? $monitoredUserId
             : new UserId($monitoredUserId);
        $this->monitoredUserId->setElementName('monitoredUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $monitoredUserId
     */
    public function getMonitoredUserId()
    {
        return ($this->monitoredUserId)
            ? $this->monitoredUserId->getElementValue()
            : null;
    }
}
