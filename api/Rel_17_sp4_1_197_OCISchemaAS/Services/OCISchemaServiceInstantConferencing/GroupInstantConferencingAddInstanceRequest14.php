<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingOutcallProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAllocatedPorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Instant Conferencing instance to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupInstantConferencingAddInstanceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                           = 'GroupInstantConferencingAddInstanceRequest14';
    protected $serviceProviderId              = null;
    protected $groupId                        = null;
    protected $serviceUserId                  = null;
    protected $serviceInstanceProfile         = null;
    protected $conferenceBridgeLinePort       = null;
    protected $allocatedPorts                 = null;
    protected $serviceProfileAppliedOnOutcall = null;
    protected $allowOutdialInInvitation       = null;
    protected $allowDocumentDownload          = null;
    protected $bridgeAdministratorUserId      = null;
    protected $networkClassOfService          = null;

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
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceAddProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setConferenceBridgeLinePort($conferenceBridgeLinePort = null)
    {
        if (!$conferenceBridgeLinePort) return $this;
        $this->conferenceBridgeLinePort = ($conferenceBridgeLinePort InstanceOf AccessDeviceEndpointLinePort)
             ? $conferenceBridgeLinePort
             : new AccessDeviceEndpointLinePort($conferenceBridgeLinePort);
        $this->conferenceBridgeLinePort->setName('conferenceBridgeLinePort');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointLinePort $conferenceBridgeLinePort
     */
    public function getConferenceBridgeLinePort()
    {
        return $this->conferenceBridgeLinePort->getValue();
    }

    /**
     * 
     */
    public function setAllocatedPorts(InstantConferencingAllocatedPorts $allocatedPorts = null)
    {
        if (!$allocatedPorts) return $this;
        $this->allocatedPorts = $allocatedPorts;
        $this->allocatedPorts->setName('allocatedPorts');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAllocatedPorts $allocatedPorts
     */
    public function getAllocatedPorts()
    {
        return $this->allocatedPorts;
    }

    /**
     * 
     */
    public function setServiceProfileAppliedOnOutcall($serviceProfileAppliedOnOutcall = null)
    {
        if (!$serviceProfileAppliedOnOutcall) return $this;
        $this->serviceProfileAppliedOnOutcall = ($serviceProfileAppliedOnOutcall InstanceOf InstantConferencingOutcallProfile)
             ? $serviceProfileAppliedOnOutcall
             : new InstantConferencingOutcallProfile($serviceProfileAppliedOnOutcall);
        $this->serviceProfileAppliedOnOutcall->setName('serviceProfileAppliedOnOutcall');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingOutcallProfile $serviceProfileAppliedOnOutcall
     */
    public function getServiceProfileAppliedOnOutcall()
    {
        return $this->serviceProfileAppliedOnOutcall->getValue();
    }

    /**
     * 
     */
    public function setAllowOutdialInInvitation($allowOutdialInInvitation = null)
    {
        if (!$allowOutdialInInvitation) return $this;
        $this->allowOutdialInInvitation = new PrimitiveType($allowOutdialInInvitation);
        $this->allowOutdialInInvitation->setName('allowOutdialInInvitation');
        return $this;
    }

    /**
     * 
     * @return boolean $allowOutdialInInvitation
     */
    public function getAllowOutdialInInvitation()
    {
        return $this->allowOutdialInInvitation->getValue();
    }

    /**
     * 
     */
    public function setAllowDocumentDownload($allowDocumentDownload = null)
    {
        if (!$allowDocumentDownload) return $this;
        $this->allowDocumentDownload = new PrimitiveType($allowDocumentDownload);
        $this->allowDocumentDownload->setName('allowDocumentDownload');
        return $this;
    }

    /**
     * 
     * @return boolean $allowDocumentDownload
     */
    public function getAllowDocumentDownload()
    {
        return $this->allowDocumentDownload->getValue();
    }

    /**
     * 
     */
    public function setBridgeAdministratorUserId($bridgeAdministratorUserId = null)
    {
        if (!$bridgeAdministratorUserId) return $this;
        $this->bridgeAdministratorUserId = ($bridgeAdministratorUserId InstanceOf UserId)
             ? $bridgeAdministratorUserId
             : new UserId($bridgeAdministratorUserId);
        $this->bridgeAdministratorUserId->setName('bridgeAdministratorUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $bridgeAdministratorUserId
     */
    public function getBridgeAdministratorUserId()
    {
        return $this->bridgeAdministratorUserId->getValue();
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
}
