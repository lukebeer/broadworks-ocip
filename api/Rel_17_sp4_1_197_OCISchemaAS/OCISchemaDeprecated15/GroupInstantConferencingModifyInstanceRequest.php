<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated15; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingOutcallProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceInstantConferencing\InstantConferencingAllocatedPorts;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointLinePort;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetworkClassOfServiceName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify a Instant Conferencing instance.
 *         The response is either SuccessResponse or
 *         ErrorResponse.
 *         Replaced By: GroupInstantConferencingModifyInstanceRequest16
 */
class GroupInstantConferencingModifyInstanceRequest extends ComplexType implements ComplexInterface
{
    public    $name                           = __CLASS__;
    protected $serviceUserId                  = null;
    protected $serviceInstanceProfile         = null;
    protected $conferenceBridgeLinePort       = null;
    protected $allocatedPorts                 = null;
    protected $serviceProfileAppliedOnOutcall = null;
    protected $allowOutdialInInvitation       = null;
    protected $allowDocumentDownload          = null;
    protected $bridgeAdministratorUserIdList  = null;
    protected $networkClassOfService          = null;

    public function __construct(
         $serviceUserId,
          $serviceInstanceProfile = null,
         $conferenceBridgeLinePort = null,
          $allocatedPorts = null,
         $serviceProfileAppliedOnOutcall = null,
         $allowOutdialInInvitation = null,
         $allowDocumentDownload = null,
          $bridgeAdministratorUserIdList = null,
         $networkClassOfService = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setConferenceBridgeLinePort($conferenceBridgeLinePort);
        $this->setAllocatedPorts($allocatedPorts);
        $this->setServiceProfileAppliedOnOutcall($serviceProfileAppliedOnOutcall);
        $this->setAllowOutdialInInvitation($allowOutdialInInvitation);
        $this->setAllowDocumentDownload($allowDocumentDownload);
        $this->setBridgeAdministratorUserIdList($bridgeAdministratorUserIdList);
        $this->setNetworkClassOfService($networkClassOfService);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
     */
    public function setServiceInstanceProfile(ServiceInstanceModifyProfile $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile =  $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for group service used when modifying an existing service instance.
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
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function setBridgeAdministratorUserIdList(ReplacementUserIdList $bridgeAdministratorUserIdList = null)
    {
        $this->bridgeAdministratorUserIdList =  $bridgeAdministratorUserIdList;
    }

    /**
     * A list of userIds that replaces a previously configured list.
     *         By convention, an element of this type may be set nill to clear the list.
     */
    public function getBridgeAdministratorUserIdList()
    {
        return (!$this->bridgeAdministratorUserIdList) ?: $this->bridgeAdministratorUserIdList->getValue();
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
