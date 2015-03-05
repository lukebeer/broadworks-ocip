<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingConferencePorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a Meet-Me Conferencing bridge.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMeetMeConferencingModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             ServiceInstanceModifyProfile $serviceInstanceProfile=null,
             $allocatedPorts=null,
             $networkClassOfService=null,
             $allowIndividualOutDial=null,
             $operatorNumber=null,
             ReplacementUserIdList $conferenceHostUserIdList=null
    ) {
        $this->serviceUserId            = new UserId($serviceUserId);
        $this->serviceInstanceProfile   = $serviceInstanceProfile;
        $this->allocatedPorts           = $allocatedPorts;
        $this->networkClassOfService    = new NetworkClassOfServiceName($networkClassOfService);
        $this->allowIndividualOutDial   = $allowIndividualOutDial;
        $this->operatorNumber           = new OutgoingDNorSIPURI($operatorNumber);
        $this->conferenceHostUserIdList = $conferenceHostUserIdList;
        $this->args                     = func_get_args();
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

    public function setConferenceHostUserIdList($conferenceHostUserIdList)
    {
        $conferenceHostUserIdList and $this->conferenceHostUserIdList = new ReplacementUserIdList($conferenceHostUserIdList);
    }

    public function getConferenceHostUserIdList()
    {
        return (!$this->conferenceHostUserIdList) ?: $this->conferenceHostUserIdList->value();
    }
}
