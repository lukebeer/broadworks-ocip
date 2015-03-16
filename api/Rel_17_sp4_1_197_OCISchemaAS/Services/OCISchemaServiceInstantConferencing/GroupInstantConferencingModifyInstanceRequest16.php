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
    public    $name = 'GroupInstantConferencingModifyInstanceRequest16';
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $conferenceBridgeLinePort;
    protected $allocatedPorts;
    protected $serviceProfileAppliedOnOutcall;
    protected $allowOutdialInInvitation;
    protected $allowDocumentDownload;
    protected $bridgeAdministratorUserIdList;
    protected $networkClassOfService;

    public function __construct(
         $serviceUserId = '',
         $serviceInstanceProfile = null,
         $conferenceBridgeLinePort = null,
         $allocatedPorts = null,
         $serviceProfileAppliedOnOutcall = null,
         $allowOutdialInInvitation = null,
         $allowDocumentDownload = null,
         $bridgeAdministratorUserIdList = null,
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
     * @return mixed $response
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
        return ($this->serviceUserId) ? $this->serviceUserId->getValue() : null;
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceModifyProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceModifyProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceModifyProfile $serviceInstanceProfile
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
        return ($this->conferenceBridgeLinePort) ? $this->conferenceBridgeLinePort->getValue() : null;
    }

    /**
     * 
     */
    public function setAllocatedPorts(InstantConferencingAllocatedPorts $allocatedPorts = null)
    {
        $this->allocatedPorts = ($allocatedPorts InstanceOf InstantConferencingAllocatedPorts)
             ? $allocatedPorts
             : new InstantConferencingAllocatedPorts($allocatedPorts);
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
        return ($this->serviceProfileAppliedOnOutcall) ? $this->serviceProfileAppliedOnOutcall->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowOutdialInInvitation($allowOutdialInInvitation = null)
    {
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
        return ($this->allowOutdialInInvitation) ? $this->allowOutdialInInvitation->getValue() : null;
    }

    /**
     * 
     */
    public function setAllowDocumentDownload($allowDocumentDownload = null)
    {
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
        return ($this->allowDocumentDownload) ? $this->allowDocumentDownload->getValue() : null;
    }

    /**
     * 
     */
    public function setBridgeAdministratorUserIdList(ReplacementUserIdList $bridgeAdministratorUserIdList = null)
    {
        $this->bridgeAdministratorUserIdList = ($bridgeAdministratorUserIdList InstanceOf ReplacementUserIdList)
             ? $bridgeAdministratorUserIdList
             : new ReplacementUserIdList($bridgeAdministratorUserIdList);
        $this->bridgeAdministratorUserIdList->setName('bridgeAdministratorUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $bridgeAdministratorUserIdList
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
        return ($this->networkClassOfService) ? $this->networkClassOfService->getValue() : null;
    }
}
