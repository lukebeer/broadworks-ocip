<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SessionAdmissionControlGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NonNegativeInt;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to add a session admission control group for the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupSessionAdmissionControlGroupAddRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $name,
             $maxSession,
             $maxUserOriginatingSessions=null,
             $maxUserTerminatingSessions=null,
             $reservedSession,
             $reservedUserOriginatingSessions=null,
             $reservedUserTerminatingSessions=null,
             $becomeDefaultGroup,
             $countIntraSACGroupSessions,
             AccessDevice $devices=null
    ) {
        $this->serviceProviderId               = new ServiceProviderId($serviceProviderId);
        $this->groupId                         = new GroupId($groupId);
        $this->name                            = new SessionAdmissionControlGroupName($name);
        $this->maxSession                      = new NonNegativeInt($maxSession);
        $this->maxUserOriginatingSessions      = new NonNegativeInt($maxUserOriginatingSessions);
        $this->maxUserTerminatingSessions      = new NonNegativeInt($maxUserTerminatingSessions);
        $this->reservedSession                 = new NonNegativeInt($reservedSession);
        $this->reservedUserOriginatingSessions = new NonNegativeInt($reservedUserOriginatingSessions);
        $this->reservedUserTerminatingSessions = new NonNegativeInt($reservedUserTerminatingSessions);
        $this->becomeDefaultGroup              = $becomeDefaultGroup;
        $this->countIntraSACGroupSessions      = $countIntraSACGroupSessions;
        $this->devices                         = $devices;
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

    public function setName($name)
    {
        $name and $this->name = new SessionAdmissionControlGroupName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setMaxSession($maxSession)
    {
        $maxSession and $this->maxSession = new NonNegativeInt($maxSession);
    }

    public function getMaxSession()
    {
        return (!$this->maxSession) ?: $this->maxSession->value();
    }

    public function setMaxUserOriginatingSessions($maxUserOriginatingSessions)
    {
        $maxUserOriginatingSessions and $this->maxUserOriginatingSessions = new NonNegativeInt($maxUserOriginatingSessions);
    }

    public function getMaxUserOriginatingSessions()
    {
        return (!$this->maxUserOriginatingSessions) ?: $this->maxUserOriginatingSessions->value();
    }

    public function setMaxUserTerminatingSessions($maxUserTerminatingSessions)
    {
        $maxUserTerminatingSessions and $this->maxUserTerminatingSessions = new NonNegativeInt($maxUserTerminatingSessions);
    }

    public function getMaxUserTerminatingSessions()
    {
        return (!$this->maxUserTerminatingSessions) ?: $this->maxUserTerminatingSessions->value();
    }

    public function setReservedSession($reservedSession)
    {
        $reservedSession and $this->reservedSession = new NonNegativeInt($reservedSession);
    }

    public function getReservedSession()
    {
        return (!$this->reservedSession) ?: $this->reservedSession->value();
    }

    public function setReservedUserOriginatingSessions($reservedUserOriginatingSessions)
    {
        $reservedUserOriginatingSessions and $this->reservedUserOriginatingSessions = new NonNegativeInt($reservedUserOriginatingSessions);
    }

    public function getReservedUserOriginatingSessions()
    {
        return (!$this->reservedUserOriginatingSessions) ?: $this->reservedUserOriginatingSessions->value();
    }

    public function setReservedUserTerminatingSessions($reservedUserTerminatingSessions)
    {
        $reservedUserTerminatingSessions and $this->reservedUserTerminatingSessions = new NonNegativeInt($reservedUserTerminatingSessions);
    }

    public function getReservedUserTerminatingSessions()
    {
        return (!$this->reservedUserTerminatingSessions) ?: $this->reservedUserTerminatingSessions->value();
    }

    public function setBecomeDefaultGroup($becomeDefaultGroup)
    {
        $becomeDefaultGroup and $this->becomeDefaultGroup = new xs:boolean($becomeDefaultGroup);
    }

    public function getBecomeDefaultGroup()
    {
        return (!$this->becomeDefaultGroup) ?: $this->becomeDefaultGroup->value();
    }

    public function setCountIntraSACGroupSessions($countIntraSACGroupSessions)
    {
        $countIntraSACGroupSessions and $this->countIntraSACGroupSessions = new xs:boolean($countIntraSACGroupSessions);
    }

    public function getCountIntraSACGroupSessions()
    {
        return (!$this->countIntraSACGroupSessions) ?: $this->countIntraSACGroupSessions->value();
    }

    public function setDevices($devices)
    {
        $devices and $this->devices = new AccessDevice($devices);
    }

    public function getDevices()
    {
        return (!$this->devices) ?: $this->devices->value();
    }
}
