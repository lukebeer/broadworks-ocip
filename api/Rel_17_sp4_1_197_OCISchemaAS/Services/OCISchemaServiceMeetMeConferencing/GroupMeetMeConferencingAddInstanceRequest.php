<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingConferencePorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Meet-Me Conferencing bridge to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMeetMeConferencingAddInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $serviceUserId,
             ServiceInstanceAddProfile $serviceInstanceProfile,
             $allocatedPorts,
             $networkClassOfService=null,
             $allowIndividualOutDial,
             $operatorNumber=null,
             $conferenceHostUserId=null
    ) {
        $this->serviceProviderId      = new ServiceProviderId($serviceProviderId);
        $this->groupId                = new GroupId($groupId);
        $this->serviceUserId          = new UserId($serviceUserId);
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->allocatedPorts         = $allocatedPorts;
        $this->networkClassOfService  = new NetworkClassOfServiceName($networkClassOfService);
        $this->allowIndividualOutDial = $allowIndividualOutDial;
        $this->operatorNumber         = new OutgoingDNorSIPURI($operatorNumber);
        $this->conferenceHostUserId   = new UserId($conferenceHostUserId);
        $this->args                   = func_get_args();
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

    public function setAllocatedPorts($allocatedPorts)
    {
        $allocatedPorts and $this->allocatedPorts = new MeetMeConferencingConferencePorts($allocatedPorts);
    }

    public function getAllocatedPorts()
    {
        return (!$this->allocatedPorts) ?: $this->allocatedPorts->value();
    }

    public function setNetworkClassOfService($networkClassOfService)
    {
        $networkClassOfService and $this->networkClassOfService = new NetworkClassOfServiceName($networkClassOfService);
    }

    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->value();
    }

    public function setAllowIndividualOutDial($allowIndividualOutDial)
    {
        $allowIndividualOutDial and $this->allowIndividualOutDial = new xs:boolean($allowIndividualOutDial);
    }

    public function getAllowIndividualOutDial()
    {
        return (!$this->allowIndividualOutDial) ?: $this->allowIndividualOutDial->value();
    }

    public function setOperatorNumber($operatorNumber)
    {
        $operatorNumber and $this->operatorNumber = new OutgoingDNorSIPURI($operatorNumber);
    }

    public function getOperatorNumber()
    {
        return (!$this->operatorNumber) ?: $this->operatorNumber->value();
    }

    public function setConferenceHostUserId($conferenceHostUserId)
    {
        $conferenceHostUserId and $this->conferenceHostUserId = new UserId($conferenceHostUserId);
    }

    public function getConferenceHostUserId()
    {
        return (!$this->conferenceHostUserId) ?: $this->conferenceHostUserId->value();
    }
}
