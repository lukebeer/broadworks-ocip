<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile17;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupMeetMeConferencingGetInstanceRequest.
 *         Contains the service profile information and a table of assigned hosts.
 *         The table has column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", and "Hiragana First Name".
 */
class GroupMeetMeConferencingGetInstanceResponse17sp3 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupMeetMeConferencingGetInstanceResponse17sp3';
    protected $serviceInstanceProfile;
    protected $allocatedPorts;
    protected $networkClassOfService;
    protected $allowIndividualOutDial;
    protected $operatorNumber;
    protected $conferenceHostUserTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\GroupMeetMeConferencingGetInstanceResponse17sp3 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile17 $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ($serviceInstanceProfile InstanceOf ServiceInstanceReadProfile17)
             ? $serviceInstanceProfile
             : new ServiceInstanceReadProfile17($serviceInstanceProfile);
        $this->serviceInstanceProfile->setElementName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile17 $serviceInstanceProfile
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
