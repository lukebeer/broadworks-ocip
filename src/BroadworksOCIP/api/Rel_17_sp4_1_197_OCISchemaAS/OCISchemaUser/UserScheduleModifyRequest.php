<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaUser; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a user schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class UserScheduleModifyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'UserScheduleModifyRequest';
    protected $userId;
    protected $scheduleKey;
    protected $newScheduleName;

    public function __construct(
         $userId = '',
         $scheduleKey = '',
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
    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
        $this->scheduleKey = ($scheduleKey InstanceOf ScheduleKey)
             ? $scheduleKey
             : new ScheduleKey($scheduleKey);
        $this->scheduleKey->setElementName('scheduleKey');
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
        $this->newScheduleName = ($newScheduleName InstanceOf ScheduleName)
             ? $newScheduleName
             : new ScheduleName($newScheduleName);
        $this->newScheduleName->setElementName('newScheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $newScheduleName
     */
    public function getNewScheduleName()
    {
        return ($this->newScheduleName)
            ? $this->newScheduleName->getElementValue()
            : null;
    }
}
