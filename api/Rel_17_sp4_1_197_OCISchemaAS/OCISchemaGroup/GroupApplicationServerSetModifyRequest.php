<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ApplicationServerSetName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the Application Server set for a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupApplicationServerSetModifyRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $applicationServerSetName  = null;
    protected $groupId                   = null;
    protected $serviceProviderId         = null;

    public function __construct(
         $applicationServerSetName = null,
         $groupId,
         $serviceProviderId
    ) {
        $this->setApplicationServerSetName($applicationServerSetName);
        $this->setGroupId($groupId);
        $this->setServiceProviderId($serviceProviderId);
    }

    public function setApplicationServerSetName($applicationServerSetName = null)
    {
        $this->applicationServerSetName = ($applicationServerSetName InstanceOf ApplicationServerSetName)
             ? $applicationServerSetName
             : new ApplicationServerSetName($applicationServerSetName);
    }

    public function getApplicationServerSetName()
    {
        return (!$this->applicationServerSetName) ?: $this->applicationServerSetName->value();
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
}
