<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Unassign a list of Network Classes of Service from a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupNetworkClassOfServiceUnassignListRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = __CLASS__;
    protected $serviceProviderId            = null;
    protected $groupId                      = null;
    protected $networkClassOfService        = null;
    protected $defaultNetworkClassOfService = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $networkClassOfService = null,
         $defaultNetworkClassOfService = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setNetworkClassOfService($networkClassOfService);
        $this->setDefaultNetworkClassOfService($defaultNetworkClassOfService);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * Network Class of Service name.
     */
    public function setNetworkClassOfService($networkClassOfService = null)
    {
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
    }

    /**
     * Network Class of Service name.
     */
    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->getValue();
    }

    /**
     * Network Class of Service name.
     */
    public function setDefaultNetworkClassOfService($defaultNetworkClassOfService = null)
    {
        $this->defaultNetworkClassOfService = ($defaultNetworkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $defaultNetworkClassOfService
             : new NetworkClassOfServiceName($defaultNetworkClassOfService);
    }

    /**
     * Network Class of Service name.
     */
    public function getDefaultNetworkClassOfService()
    {
        return (!$this->defaultNetworkClassOfService) ?: $this->defaultNetworkClassOfService->getValue();
    }
}
