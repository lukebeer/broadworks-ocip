<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleType;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a user schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserScheduleAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = 'UserScheduleAddRequest';
    protected $userId;
    protected $scheduleName;
    protected $scheduleType;

    public function __construct(
         $userId = '',
         $scheduleName = '',
         $scheduleType = ''
    ) {
        $this->setUserId($userId);
        $this->setScheduleName($scheduleName);
        $this->setScheduleType($scheduleType);
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
    public function setScheduleName($scheduleName = null)
    {
        $this->scheduleName = ($scheduleName InstanceOf ScheduleName)
             ? $scheduleName
             : new ScheduleName($scheduleName);
        $this->scheduleName->setName('scheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $scheduleName
     */
    public function getScheduleName()
    {
        return ($this->scheduleName) ? $this->scheduleName->getValue() : null;
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
