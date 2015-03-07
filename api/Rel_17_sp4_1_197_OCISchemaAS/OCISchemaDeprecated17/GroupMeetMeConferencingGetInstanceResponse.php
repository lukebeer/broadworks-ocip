<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceMeetMeConferencing\MeetMeConferencingConferencePorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupMeetMeConferencingGetInstanceRequest.
 *         Contains the service profile information and a table of assigned hosts.
 *         The table has column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", and "Hiragana First Name".
 */
class GroupMeetMeConferencingGetInstanceResponse extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $serviceInstanceProfile   = null;
    protected $allocatedPorts           = null;
    protected $networkClassOfService    = null;
    protected $allowIndividualOutDial   = null;
    protected $operatorNumber           = null;
    protected $conferenceHostUserTable  = null;


    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
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

    public function setConferenceHostUserTable(core:OCITable $conferenceHostUserTable = null)
    {
    }

    public function getConferenceHostUserTable()
    {
        return (!$this->conferenceHostUserTable) ?: $this->conferenceHostUserTable->value();
    }
}
