<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallPark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkDisplayTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceCallPark\CallParkRecallTo;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modifies the Group's Call Park settings.
 *         The response is either SuccessResponse or ErrorResponse.
 *         
 *         The following elements are only used in AS data mode:
 *          recallAlternateUserId
 *          recallRingPattern
 *          recallTo
 *          alternateUserRecallTimerSeconds
 */
class GroupCallParkModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                             = __CLASS__;
    protected $serviceProviderId                = null;
    protected $groupId                          = null;
    protected $recallTimerSeconds               = null;
    protected $displayTimerSeconds              = null;
    protected $enableDestinationAnnouncement    = null;
    protected $recallAlternateUserId            = null;
    protected $recallRingPattern                = null;
    protected $recallTo                         = null;
    protected $alternateUserRecallTimerSeconds  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $recallTimerSeconds = null,
         $displayTimerSeconds = null,
         $enableDestinationAnnouncement = null,
         $recallAlternateUserId = null,
         $recallRingPattern = null,
         $recallTo = null,
         $alternateUserRecallTimerSeconds = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setRecallTimerSeconds($recallTimerSeconds);
        $this->setDisplayTimerSeconds($displayTimerSeconds);
        $this->setEnableDestinationAnnouncement($enableDestinationAnnouncement);
        $this->setRecallAlternateUserId($recallAlternateUserId);
        $this->setRecallRingPattern($recallRingPattern);
        $this->setRecallTo($recallTo);
        $this->setAlternateUserRecallTimerSeconds($alternateUserRecallTimerSeconds);
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

    public function setRecallTimerSeconds($recallTimerSeconds = null)
    {
        $this->recallTimerSeconds = ($recallTimerSeconds InstanceOf CallParkRecallTimerSeconds)
             ? $recallTimerSeconds
             : new CallParkRecallTimerSeconds($recallTimerSeconds);
    }

    public function getRecallTimerSeconds()
    {
        return (!$this->recallTimerSeconds) ?: $this->recallTimerSeconds->value();
    }

    public function setDisplayTimerSeconds($displayTimerSeconds = null)
    {
        $this->displayTimerSeconds = ($displayTimerSeconds InstanceOf CallParkDisplayTimerSeconds)
             ? $displayTimerSeconds
             : new CallParkDisplayTimerSeconds($displayTimerSeconds);
    }

    public function getDisplayTimerSeconds()
    {
        return (!$this->displayTimerSeconds) ?: $this->displayTimerSeconds->value();
    }

    public function setEnableDestinationAnnouncement(xs:boolean $enableDestinationAnnouncement = null)
    {
    }

    public function getEnableDestinationAnnouncement()
    {
        return (!$this->enableDestinationAnnouncement) ?: $this->enableDestinationAnnouncement->value();
    }

    public function setRecallAlternateUserId($recallAlternateUserId = null)
    {
        $this->recallAlternateUserId = ($recallAlternateUserId InstanceOf UserId)
             ? $recallAlternateUserId
             : new UserId($recallAlternateUserId);
    }

    public function getRecallAlternateUserId()
    {
        return (!$this->recallAlternateUserId) ?: $this->recallAlternateUserId->value();
    }

    public function setRecallRingPattern($recallRingPattern = null)
    {
        $this->recallRingPattern = ($recallRingPattern InstanceOf RingPattern)
             ? $recallRingPattern
             : new RingPattern($recallRingPattern);
    }

    public function getRecallRingPattern()
    {
        return (!$this->recallRingPattern) ?: $this->recallRingPattern->value();
    }

    public function setRecallTo($recallTo = null)
    {
        $this->recallTo = ($recallTo InstanceOf CallParkRecallTo)
             ? $recallTo
             : new CallParkRecallTo($recallTo);
    }

    public function getRecallTo()
    {
        return (!$this->recallTo) ?: $this->recallTo->value();
    }

    public function setAlternateUserRecallTimerSeconds($alternateUserRecallTimerSeconds = null)
    {
        $this->alternateUserRecallTimerSeconds = ($alternateUserRecallTimerSeconds InstanceOf CallParkRecallTimerSeconds)
             ? $alternateUserRecallTimerSeconds
             : new CallParkRecallTimerSeconds($alternateUserRecallTimerSeconds);
    }

    public function getAlternateUserRecallTimerSeconds()
    {
        return (!$this->alternateUserRecallTimerSeconds) ?: $this->alternateUserRecallTimerSeconds->value();
    }
}
