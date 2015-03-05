<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingAllocatedPorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\InstantConferencingOutcallProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\core:OCITable;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Response to GroupInstantConferencingGetInstanceRequest.
 *             Contains the service profile information and a table of assigned users.
 *             The table has column headings: "User Id", "Last Name", "First Name",
 *             "Hiragana Last Name", "Hiragana First Name".
 */
class GroupInstantConferencingGetInstanceResponse14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceInstanceProfile,
             $conferenceBridgeLinePort,
             $allocatedPorts,
             $serviceProfileAppliedOnOutcall,
             $allowOutdialInInvitation,
             $allowDocumentDownload,
             $bridgeAdministratorUserTable
    ) {
        $this->serviceInstanceProfile         = $serviceInstanceProfile;
        $this->conferenceBridgeLinePort       = new AccessDeviceEndpointLinePort($conferenceBridgeLinePort);
        $this->allocatedPorts                 = $allocatedPorts;
        $this->serviceProfileAppliedOnOutcall = $serviceProfileAppliedOnOutcall;
        $this->allowOutdialInInvitation       = $allowOutdialInInvitation;
        $this->allowDocumentDownload          = $allowDocumentDownload;
        $this->bridgeAdministratorUserTable   = $bridgeAdministratorUserTable;
        $this->args                           = func_get_args();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceReadProfile($serviceInstanceProfile);
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

    public function setBridgeAdministratorUserTable($bridgeAdministratorUserTable)
    {
        $bridgeAdministratorUserTable and $this->bridgeAdministratorUserTable = new core:OCITable($bridgeAdministratorUserTable);
    }

    public function getBridgeAdministratorUserTable()
    {
        return (!$this->bridgeAdministratorUserTable) ?: $this->bridgeAdministratorUserTable->value();
    }
}
