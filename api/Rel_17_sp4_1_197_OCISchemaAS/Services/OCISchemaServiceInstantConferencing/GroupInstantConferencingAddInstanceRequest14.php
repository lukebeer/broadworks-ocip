<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingAllocatedPorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingOutcallProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Instant Conferencing instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupInstantConferencingAddInstanceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $serviceUserId,
             ServiceInstanceAddProfile $serviceInstanceProfile,
             $conferenceBridgeLinePort,
             $allocatedPorts,
             $serviceProfileAppliedOnOutcall,
             $allowOutdialInInvitation,
             $allowDocumentDownload,
             $bridgeAdministratorUserId=null,
             $networkClassOfService=null
    ) {
        $this->serviceProviderId              = new ServiceProviderId($serviceProviderId);
        $this->groupId                        = new GroupId($groupId);
        $this->serviceUserId                  = new UserId($serviceUserId);
        $this->serviceInstanceProfile         = $serviceInstanceProfile;
        $this->conferenceBridgeLinePort       = new AccessDeviceEndpointLinePort($conferenceBridgeLinePort);
        $this->allocatedPorts                 = $allocatedPorts;
        $this->serviceProfileAppliedOnOutcall = $serviceProfileAppliedOnOutcall;
        $this->allowOutdialInInvitation       = $allowOutdialInInvitation;
        $this->allowDocumentDownload          = $allowDocumentDownload;
        $this->bridgeAdministratorUserId      = new UserId($bridgeAdministratorUserId);
        $this->networkClassOfService          = new NetworkClassOfServiceName($networkClassOfService);
        $this->args                           = func_get_args();
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

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceAddProfile($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setConferenceBridgeLinePort($conferenceBridgeLinePort)
    {
        $conferenceBridgeLinePort and $this->conferenceBridgeLinePort = new AccessDeviceEndpointLinePort($conferenceBridgeLinePort);
    }

    public function getConferenceBridgeLinePort()
    {
        return (!$this->conferenceBridgeLinePort) ?: $this->conferenceBridgeLinePort->value();
    }

    public function setAllocatedPorts($allocatedPorts)
    {
        $allocatedPorts and $this->allocatedPorts = new InstantConferencingAllocatedPorts($allocatedPorts);
    }

    public function getAllocatedPorts()
    {
        return (!$this->allocatedPorts) ?: $this->allocatedPorts->value();
    }

    public function setServiceProfileAppliedOnOutcall($serviceProfileAppliedOnOutcall)
    {
        $serviceProfileAppliedOnOutcall and $this->serviceProfileAppliedOnOutcall = new InstantConferencingOutcallProfile($serviceProfileAppliedOnOutcall);
    }

    public function getServiceProfileAppliedOnOutcall()
    {
        return (!$this->serviceProfileAppliedOnOutcall) ?: $this->serviceProfileAppliedOnOutcall->value();
    }

    public function setAllowOutdialInInvitation($allowOutdialInInvitation)
    {
        $allowOutdialInInvitation and $this->allowOutdialInInvitation = new xs:boolean($allowOutdialInInvitation);
    }

    public function getAllowOutdialInInvitation()
    {
        return (!$this->allowOutdialInInvitation) ?: $this->allowOutdialInInvitation->value();
    }

    public function setAllowDocumentDownload($allowDocumentDownload)
    {
        $allowDocumentDownload and $this->allowDocumentDownload = new xs:boolean($allowDocumentDownload);
    }

    public function getAllowDocumentDownload()
    {
        return (!$this->allowDocumentDownload) ?: $this->allowDocumentDownload->value();
    }

    public function setBridgeAdministratorUserId($bridgeAdministratorUserId)
    {
        $bridgeAdministratorUserId and $this->bridgeAdministratorUserId = new UserId($bridgeAdministratorUserId);
    }

    public function getBridgeAdministratorUserId()
    {
        return (!$this->bridgeAdministratorUserId) ?: $this->bridgeAdministratorUserId->value();
    }

    public function setNetworkClassOfService($networkClassOfService)
    {
        $networkClassOfService and $this->networkClassOfService = new NetworkClassOfServiceName($networkClassOfService);
    }

    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->value();
    }
}
