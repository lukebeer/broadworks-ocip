<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ScheduleKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a group schedule.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupScheduleModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name               = __CLASS__;
    protected $serviceProviderId  = null;
    protected $groupId            = null;
    protected $scheduleKey        = null;
    protected $newScheduleName    = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         ScheduleKey $scheduleKey,
         $newScheduleName = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setScheduleKey($scheduleKey);
        $this->setNewScheduleName($newScheduleName);
    }

    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setScheduleKey(ScheduleKey $scheduleKey = null)
    {
    }

    public function getScheduleKey()
    {
        return (!$this->scheduleKey) ?: $this->scheduleKey->value();
    }

    public function setNewScheduleName($newScheduleName = null)
    {
        $this->newScheduleName = ($newScheduleName InstanceOf ScheduleName)
             ? $newScheduleName
             : new ScheduleName($newScheduleName);
    }

    public function getNewScheduleName()
    {
        return (!$this->newScheduleName) ?: $this->newScheduleName->value();
    }
}
