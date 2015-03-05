<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupMultipleContactPilotUser;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCapacityExceededAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapInitialThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapOffsetThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupUnreachableDestinationAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupInvitationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OtgDtgIdentity;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupPilotUserCallingLineIdentityUsagePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupPilotUserChargeNumberUsagePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCallForwardingAlwaysAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupContinuousOptionsSendingIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupFailureOptionsSendingIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupThresholdCounter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupFailureThresholdWindowSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Add a Trunk Group instance to a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupAddInstanceRequest17sp4 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceProviderId,
             $groupId,
             $name,
             TrunkGroupMultipleContactPilotUser $pilotUser=null,
             DepartmentKey $department=null,
             AccessDevice $accessDevice=null,
             $maxActiveCalls,
             $maxIncomingCalls=null,
             $maxOutgoingCalls=null,
             $enableBursting,
             $burstingMaxActiveCalls=null,
             $burstingMaxIncomingCalls=null,
             $burstingMaxOutgoingCalls=null,
             $capacityExceededAction=null,
             $capacityExceededForwardAddress=null,
             TrunkGroupKey $capacityExceededRerouteTrunkGroupKey=null,
             $capacityExceededTrapInitialCalls,
             $capacityExceededTrapOffsetCalls,
             $unreachableDestinationAction=null,
             $unreachableDestinationForwardAddress=null,
             TrunkGroupKey $unreachableDestinationRerouteTrunkGroupKey=null,
             $invitationTimeout,
             $requireAuthentication,
             $sipAuthenticationUserName=null,
             $sipAuthenticationPassword=null,
             $hostedUserId=null,
             $trunkGroupIdentity=null,
             $otgDtgIdentity=null,
             $allowTerminationToTrunkGroupIdentity,
             $allowTerminationToDtgIdentity,
             $includeTrunkGroupIdentity,
             $includeDtgIdentity,
             $includeTrunkGroupIdentityForNetworkCalls,
             $includeOtgIdentityForNetworkCalls,
             $enableNetworkAddressIdentity,
             $allowUnscreenedCalls,
             $allowUnscreenedEmergencyCalls,
             $pilotUserCallingLineIdentityPolicy,
             $pilotUserChargeNumberPolicy,
             $callForwardingAlwaysAction=null,
             $callForwardingAlwaysForwardAddress=null,
             TrunkGroupKey $callForwardingAlwaysRerouteTrunkGroupKey=null,
             $peeringDomain=null,
             $routeToPeeringDomain,
             $prefixEnabled,
             $prefix=null,
             $statefulReroutingEnabled,
             $sendContinuousOptionsMessage,
             $continuousOptionsSendingIntervalSeconds,
             $failureOptionsSendingIntervalSeconds,
             $failureThresholdCounter,
             $successThresholdCounter,
             $inviteFailureThresholdCounter,
             $inviteFailureThresholdWindowSeconds,
             $pilotUserCallingLineAssertedIdentityPolicy,
             $useSystemCallingLineAssertedIdentityPolicy
    ) {
        $this->serviceProviderId                          = new ServiceProviderId($serviceProviderId);
        $this->groupId                                    = new GroupId($groupId);
        $this->name                                       = new TrunkGroupName($name);
        $this->pilotUser                                  = $pilotUser;
        $this->department                                 = $department;
        $this->accessDevice                               = $accessDevice;
        $this->maxActiveCalls                             = new MaxActiveCalls($maxActiveCalls);
        $this->maxIncomingCalls                           = new MaxIncomingCalls($maxIncomingCalls);
        $this->maxOutgoingCalls                           = new MaxOutgoingCalls($maxOutgoingCalls);
        $this->enableBursting                             = $enableBursting;
        $this->burstingMaxActiveCalls                     = new BurstingMaxActiveCalls($burstingMaxActiveCalls);
        $this->burstingMaxIncomingCalls                   = new BurstingMaxIncomingCalls($burstingMaxIncomingCalls);
        $this->burstingMaxOutgoingCalls                   = new BurstingMaxOutgoingCalls($burstingMaxOutgoingCalls);
        $this->capacityExceededAction                     = new TrunkGroupCapacityExceededAction($capacityExceededAction);
        $this->capacityExceededForwardAddress             = new OutgoingDNorSIPURI($capacityExceededForwardAddress);
        $this->capacityExceededRerouteTrunkGroupKey       = $capacityExceededRerouteTrunkGroupKey;
        $this->capacityExceededTrapInitialCalls           = new TrapInitialThreshold($capacityExceededTrapInitialCalls);
        $this->capacityExceededTrapOffsetCalls            = new TrapOffsetThreshold($capacityExceededTrapOffsetCalls);
        $this->unreachableDestinationAction               = $unreachableDestinationAction;
        $this->unreachableDestinationForwardAddress       = new OutgoingDNorSIPURI($unreachableDestinationForwardAddress);
        $this->unreachableDestinationRerouteTrunkGroupKey = $unreachableDestinationRerouteTrunkGroupKey;
        $this->invitationTimeout                          = new TrunkGroupInvitationTimeoutSeconds($invitationTimeout);
        $this->requireAuthentication                      = $requireAuthentication;
        $this->sipAuthenticationUserName                  = new SIPAuthenticationUserName($sipAuthenticationUserName);
        $this->sipAuthenticationPassword                  = new Password($sipAuthenticationPassword);
        $this->hostedUserId                               = new UserId($hostedUserId);
        $this->trunkGroupIdentity                         = new SIPURI($trunkGroupIdentity);
        $this->otgDtgIdentity                             = $otgDtgIdentity;
        $this->allowTerminationToTrunkGroupIdentity       = $allowTerminationToTrunkGroupIdentity;
        $this->allowTerminationToDtgIdentity              = $allowTerminationToDtgIdentity;
        $this->includeTrunkGroupIdentity                  = $includeTrunkGroupIdentity;
        $this->includeDtgIdentity                         = $includeDtgIdentity;
        $this->includeTrunkGroupIdentityForNetworkCalls   = $includeTrunkGroupIdentityForNetworkCalls;
        $this->includeOtgIdentityForNetworkCalls          = $includeOtgIdentityForNetworkCalls;
        $this->enableNetworkAddressIdentity               = $enableNetworkAddressIdentity;
        $this->allowUnscreenedCalls                       = $allowUnscreenedCalls;
        $this->allowUnscreenedEmergencyCalls              = $allowUnscreenedEmergencyCalls;
        $this->pilotUserCallingLineIdentityPolicy         = $pilotUserCallingLineIdentityPolicy;
        $this->pilotUserChargeNumberPolicy                = $pilotUserChargeNumberPolicy;
        $this->callForwardingAlwaysAction                 = $callForwardingAlwaysAction;
        $this->callForwardingAlwaysForwardAddress         = new OutgoingDNorSIPURI($callForwardingAlwaysForwardAddress);
        $this->callForwardingAlwaysRerouteTrunkGroupKey   = $callForwardingAlwaysRerouteTrunkGroupKey;
        $this->peeringDomain                              = new DomainName($peeringDomain);
        $this->routeToPeeringDomain                       = $routeToPeeringDomain;
        $this->prefixEnabled                              = $prefixEnabled;
        $this->prefix                                     = $prefix;
        $this->statefulReroutingEnabled                   = $statefulReroutingEnabled;
        $this->sendContinuousOptionsMessage               = $sendContinuousOptionsMessage;
        $this->continuousOptionsSendingIntervalSeconds    = $continuousOptionsSendingIntervalSeconds;
        $this->failureOptionsSendingIntervalSeconds       = $failureOptionsSendingIntervalSeconds;
        $this->failureThresholdCounter                    = $failureThresholdCounter;
        $this->successThresholdCounter                    = $successThresholdCounter;
        $this->inviteFailureThresholdCounter              = $inviteFailureThresholdCounter;
        $this->inviteFailureThresholdWindowSeconds        = $inviteFailureThresholdWindowSeconds;
        $this->pilotUserCallingLineAssertedIdentityPolicy = new TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy($pilotUserCallingLineAssertedIdentityPolicy);
        $this->useSystemCallingLineAssertedIdentityPolicy = $useSystemCallingLineAssertedIdentityPolicy;
        $this->args                                       = func_get_args();
    }

    public function setServiceProviderId($serviceProviderId)
    {
        $serviceProviderId and $this->serviceProviderId = new ServiceProviderId($serviceProviderId);
    }

    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->value();
    }

    public function setGroupId($groupId)
    {
        $groupId and $this->groupId = new GroupId($groupId);
    }

    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->value();
    }

    public function setName($name)
    {
        $name and $this->name = new TrunkGroupName($name);
    }

    public function getName()
    {
        return (!$this->name) ?: $this->name->value();
    }

    public function setPilotUser($pilotUser)
    {
        $pilotUser and $this->pilotUser = new TrunkGroupMultipleContactPilotUser($pilotUser);
    }

    public function getPilotUser()
    {
        return (!$this->pilotUser) ?: $this->pilotUser->value();
    }

    public function setDepartment($department)
    {
        $department and $this->department = new DepartmentKey($department);
    }

    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->value();
    }

    public function setAccessDevice($accessDevice)
    {
        $accessDevice and $this->accessDevice = new AccessDevice($accessDevice);
    }

    public function getAccessDevice()
    {
        return (!$this->accessDevice) ?: $this->accessDevice->value();
    }

    public function setMaxActiveCalls($maxActiveCalls)
    {
        $maxActiveCalls and $this->maxActiveCalls = new MaxActiveCalls($maxActiveCalls);
    }

    public function getMaxActiveCalls()
    {
        return (!$this->maxActiveCalls) ?: $this->maxActiveCalls->value();
    }

    public function setMaxIncomingCalls($maxIncomingCalls)
    {
        $maxIncomingCalls and $this->maxIncomingCalls = new MaxIncomingCalls($maxIncomingCalls);
    }

    public function getMaxIncomingCalls()
    {
        return (!$this->maxIncomingCalls) ?: $this->maxIncomingCalls->value();
    }

    public function setMaxOutgoingCalls($maxOutgoingCalls)
    {
        $maxOutgoingCalls and $this->maxOutgoingCalls = new MaxOutgoingCalls($maxOutgoingCalls);
    }

    public function getMaxOutgoingCalls()
    {
        return (!$this->maxOutgoingCalls) ?: $this->maxOutgoingCalls->value();
    }

    public function setEnableBursting($enableBursting)
    {
        $enableBursting and $this->enableBursting = new xs:boolean($enableBursting);
    }

    public function getEnableBursting()
    {
        return (!$this->enableBursting) ?: $this->enableBursting->value();
    }

    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls)
    {
        $burstingMaxActiveCalls and $this->burstingMaxActiveCalls = new BurstingMaxActiveCalls($burstingMaxActiveCalls);
    }

    public function getBurstingMaxActiveCalls()
    {
        return (!$this->burstingMaxActiveCalls) ?: $this->burstingMaxActiveCalls->value();
    }

    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls)
    {
        $burstingMaxIncomingCalls and $this->burstingMaxIncomingCalls = new BurstingMaxIncomingCalls($burstingMaxIncomingCalls);
    }

    public function getBurstingMaxIncomingCalls()
    {
        return (!$this->burstingMaxIncomingCalls) ?: $this->burstingMaxIncomingCalls->value();
    }

    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls)
    {
        $burstingMaxOutgoingCalls and $this->burstingMaxOutgoingCalls = new BurstingMaxOutgoingCalls($burstingMaxOutgoingCalls);
    }

    public function getBurstingMaxOutgoingCalls()
    {
        return (!$this->burstingMaxOutgoingCalls) ?: $this->burstingMaxOutgoingCalls->value();
    }

    public function setCapacityExceededAction($capacityExceededAction)
    {
        $capacityExceededAction and $this->capacityExceededAction = new TrunkGroupCapacityExceededAction($capacityExceededAction);
    }

    public function getCapacityExceededAction()
    {
        return (!$this->capacityExceededAction) ?: $this->capacityExceededAction->value();
    }

    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress)
    {
        $capacityExceededForwardAddress and $this->capacityExceededForwardAddress = new OutgoingDNorSIPURI($capacityExceededForwardAddress);
    }

    public function getCapacityExceededForwardAddress()
    {
        return (!$this->capacityExceededForwardAddress) ?: $this->capacityExceededForwardAddress->value();
    }

    public function setCapacityExceededRerouteTrunkGroupKey($capacityExceededRerouteTrunkGroupKey)
    {
        $capacityExceededRerouteTrunkGroupKey and $this->capacityExceededRerouteTrunkGroupKey = new TrunkGroupKey($capacityExceededRerouteTrunkGroupKey);
    }

    public function getCapacityExceededRerouteTrunkGroupKey()
    {
        return (!$this->capacityExceededRerouteTrunkGroupKey) ?: $this->capacityExceededRerouteTrunkGroupKey->value();
    }

    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls)
    {
        $capacityExceededTrapInitialCalls and $this->capacityExceededTrapInitialCalls = new TrapInitialThreshold($capacityExceededTrapInitialCalls);
    }

    public function getCapacityExceededTrapInitialCalls()
    {
        return (!$this->capacityExceededTrapInitialCalls) ?: $this->capacityExceededTrapInitialCalls->value();
    }

    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls)
    {
        $capacityExceededTrapOffsetCalls and $this->capacityExceededTrapOffsetCalls = new TrapOffsetThreshold($capacityExceededTrapOffsetCalls);
    }

    public function getCapacityExceededTrapOffsetCalls()
    {
        return (!$this->capacityExceededTrapOffsetCalls) ?: $this->capacityExceededTrapOffsetCalls->value();
    }

    public function setUnreachableDestinationAction($unreachableDestinationAction)
    {
        $unreachableDestinationAction and $this->unreachableDestinationAction = new TrunkGroupUnreachableDestinationAction($unreachableDestinationAction);
    }

    public function getUnreachableDestinationAction()
    {
        return (!$this->unreachableDestinationAction) ?: $this->unreachableDestinationAction->value();
    }

    public function setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress)
    {
        $unreachableDestinationForwardAddress and $this->unreachableDestinationForwardAddress = new OutgoingDNorSIPURI($unreachableDestinationForwardAddress);
    }

    public function getUnreachableDestinationForwardAddress()
    {
        return (!$this->unreachableDestinationForwardAddress) ?: $this->unreachableDestinationForwardAddress->value();
    }

    public function setUnreachableDestinationRerouteTrunkGroupKey($unreachableDestinationRerouteTrunkGroupKey)
    {
        $unreachableDestinationRerouteTrunkGroupKey and $this->unreachableDestinationRerouteTrunkGroupKey = new TrunkGroupKey($unreachableDestinationRerouteTrunkGroupKey);
    }

    public function getUnreachableDestinationRerouteTrunkGroupKey()
    {
        return (!$this->unreachableDestinationRerouteTrunkGroupKey) ?: $this->unreachableDestinationRerouteTrunkGroupKey->value();
    }

    public function setInvitationTimeout($invitationTimeout)
    {
        $invitationTimeout and $this->invitationTimeout = new TrunkGroupInvitationTimeoutSeconds($invitationTimeout);
    }

    public function getInvitationTimeout()
    {
        return (!$this->invitationTimeout) ?: $this->invitationTimeout->value();
    }

    public function setRequireAuthentication($requireAuthentication)
    {
        $requireAuthentication and $this->requireAuthentication = new xs:boolean($requireAuthentication);
    }

    public function getRequireAuthentication()
    {
        return (!$this->requireAuthentication) ?: $this->requireAuthentication->value();
    }

    public function setSipAuthenticationUserName($sipAuthenticationUserName)
    {
        $sipAuthenticationUserName and $this->sipAuthenticationUserName = new SIPAuthenticationUserName($sipAuthenticationUserName);
    }

    public function getSipAuthenticationUserName()
    {
        return (!$this->sipAuthenticationUserName) ?: $this->sipAuthenticationUserName->value();
    }

    public function setSipAuthenticationPassword($sipAuthenticationPassword)
    {
        $sipAuthenticationPassword and $this->sipAuthenticationPassword = new Password($sipAuthenticationPassword);
    }

    public function getSipAuthenticationPassword()
    {
        return (!$this->sipAuthenticationPassword) ?: $this->sipAuthenticationPassword->value();
    }

    public function setHostedUserId($hostedUserId)
    {
        $hostedUserId and $this->hostedUserId = new UserId($hostedUserId);
    }

    public function getHostedUserId()
    {
        return (!$this->hostedUserId) ?: $this->hostedUserId->value();
    }

    public function setTrunkGroupIdentity($trunkGroupIdentity)
    {
        $trunkGroupIdentity and $this->trunkGroupIdentity = new SIPURI($trunkGroupIdentity);
    }

    public function getTrunkGroupIdentity()
    {
        return (!$this->trunkGroupIdentity) ?: $this->trunkGroupIdentity->value();
    }

    public function setOtgDtgIdentity($otgDtgIdentity)
    {
        $otgDtgIdentity and $this->otgDtgIdentity = new OtgDtgIdentity($otgDtgIdentity);
    }

    public function getOtgDtgIdentity()
    {
        return (!$this->otgDtgIdentity) ?: $this->otgDtgIdentity->value();
    }

    public function setAllowTerminationToTrunkGroupIdentity($allowTerminationToTrunkGroupIdentity)
    {
        $allowTerminationToTrunkGroupIdentity and $this->allowTerminationToTrunkGroupIdentity = new xs:boolean($allowTerminationToTrunkGroupIdentity);
    }

    public function getAllowTerminationToTrunkGroupIdentity()
    {
        return (!$this->allowTerminationToTrunkGroupIdentity) ?: $this->allowTerminationToTrunkGroupIdentity->value();
    }

    public function setAllowTerminationToDtgIdentity($allowTerminationToDtgIdentity)
    {
        $allowTerminationToDtgIdentity and $this->allowTerminationToDtgIdentity = new xs:boolean($allowTerminationToDtgIdentity);
    }

    public function getAllowTerminationToDtgIdentity()
    {
        return (!$this->allowTerminationToDtgIdentity) ?: $this->allowTerminationToDtgIdentity->value();
    }

    public function setIncludeTrunkGroupIdentity($includeTrunkGroupIdentity)
    {
        $includeTrunkGroupIdentity and $this->includeTrunkGroupIdentity = new xs:boolean($includeTrunkGroupIdentity);
    }

    public function getIncludeTrunkGroupIdentity()
    {
        return (!$this->includeTrunkGroupIdentity) ?: $this->includeTrunkGroupIdentity->value();
    }

    public function setIncludeDtgIdentity($includeDtgIdentity)
    {
        $includeDtgIdentity and $this->includeDtgIdentity = new xs:boolean($includeDtgIdentity);
    }

    public function getIncludeDtgIdentity()
    {
        return (!$this->includeDtgIdentity) ?: $this->includeDtgIdentity->value();
    }

    public function setIncludeTrunkGroupIdentityForNetworkCalls($includeTrunkGroupIdentityForNetworkCalls)
    {
        $includeTrunkGroupIdentityForNetworkCalls and $this->includeTrunkGroupIdentityForNetworkCalls = new xs:boolean($includeTrunkGroupIdentityForNetworkCalls);
    }

    public function getIncludeTrunkGroupIdentityForNetworkCalls()
    {
        return (!$this->includeTrunkGroupIdentityForNetworkCalls) ?: $this->includeTrunkGroupIdentityForNetworkCalls->value();
    }

    public function setIncludeOtgIdentityForNetworkCalls($includeOtgIdentityForNetworkCalls)
    {
        $includeOtgIdentityForNetworkCalls and $this->includeOtgIdentityForNetworkCalls = new xs:boolean($includeOtgIdentityForNetworkCalls);
    }

    public function getIncludeOtgIdentityForNetworkCalls()
    {
        return (!$this->includeOtgIdentityForNetworkCalls) ?: $this->includeOtgIdentityForNetworkCalls->value();
    }

    public function setEnableNetworkAddressIdentity($enableNetworkAddressIdentity)
    {
        $enableNetworkAddressIdentity and $this->enableNetworkAddressIdentity = new xs:boolean($enableNetworkAddressIdentity);
    }

    public function getEnableNetworkAddressIdentity()
    {
        return (!$this->enableNetworkAddressIdentity) ?: $this->enableNetworkAddressIdentity->value();
    }

    public function setAllowUnscreenedCalls($allowUnscreenedCalls)
    {
        $allowUnscreenedCalls and $this->allowUnscreenedCalls = new xs:boolean($allowUnscreenedCalls);
    }

    public function getAllowUnscreenedCalls()
    {
        return (!$this->allowUnscreenedCalls) ?: $this->allowUnscreenedCalls->value();
    }

    public function setAllowUnscreenedEmergencyCalls($allowUnscreenedEmergencyCalls)
    {
        $allowUnscreenedEmergencyCalls and $this->allowUnscreenedEmergencyCalls = new xs:boolean($allowUnscreenedEmergencyCalls);
    }

    public function getAllowUnscreenedEmergencyCalls()
    {
        return (!$this->allowUnscreenedEmergencyCalls) ?: $this->allowUnscreenedEmergencyCalls->value();
    }

    public function setPilotUserCallingLineIdentityPolicy($pilotUserCallingLineIdentityPolicy)
    {
        $pilotUserCallingLineIdentityPolicy and $this->pilotUserCallingLineIdentityPolicy = new TrunkGroupPilotUserCallingLineIdentityUsagePolicy($pilotUserCallingLineIdentityPolicy);
    }

    public function getPilotUserCallingLineIdentityPolicy()
    {
        return (!$this->pilotUserCallingLineIdentityPolicy) ?: $this->pilotUserCallingLineIdentityPolicy->value();
    }

    public function setPilotUserChargeNumberPolicy($pilotUserChargeNumberPolicy)
    {
        $pilotUserChargeNumberPolicy and $this->pilotUserChargeNumberPolicy = new TrunkGroupPilotUserChargeNumberUsagePolicy($pilotUserChargeNumberPolicy);
    }

    public function getPilotUserChargeNumberPolicy()
    {
        return (!$this->pilotUserChargeNumberPolicy) ?: $this->pilotUserChargeNumberPolicy->value();
    }

    public function setCallForwardingAlwaysAction($callForwardingAlwaysAction)
    {
        $callForwardingAlwaysAction and $this->callForwardingAlwaysAction = new TrunkGroupCallForwardingAlwaysAction($callForwardingAlwaysAction);
    }

    public function getCallForwardingAlwaysAction()
    {
        return (!$this->callForwardingAlwaysAction) ?: $this->callForwardingAlwaysAction->value();
    }

    public function setCallForwardingAlwaysForwardAddress($callForwardingAlwaysForwardAddress)
    {
        $callForwardingAlwaysForwardAddress and $this->callForwardingAlwaysForwardAddress = new OutgoingDNorSIPURI($callForwardingAlwaysForwardAddress);
    }

    public function getCallForwardingAlwaysForwardAddress()
    {
        return (!$this->callForwardingAlwaysForwardAddress) ?: $this->callForwardingAlwaysForwardAddress->value();
    }

    public function setCallForwardingAlwaysRerouteTrunkGroupKey($callForwardingAlwaysRerouteTrunkGroupKey)
    {
        $callForwardingAlwaysRerouteTrunkGroupKey and $this->callForwardingAlwaysRerouteTrunkGroupKey = new TrunkGroupKey($callForwardingAlwaysRerouteTrunkGroupKey);
    }

    public function getCallForwardingAlwaysRerouteTrunkGroupKey()
    {
        return (!$this->callForwardingAlwaysRerouteTrunkGroupKey) ?: $this->callForwardingAlwaysRerouteTrunkGroupKey->value();
    }

    public function setPeeringDomain($peeringDomain)
    {
        $peeringDomain and $this->peeringDomain = new DomainName($peeringDomain);
    }

    public function getPeeringDomain()
    {
        return (!$this->peeringDomain) ?: $this->peeringDomain->value();
    }

    public function setRouteToPeeringDomain($routeToPeeringDomain)
    {
        $routeToPeeringDomain and $this->routeToPeeringDomain = new xs:boolean($routeToPeeringDomain);
    }

    public function getRouteToPeeringDomain()
    {
        return (!$this->routeToPeeringDomain) ?: $this->routeToPeeringDomain->value();
    }

    public function setPrefixEnabled($prefixEnabled)
    {
        $prefixEnabled and $this->prefixEnabled = new xs:boolean($prefixEnabled);
    }

    public function getPrefixEnabled()
    {
        return (!$this->prefixEnabled) ?: $this->prefixEnabled->value();
    }

    public function setPrefix($prefix)
    {
        $prefix and $this->prefix = new TrunkGroupPrefix($prefix);
    }

    public function getPrefix()
    {
        return (!$this->prefix) ?: $this->prefix->value();
    }

    public function setStatefulReroutingEnabled($statefulReroutingEnabled)
    {
        $statefulReroutingEnabled and $this->statefulReroutingEnabled = new xs:boolean($statefulReroutingEnabled);
    }

    public function getStatefulReroutingEnabled()
    {
        return (!$this->statefulReroutingEnabled) ?: $this->statefulReroutingEnabled->value();
    }

    public function setSendContinuousOptionsMessage($sendContinuousOptionsMessage)
    {
        $sendContinuousOptionsMessage and $this->sendContinuousOptionsMessage = new xs:boolean($sendContinuousOptionsMessage);
    }

    public function getSendContinuousOptionsMessage()
    {
        return (!$this->sendContinuousOptionsMessage) ?: $this->sendContinuousOptionsMessage->value();
    }

    public function setContinuousOptionsSendingIntervalSeconds($continuousOptionsSendingIntervalSeconds)
    {
        $continuousOptionsSendingIntervalSeconds and $this->continuousOptionsSendingIntervalSeconds = new TrunkGroupContinuousOptionsSendingIntervalSeconds($continuousOptionsSendingIntervalSeconds);
    }

    public function getContinuousOptionsSendingIntervalSeconds()
    {
        return (!$this->continuousOptionsSendingIntervalSeconds) ?: $this->continuousOptionsSendingIntervalSeconds->value();
    }

    public function setFailureOptionsSendingIntervalSeconds($failureOptionsSendingIntervalSeconds)
    {
        $failureOptionsSendingIntervalSeconds and $this->failureOptionsSendingIntervalSeconds = new TrunkGroupFailureOptionsSendingIntervalSeconds($failureOptionsSendingIntervalSeconds);
    }

    public function getFailureOptionsSendingIntervalSeconds()
    {
        return (!$this->failureOptionsSendingIntervalSeconds) ?: $this->failureOptionsSendingIntervalSeconds->value();
    }

    public function setFailureThresholdCounter($failureThresholdCounter)
    {
        $failureThresholdCounter and $this->failureThresholdCounter = new TrunkGroupThresholdCounter($failureThresholdCounter);
    }

    public function getFailureThresholdCounter()
    {
        return (!$this->failureThresholdCounter) ?: $this->failureThresholdCounter->value();
    }

    public function setSuccessThresholdCounter($successThresholdCounter)
    {
        $successThresholdCounter and $this->successThresholdCounter = new TrunkGroupThresholdCounter($successThresholdCounter);
    }

    public function getSuccessThresholdCounter()
    {
        return (!$this->successThresholdCounter) ?: $this->successThresholdCounter->value();
    }

    public function setInviteFailureThresholdCounter($inviteFailureThresholdCounter)
    {
        $inviteFailureThresholdCounter and $this->inviteFailureThresholdCounter = new TrunkGroupThresholdCounter($inviteFailureThresholdCounter);
    }

    public function getInviteFailureThresholdCounter()
    {
        return (!$this->inviteFailureThresholdCounter) ?: $this->inviteFailureThresholdCounter->value();
    }

    public function setInviteFailureThresholdWindowSeconds($inviteFailureThresholdWindowSeconds)
    {
        $inviteFailureThresholdWindowSeconds and $this->inviteFailureThresholdWindowSeconds = new TrunkGroupFailureThresholdWindowSeconds($inviteFailureThresholdWindowSeconds);
    }

    public function getInviteFailureThresholdWindowSeconds()
    {
        return (!$this->inviteFailureThresholdWindowSeconds) ?: $this->inviteFailureThresholdWindowSeconds->value();
    }

    public function setPilotUserCallingLineAssertedIdentityPolicy($pilotUserCallingLineAssertedIdentityPolicy)
    {
        $pilotUserCallingLineAssertedIdentityPolicy and $this->pilotUserCallingLineAssertedIdentityPolicy = new TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy($pilotUserCallingLineAssertedIdentityPolicy);
    }

    public function getPilotUserCallingLineAssertedIdentityPolicy()
    {
        return (!$this->pilotUserCallingLineAssertedIdentityPolicy) ?: $this->pilotUserCallingLineAssertedIdentityPolicy->value();
    }

    public function setUseSystemCallingLineAssertedIdentityPolicy($useSystemCallingLineAssertedIdentityPolicy)
    {
        $useSystemCallingLineAssertedIdentityPolicy and $this->useSystemCallingLineAssertedIdentityPolicy = new xs:boolean($useSystemCallingLineAssertedIdentityPolicy);
    }

    public function getUseSystemCallingLineAssertedIdentityPolicy()
    {
        return (!$this->useSystemCallingLineAssertedIdentityPolicy) ?: $this->useSystemCallingLineAssertedIdentityPolicy->value();
    }
}
