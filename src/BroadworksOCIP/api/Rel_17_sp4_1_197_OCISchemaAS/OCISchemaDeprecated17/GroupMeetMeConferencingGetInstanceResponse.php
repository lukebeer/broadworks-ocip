<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePorts;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupMeetMeConferencingGetInstanceRequest.
 *         Contains the service profile information and a table of assigned hosts.
 *         The table has column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", and "Hiragana First Name".
 */
class GroupMeetMeConferencingGetInstanceResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupMeetMeConferencingGetInstanceResponse';
    protected $serviceInstanceProfile;
    protected $allocatedPorts;
    protected $networkClassOfService;
    protected $allowIndividualOutDial;
    protected $operatorNumber;
    protected $conferenceHostUserTable;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17\GroupMeetMeConferencingGetInstanceResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceReadProfile)
             ? $serviceInstanceProfile
             : new ServiceInstanceReadProfile($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile $serviceInstanceProfile
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
    public function setConferenceHostUserTable(TableType $conferenceHostUserTable = null)
    {
        $this->conferenceHostUserTable = $conferenceHostUserTable;
        $this->conferenceHostUserTable->setElementName('conferenceHostUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getConferenceHostUserTable()
    {
        return $this->conferenceHostUserTable;
    }
}
