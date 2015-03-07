<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceVirtualOnNetEnterpriseExtensions; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\VirtualOnNetUserRange;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceVirtualOnNetEnterpriseExtensions\VirtualOnNetUser;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
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
    public    $name                   = __CLASS__;
    protected $serviceProviderId      = null;
    protected $groupId                = null;
    protected $virtualOnNetUser       = null;
    protected $virtualOnNetUserRange  = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         VirtualOnNetUser $virtualOnNetUser = null,
         VirtualOnNetUserRange $virtualOnNetUserRange = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setVirtualOnNetUser($virtualOnNetUser);
        $this->setVirtualOnNetUserRange($virtualOnNetUserRange);
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

    public function setVirtualOnNetUser(VirtualOnNetUser $virtualOnNetUser = null)
    {
    }

    public function getVirtualOnNetUser()
    {
        return (!$this->virtualOnNetUser) ?: $this->virtualOnNetUser->value();
    }

    public function setVirtualOnNetUserRange(VirtualOnNetUserRange $virtualOnNetUserRange = null)
    {
    }

    public function getVirtualOnNetUserRange()
    {
        return (!$this->virtualOnNetUserRange) ?: $this->virtualOnNetUserRange->value();
    }
}
