<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a user schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserScheduleModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name            = 'UserScheduleModifyRequest';
    protected $userId          = null;
    protected $scheduleKey     = null;
    protected $newScheduleName = null;

    public function __construct(
         $userId,
         ScheduleKey $scheduleKey,
         $newScheduleName = null
    ) {
        $this->setUserId($userId);
        $this->setScheduleKey($scheduleKey);
        $this->setNewScheduleName($newScheduleName);
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
        if (!$userId) return $this;
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
        return $this->userId->getValue();
    }

    /**
     * 
     */
    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
        if (!$scheduleKey) return $this;
        $this->scheduleKey = $scheduleKey;
        $this->scheduleKey->setName('scheduleKey');
        return $this;
    }

    /**
     * 
     * @return ScheduleKey $scheduleKey
     */
    public function getScheduleKey()
    {
        return $this->scheduleKey;
    }

    /**
     * 
     */
    public function setNewScheduleName($newScheduleName = null)
    {
        if (!$newScheduleName) return $this;
        $this->newScheduleName = ($newScheduleName InstanceOf ScheduleName)
             ? $newScheduleName
             : new ScheduleName($newScheduleName);
        $this->newScheduleName->setName('newScheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $newScheduleName
     */
    public function getNewScheduleName()
    {
        return $this->newScheduleName->getValue();
    }
}
