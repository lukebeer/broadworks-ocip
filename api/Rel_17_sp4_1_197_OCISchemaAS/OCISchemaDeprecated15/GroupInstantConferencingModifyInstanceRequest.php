<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingAllocatedPorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingOutcallProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
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
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             ServiceInstanceModifyProfile $serviceInstanceProfile=null,
             $conferenceBridgeLinePort=null,
             $allocatedPorts=null,
             $serviceProfileAppliedOnOutcall=null,
             $allowOutdialInInvitation=null,
             $allowDocumentDownload=null,
             ReplacementUserIdList $bridgeAdministratorUserIdList=null,
             $networkClassOfService=null
    ) {
        $this->serviceUserId                  = new UserId($serviceUserId);
        $this->serviceInstanceProfile         = $serviceInstanceProfile;
        $this->conferenceBridgeLinePort       = new AccessDeviceEndpointLinePort($conferenceBridgeLinePort);
        $this->allocatedPorts                 = $allocatedPorts;
        $this->serviceProfileAppliedOnOutcall = $serviceProfileAppliedOnOutcall;
        $this->allowOutdialInInvitation       = $allowOutdialInInvitation;
        $this->allowDocumentDownload          = $allowDocumentDownload;
        $this->bridgeAdministratorUserIdList  = $bridgeAdministratorUserIdList;
        $this->networkClassOfService          = new NetworkClassOfServiceName($networkClassOfService);
        $this->args                           = func_get_args();
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
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceModifyProfile($serviceInstanceProfile);
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

    public function setBridgeAdministratorUserIdList($bridgeAdministratorUserIdList)
    {
        $bridgeAdministratorUserIdList and $this->bridgeAdministratorUserIdList = new ReplacementUserIdList($bridgeAdministratorUserIdList);
    }

    public function getBridgeAdministratorUserIdList()
    {
        return (!$this->bridgeAdministratorUserIdList) ?: $this->bridgeAdministratorUserIdList->value();
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
