<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetUser;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\VirtualOnNetUserRange;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Adds Virtual On-Net users to a Group. It is possible to add 
 *         either: a single user,  or a list of users, or a range of users, 
 *         or any combination thereof.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupVirtualOnNetEnterpriseExtensionsAddUserRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $virtualOnNetUser=null,
             $virtualOnNetUserRange=null
    ) {
        $this->serviceProviderId     = new ServiceProviderId($serviceProviderId);
        $this->groupId               = new GroupId($groupId);
        $this->virtualOnNetUser      = $virtualOnNetUser;
        $this->virtualOnNetUserRange = $virtualOnNetUserRange;
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

    public function setVirtualOnNetUser($virtualOnNetUser)
    {
        $virtualOnNetUser and $this->virtualOnNetUser = new VirtualOnNetUser($virtualOnNetUser);
    }

    public function getVirtualOnNetUser()
    {
        return (!$this->virtualOnNetUser) ?: $this->virtualOnNetUser->value();
    }

    public function setVirtualOnNetUserRange($virtualOnNetUserRange)
    {
        $virtualOnNetUserRange and $this->virtualOnNetUserRange = new VirtualOnNetUserRange($virtualOnNetUserRange);
    }

    public function getVirtualOnNetUserRange()
    {
        return (!$this->virtualOnNetUserRange) ?: $this->virtualOnNetUserRange->value();
    }
}
