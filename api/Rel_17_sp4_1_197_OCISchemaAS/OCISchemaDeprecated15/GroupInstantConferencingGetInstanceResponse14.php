<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingOutcallProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAllocatedPorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupInstantConferencingGetInstanceRequest.
 *             Contains the service profile information and a table of assigned users.
 *             The table has column headings: "User Id", "Last Name", "First Name",
 *             "Hiragana Last Name", "Hiragana First Name".
 */
class GroupInstantConferencingGetInstanceResponse14 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupInstantConferencingGetInstanceResponse14';
    protected $serviceInstanceProfile;
    protected $conferenceBridgeLinePort;
    protected $allocatedPorts;
    protected $serviceProfileAppliedOnOutcall;
    protected $allowOutdialInInvitation;
    protected $allowDocumentDownload;
    protected $bridgeAdministratorUserTable;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\GroupInstantConferencingGetInstanceResponse14 $response
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
    public function setConferenceBridgeLinePort($conferenceBridgeLinePort = null)
    {
        $this->conferenceBridgeLinePort = ($conferenceBridgeLinePort InstanceOf AccessDeviceEndpointLinePort)
             ? $conferenceBridgeLinePort
             : new AccessDeviceEndpointLinePort($conferenceBridgeLinePort);
        $this->conferenceBridgeLinePort->setElementName('conferenceBridgeLinePort');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointLinePort $conferenceBridgeLinePort
     */
    public function getConferenceBridgeLinePort()
    {
        return ($this->conferenceBridgeLinePort)
            ? $this->conferenceBridgeLinePort->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllocatedPorts(InstantConferencingAllocatedPorts $allocatedPorts = null)
    {
        $this->allocatedPorts = ($allocatedPorts InstanceOf InstantConferencingAllocatedPorts)
             ? $allocatedPorts
             : new InstantConferencingAllocatedPorts($allocatedPorts);
        $this->allocatedPorts->setElementName('allocatedPorts');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingAllocatedPorts $allocatedPorts
     */
    public function getAllocatedPorts()
    {
        return $this->allocatedPorts;
    }

    /**
     * 
     */
    public function setServiceProfileAppliedOnOutcall($serviceProfileAppliedOnOutcall = null)
    {
        $this->serviceProfileAppliedOnOutcall = ($serviceProfileAppliedOnOutcall InstanceOf InstantConferencingOutcallProfile)
             ? $serviceProfileAppliedOnOutcall
             : new InstantConferencingOutcallProfile($serviceProfileAppliedOnOutcall);
        $this->serviceProfileAppliedOnOutcall->setElementName('serviceProfileAppliedOnOutcall');
        return $this;
    }

    /**
     * 
     * @return InstantConferencingOutcallProfile $serviceProfileAppliedOnOutcall
     */
    public function getServiceProfileAppliedOnOutcall()
    {
        return ($this->serviceProfileAppliedOnOutcall)
            ? $this->serviceProfileAppliedOnOutcall->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowOutdialInInvitation($allowOutdialInInvitation = null)
    {
        $this->allowOutdialInInvitation = new PrimitiveType($allowOutdialInInvitation);
        $this->allowOutdialInInvitation->setElementName('allowOutdialInInvitation');
        return $this;
    }

    /**
     * 
     * @return boolean $allowOutdialInInvitation
     */
    public function getAllowOutdialInInvitation()
    {
        return ($this->allowOutdialInInvitation)
            ? $this->allowOutdialInInvitation->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowDocumentDownload($allowDocumentDownload = null)
    {
        $this->allowDocumentDownload = new PrimitiveType($allowDocumentDownload);
        $this->allowDocumentDownload->setElementName('allowDocumentDownload');
        return $this;
    }

    /**
     * 
     * @return boolean $allowDocumentDownload
     */
    public function getAllowDocumentDownload()
    {
        return ($this->allowDocumentDownload)
            ? $this->allowDocumentDownload->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBridgeAdministratorUserTable(TableType $bridgeAdministratorUserTable = null)
    {
        $this->bridgeAdministratorUserTable = $bridgeAdministratorUserTable;
        $this->bridgeAdministratorUserTable->setElementName('bridgeAdministratorUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getBridgeAdministratorUserTable()
    {
        return $this->bridgeAdministratorUserTable;
    }
}
