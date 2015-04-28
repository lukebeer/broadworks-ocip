<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAllocatedPorts;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingOutcallProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupInstantConferencingGetInstanceRequest15sp2.        Contains the service profile information and a table of assigned users.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 *         "Hiragana Last Name", "Hiragana First Name".
 */
class GroupInstantConferencingGetInstanceResponse15sp2 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupInstantConferencingGetInstanceResponse15sp2';
    protected $serviceInstanceProfile;
    protected $conferenceBridgeLinePort;
    protected $allocatedPorts;
    protected $serviceProfileAppliedOnOutcall;
    protected $allowOutdialInInvitation;
    protected $allowDocumentDownload;
    protected $bridgeAdministratorUserTable;
    protected $networkClassOfService;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupInstantConferencingGetInstanceResponse15sp2 $response
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
}
