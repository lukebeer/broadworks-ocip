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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify a Instant Conferencing instance.
 *         The response is either SuccessResponse or
 *         ErrorResponse.
 */
class GroupInstantConferencingModifyInstanceRequest16 extends ComplexType implements ComplexInterface
{
    public    $name                           = 'GroupInstantConferencingModifyInstanceRequest16';
    protected $serviceUserId                  = null;
    protected $serviceInstanceProfile         = null;
    protected $conferenceBridgeLinePort       = null;
    protected $allocatedPorts                 = null;
    protected $serviceProfileAppliedOnOutcall = null;
    protected $allowOutdialInInvitation       = null;
    protected $allowDocumentDownload          = null;
    protected $bridgeAdministratorUserIdList  = null;
    protected $networkClassOfService          = null;

    public function __construct(
         $serviceUserId,
         ServiceInstanceModifyProfile $serviceInstanceProfile = null,
         $conferenceBridgeLinePort = null,
         InstantConferencingAllocatedPorts $allocatedPorts = null,
         $serviceProfileAppliedOnOutcall = null,
         $allowOutdialInInvitation = null,
         $allowDocumentDownload = null,
         ReplacementUserIdList $bridgeAdministratorUserIdList = null,
         $networkClassOfService = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setConferenceBridgeLinePort($conferenceBridgeLinePort);
        $this->setAllocatedPorts($allocatedPorts);
        $this->setServiceProfileAppliedOnOutcall($serviceProfileAppliedOnOutcall);
        $this->setAllowOutdialInInvitation($allowOutdialInInvitation);
        $this->setAllowDocumentDownload($allowDocumentDownload);
        $this->setBridgeAdministratorUserIdList($bridgeAdministratorUserIdList);
        $this->setNetworkClassOfService($networkClassOfService);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
     * @return UserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceModifyProfile
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
     * @return AccessDeviceEndpointLinePort
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
     * @return InstantConferencingAllocatedPorts
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
     * @return InstantConferencingOutcallProfile
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
     * @return xs:boolean
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
     * @return xs:boolean
     */
    public function getAllowDocumentDownload()
    {
        return $this->allowDocumentDownload->getValue();
    }

    /**
     * 
     */
    public function setBridgeAdministratorUserIdList(ReplacementUserIdList $bridgeAdministratorUserIdList = null)
    {
        if (!$bridgeAdministratorUserIdList) return $this;
        $this->bridgeAdministratorUserIdList = $bridgeAdministratorUserIdList;
        $this->bridgeAdministratorUserIdList->setName('bridgeAdministratorUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList
     */
    public function getBridgeAdministratorUserIdList()
    {
        return $this->bridgeAdministratorUserIdList;
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
     * @return NetworkClassOfServiceName
     */
    public function getNetworkClassOfService()
    {
        return $this->networkClassOfService->getValue();
    }
}
