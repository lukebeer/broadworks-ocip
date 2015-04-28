<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePorts;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a Meet-Me Conferencing bridge to a group.
 *         The domain is required in the serviceUserId.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class GroupMeetMeConferencingAddInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupMeetMeConferencingAddInstanceRequest';
    protected $serviceProviderId;
    protected $groupId;
    protected $serviceUserId;
    protected $serviceInstanceProfile;
    protected $allocatedPorts;
    protected $networkClassOfService;
    protected $allowIndividualOutDial;
    protected $operatorNumber;
    protected $conferenceHostUserId;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $serviceUserId = '',
         $serviceInstanceProfile = '',
         $allocatedPorts = '',
         $networkClassOfService = null,
         $allowIndividualOutDial = '',
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
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceAddProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceAddProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
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
        $this->allocatedPorts = ($allocatedPorts InstanceOf MeetMeConferencingConferencePorts)
             ? $allocatedPorts
             : new MeetMeConferencingConferencePorts($allocatedPorts);
        $this->allocatedPorts->setElementName('allocatedPorts');
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
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
        $this->networkClassOfService->setElementName('networkClassOfService');
        return $this;
    }

    /**
     * 
     * @return NetworkClassOfServiceName $networkClassOfService
     */
    public function getNetworkClassOfService()
    {
        return ($this->networkClassOfService)
            ? $this->networkClassOfService->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowIndividualOutDial($allowIndividualOutDial = null)
    {
        $this->allowIndividualOutDial = new PrimitiveType($allowIndividualOutDial);
        $this->allowIndividualOutDial->setElementName('allowIndividualOutDial');
        return $this;
    }

    /**
     * 
     * @return boolean $allowIndividualOutDial
     */
    public function getAllowIndividualOutDial()
    {
        return ($this->allowIndividualOutDial)
            ? $this->allowIndividualOutDial->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOperatorNumber($operatorNumber = null)
    {
        $this->operatorNumber = ($operatorNumber InstanceOf OutgoingDNorSIPURI)
             ? $operatorNumber
             : new OutgoingDNorSIPURI($operatorNumber);
        $this->operatorNumber->setElementName('operatorNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $operatorNumber
     */
    public function getOperatorNumber()
    {
        return ($this->operatorNumber)
            ? $this->operatorNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setConferenceHostUserId($conferenceHostUserId = null)
    {
        $this->conferenceHostUserId = ($conferenceHostUserId InstanceOf UserId)
             ? $conferenceHostUserId
             : new UserId($conferenceHostUserId);
        $this->conferenceHostUserId->setElementName('conferenceHostUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $conferenceHostUserId
     */
    public function getConferenceHostUserId()
    {
        return ($this->conferenceHostUserId)
            ? $this->conferenceHostUserId->getElementValue()
            : null;
    }
}
