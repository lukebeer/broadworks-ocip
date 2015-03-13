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
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Unassign a list of Network Classes of Service from a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupNetworkClassOfServiceUnassignListRequest extends ComplexType implements ComplexInterface
{
    public    $name                         = 'GroupNetworkClassOfServiceUnassignListRequest';
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setNetworkClassOfService($networkClassOfService = null)
    {
        if (!$networkClassOfService) return $this;
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
        $this->networkClassOfService->setName('networkClassOfService');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceName $networkClassOfService
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService->getValue();
    }

    /**
     * 
     */
    public function setDefaultNetworkClassOfService($defaultNetworkClassOfService = null)
    {
        if (!$defaultNetworkClassOfService) return $this;
        $this->defaultNetworkClassOfService = ($defaultNetworkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $defaultNetworkClassOfService
             : new NetworkClassOfServiceName($defaultNetworkClassOfService);
        $this->defaultNetworkClassOfService->setName('defaultNetworkClassOfService');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceName $defaultNetworkClassOfService
     */
    public function getDefaultNetworkClassOfService()
    {
        return $this->defaultNetworkClassOfService->getValue();
    }
}
