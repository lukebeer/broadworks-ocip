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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementDeviceList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a session admission control group for the group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupSessionAdmissionControlGroupModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $name,
             $newName=null,
             $maxSession=null,
             $maxUserOriginatingSessions=null,
             $maxUserTerminatingSessions=null,
             $reservedSession=null,
             $reservedUserOriginatingSessions=null,
             $reservedUserTerminatingSessions=null,
             $becomeDefaultGroup=null,
             $countIntraSACGroupSessions=null,
             ReplacementDeviceList $deviceList=null
    ) {
        $this->serviceProviderId               = new ServiceProviderId($serviceProviderId);
        $this->groupId                         = new GroupId($groupId);
        $this->name                            = new SessionAdmissionControlGroupName($name);
        $this->newName                         = new SessionAdmissionControlGroupName($newName);
        $this->maxSession                      = new NonNegativeInt($maxSession);
        $this->maxUserOriginatingSessions      = new NonNegativeInt($maxUserOriginatingSessions);
        $this->maxUserTerminatingSessions      = new NonNegativeInt($maxUserTerminatingSessions);
        $this->reservedSession                 = new NonNegativeInt($reservedSession);
        $this->reservedUserOriginatingSessions = new NonNegativeInt($reservedUserOriginatingSessions);
        $this->reservedUserTerminatingSessions = new NonNegativeInt($reservedUserTerminatingSessions);
        $this->becomeDefaultGroup              = $becomeDefaultGroup;
        $this->countIntraSACGroupSessions      = $countIntraSACGroupSessions;
        $this->deviceList                      = $deviceList;
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

    public function setNewName($newName)
    {
        $newName and $this->newName = new SessionAdmissionControlGroupName($newName);
    }

    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->value();
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

    public function setDeviceList($deviceList)
    {
        $deviceList and $this->deviceList = new ReplacementDeviceList($deviceList);
    }

    public function getDeviceList()
    {
        return (!$this->deviceList) ?: $this->deviceList->value();
    }
}
