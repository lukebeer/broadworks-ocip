<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAllocatedPorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingOutcallProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Instant Conferencing instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupInstantConferencingAddInstanceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $serviceProviderId               = null;
    protected $groupId                         = null;
    protected $serviceUserId                   = null;
    protected $serviceInstanceProfile          = null;
    protected $conferenceBridgeLinePort        = null;
    protected $allocatedPorts                  = null;
    protected $serviceProfileAppliedOnOutcall  = null;
    protected $allowOutdialInInvitation        = null;
    protected $allowDocumentDownload           = null;
    protected $bridgeAdministratorUserId       = null;
    protected $networkClassOfService           = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $serviceUserId,
         ServiceInstanceAddProfile $serviceInstanceProfile,
         $conferenceBridgeLinePort,
         InstantConferencingAllocatedPorts $allocatedPorts,
         $serviceProfileAppliedOnOutcall,
         $allowOutdialInInvitation,
         $allowDocumentDownload,
         $bridgeAdministratorUserId = null,
         $networkClassOfService = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setConferenceBridgeLinePort($conferenceBridgeLinePort);
        $this->setAllocatedPorts($allocatedPorts);
        $this->setServiceProfileAppliedOnOutcall($serviceProfileAppliedOnOutcall);
        $this->setAllowOutdialInInvitation($allowOutdialInInvitation);
        $this->setAllowDocumentDownload($allowDocumentDownload);
        $this->setBridgeAdministratorUserId($bridgeAdministratorUserId);
        $this->setNetworkClassOfService($networkClassOfService);
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

    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile(ServiceInstanceAddProfile $serviceInstanceProfile = null)
    {
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setConferenceBridgeLinePort($conferenceBridgeLinePort = null)
    {
        $this->conferenceBridgeLinePort = ($conferenceBridgeLinePort InstanceOf AccessDeviceEndpointLinePort)
             ? $conferenceBridgeLinePort
             : new AccessDeviceEndpointLinePort($conferenceBridgeLinePort);
    }

    public function getConferenceBridgeLinePort()
    {
        return (!$this->conferenceBridgeLinePort) ?: $this->conferenceBridgeLinePort->value();
    }

    public function setAllocatedPorts(InstantConferencingAllocatedPorts $allocatedPorts = null)
    {
    }

    public function getAllocatedPorts()
    {
        return (!$this->allocatedPorts) ?: $this->allocatedPorts->value();
    }

    public function setServiceProfileAppliedOnOutcall($serviceProfileAppliedOnOutcall = null)
    {
        $this->serviceProfileAppliedOnOutcall = ($serviceProfileAppliedOnOutcall InstanceOf InstantConferencingOutcallProfile)
             ? $serviceProfileAppliedOnOutcall
             : new InstantConferencingOutcallProfile($serviceProfileAppliedOnOutcall);
    }

    public function getServiceProfileAppliedOnOutcall()
    {
        return (!$this->serviceProfileAppliedOnOutcall) ?: $this->serviceProfileAppliedOnOutcall->value();
    }

    public function setAllowOutdialInInvitation(xs:boolean $allowOutdialInInvitation = null)
    {
    }

    public function getAllowOutdialInInvitation()
    {
        return (!$this->allowOutdialInInvitation) ?: $this->allowOutdialInInvitation->value();
    }

    public function setAllowDocumentDownload(xs:boolean $allowDocumentDownload = null)
    {
    }

    public function getAllowDocumentDownload()
    {
        return (!$this->allowDocumentDownload) ?: $this->allowDocumentDownload->value();
    }

    public function setBridgeAdministratorUserId($bridgeAdministratorUserId = null)
    {
        $this->bridgeAdministratorUserId = ($bridgeAdministratorUserId InstanceOf UserId)
             ? $bridgeAdministratorUserId
             : new UserId($bridgeAdministratorUserId);
    }

    public function getBridgeAdministratorUserId()
    {
        return (!$this->bridgeAdministratorUserId) ?: $this->bridgeAdministratorUserId->value();
    }

    public function setNetworkClassOfService($networkClassOfService = null)
    {
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
    }

    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->value();
    }
}
