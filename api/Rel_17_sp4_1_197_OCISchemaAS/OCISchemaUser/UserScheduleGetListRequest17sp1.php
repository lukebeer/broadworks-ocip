<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get the list of schedules viewable by a User. The list can be filtered by schedule type.
 *         The response is either a UserScheduleGetListResponse17sp1 or an ErrorResponse.
 */
class UserScheduleGetListRequest17sp1 extends ComplexType implements ComplexInterface
{
    public    $responseType = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserScheduleGetListResponse17sp1';
    public    $name = 'UserScheduleGetListRequest17sp1';
    protected $userId;
    protected $scheduleType;

    public function __construct(
         $userId = '',
         $scheduleType = null
    ) {
        $this->setUserId($userId);
        $this->setScheduleType($scheduleType);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser\UserScheduleGetListResponse17sp1 $response
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
        $this->userId->setName('userId');
        return $this;
    }

    /**
     * 
     * @return UserId $userId
     */
    public function getUserId()
    {
        return ($this->userId) ? $this->userId->getValue() : null;
    }

    /**
     * 
     */
    public function setScheduleType($scheduleType = null)
    {
        $this->scheduleType = ($scheduleType InstanceOf ScheduleType)
             ? $scheduleType
             : new ScheduleType($scheduleType);
        $this->scheduleType->setName('scheduleType');
        return $this;
    }

    /**
     * 
     * @return ScheduleType $scheduleType
     */
    public function getScheduleType()
    {
        return ($this->scheduleType) ? $this->scheduleType->getValue() : null;
    }
}
