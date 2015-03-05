<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceCallPark; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallParkRecallTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallParkDisplayTimerSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RingPattern;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\CallParkRecallTo;
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
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $recallTimerSeconds=null,
             $displayTimerSeconds=null,
             $enableDestinationAnnouncement=null,
             $recallAlternateUserId=null,
             $recallRingPattern=null,
             $recallTo=null,
             $alternateUserRecallTimerSeconds=null
    ) {
        $this->serviceProviderId               = new ServiceProviderId($serviceProviderId);
        $this->groupId                         = new GroupId($groupId);
        $this->recallTimerSeconds              = $recallTimerSeconds;
        $this->displayTimerSeconds             = $displayTimerSeconds;
        $this->enableDestinationAnnouncement   = $enableDestinationAnnouncement;
        $this->recallAlternateUserId           = new UserId($recallAlternateUserId);
        $this->recallRingPattern               = new RingPattern($recallRingPattern);
        $this->recallTo                        = $recallTo;
        $this->alternateUserRecallTimerSeconds = $alternateUserRecallTimerSeconds;
        $this->args                            = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setRecallTimerSeconds($recallTimerSeconds)
    {
        $recallTimerSeconds and $this->recallTimerSeconds = new CallParkRecallTimerSeconds($recallTimerSeconds);
    }

    public function getRecallTimerSeconds()
    {
        return (!$this->recallTimerSeconds) ?: $this->recallTimerSeconds->value();
    }

    public function setDisplayTimerSeconds($displayTimerSeconds)
    {
        $displayTimerSeconds and $this->displayTimerSeconds = new CallParkDisplayTimerSeconds($displayTimerSeconds);
    }

    public function getDisplayTimerSeconds()
    {
        return (!$this->displayTimerSeconds) ?: $this->displayTimerSeconds->value();
    }

    public function setEnableDestinationAnnouncement($enableDestinationAnnouncement)
    {
        $enableDestinationAnnouncement and $this->enableDestinationAnnouncement = new xs:boolean($enableDestinationAnnouncement);
    }

    public function getEnableDestinationAnnouncement()
    {
        return (!$this->enableDestinationAnnouncement) ?: $this->enableDestinationAnnouncement->value();
    }

    public function setRecallAlternateUserId($recallAlternateUserId)
    {
        $recallAlternateUserId and $this->recallAlternateUserId = new UserId($recallAlternateUserId);
    }

    public function getRecallAlternateUserId()
    {
        return (!$this->recallAlternateUserId) ?: $this->recallAlternateUserId->value();
    }

    public function setRecallRingPattern($recallRingPattern)
    {
        $recallRingPattern and $this->recallRingPattern = new RingPattern($recallRingPattern);
    }

    public function getRecallRingPattern()
    {
        return (!$this->recallRingPattern) ?: $this->recallRingPattern->value();
    }

    public function setRecallTo($recallTo)
    {
        $recallTo and $this->recallTo = new CallParkRecallTo($recallTo);
    }

    public function getRecallTo()
    {
        return (!$this->recallTo) ?: $this->recallTo->value();
    }

    public function setAlternateUserRecallTimerSeconds($alternateUserRecallTimerSeconds)
    {
        $alternateUserRecallTimerSeconds and $this->alternateUserRecallTimerSeconds = new CallParkRecallTimerSeconds($alternateUserRecallTimerSeconds);
    }

    public function getAlternateUserRecallTimerSeconds()
    {
        return (!$this->alternateUserRecallTimerSeconds) ?: $this->alternateUserRecallTimerSeconds->value();
    }
}
