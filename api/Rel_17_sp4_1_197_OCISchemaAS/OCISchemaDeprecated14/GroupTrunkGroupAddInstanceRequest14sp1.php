<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUnreachableDestinationAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfileTrunkGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupInvitationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCapacityExceededAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointAdd;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapInitialThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapOffsetThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupTrunkGroupAddInstanceResponse14sp1;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Trunk Group instance to a group.
 *         The domain is required in the serviceUserId.
 *         The publicUserIdentity in the ServiceInstanceAddProfile is not allowed for trunk groups.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupAddInstanceRequest14sp1 extends ComplexType implements ComplexInterface
{
    public    $name                                      = __CLASS__;
    protected $serviceProviderId                         = null;
    protected $groupId                                   = null;
    protected $serviceUserId                             = null;
    protected $serviceInstanceProfile                    = null;
    protected $accessDeviceEndpoint                      = null;
    protected $maxActiveCalls                            = null;
    protected $maxIncomingCalls                          = null;
    protected $maxOutgoingCalls                          = null;
    protected $enableBursting                            = null;
    protected $burstingMaxActiveCalls                    = null;
    protected $burstingMaxIncomingCalls                  = null;
    protected $burstingMaxOutgoingCalls                  = null;
    protected $capacityExceededAction                    = null;
    protected $capacityExceededForwardAddress            = null;
    protected $capacityExceededRerouteTrunkGroupId       = null;
    protected $capacityExceededTrapInitialCalls          = null;
    protected $capacityExceededTrapOffsetCalls           = null;
    protected $unreachableDestinationAction              = null;
    protected $unreachableDestinationForwardAddress      = null;
    protected $unreachableDestinationRerouteTrunkGroupId = null;
    protected $unreachableDestinationTrapInitialCalls    = null;
    protected $unreachableDestinationTrapOffsetCalls     = null;
    protected $invitationTimeout                         = null;
    protected $requireAuthentication                     = null;
    protected $sipAuthenticationUserName                 = null;
    protected $sipAuthenticationPassword                 = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $serviceUserId,
          $serviceInstanceProfile,
          $accessDeviceEndpoint = null,
         $maxActiveCalls,
         $maxIncomingCalls = null,
         $maxOutgoingCalls = null,
         $enableBursting,
         $burstingMaxActiveCalls = null,
         $burstingMaxIncomingCalls = null,
         $burstingMaxOutgoingCalls = null,
         $capacityExceededAction = null,
         $capacityExceededForwardAddress = null,
         $capacityExceededRerouteTrunkGroupId = null,
         $capacityExceededTrapInitialCalls,
         $capacityExceededTrapOffsetCalls,
         $unreachableDestinationAction = null,
         $unreachableDestinationForwardAddress = null,
         $unreachableDestinationRerouteTrunkGroupId = null,
         $unreachableDestinationTrapInitialCalls,
         $unreachableDestinationTrapOffsetCalls,
         $invitationTimeout,
         $requireAuthentication,
         $sipAuthenticationUserName = null,
         $sipAuthenticationPassword = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setServiceUserId($serviceUserId);
        $this->setServiceInstanceProfile($serviceInstanceProfile);
        $this->setAccessDeviceEndpoint($accessDeviceEndpoint);
        $this->setMaxActiveCalls($maxActiveCalls);
        $this->setMaxIncomingCalls($maxIncomingCalls);
        $this->setMaxOutgoingCalls($maxOutgoingCalls);
        $this->setEnableBursting($enableBursting);
        $this->setBurstingMaxActiveCalls($burstingMaxActiveCalls);
        $this->setBurstingMaxIncomingCalls($burstingMaxIncomingCalls);
        $this->setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls);
        $this->setCapacityExceededAction($capacityExceededAction);
        $this->setCapacityExceededForwardAddress($capacityExceededForwardAddress);
        $this->setCapacityExceededRerouteTrunkGroupId($capacityExceededRerouteTrunkGroupId);
        $this->setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls);
        $this->setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls);
        $this->setUnreachableDestinationAction($unreachableDestinationAction);
        $this->setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress);
        $this->setUnreachableDestinationRerouteTrunkGroupId($unreachableDestinationRerouteTrunkGroupId);
        $this->setUnreachableDestinationTrapInitialCalls($unreachableDestinationTrapInitialCalls);
        $this->setUnreachableDestinationTrapOffsetCalls($unreachableDestinationTrapOffsetCalls);
        $this->setInvitationTimeout($invitationTimeout);
        $this->setRequireAuthentication($requireAuthentication);
        $this->setSipAuthenticationUserName($sipAuthenticationUserName);
        $this->setSipAuthenticationPassword($sipAuthenticationPassword);
    }

    /**
     * @return GroupTrunkGroupAddInstanceResponse14sp1
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
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
     * Service Profile Information for a trunk group.
     *         The publicUserIdentity element is not part of ServiceInstanceAddProfileTrunkGroup.
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfileTrunkGroup $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile =  $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for a trunk group.
     *         The publicUserIdentity element is not part of ServiceInstanceAddProfileTrunkGroup.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * Access device end point used in the context of add.
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointAdd $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint =  $accessDeviceEndpoint;
    }

    /**
     * Access device end point used in the context of add.
     */
    public function getAccessDeviceEndpoint()
    {
        return (!$this->accessDeviceEndpoint) ?: $this->accessDeviceEndpoint->getValue();
    }

    /**
     * Maximum Number of Active Calls
     */
    public function setMaxActiveCalls($maxActiveCalls = null)
    {
        $this->maxActiveCalls = ($maxActiveCalls InstanceOf MaxActiveCalls)
             ? $maxActiveCalls
             : new MaxActiveCalls($maxActiveCalls);
    }

    /**
     * Maximum Number of Active Calls
     */
    public function getMaxActiveCalls()
    {
        return (!$this->maxActiveCalls) ?: $this->maxActiveCalls->getValue();
    }

    /**
     * Maximum Number of Incoming Calls
     */
    public function setMaxIncomingCalls($maxIncomingCalls = null)
    {
        $this->maxIncomingCalls = ($maxIncomingCalls InstanceOf MaxIncomingCalls)
             ? $maxIncomingCalls
             : new MaxIncomingCalls($maxIncomingCalls);
    }

    /**
     * Maximum Number of Incoming Calls
     */
    public function getMaxIncomingCalls()
    {
        return (!$this->maxIncomingCalls) ?: $this->maxIncomingCalls->getValue();
    }

    /**
     * Maximum Number of Outgoing Calls
     */
    public function setMaxOutgoingCalls($maxOutgoingCalls = null)
    {
        $this->maxOutgoingCalls = ($maxOutgoingCalls InstanceOf MaxOutgoingCalls)
             ? $maxOutgoingCalls
             : new MaxOutgoingCalls($maxOutgoingCalls);
    }

    /**
     * Maximum Number of Outgoing Calls
     */
    public function getMaxOutgoingCalls()
    {
        return (!$this->maxOutgoingCalls) ?: $this->maxOutgoingCalls->getValue();
    }

    /**
     * 
     */
    public function setEnableBursting($enableBursting = null)
    {
        $this->enableBursting = (boolean) $enableBursting;
    }

    /**
     * 
     */
    public function getEnableBursting()
    {
        return (!$this->enableBursting) ?: $this->enableBursting;
    }

    /**
     * Bursting Maximum Number of Active Calls
     */
    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls = null)
    {
        $this->burstingMaxActiveCalls = ($burstingMaxActiveCalls InstanceOf BurstingMaxActiveCalls)
             ? $burstingMaxActiveCalls
             : new BurstingMaxActiveCalls($burstingMaxActiveCalls);
    }

    /**
     * Bursting Maximum Number of Active Calls
     */
    public function getBurstingMaxActiveCalls()
    {
        return (!$this->burstingMaxActiveCalls) ?: $this->burstingMaxActiveCalls->getValue();
    }

    /**
     * Bursting Maximum Number of Incoming Calls
     */
    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls = null)
    {
        $this->burstingMaxIncomingCalls = ($burstingMaxIncomingCalls InstanceOf BurstingMaxIncomingCalls)
             ? $burstingMaxIncomingCalls
             : new BurstingMaxIncomingCalls($burstingMaxIncomingCalls);
    }

    /**
     * Bursting Maximum Number of Incoming Calls
     */
    public function getBurstingMaxIncomingCalls()
    {
        return (!$this->burstingMaxIncomingCalls) ?: $this->burstingMaxIncomingCalls->getValue();
    }

    /**
     * Bursting Maximum Number of Outgoing Calls
     */
    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls = null)
    {
        $this->burstingMaxOutgoingCalls = ($burstingMaxOutgoingCalls InstanceOf BurstingMaxOutgoingCalls)
             ? $burstingMaxOutgoingCalls
             : new BurstingMaxOutgoingCalls($burstingMaxOutgoingCalls);
    }

    /**
     * Bursting Maximum Number of Outgoing Calls
     */
    public function getBurstingMaxOutgoingCalls()
    {
        return (!$this->burstingMaxOutgoingCalls) ?: $this->burstingMaxOutgoingCalls->getValue();
    }

    /**
     * Trunk Group capacity exceeded action.
     */
    public function setCapacityExceededAction($capacityExceededAction = null)
    {
        $this->capacityExceededAction = ($capacityExceededAction InstanceOf TrunkGroupCapacityExceededAction)
             ? $capacityExceededAction
             : new TrunkGroupCapacityExceededAction($capacityExceededAction);
    }

    /**
     * Trunk Group capacity exceeded action.
     */
    public function getCapacityExceededAction()
    {
        return (!$this->capacityExceededAction) ?: $this->capacityExceededAction->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress = null)
    {
        $this->capacityExceededForwardAddress = ($capacityExceededForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $capacityExceededForwardAddress
             : new OutgoingDNorSIPURI($capacityExceededForwardAddress);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getCapacityExceededForwardAddress()
    {
        return (!$this->capacityExceededForwardAddress) ?: $this->capacityExceededForwardAddress->getValue();
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setCapacityExceededRerouteTrunkGroupId($capacityExceededRerouteTrunkGroupId = null)
    {
        $this->capacityExceededRerouteTrunkGroupId = ($capacityExceededRerouteTrunkGroupId InstanceOf UserId)
             ? $capacityExceededRerouteTrunkGroupId
             : new UserId($capacityExceededRerouteTrunkGroupId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getCapacityExceededRerouteTrunkGroupId()
    {
        return (!$this->capacityExceededRerouteTrunkGroupId) ?: $this->capacityExceededRerouteTrunkGroupId->getValue();
    }

    /**
     * An SNMP trap will be sent when the number of counted events crosses this threshold value.
     */
    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls = null)
    {
        $this->capacityExceededTrapInitialCalls = ($capacityExceededTrapInitialCalls InstanceOf TrapInitialThreshold)
             ? $capacityExceededTrapInitialCalls
             : new TrapInitialThreshold($capacityExceededTrapInitialCalls);
    }

    /**
     * An SNMP trap will be sent when the number of counted events crosses this threshold value.
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return (!$this->capacityExceededTrapInitialCalls) ?: $this->capacityExceededTrapInitialCalls->getValue();
    }

    /**
     * Subsequent SNMP traps will be sent after the intial trap each time the number of
     *         counted events increases by this value since the last trap.
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls = null)
    {
        $this->capacityExceededTrapOffsetCalls = ($capacityExceededTrapOffsetCalls InstanceOf TrapOffsetThreshold)
             ? $capacityExceededTrapOffsetCalls
             : new TrapOffsetThreshold($capacityExceededTrapOffsetCalls);
    }

    /**
     * Subsequent SNMP traps will be sent after the intial trap each time the number of
     *         counted events increases by this value since the last trap.
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return (!$this->capacityExceededTrapOffsetCalls) ?: $this->capacityExceededTrapOffsetCalls->getValue();
    }

    /**
     * Trunk Group unreachable destination action.
     */
    public function setUnreachableDestinationAction($unreachableDestinationAction = null)
    {
        $this->unreachableDestinationAction = ($unreachableDestinationAction InstanceOf TrunkGroupUnreachableDestinationAction)
             ? $unreachableDestinationAction
             : new TrunkGroupUnreachableDestinationAction($unreachableDestinationAction);
    }

    /**
     * Trunk Group unreachable destination action.
     */
    public function getUnreachableDestinationAction()
    {
        return (!$this->unreachableDestinationAction) ?: $this->unreachableDestinationAction->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress = null)
    {
        $this->unreachableDestinationForwardAddress = ($unreachableDestinationForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $unreachableDestinationForwardAddress
             : new OutgoingDNorSIPURI($unreachableDestinationForwardAddress);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getUnreachableDestinationForwardAddress()
    {
        return (!$this->unreachableDestinationForwardAddress) ?: $this->unreachableDestinationForwardAddress->getValue();
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setUnreachableDestinationRerouteTrunkGroupId($unreachableDestinationRerouteTrunkGroupId = null)
    {
        $this->unreachableDestinationRerouteTrunkGroupId = ($unreachableDestinationRerouteTrunkGroupId InstanceOf UserId)
             ? $unreachableDestinationRerouteTrunkGroupId
             : new UserId($unreachableDestinationRerouteTrunkGroupId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getUnreachableDestinationRerouteTrunkGroupId()
    {
        return (!$this->unreachableDestinationRerouteTrunkGroupId) ?: $this->unreachableDestinationRerouteTrunkGroupId->getValue();
    }

    /**
     * An SNMP trap will be sent when the number of counted events crosses this threshold value.
     */
    public function setUnreachableDestinationTrapInitialCalls($unreachableDestinationTrapInitialCalls = null)
    {
        $this->unreachableDestinationTrapInitialCalls = ($unreachableDestinationTrapInitialCalls InstanceOf TrapInitialThreshold)
             ? $unreachableDestinationTrapInitialCalls
             : new TrapInitialThreshold($unreachableDestinationTrapInitialCalls);
    }

    /**
     * An SNMP trap will be sent when the number of counted events crosses this threshold value.
     */
    public function getUnreachableDestinationTrapInitialCalls()
    {
        return (!$this->unreachableDestinationTrapInitialCalls) ?: $this->unreachableDestinationTrapInitialCalls->getValue();
    }

    /**
     * Subsequent SNMP traps will be sent after the intial trap each time the number of
     *         counted events increases by this value since the last trap.
     */
    public function setUnreachableDestinationTrapOffsetCalls($unreachableDestinationTrapOffsetCalls = null)
    {
        $this->unreachableDestinationTrapOffsetCalls = ($unreachableDestinationTrapOffsetCalls InstanceOf TrapOffsetThreshold)
             ? $unreachableDestinationTrapOffsetCalls
             : new TrapOffsetThreshold($unreachableDestinationTrapOffsetCalls);
    }

    /**
     * Subsequent SNMP traps will be sent after the intial trap each time the number of
     *         counted events increases by this value since the last trap.
     */
    public function getUnreachableDestinationTrapOffsetCalls()
    {
        return (!$this->unreachableDestinationTrapOffsetCalls) ?: $this->unreachableDestinationTrapOffsetCalls->getValue();
    }

    /**
     * The timer to start when an invitation is sent to a device associated with a trunk group.
     */
    public function setInvitationTimeout($invitationTimeout = null)
    {
        $this->invitationTimeout = ($invitationTimeout InstanceOf TrunkGroupInvitationTimeoutSeconds)
             ? $invitationTimeout
             : new TrunkGroupInvitationTimeoutSeconds($invitationTimeout);
    }

    /**
     * The timer to start when an invitation is sent to a device associated with a trunk group.
     */
    public function getInvitationTimeout()
    {
        return (!$this->invitationTimeout) ?: $this->invitationTimeout->getValue();
    }

    /**
     * 
     */
    public function setRequireAuthentication($requireAuthentication = null)
    {
        $this->requireAuthentication = (boolean) $requireAuthentication;
    }

    /**
     * 
     */
    public function getRequireAuthentication()
    {
        return (!$this->requireAuthentication) ?: $this->requireAuthentication;
    }

    /**
     * SIP Authentication User Name.
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName = null)
    {
        $this->sipAuthenticationUserName = ($sipAuthenticationUserName InstanceOf SIPAuthenticationUserName)
             ? $sipAuthenticationUserName
             : new SIPAuthenticationUserName($sipAuthenticationUserName);
    }

    /**
     * SIP Authentication User Name.
     */
    public function getSipAuthenticationUserName()
    {
        return (!$this->sipAuthenticationUserName) ?: $this->sipAuthenticationUserName->getValue();
    }

    /**
     * SIP Authentication Password
     */
    public function setSipAuthenticationPassword($sipAuthenticationPassword = null)
    {
        $this->sipAuthenticationPassword = ($sipAuthenticationPassword InstanceOf SIPAuthenticationPassword)
             ? $sipAuthenticationPassword
             : new SIPAuthenticationPassword($sipAuthenticationPassword);
    }

    /**
     * SIP Authentication Password
     */
    public function getSipAuthenticationPassword()
    {
        return (!$this->sipAuthenticationPassword) ?: $this->sipAuthenticationPassword->getValue();
    }
}
