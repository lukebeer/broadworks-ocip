<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingOutcallProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAllocatedPorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to GroupInstantConferencingGetInstanceRequest15sp2.        Contains the service profile information and a table of assigned users.
 *         The table has column headings: "User Id", "Last Name", "First Name",
 *         "Hiragana Last Name", "Hiragana First Name".
 */
class GroupInstantConferencingGetInstanceResponse15sp2 extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                   = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupInstantConferencingGetInstanceResponse15sp2';
    public    $name                           = __CLASS__;
    protected $serviceInstanceProfile         = null;
    protected $conferenceBridgeLinePort       = null;
    protected $allocatedPorts                 = null;
    protected $serviceProfileAppliedOnOutcall = null;
    protected $allowOutdialInInvitation       = null;
    protected $allowDocumentDownload          = null;
    protected $bridgeAdministratorUserTable   = null;
    protected $networkClassOfService          = null;


    /**
     * Service Profile Information for group service.
     *         It is identical to the ServiceInstanceAddProfile, but without the password.
     *         Prior to release 14 this was called ServiceInstanceProfile.
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ServiceInstanceReadProfile $serviceInstanceProfile;
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
        $this->allocatedPorts = InstantConferencingAllocatedPorts $allocatedPorts;
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
        return (!$this->allowOutdialInInvitation) ?: $this->allowOutdialInInvitation->getValue();
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
        return (!$this->allowDocumentDownload) ?: $this->allowDocumentDownload->getValue();
    }

    /**
     * 
     */
    public function setBridgeAdministratorUserTable(core:OCITable $bridgeAdministratorUserTable = null)
    {
        $this->bridgeAdministratorUserTable = core:OCITable $bridgeAdministratorUserTable;
    }

    /**
     * 
     */
    public function getBridgeAdministratorUserTable()
    {
        return (!$this->bridgeAdministratorUserTable) ?: $this->bridgeAdministratorUserTable->getValue();
    }

    /**
     * Network Class of Service name.
     */
    public function setNetworkClassOfService($networkClassOfService = null)
    {
        $this->networkClassOfService = ($networkClassOfService InstanceOf NetworkClassOfServiceName)
             ? $networkClassOfService
             : new NetworkClassOfServiceName($networkClassOfService);
    }

    /**
     * Network Class of Service name.
     */
    public function getNetworkClassOfService()
    {
        return (!$this->networkClassOfService) ?: $this->networkClassOfService->getValue();
    }
}
