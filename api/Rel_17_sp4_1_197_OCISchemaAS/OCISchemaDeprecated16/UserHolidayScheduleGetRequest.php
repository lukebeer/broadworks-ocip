<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Get a holiday schedule a user.
 *         The response is either a UserHolidayScheduleGetResponse or an ErrorResponse.
 */
class UserHolidayScheduleGetRequest extends ComplexType implements ComplexInterface
{
    public    $responseType        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserHolidayScheduleGetResponse';
    public    $name = 'UserHolidayScheduleGetRequest';
    protected $userId;
    protected $holidayScheduleName;

    public function __construct(
         $userId = '',
         $holidayScheduleName = ''
    ) {
        $this->setUserId($userId);
        $this->setHolidayScheduleName($holidayScheduleName);
    }

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserHolidayScheduleGetResponse $response
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
    public function setHolidayScheduleName($holidayScheduleName = null)
    {
        $this->holidayScheduleName = ($holidayScheduleName InstanceOf ScheduleName)
             ? $holidayScheduleName
             : new ScheduleName($holidayScheduleName);
        $this->holidayScheduleName->setName('holidayScheduleName');
        return $this;
    }

    /**
     * 
     * @return ScheduleName $holidayScheduleName
     */
    public function getHolidayScheduleName()
    {
        return ($this->holidayScheduleName) ? $this->holidayScheduleName->getValue() : null;
    }
}
