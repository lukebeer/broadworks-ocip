<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OfficeZoneName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Unassign a list of OfficeZones from a group.  Note: a new default must be provided if unassigning the current default.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupOfficeZoneUnassignListRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $officeZoneName=null,
             $defaultOfficeZoneName=null
    ) {
        $this->serviceProviderId     = new ServiceProviderId($serviceProviderId);
        $this->groupId               = new GroupId($groupId);
        $this->officeZoneName        = new OfficeZoneName($officeZoneName);
        $this->defaultOfficeZoneName = new OfficeZoneName($defaultOfficeZoneName);
        $this->args                  = func_get_args();
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

    public function setOfficeZoneName($officeZoneName)
    {
        $officeZoneName and $this->officeZoneName = new OfficeZoneName($officeZoneName);
    }

    public function getOfficeZoneName()
    {
        return (!$this->officeZoneName) ?: $this->officeZoneName->value();
    }

    public function setDefaultOfficeZoneName($defaultOfficeZoneName)
    {
        $defaultOfficeZoneName and $this->defaultOfficeZoneName = new OfficeZoneName($defaultOfficeZoneName);
    }

    public function getDefaultOfficeZoneName()
    {
        return (!$this->defaultOfficeZoneName) ?: $this->defaultOfficeZoneName->value();
    }
}
