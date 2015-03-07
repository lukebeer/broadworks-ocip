<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupContinuousOptionsSendingIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPilotUserCallingLineIdentityUsagePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupFailureOptionsSendingIntervalSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPilotUserChargeNumberUsagePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupFailureThresholdWindowSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUnreachableDestinationAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupCallForwardingAlwaysAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupThresholdCounter;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupInvitationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPrefix;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCapacityExceededAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\OtgDtgIdentity;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapInitialThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapOffsetThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a Trunk Group Instance in a group.
 *         The access device cannot be modified or cleared if there are any users assigned to the Trunk Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupModifyInstanceRequest15 extends ComplexType implements ComplexInterface
{
    public    $name                                        = __CLASS__;
    protected $trunkGroupKey                               = null;
    protected $newName                                     = null;
    protected $pilotUserId                                 = null;
    protected $department                                  = null;
    protected $accessDevice                                = null;
    protected $maxActiveCalls                              = null;
    protected $maxIncomingCalls                            = null;
    protected $maxOutgoingCalls                            = null;
    protected $enableBursting                              = null;
    protected $burstingMaxActiveCalls                      = null;
    protected $burstingMaxIncomingCalls                    = null;
    protected $burstingMaxOutgoingCalls                    = null;
    protected $capacityExceededAction                      = null;
    protected $capacityExceededForwardAddress              = null;
    protected $capacityExceededRerouteTrunkGroupKey        = null;
    protected $capacityExceededTrapInitialCalls            = null;
    protected $capacityExceededTrapOffsetCalls             = null;
    protected $unreachableDestinationAction                = null;
    protected $unreachableDestinationForwardAddress        = null;
    protected $unreachableDestinationRerouteTrunkGroupKey  = null;
    protected $invitationTimeout                           = null;
    protected $requireAuthentication                       = null;
    protected $sipAuthenticationUserName                   = null;
    protected $sipAuthenticationPassword                   = null;
    protected $hostedUserIdList                            = null;
    protected $trunkGroupIdentity                          = null;
    protected $otgDtgIdentity                              = null;
    protected $allowTerminationToTrunkGroupIdentity        = null;
    protected $allowTerminationToDtgIdentity               = null;
    protected $includeTrunkGroupIdentity                   = null;
    protected $includeDtgIdentity                          = null;
    protected $includeTrunkGroupIdentityForNetworkCalls    = null;
    protected $includeOtgIdentityForNetworkCalls           = null;
    protected $enableNetworkAddressIdentity                = null;
    protected $allowUnscreenedCalls                        = null;
    protected $allowUnscreenedEmergencyCalls               = null;
    protected $pilotUserCallingLineIdentityPolicy          = null;
    protected $pilotUserChargeNumberPolicy                 = null;
    protected $callForwardingAlwaysAction                  = null;
    protected $callForwardingAlwaysForwardAddress          = null;
    protected $callForwardingAlwaysRerouteTrunkGroupKey    = null;
    protected $peeringDomain                               = null;
    protected $routeToPeeringDomain                        = null;
    protected $prefixEnabled                               = null;
    protected $prefix                                      = null;
    protected $statefulReroutingEnabled                    = null;
    protected $sendContinuousOptionsMessage                = null;
    protected $continuousOptionsSendingIntervalSeconds     = null;
    protected $failureOptionsSendingIntervalSeconds        = null;
    protected $failureThresholdCounter                     = null;
    protected $successThresholdCounter                     = null;
    protected $inviteFailureThresholdCounter               = null;
    protected $inviteFailureThresholdWindowSeconds         = null;
    protected $pilotUserCallingLineAssertedIdentityPolicy  = null;
    protected $useSystemCallingLineAssertedIdentityPolicy  = null;

    public function __construct(
         TrunkGroupKey $trunkGroupKey,
         $newName = null,
         $pilotUserId = null,
         DepartmentKey $department = null,
         AccessDevice $accessDevice = null,
         $maxActiveCalls = null,
         $maxIncomingCalls = null,
         $maxOutgoingCalls = null,
         $enableBursting = null,
         $burstingMaxActiveCalls = null,
         $burstingMaxIncomingCalls = null,
         $burstingMaxOutgoingCalls = null,
         $capacityExceededAction = null,
         $capacityExceededForwardAddress = null,
         TrunkGroupKey $capacityExceededRerouteTrunkGroupKey = null,
         $capacityExceededTrapInitialCalls = null,
         $capacityExceededTrapOffsetCalls = null,
         $unreachableDestinationAction = null,
         $unreachableDestinationForwardAddress = null,
         TrunkGroupKey $unreachableDestinationRerouteTrunkGroupKey = null,
         $invitationTimeout = null,
         $requireAuthentication = null,
         $sipAuthenticationUserName = null,
         $sipAuthenticationPassword = null,
         ReplacementUserIdList $hostedUserIdList = null,
         $trunkGroupIdentity = null,
         $otgDtgIdentity = null,
         $allowTerminationToTrunkGroupIdentity = null,
         $allowTerminationToDtgIdentity = null,
         $includeTrunkGroupIdentity = null,
         $includeDtgIdentity = null,
         $includeTrunkGroupIdentityForNetworkCalls = null,
         $includeOtgIdentityForNetworkCalls = null,
         $enableNetworkAddressIdentity = null,
         $allowUnscreenedCalls = null,
         $allowUnscreenedEmergencyCalls = null,
         $pilotUserCallingLineIdentityPolicy = null,
         $pilotUserChargeNumberPolicy = null,
         $callForwardingAlwaysAction = null,
         $callForwardingAlwaysForwardAddress = null,
         TrunkGroupKey $callForwardingAlwaysRerouteTrunkGroupKey = null,
         $peeringDomain = null,
         $routeToPeeringDomain = null,
         $prefixEnabled = null,
         $prefix = null,
         $statefulReroutingEnabled = null,
         $sendContinuousOptionsMessage = null,
         $continuousOptionsSendingIntervalSeconds = null,
         $failureOptionsSendingIntervalSeconds = null,
         $failureThresholdCounter = null,
         $successThresholdCounter = null,
         $inviteFailureThresholdCounter = null,
         $inviteFailureThresholdWindowSeconds = null,
         $pilotUserCallingLineAssertedIdentityPolicy = null,
         $useSystemCallingLineAssertedIdentityPolicy = null
    ) {
        $this->setTrunkGroupKey($trunkGroupKey);
        $this->setNewName($newName);
        $this->setPilotUserId($pilotUserId);
        $this->setDepartment($department);
        $this->setAccessDevice($accessDevice);
        $this->setMaxActiveCalls($maxActiveCalls);
        $this->setMaxIncomingCalls($maxIncomingCalls);
        $this->setMaxOutgoingCalls($maxOutgoingCalls);
        $this->setEnableBursting($enableBursting);
        $this->setBurstingMaxActiveCalls($burstingMaxActiveCalls);
        $this->setBurstingMaxIncomingCalls($burstingMaxIncomingCalls);
        $this->setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls);
        $this->setCapacityExceededAction($capacityExceededAction);
        $this->setCapacityExceededForwardAddress($capacityExceededForwardAddress);
        $this->setCapacityExceededRerouteTrunkGroupKey($capacityExceededRerouteTrunkGroupKey);
        $this->setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls);
        $this->setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls);
        $this->setUnreachableDestinationAction($unreachableDestinationAction);
        $this->setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress);
        $this->setUnreachableDestinationRerouteTrunkGroupKey($unreachableDestinationRerouteTrunkGroupKey);
        $this->setInvitationTimeout($invitationTimeout);
        $this->setRequireAuthentication($requireAuthentication);
        $this->setSipAuthenticationUserName($sipAuthenticationUserName);
        $this->setSipAuthenticationPassword($sipAuthenticationPassword);
        $this->setHostedUserIdList($hostedUserIdList);
        $this->setTrunkGroupIdentity($trunkGroupIdentity);
        $this->setOtgDtgIdentity($otgDtgIdentity);
        $this->setAllowTerminationToTrunkGroupIdentity($allowTerminationToTrunkGroupIdentity);
        $this->setAllowTerminationToDtgIdentity($allowTerminationToDtgIdentity);
        $this->setIncludeTrunkGroupIdentity($includeTrunkGroupIdentity);
        $this->setIncludeDtgIdentity($includeDtgIdentity);
        $this->setIncludeTrunkGroupIdentityForNetworkCalls($includeTrunkGroupIdentityForNetworkCalls);
        $this->setIncludeOtgIdentityForNetworkCalls($includeOtgIdentityForNetworkCalls);
        $this->setEnableNetworkAddressIdentity($enableNetworkAddressIdentity);
        $this->setAllowUnscreenedCalls($allowUnscreenedCalls);
        $this->setAllowUnscreenedEmergencyCalls($allowUnscreenedEmergencyCalls);
        $this->setPilotUserCallingLineIdentityPolicy($pilotUserCallingLineIdentityPolicy);
        $this->setPilotUserChargeNumberPolicy($pilotUserChargeNumberPolicy);
        $this->setCallForwardingAlwaysAction($callForwardingAlwaysAction);
        $this->setCallForwardingAlwaysForwardAddress($callForwardingAlwaysForwardAddress);
        $this->setCallForwardingAlwaysRerouteTrunkGroupKey($callForwardingAlwaysRerouteTrunkGroupKey);
        $this->setPeeringDomain($peeringDomain);
        $this->setRouteToPeeringDomain($routeToPeeringDomain);
        $this->setPrefixEnabled($prefixEnabled);
        $this->setPrefix($prefix);
        $this->setStatefulReroutingEnabled($statefulReroutingEnabled);
        $this->setSendContinuousOptionsMessage($sendContinuousOptionsMessage);
        $this->setContinuousOptionsSendingIntervalSeconds($continuousOptionsSendingIntervalSeconds);
        $this->setFailureOptionsSendingIntervalSeconds($failureOptionsSendingIntervalSeconds);
        $this->setFailureThresholdCounter($failureThresholdCounter);
        $this->setSuccessThresholdCounter($successThresholdCounter);
        $this->setInviteFailureThresholdCounter($inviteFailureThresholdCounter);
        $this->setInviteFailureThresholdWindowSeconds($inviteFailureThresholdWindowSeconds);
        $this->setPilotUserCallingLineAssertedIdentityPolicy($pilotUserCallingLineAssertedIdentityPolicy);
        $this->setUseSystemCallingLineAssertedIdentityPolicy($useSystemCallingLineAssertedIdentityPolicy);
    }

    public function setTrunkGroupKey(TrunkGroupKey $trunkGroupKey = null)
    {
    }

    public function getTrunkGroupKey()
    {
        return (!$this->trunkGroupKey) ?: $this->trunkGroupKey->value();
    }

    public function setNewName($newName = null)
    {
        $this->newName = ($newName InstanceOf TrunkGroupName)
             ? $newName
             : new TrunkGroupName($newName);
    }

    public function getNewName()
    {
        return (!$this->newName) ?: $this->newName->value();
    }

    public function setPilotUserId($pilotUserId = null)
    {
        $this->pilotUserId = ($pilotUserId InstanceOf UserId)
             ? $pilotUserId
             : new UserId($pilotUserId);
    }

    public function getPilotUserId()
    {
        return (!$this->pilotUserId) ?: $this->pilotUserId->value();
    }

    public function setDepartment(DepartmentKey $department = null)
    {
    }

    public function getDepartment()
    {
        return (!$this->department) ?: $this->department->value();
    }

    public function setAccessDevice(AccessDevice $accessDevice = null)
    {
    }

    public function getAccessDevice()
    {
        return (!$this->accessDevice) ?: $this->accessDevice->value();
    }

    public function setMaxActiveCalls($maxActiveCalls = null)
    {
        $this->maxActiveCalls = ($maxActiveCalls InstanceOf MaxActiveCalls)
             ? $maxActiveCalls
             : new MaxActiveCalls($maxActiveCalls);
    }

    public function getMaxActiveCalls()
    {
        return (!$this->maxActiveCalls) ?: $this->maxActiveCalls->value();
    }

    public function setMaxIncomingCalls($maxIncomingCalls = null)
    {
        $this->maxIncomingCalls = ($maxIncomingCalls InstanceOf MaxIncomingCalls)
             ? $maxIncomingCalls
             : new MaxIncomingCalls($maxIncomingCalls);
    }

    public function getMaxIncomingCalls()
    {
        return (!$this->maxIncomingCalls) ?: $this->maxIncomingCalls->value();
    }

    public function setMaxOutgoingCalls($maxOutgoingCalls = null)
    {
        $this->maxOutgoingCalls = ($maxOutgoingCalls InstanceOf MaxOutgoingCalls)
             ? $maxOutgoingCalls
             : new MaxOutgoingCalls($maxOutgoingCalls);
    }

    public function getMaxOutgoingCalls()
    {
        return (!$this->maxOutgoingCalls) ?: $this->maxOutgoingCalls->value();
    }

    public function setEnableBursting(xs:boolean $enableBursting = null)
    {
    }

    public function getEnableBursting()
    {
        return (!$this->enableBursting) ?: $this->enableBursting->value();
    }

    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls = null)
    {
        $this->burstingMaxActiveCalls = ($burstingMaxActiveCalls InstanceOf BurstingMaxActiveCalls)
             ? $burstingMaxActiveCalls
             : new BurstingMaxActiveCalls($burstingMaxActiveCalls);
    }

    public function getBurstingMaxActiveCalls()
    {
        return (!$this->burstingMaxActiveCalls) ?: $this->burstingMaxActiveCalls->value();
    }

    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls = null)
    {
        $this->burstingMaxIncomingCalls = ($burstingMaxIncomingCalls InstanceOf BurstingMaxIncomingCalls)
             ? $burstingMaxIncomingCalls
             : new BurstingMaxIncomingCalls($burstingMaxIncomingCalls);
    }

    public function getBurstingMaxIncomingCalls()
    {
        return (!$this->burstingMaxIncomingCalls) ?: $this->burstingMaxIncomingCalls->value();
    }

    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls = null)
    {
        $this->burstingMaxOutgoingCalls = ($burstingMaxOutgoingCalls InstanceOf BurstingMaxOutgoingCalls)
             ? $burstingMaxOutgoingCalls
             : new BurstingMaxOutgoingCalls($burstingMaxOutgoingCalls);
    }

    public function getBurstingMaxOutgoingCalls()
    {
        return (!$this->burstingMaxOutgoingCalls) ?: $this->burstingMaxOutgoingCalls->value();
    }

    public function setCapacityExceededAction($capacityExceededAction = null)
    {
        $this->capacityExceededAction = ($capacityExceededAction InstanceOf TrunkGroupCapacityExceededAction)
             ? $capacityExceededAction
             : new TrunkGroupCapacityExceededAction($capacityExceededAction);
    }

    public function getCapacityExceededAction()
    {
        return (!$this->capacityExceededAction) ?: $this->capacityExceededAction->value();
    }

    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress = null)
    {
        $this->capacityExceededForwardAddress = ($capacityExceededForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $capacityExceededForwardAddress
             : new OutgoingDNorSIPURI($capacityExceededForwardAddress);
    }

    public function getCapacityExceededForwardAddress()
    {
        return (!$this->capacityExceededForwardAddress) ?: $this->capacityExceededForwardAddress->value();
    }

    public function setCapacityExceededRerouteTrunkGroupKey(TrunkGroupKey $capacityExceededRerouteTrunkGroupKey = null)
    {
    }

    public function getCapacityExceededRerouteTrunkGroupKey()
    {
        return (!$this->capacityExceededRerouteTrunkGroupKey) ?: $this->capacityExceededRerouteTrunkGroupKey->value();
    }

    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls = null)
    {
        $this->capacityExceededTrapInitialCalls = ($capacityExceededTrapInitialCalls InstanceOf TrapInitialThreshold)
             ? $capacityExceededTrapInitialCalls
             : new TrapInitialThreshold($capacityExceededTrapInitialCalls);
    }

    public function getCapacityExceededTrapInitialCalls()
    {
        return (!$this->capacityExceededTrapInitialCalls) ?: $this->capacityExceededTrapInitialCalls->value();
    }

    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls = null)
    {
        $this->capacityExceededTrapOffsetCalls = ($capacityExceededTrapOffsetCalls InstanceOf TrapOffsetThreshold)
             ? $capacityExceededTrapOffsetCalls
             : new TrapOffsetThreshold($capacityExceededTrapOffsetCalls);
    }

    public function getCapacityExceededTrapOffsetCalls()
    {
        return (!$this->capacityExceededTrapOffsetCalls) ?: $this->capacityExceededTrapOffsetCalls->value();
    }

    public function setUnreachableDestinationAction($unreachableDestinationAction = null)
    {
        $this->unreachableDestinationAction = ($unreachableDestinationAction InstanceOf TrunkGroupUnreachableDestinationAction)
             ? $unreachableDestinationAction
             : new TrunkGroupUnreachableDestinationAction($unreachableDestinationAction);
    }

    public function getUnreachableDestinationAction()
    {
        return (!$this->unreachableDestinationAction) ?: $this->unreachableDestinationAction->value();
    }

    public function setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress = null)
    {
        $this->unreachableDestinationForwardAddress = ($unreachableDestinationForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $unreachableDestinationForwardAddress
             : new OutgoingDNorSIPURI($unreachableDestinationForwardAddress);
    }

    public function getUnreachableDestinationForwardAddress()
    {
        return (!$this->unreachableDestinationForwardAddress) ?: $this->unreachableDestinationForwardAddress->value();
    }

    public function setUnreachableDestinationRerouteTrunkGroupKey(TrunkGroupKey $unreachableDestinationRerouteTrunkGroupKey = null)
    {
    }

    public function getUnreachableDestinationRerouteTrunkGroupKey()
    {
        return (!$this->unreachableDestinationRerouteTrunkGroupKey) ?: $this->unreachableDestinationRerouteTrunkGroupKey->value();
    }

    public function setInvitationTimeout($invitationTimeout = null)
    {
        $this->invitationTimeout = ($invitationTimeout InstanceOf TrunkGroupInvitationTimeoutSeconds)
             ? $invitationTimeout
             : new TrunkGroupInvitationTimeoutSeconds($invitationTimeout);
    }

    public function getInvitationTimeout()
    {
        return (!$this->invitationTimeout) ?: $this->invitationTimeout->value();
    }

    public function setRequireAuthentication(xs:boolean $requireAuthentication = null)
    {
    }

    public function getRequireAuthentication()
    {
        return (!$this->requireAuthentication) ?: $this->requireAuthentication->value();
    }

    public function setSipAuthenticationUserName($sipAuthenticationUserName = null)
    {
        $this->sipAuthenticationUserName = ($sipAuthenticationUserName InstanceOf SIPAuthenticationUserName)
             ? $sipAuthenticationUserName
             : new SIPAuthenticationUserName($sipAuthenticationUserName);
    }

    public function getSipAuthenticationUserName()
    {
        return (!$this->sipAuthenticationUserName) ?: $this->sipAuthenticationUserName->value();
    }

    public function setSipAuthenticationPassword($sipAuthenticationPassword = null)
    {
        $this->sipAuthenticationPassword = ($sipAuthenticationPassword InstanceOf Password)
             ? $sipAuthenticationPassword
             : new Password($sipAuthenticationPassword);
    }

    public function getSipAuthenticationPassword()
    {
        return (!$this->sipAuthenticationPassword) ?: $this->sipAuthenticationPassword->value();
    }

    public function setHostedUserIdList(ReplacementUserIdList $hostedUserIdList = null)
    {
    }

    public function getHostedUserIdList()
    {
        return (!$this->hostedUserIdList) ?: $this->hostedUserIdList->value();
    }

    public function setTrunkGroupIdentity($trunkGroupIdentity = null)
    {
        $this->trunkGroupIdentity = ($trunkGroupIdentity InstanceOf SIPURI)
             ? $trunkGroupIdentity
             : new SIPURI($trunkGroupIdentity);
    }

    public function getTrunkGroupIdentity()
    {
        return (!$this->trunkGroupIdentity) ?: $this->trunkGroupIdentity->value();
    }

    public function setOtgDtgIdentity($otgDtgIdentity = null)
    {
        $this->otgDtgIdentity = ($otgDtgIdentity InstanceOf OtgDtgIdentity)
             ? $otgDtgIdentity
             : new OtgDtgIdentity($otgDtgIdentity);
    }

    public function getOtgDtgIdentity()
    {
        return (!$this->otgDtgIdentity) ?: $this->otgDtgIdentity->value();
    }

    public function setAllowTerminationToTrunkGroupIdentity(xs:boolean $allowTerminationToTrunkGroupIdentity = null)
    {
    }

    public function getAllowTerminationToTrunkGroupIdentity()
    {
        return (!$this->allowTerminationToTrunkGroupIdentity) ?: $this->allowTerminationToTrunkGroupIdentity->value();
    }

    public function setAllowTerminationToDtgIdentity(xs:boolean $allowTerminationToDtgIdentity = null)
    {
    }

    public function getAllowTerminationToDtgIdentity()
    {
        return (!$this->allowTerminationToDtgIdentity) ?: $this->allowTerminationToDtgIdentity->value();
    }

    public function setIncludeTrunkGroupIdentity(xs:boolean $includeTrunkGroupIdentity = null)
    {
    }

    public function getIncludeTrunkGroupIdentity()
    {
        return (!$this->includeTrunkGroupIdentity) ?: $this->includeTrunkGroupIdentity->value();
    }

    public function setIncludeDtgIdentity(xs:boolean $includeDtgIdentity = null)
    {
    }

    public function getIncludeDtgIdentity()
    {
        return (!$this->includeDtgIdentity) ?: $this->includeDtgIdentity->value();
    }

    public function setIncludeTrunkGroupIdentityForNetworkCalls(xs:boolean $includeTrunkGroupIdentityForNetworkCalls = null)
    {
    }

    public function getIncludeTrunkGroupIdentityForNetworkCalls()
    {
        return (!$this->includeTrunkGroupIdentityForNetworkCalls) ?: $this->includeTrunkGroupIdentityForNetworkCalls->value();
    }

    public function setIncludeOtgIdentityForNetworkCalls(xs:boolean $includeOtgIdentityForNetworkCalls = null)
    {
    }

    public function getIncludeOtgIdentityForNetworkCalls()
    {
        return (!$this->includeOtgIdentityForNetworkCalls) ?: $this->includeOtgIdentityForNetworkCalls->value();
    }

    public function setEnableNetworkAddressIdentity(xs:boolean $enableNetworkAddressIdentity = null)
    {
    }

    public function getEnableNetworkAddressIdentity()
    {
        return (!$this->enableNetworkAddressIdentity) ?: $this->enableNetworkAddressIdentity->value();
    }

    public function setAllowUnscreenedCalls(xs:boolean $allowUnscreenedCalls = null)
    {
    }

    public function getAllowUnscreenedCalls()
    {
        return (!$this->allowUnscreenedCalls) ?: $this->allowUnscreenedCalls->value();
    }

    public function setAllowUnscreenedEmergencyCalls(xs:boolean $allowUnscreenedEmergencyCalls = null)
    {
    }

    public function getAllowUnscreenedEmergencyCalls()
    {
        return (!$this->allowUnscreenedEmergencyCalls) ?: $this->allowUnscreenedEmergencyCalls->value();
    }

    public function setPilotUserCallingLineIdentityPolicy($pilotUserCallingLineIdentityPolicy = null)
    {
        $this->pilotUserCallingLineIdentityPolicy = ($pilotUserCallingLineIdentityPolicy InstanceOf TrunkGroupPilotUserCallingLineIdentityUsagePolicy)
             ? $pilotUserCallingLineIdentityPolicy
             : new TrunkGroupPilotUserCallingLineIdentityUsagePolicy($pilotUserCallingLineIdentityPolicy);
    }

    public function getPilotUserCallingLineIdentityPolicy()
    {
        return (!$this->pilotUserCallingLineIdentityPolicy) ?: $this->pilotUserCallingLineIdentityPolicy->value();
    }

    public function setPilotUserChargeNumberPolicy($pilotUserChargeNumberPolicy = null)
    {
        $this->pilotUserChargeNumberPolicy = ($pilotUserChargeNumberPolicy InstanceOf TrunkGroupPilotUserChargeNumberUsagePolicy)
             ? $pilotUserChargeNumberPolicy
             : new TrunkGroupPilotUserChargeNumberUsagePolicy($pilotUserChargeNumberPolicy);
    }

    public function getPilotUserChargeNumberPolicy()
    {
        return (!$this->pilotUserChargeNumberPolicy) ?: $this->pilotUserChargeNumberPolicy->value();
    }

    public function setCallForwardingAlwaysAction($callForwardingAlwaysAction = null)
    {
        $this->callForwardingAlwaysAction = ($callForwardingAlwaysAction InstanceOf TrunkGroupCallForwardingAlwaysAction)
             ? $callForwardingAlwaysAction
             : new TrunkGroupCallForwardingAlwaysAction($callForwardingAlwaysAction);
    }

    public function getCallForwardingAlwaysAction()
    {
        return (!$this->callForwardingAlwaysAction) ?: $this->callForwardingAlwaysAction->value();
    }

    public function setCallForwardingAlwaysForwardAddress($callForwardingAlwaysForwardAddress = null)
    {
        $this->callForwardingAlwaysForwardAddress = ($callForwardingAlwaysForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $callForwardingAlwaysForwardAddress
             : new OutgoingDNorSIPURI($callForwardingAlwaysForwardAddress);
    }

    public function getCallForwardingAlwaysForwardAddress()
    {
        return (!$this->callForwardingAlwaysForwardAddress) ?: $this->callForwardingAlwaysForwardAddress->value();
    }

    public function setCallForwardingAlwaysRerouteTrunkGroupKey(TrunkGroupKey $callForwardingAlwaysRerouteTrunkGroupKey = null)
    {
    }

    public function getCallForwardingAlwaysRerouteTrunkGroupKey()
    {
        return (!$this->callForwardingAlwaysRerouteTrunkGroupKey) ?: $this->callForwardingAlwaysRerouteTrunkGroupKey->value();
    }

    public function setPeeringDomain($peeringDomain = null)
    {
        $this->peeringDomain = ($peeringDomain InstanceOf DomainName)
             ? $peeringDomain
             : new DomainName($peeringDomain);
    }

    public function getPeeringDomain()
    {
        return (!$this->peeringDomain) ?: $this->peeringDomain->value();
    }

    public function setRouteToPeeringDomain(xs:boolean $routeToPeeringDomain = null)
    {
    }

    public function getRouteToPeeringDomain()
    {
        return (!$this->routeToPeeringDomain) ?: $this->routeToPeeringDomain->value();
    }

    public function setPrefixEnabled(xs:boolean $prefixEnabled = null)
    {
    }

    public function getPrefixEnabled()
    {
        return (!$this->prefixEnabled) ?: $this->prefixEnabled->value();
    }

    public function setPrefix($prefix = null)
    {
        $this->prefix = ($prefix InstanceOf TrunkGroupPrefix)
             ? $prefix
             : new TrunkGroupPrefix($prefix);
    }

    public function getPrefix()
    {
        return (!$this->prefix) ?: $this->prefix->value();
    }

    public function setStatefulReroutingEnabled(xs:boolean $statefulReroutingEnabled = null)
    {
    }

    public function getStatefulReroutingEnabled()
    {
        return (!$this->statefulReroutingEnabled) ?: $this->statefulReroutingEnabled->value();
    }

    public function setSendContinuousOptionsMessage(xs:boolean $sendContinuousOptionsMessage = null)
    {
    }

    public function getSendContinuousOptionsMessage()
    {
        return (!$this->sendContinuousOptionsMessage) ?: $this->sendContinuousOptionsMessage->value();
    }

    public function setContinuousOptionsSendingIntervalSeconds($continuousOptionsSendingIntervalSeconds = null)
    {
        $this->continuousOptionsSendingIntervalSeconds = ($continuousOptionsSendingIntervalSeconds InstanceOf TrunkGroupContinuousOptionsSendingIntervalSeconds)
             ? $continuousOptionsSendingIntervalSeconds
             : new TrunkGroupContinuousOptionsSendingIntervalSeconds($continuousOptionsSendingIntervalSeconds);
    }

    public function getContinuousOptionsSendingIntervalSeconds()
    {
        return (!$this->continuousOptionsSendingIntervalSeconds) ?: $this->continuousOptionsSendingIntervalSeconds->value();
    }

    public function setFailureOptionsSendingIntervalSeconds($failureOptionsSendingIntervalSeconds = null)
    {
        $this->failureOptionsSendingIntervalSeconds = ($failureOptionsSendingIntervalSeconds InstanceOf TrunkGroupFailureOptionsSendingIntervalSeconds)
             ? $failureOptionsSendingIntervalSeconds
             : new TrunkGroupFailureOptionsSendingIntervalSeconds($failureOptionsSendingIntervalSeconds);
    }

    public function getFailureOptionsSendingIntervalSeconds()
    {
        return (!$this->failureOptionsSendingIntervalSeconds) ?: $this->failureOptionsSendingIntervalSeconds->value();
    }

    public function setFailureThresholdCounter($failureThresholdCounter = null)
    {
        $this->failureThresholdCounter = ($failureThresholdCounter InstanceOf TrunkGroupThresholdCounter)
             ? $failureThresholdCounter
             : new TrunkGroupThresholdCounter($failureThresholdCounter);
    }

    public function getFailureThresholdCounter()
    {
        return (!$this->failureThresholdCounter) ?: $this->failureThresholdCounter->value();
    }

    public function setSuccessThresholdCounter($successThresholdCounter = null)
    {
        $this->successThresholdCounter = ($successThresholdCounter InstanceOf TrunkGroupThresholdCounter)
             ? $successThresholdCounter
             : new TrunkGroupThresholdCounter($successThresholdCounter);
    }

    public function getSuccessThresholdCounter()
    {
        return (!$this->successThresholdCounter) ?: $this->successThresholdCounter->value();
    }

    public function setInviteFailureThresholdCounter($inviteFailureThresholdCounter = null)
    {
        $this->inviteFailureThresholdCounter = ($inviteFailureThresholdCounter InstanceOf TrunkGroupThresholdCounter)
             ? $inviteFailureThresholdCounter
             : new TrunkGroupThresholdCounter($inviteFailureThresholdCounter);
    }

    public function getInviteFailureThresholdCounter()
    {
        return (!$this->inviteFailureThresholdCounter) ?: $this->inviteFailureThresholdCounter->value();
    }

    public function setInviteFailureThresholdWindowSeconds($inviteFailureThresholdWindowSeconds = null)
    {
        $this->inviteFailureThresholdWindowSeconds = ($inviteFailureThresholdWindowSeconds InstanceOf TrunkGroupFailureThresholdWindowSeconds)
             ? $inviteFailureThresholdWindowSeconds
             : new TrunkGroupFailureThresholdWindowSeconds($inviteFailureThresholdWindowSeconds);
    }

    public function getInviteFailureThresholdWindowSeconds()
    {
        return (!$this->inviteFailureThresholdWindowSeconds) ?: $this->inviteFailureThresholdWindowSeconds->value();
    }

    public function setPilotUserCallingLineAssertedIdentityPolicy($pilotUserCallingLineAssertedIdentityPolicy = null)
    {
        $this->pilotUserCallingLineAssertedIdentityPolicy = ($pilotUserCallingLineAssertedIdentityPolicy InstanceOf TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy)
             ? $pilotUserCallingLineAssertedIdentityPolicy
             : new TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy($pilotUserCallingLineAssertedIdentityPolicy);
    }

    public function getPilotUserCallingLineAssertedIdentityPolicy()
    {
        return (!$this->pilotUserCallingLineAssertedIdentityPolicy) ?: $this->pilotUserCallingLineAssertedIdentityPolicy->value();
    }

    public function setUseSystemCallingLineAssertedIdentityPolicy(xs:boolean $useSystemCallingLineAssertedIdentityPolicy = null)
    {
    }

    public function getUseSystemCallingLineAssertedIdentityPolicy()
    {
        return (!$this->useSystemCallingLineAssertedIdentityPolicy) ?: $this->useSystemCallingLineAssertedIdentityPolicy->value();
    }
}
