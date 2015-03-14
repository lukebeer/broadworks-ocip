<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Meet-Me Conferencing bridge to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMeetMeConferencingAddInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                   = 'GroupMeetMeConferencingAddInstanceRequest';
    protected $serviceProviderId      = null;
    protected $groupId                = null;
    protected $serviceUserId          = null;
    protected $serviceInstanceProfile = null;
    protected $allocatedPorts         = null;
    protected $networkClassOfService  = null;
    protected $allowIndividualOutDial = null;
    protected $operatorNumber         = null;
    protected $conferenceHostUserId   = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $serviceUserId,
         ServiceInstanceAddProfile $serviceInstanceProfile,
         MeetMeConferencingConferencePorts $allocatedPorts,
         $networkClassOfService = null,
         $allowIndividualOutDial,
         $operatorNumber = null,
         $conferenceHostUserId = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setAllocatedPorts($allocatedPorts);
        $this->setNetworkClassOfService($networkClassOfService);
        $this->setAllowIndividualOutDial($allowIndividualOutDial);
        $this->setOperatorNumber($operatorNumber);
        $this->setConferenceHostUserId($conferenceHostUserId);
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
    public function setAllocatedPorts(MeetMeConferencingConferencePorts $allocatedPorts = null)
    {
        if (!$allocatedPorts) return $this;
        $this->allocatedPorts = $allocatedPorts;
        $this->allocatedPorts->setName('allocatedPorts');
        return $this;
    }

    /**
     * 
     * @return MeetMeConferencingConferencePorts $allocatedPorts
     */
    public function getAllocatedPorts()
    {
        return $this->allocatedPorts;
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

    /**
     * 
     */
    public function setAllowIndividualOutDial($allowIndividualOutDial = null)
    {
        if (!$allowIndividualOutDial) return $this;
        $this->allowIndividualOutDial = new PrimitiveType($allowIndividualOutDial);
        $this->allowIndividualOutDial->setName('allowIndividualOutDial');
        return $this;
    }

    /**
     * 
     * @return boolean $allowIndividualOutDial
     */
    public function getAllowIndividualOutDial()
    {
        return $this->allowIndividualOutDial->getValue();
    }

    /**
     * 
     */
    public function setOperatorNumber($operatorNumber = null)
    {
        if (!$operatorNumber) return $this;
        $this->operatorNumber = ($operatorNumber InstanceOf OutgoingDNorSIPURI)
             ? $operatorNumber
             : new OutgoingDNorSIPURI($operatorNumber);
        $this->operatorNumber->setName('operatorNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $operatorNumber
     */
    public function getOperatorNumber()
    {
        return $this->operatorNumber->getValue();
    }

    /**
     * 
     */
    public function setConferenceHostUserId($conferenceHostUserId = null)
    {
        if (!$conferenceHostUserId) return $this;
        $this->conferenceHostUserId = ($conferenceHostUserId InstanceOf UserId)
             ? $conferenceHostUserId
             : new UserId($conferenceHostUserId);
        $this->conferenceHostUserId->setName('conferenceHostUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $conferenceHostUserId
     */
    public function getConferenceHostUserId()
    {
        return $this->conferenceHostUserId->getValue();
    }
}
