<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated17; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MeetMeConferencingConferencePorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupMeetMeConferencingGetInstanceRequest.
 *         Contains the service profile information and a table of assigned hosts.
 *         The table has column headings: "User Id", "Last Name", "First Name", "Hiragana Last Name", and "Hiragana First Name".
 */
class GroupMeetMeConferencingGetInstanceResponse extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceInstanceProfile,
             $allocatedPorts,
             $networkClassOfService=null,
             $allowIndividualOutDial,
             $operatorNumber=null,
             $conferenceHostUserTable
    ) {
        $this->serviceInstanceProfile  = $serviceInstanceProfile;
        $this->allocatedPorts          = $allocatedPorts;
        $this->networkClassOfService   = new NetworkClassOfServiceName($networkClassOfService);
        $this->allowIndividualOutDial  = $allowIndividualOutDial;
        $this->operatorNumber          = new OutgoingDNorSIPURI($operatorNumber);
        $this->conferenceHostUserTable = $conferenceHostUserTable;
        $this->args                    = func_get_args();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceReadProfile($serviceInstanceProfile);
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

    public function setConferenceHostUserTable($conferenceHostUserTable)
    {
        $conferenceHostUserTable and $this->conferenceHostUserTable = new core:OCITable($conferenceHostUserTable);
    }

    public function getConferenceHostUserTable()
    {
        return (!$this->conferenceHostUserTable) ?: $this->conferenceHostUserTable->value();
    }
}
