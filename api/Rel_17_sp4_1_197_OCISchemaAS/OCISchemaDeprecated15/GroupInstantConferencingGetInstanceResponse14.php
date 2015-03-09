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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15\GroupInstantConferencingGetInstanceResponse14;
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
    public    $name                           = __CLASS__;
    protected $serviceInstanceProfile         = null;
    protected $conferenceBridgeLinePort       = null;
    protected $allocatedPorts                 = null;
    protected $serviceProfileAppliedOnOutcall = null;
    protected $allowOutdialInInvitation       = null;
    protected $allowDocumentDownload          = null;
    protected $bridgeAdministratorUserTable   = null;

    /**
     * @return GroupInstantConferencingGetInstanceResponse14
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile =  $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * Also known as address of record, the Line/Port identifies a device endpoint
     *         in standalone mode  or a SIPURI public identity in IMS mode.
     *         Line/port user@host or just the port.
     *         Validation:
     *         - don't allow sip:
     *         - allow a leading +
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - lineports for sip devices configured with Proxy Addressing must have a host portion
     *         - lineports for sip devices configured with Device Addressing must not have a host portion
     */
    public function setConferenceBridgeLinePort($conferenceBridgeLinePort = null)
    {
        $this->conferenceBridgeLinePort = ($conferenceBridgeLinePort InstanceOf AccessDeviceEndpointLinePort)
             ? $conferenceBridgeLinePort
             : new AccessDeviceEndpointLinePort($conferenceBridgeLinePort);
    }

    /**
     * Also known as address of record, the Line/Port identifies a device endpoint
     *         in standalone mode  or a SIPURI public identity in IMS mode.
     *         Line/port user@host or just the port.
     *         Validation:
     *         - don't allow sip:
     *         - allow a leading +
     *         - allow the following characters:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )   @
     *         - lineports for sip devices configured with Proxy Addressing must have a host portion
     *         - lineports for sip devices configured with Device Addressing must not have a host portion
     */
    public function getConferenceBridgeLinePort()
    {
        return (!$this->conferenceBridgeLinePort) ?: $this->conferenceBridgeLinePort->getValue();
    }

    /**
     * Number of allocated ports.
     *         Unbounded Quantity. Can either be unlimited or an int quantity.
     */
    public function setAllocatedPorts(InstantConferencingAllocatedPorts $allocatedPorts = null)
    {
        $this->allocatedPorts =  $allocatedPorts;
    }

    /**
     * Number of allocated ports.
     *         Unbounded Quantity. Can either be unlimited or an int quantity.
     */
    public function getAllocatedPorts()
    {
        return (!$this->allocatedPorts) ?: $this->allocatedPorts->getValue();
    }

    /**
     * Profile used by an Instance Conferencing Instance.
     */
    public function setServiceProfileAppliedOnOutcall($serviceProfileAppliedOnOutcall = null)
    {
        $this->serviceProfileAppliedOnOutcall = ($serviceProfileAppliedOnOutcall InstanceOf InstantConferencingOutcallProfile)
             ? $serviceProfileAppliedOnOutcall
             : new InstantConferencingOutcallProfile($serviceProfileAppliedOnOutcall);
    }

    /**
     * Profile used by an Instance Conferencing Instance.
     */
    public function getServiceProfileAppliedOnOutcall()
    {
        return (!$this->serviceProfileAppliedOnOutcall) ?: $this->serviceProfileAppliedOnOutcall->getValue();
    }

    /**
     * 
     */
    public function setAllowOutdialInInvitation($allowOutdialInInvitation = null)
    {
        $this->allowOutdialInInvitation = (boolean) $allowOutdialInInvitation;
    }

    /**
     * 
     */
    public function getAllowOutdialInInvitation()
    {
        return (!$this->allowOutdialInInvitation) ?: $this->allowOutdialInInvitation;
    }

    /**
     * 
     */
    public function setAllowDocumentDownload($allowDocumentDownload = null)
    {
        $this->allowDocumentDownload = (boolean) $allowDocumentDownload;
    }

    /**
     * 
     */
    public function getAllowDocumentDownload()
    {
        return (!$this->allowDocumentDownload) ?: $this->allowDocumentDownload;
    }

    /**
     * 
     */
    public function setBridgeAdministratorUserTable(core:OCITable $bridgeAdministratorUserTable = null)
    {
        $this->bridgeAdministratorUserTable =  $bridgeAdministratorUserTable;
    }

    /**
     * 
     */
    public function getBridgeAdministratorUserTable()
    {
        return (!$this->bridgeAdministratorUserTable) ?: $this->bridgeAdministratorUserTable->getValue();
    }
}
