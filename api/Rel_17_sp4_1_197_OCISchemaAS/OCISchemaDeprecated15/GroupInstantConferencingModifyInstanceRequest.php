<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingOutcallProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAllocatedPorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a Instant Conferencing instance.
 *         The response is either SuccessResponse or
 *         ErrorResponse.
 *         Replaced By: GroupInstantConferencingModifyInstanceRequest16
 */
class GroupInstantConferencingModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                            = __CLASS__;
    protected $serviceUserId                   = null;
    protected $serviceInstanceProfile          = null;
    protected $conferenceBridgeLinePort        = null;
    protected $allocatedPorts                  = null;
    protected $serviceProfileAppliedOnOutcall  = null;
    protected $allowOutdialInInvitation        = null;
    protected $allowDocumentDownload           = null;
    protected $bridgeAdministratorUserIdList   = null;
    protected $networkClassOfService           = null;

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

    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
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

    public function setBridgeAdministratorUserIdList(ReplacementUserIdList $bridgeAdministratorUserIdList = null)
    {
    }

    public function getBridgeAdministratorUserIdList()
    {
        return (!$this->bridgeAdministratorUserIdList) ?: $this->bridgeAdministratorUserIdList->value();
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
