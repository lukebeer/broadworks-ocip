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


/**
     * Get a holiday schedule a user.
 *         The response is either a UserHolidayScheduleGetResponse or an ErrorResponse.
 */
class UserHolidayScheduleGetRequest extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE        = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\UserHolidayScheduleGetResponse';
    public    $name                = __CLASS__;
    protected $userId              = null;
    protected $holidayScheduleName = null;

    public function __construct(
         $userId,
         $holidayScheduleName
    ) {
        $this->setUserId($userId);
        $this->setHolidayScheduleName($holidayScheduleName);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUserId($userId = null)
    {
        $this->userId = ($userId InstanceOf UserId)
             ? $userId
             : new UserId($userId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUserId()
    {
        return (!$this->userId) ?: $this->userId->getValue();
    }

    /**
     * Schedule name.
     */
    public function setHolidayScheduleName($holidayScheduleName = null)
    {
        $this->holidayScheduleName = ($holidayScheduleName InstanceOf ScheduleName)
             ? $holidayScheduleName
             : new ScheduleName($holidayScheduleName);
    }

    /**
     * Schedule name.
     */
    public function getHolidayScheduleName()
    {
        return (!$this->holidayScheduleName) ?: $this->holidayScheduleName->getValue();
    }
}