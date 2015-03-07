<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Request to modify a Meet-Me Conferencing bridge.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMeetMeConferencingModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $serviceUserId             = null;
    protected $serviceInstanceProfile    = null;
    protected $allocatedPorts            = null;
    protected $networkClassOfService     = null;
    protected $allowIndividualOutDial    = null;
    protected $operatorNumber            = null;
    protected $conferenceHostUserIdList  = null;

    public function __construct(
         $serviceUserId,
         ServiceInstanceModifyProfile $serviceInstanceProfile = null,
         MeetMeConferencingConferencePorts $allocatedPorts = null,
         $networkClassOfService = null,
         $allowIndividualOutDial = null,
         $operatorNumber = null,
         ReplacementUserIdList $conferenceHostUserIdList = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setAllocatedPorts($allocatedPorts);
        $this->setNetworkClassOfService($networkClassOfService);
        $this->setAllowIndividualOutDial($allowIndividualOutDial);
        $this->setOperatorNumber($operatorNumber);
        $this->setConferenceHostUserIdList($conferenceHostUserIdList);
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

    public function setAllocatedPorts(MeetMeConferencingConferencePorts $allocatedPorts = null)
    {
    }

    public function getAllocatedPorts()
    {
        return (!$this->allocatedPorts) ?: $this->allocatedPorts->value();
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

    public function setAllowIndividualOutDial(xs:boolean $allowIndividualOutDial = null)
    {
    }

    public function getAllowIndividualOutDial()
    {
        return (!$this->allowIndividualOutDial) ?: $this->allowIndividualOutDial->value();
    }

    public function setOperatorNumber($operatorNumber = null)
    {
        $this->operatorNumber = ($operatorNumber InstanceOf OutgoingDNorSIPURI)
             ? $operatorNumber
             : new OutgoingDNorSIPURI($operatorNumber);
    }

    public function getOperatorNumber()
    {
        return (!$this->operatorNumber) ?: $this->operatorNumber->value();
    }

    public function setConferenceHostUserIdList(ReplacementUserIdList $conferenceHostUserIdList = null)
    {
    }

    public function getConferenceHostUserIdList()
    {
        return (!$this->conferenceHostUserIdList) ?: $this->conferenceHostUserIdList->value();
    }
}
