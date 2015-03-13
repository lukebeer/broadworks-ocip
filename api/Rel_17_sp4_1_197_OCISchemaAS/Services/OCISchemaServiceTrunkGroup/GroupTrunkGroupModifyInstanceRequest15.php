<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPilotUserCallingLineIdentityUsagePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupContinuousOptionsSendingIntervalSeconds;
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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Modify a Trunk Group Instance in a group.
 *         The access device cannot be modified or cleared if there are any users assigned to the Trunk Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupModifyInstanceRequest15 extends ComplexType implements ComplexInterface
{
    public    $name                                       = 'GroupTrunkGroupModifyInstanceRequest15';
    protected $trunkGroupKey                              = null;
    protected $newName                                    = null;
    protected $pilotUserId                                = null;
    protected $department                                 = null;
    protected $accessDevice                               = null;
    protected $maxActiveCalls                             = null;
    protected $maxIncomingCalls                           = null;
    protected $maxOutgoingCalls                           = null;
    protected $enableBursting                             = null;
    protected $burstingMaxActiveCalls                     = null;
    protected $burstingMaxIncomingCalls                   = null;
    protected $burstingMaxOutgoingCalls                   = null;
    protected $capacityExceededAction                     = null;
    protected $capacityExceededForwardAddress             = null;
    protected $capacityExceededRerouteTrunkGroupKey       = null;
    protected $capacityExceededTrapInitialCalls           = null;
    protected $capacityExceededTrapOffsetCalls            = null;
    protected $unreachableDestinationAction               = null;
    protected $unreachableDestinationForwardAddress       = null;
    protected $unreachableDestinationRerouteTrunkGroupKey = null;
    protected $invitationTimeout                          = null;
    protected $requireAuthentication                      = null;
    protected $sipAuthenticationUserName                  = null;
    protected $sipAuthenticationPassword                  = null;
    protected $hostedUserIdList                           = null;
    protected $trunkGroupIdentity                         = null;
    protected $otgDtgIdentity                             = null;
    protected $allowTerminationToTrunkGroupIdentity       = null;
    protected $allowTerminationToDtgIdentity              = null;
    protected $includeTrunkGroupIdentity                  = null;
    protected $includeDtgIdentity                         = null;
    protected $includeTrunkGroupIdentityForNetworkCalls   = null;
    protected $includeOtgIdentityForNetworkCalls          = null;
    protected $enableNetworkAddressIdentity               = null;
    protected $allowUnscreenedCalls                       = null;
    protected $allowUnscreenedEmergencyCalls              = null;
    protected $pilotUserCallingLineIdentityPolicy         = null;
    protected $pilotUserChargeNumberPolicy                = null;
    protected $callForwardingAlwaysAction                 = null;
    protected $callForwardingAlwaysForwardAddress         = null;
    protected $callForwardingAlwaysRerouteTrunkGroupKey   = null;
    protected $peeringDomain                              = null;
    protected $routeToPeeringDomain                       = null;
    protected $prefixEnabled                              = null;
    protected $prefix                                     = null;
    protected $statefulReroutingEnabled                   = null;
    protected $sendContinuousOptionsMessage               = null;
    protected $continuousOptionsSendingIntervalSeconds    = null;
    protected $failureOptionsSendingIntervalSeconds       = null;
    protected $failureThresholdCounter                    = null;
    protected $successThresholdCounter                    = null;
    protected $inviteFailureThresholdCounter              = null;
    protected $inviteFailureThresholdWindowSeconds        = null;
    protected $pilotUserCallingLineAssertedIdentityPolicy = null;
    protected $useSystemCallingLineAssertedIdentityPolicy = null;

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

    /**
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setTrunkGroupKey(TrunkGroupKey $trunkGroupKey = null)
    {
        if (!$trunkGroupKey) return $this;
        $this->trunkGroupKey = $trunkGroupKey;
        $this->trunkGroupKey->setName('trunkGroupKey');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupKey $trunkGroupKey
     */
    public function getTrunkGroupKey()
    {
        return $this->trunkGroupKey;
    }

    /**
     * 
     */
    public function setNewName($newName = null)
    {
        if (!$newName) return $this;
        $this->newName = ($newName InstanceOf TrunkGroupName)
             ? $newName
             : new TrunkGroupName($newName);
        $this->newName->setName('newName');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupName $newName
     */
    public function getNewName()
    {
        return $this->newName->getValue();
    }

    /**
     * 
     */
    public function setPilotUserId($pilotUserId = null)
    {
        if (!$pilotUserId) return $this;
        $this->pilotUserId = ($pilotUserId InstanceOf UserId)
             ? $pilotUserId
             : new UserId($pilotUserId);
        $this->pilotUserId->setName('pilotUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $pilotUserId
     */
    public function getPilotUserId()
    {
        return $this->pilotUserId->getValue();
    }

    /**
     * 
     */
    public function setDepartment(DepartmentKey $department = null)
    {
        if (!$department) return $this;
        $this->department = $department;
        $this->department->setName('department');
        return $this;
    }

    /**
     * 
     * @return DepartmentKey $department
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * 
     */
    public function setAccessDevice(AccessDevice $accessDevice = null)
    {
        if (!$accessDevice) return $this;
        $this->accessDevice = $accessDevice;
        $this->accessDevice->setName('accessDevice');
        return $this;
    }

    /**
     * 
     * @return AccessDevice $accessDevice
     */
    public function getAccessDevice()
    {
        return $this->accessDevice;
    }

    /**
     * 
     */
    public function setMaxActiveCalls($maxActiveCalls = null)
    {
        if (!$maxActiveCalls) return $this;
        $this->maxActiveCalls = ($maxActiveCalls InstanceOf MaxActiveCalls)
             ? $maxActiveCalls
             : new MaxActiveCalls($maxActiveCalls);
        $this->maxActiveCalls->setName('maxActiveCalls');
        return $this;
    }

    /**
     * 
     * @return MaxActiveCalls $maxActiveCalls
     */
    public function getMaxActiveCalls()
    {
        return $this->maxActiveCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxIncomingCalls($maxIncomingCalls = null)
    {
        if (!$maxIncomingCalls) return $this;
        $this->maxIncomingCalls = ($maxIncomingCalls InstanceOf MaxIncomingCalls)
             ? $maxIncomingCalls
             : new MaxIncomingCalls($maxIncomingCalls);
        $this->maxIncomingCalls->setName('maxIncomingCalls');
        return $this;
    }

    /**
     * 
     * @return MaxIncomingCalls $maxIncomingCalls
     */
    public function getMaxIncomingCalls()
    {
        return $this->maxIncomingCalls->getValue();
    }

    /**
     * 
     */
    public function setMaxOutgoingCalls($maxOutgoingCalls = null)
    {
        if (!$maxOutgoingCalls) return $this;
        $this->maxOutgoingCalls = ($maxOutgoingCalls InstanceOf MaxOutgoingCalls)
             ? $maxOutgoingCalls
             : new MaxOutgoingCalls($maxOutgoingCalls);
        $this->maxOutgoingCalls->setName('maxOutgoingCalls');
        return $this;
    }

    /**
     * 
     * @return MaxOutgoingCalls $maxOutgoingCalls
     */
    public function getMaxOutgoingCalls()
    {
        return $this->maxOutgoingCalls->getValue();
    }

    /**
     * 
     */
    public function setEnableBursting($enableBursting = null)
    {
        if (!$enableBursting) return $this;
        $this->enableBursting = new PrimitiveType($enableBursting);
        $this->enableBursting->setName('enableBursting');
        return $this;
    }

    /**
     * 
     * @return boolean $enableBursting
     */
    public function getEnableBursting()
    {
        return $this->enableBursting->getValue();
    }

    /**
     * 
     */
    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls = null)
    {
        if (!$burstingMaxActiveCalls) return $this;
        $this->burstingMaxActiveCalls = ($burstingMaxActiveCalls InstanceOf BurstingMaxActiveCalls)
             ? $burstingMaxActiveCalls
             : new BurstingMaxActiveCalls($burstingMaxActiveCalls);
        $this->burstingMaxActiveCalls->setName('burstingMaxActiveCalls');
        return $this;
    }

    /**
     * 
     * @return BurstingMaxActiveCalls $burstingMaxActiveCalls
     */
    public function getBurstingMaxActiveCalls()
    {
        return $this->burstingMaxActiveCalls->getValue();
    }

    /**
     * 
     */
    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls = null)
    {
        if (!$burstingMaxIncomingCalls) return $this;
        $this->burstingMaxIncomingCalls = ($burstingMaxIncomingCalls InstanceOf BurstingMaxIncomingCalls)
             ? $burstingMaxIncomingCalls
             : new BurstingMaxIncomingCalls($burstingMaxIncomingCalls);
        $this->burstingMaxIncomingCalls->setName('burstingMaxIncomingCalls');
        return $this;
    }

    /**
     * 
     * @return BurstingMaxIncomingCalls $burstingMaxIncomingCalls
     */
    public function getBurstingMaxIncomingCalls()
    {
        return $this->burstingMaxIncomingCalls->getValue();
    }

    /**
     * 
     */
    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls = null)
    {
        if (!$burstingMaxOutgoingCalls) return $this;
        $this->burstingMaxOutgoingCalls = ($burstingMaxOutgoingCalls InstanceOf BurstingMaxOutgoingCalls)
             ? $burstingMaxOutgoingCalls
             : new BurstingMaxOutgoingCalls($burstingMaxOutgoingCalls);
        $this->burstingMaxOutgoingCalls->setName('burstingMaxOutgoingCalls');
        return $this;
    }

    /**
     * 
     * @return BurstingMaxOutgoingCalls $burstingMaxOutgoingCalls
     */
    public function getBurstingMaxOutgoingCalls()
    {
        return $this->burstingMaxOutgoingCalls->getValue();
    }

    /**
     * 
     */
    public function setCapacityExceededAction($capacityExceededAction = null)
    {
        if (!$capacityExceededAction) return $this;
        $this->capacityExceededAction = ($capacityExceededAction InstanceOf TrunkGroupCapacityExceededAction)
             ? $capacityExceededAction
             : new TrunkGroupCapacityExceededAction($capacityExceededAction);
        $this->capacityExceededAction->setName('capacityExceededAction');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupCapacityExceededAction $capacityExceededAction
     */
    public function getCapacityExceededAction()
    {
        return $this->capacityExceededAction->getValue();
    }

    /**
     * 
     */
    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress = null)
    {
        if (!$capacityExceededForwardAddress) return $this;
        $this->capacityExceededForwardAddress = ($capacityExceededForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $capacityExceededForwardAddress
             : new OutgoingDNorSIPURI($capacityExceededForwardAddress);
        $this->capacityExceededForwardAddress->setName('capacityExceededForwardAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $capacityExceededForwardAddress
     */
    public function getCapacityExceededForwardAddress()
    {
        return $this->capacityExceededForwardAddress->getValue();
    }

    /**
     * 
     */
    public function setCapacityExceededRerouteTrunkGroupKey(TrunkGroupKey $capacityExceededRerouteTrunkGroupKey = null)
    {
        if (!$capacityExceededRerouteTrunkGroupKey) return $this;
        $this->capacityExceededRerouteTrunkGroupKey = $capacityExceededRerouteTrunkGroupKey;
        $this->capacityExceededRerouteTrunkGroupKey->setName('capacityExceededRerouteTrunkGroupKey');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupKey $capacityExceededRerouteTrunkGroupKey
     */
    public function getCapacityExceededRerouteTrunkGroupKey()
    {
        return $this->capacityExceededRerouteTrunkGroupKey;
    }

    /**
     * 
     */
    public function setCapacityExceededTrapInitialCalls($capacityExceededTrapInitialCalls = null)
    {
        if (!$capacityExceededTrapInitialCalls) return $this;
        $this->capacityExceededTrapInitialCalls = ($capacityExceededTrapInitialCalls InstanceOf TrapInitialThreshold)
             ? $capacityExceededTrapInitialCalls
             : new TrapInitialThreshold($capacityExceededTrapInitialCalls);
        $this->capacityExceededTrapInitialCalls->setName('capacityExceededTrapInitialCalls');
        return $this;
    }

    /**
     * 
     * @return TrapInitialThreshold $capacityExceededTrapInitialCalls
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return $this->capacityExceededTrapInitialCalls->getValue();
    }

    /**
     * 
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls = null)
    {
        if (!$capacityExceededTrapOffsetCalls) return $this;
        $this->capacityExceededTrapOffsetCalls = ($capacityExceededTrapOffsetCalls InstanceOf TrapOffsetThreshold)
             ? $capacityExceededTrapOffsetCalls
             : new TrapOffsetThreshold($capacityExceededTrapOffsetCalls);
        $this->capacityExceededTrapOffsetCalls->setName('capacityExceededTrapOffsetCalls');
        return $this;
    }

    /**
     * 
     * @return TrapOffsetThreshold $capacityExceededTrapOffsetCalls
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return $this->capacityExceededTrapOffsetCalls->getValue();
    }

    /**
     * 
     */
    public function setUnreachableDestinationAction($unreachableDestinationAction = null)
    {
        if (!$unreachableDestinationAction) return $this;
        $this->unreachableDestinationAction = ($unreachableDestinationAction InstanceOf TrunkGroupUnreachableDestinationAction)
             ? $unreachableDestinationAction
             : new TrunkGroupUnreachableDestinationAction($unreachableDestinationAction);
        $this->unreachableDestinationAction->setName('unreachableDestinationAction');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUnreachableDestinationAction $unreachableDestinationAction
     */
    public function getUnreachableDestinationAction()
    {
        return $this->unreachableDestinationAction->getValue();
    }

    /**
     * 
     */
    public function setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress = null)
    {
        if (!$unreachableDestinationForwardAddress) return $this;
        $this->unreachableDestinationForwardAddress = ($unreachableDestinationForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $unreachableDestinationForwardAddress
             : new OutgoingDNorSIPURI($unreachableDestinationForwardAddress);
        $this->unreachableDestinationForwardAddress->setName('unreachableDestinationForwardAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $unreachableDestinationForwardAddress
     */
    public function getUnreachableDestinationForwardAddress()
    {
        return $this->unreachableDestinationForwardAddress->getValue();
    }

    /**
     * 
     */
    public function setUnreachableDestinationRerouteTrunkGroupKey(TrunkGroupKey $unreachableDestinationRerouteTrunkGroupKey = null)
    {
        if (!$unreachableDestinationRerouteTrunkGroupKey) return $this;
        $this->unreachableDestinationRerouteTrunkGroupKey = $unreachableDestinationRerouteTrunkGroupKey;
        $this->unreachableDestinationRerouteTrunkGroupKey->setName('unreachableDestinationRerouteTrunkGroupKey');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupKey $unreachableDestinationRerouteTrunkGroupKey
     */
    public function getUnreachableDestinationRerouteTrunkGroupKey()
    {
        return $this->unreachableDestinationRerouteTrunkGroupKey;
    }

    /**
     * 
     */
    public function setInvitationTimeout($invitationTimeout = null)
    {
        if (!$invitationTimeout) return $this;
        $this->invitationTimeout = ($invitationTimeout InstanceOf TrunkGroupInvitationTimeoutSeconds)
             ? $invitationTimeout
             : new TrunkGroupInvitationTimeoutSeconds($invitationTimeout);
        $this->invitationTimeout->setName('invitationTimeout');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupInvitationTimeoutSeconds $invitationTimeout
     */
    public function getInvitationTimeout()
    {
        return $this->invitationTimeout->getValue();
    }

    /**
     * 
     */
    public function setRequireAuthentication($requireAuthentication = null)
    {
        if (!$requireAuthentication) return $this;
        $this->requireAuthentication = new PrimitiveType($requireAuthentication);
        $this->requireAuthentication->setName('requireAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $requireAuthentication
     */
    public function getRequireAuthentication()
    {
        return $this->requireAuthentication->getValue();
    }

    /**
     * 
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName = null)
    {
        if (!$sipAuthenticationUserName) return $this;
        $this->sipAuthenticationUserName = ($sipAuthenticationUserName InstanceOf SIPAuthenticationUserName)
             ? $sipAuthenticationUserName
             : new SIPAuthenticationUserName($sipAuthenticationUserName);
        $this->sipAuthenticationUserName->setName('sipAuthenticationUserName');
        return $this;
    }

    /**
     * 
     * @return SIPAuthenticationUserName $sipAuthenticationUserName
     */
    public function getSipAuthenticationUserName()
    {
        return $this->sipAuthenticationUserName->getValue();
    }

    /**
     * 
     */
    public function setSipAuthenticationPassword($sipAuthenticationPassword = null)
    {
        if (!$sipAuthenticationPassword) return $this;
        $this->sipAuthenticationPassword = ($sipAuthenticationPassword InstanceOf Password)
             ? $sipAuthenticationPassword
             : new Password($sipAuthenticationPassword);
        $this->sipAuthenticationPassword->setName('sipAuthenticationPassword');
        return $this;
    }

    /**
     * 
     * @return Password $sipAuthenticationPassword
     */
    public function getSipAuthenticationPassword()
    {
        return $this->sipAuthenticationPassword->getValue();
    }

    /**
     * 
     */
    public function setHostedUserIdList(ReplacementUserIdList $hostedUserIdList = null)
    {
        if (!$hostedUserIdList) return $this;
        $this->hostedUserIdList = $hostedUserIdList;
        $this->hostedUserIdList->setName('hostedUserIdList');
        return $this;
    }

    /**
     * 
     * @return ReplacementUserIdList $hostedUserIdList
     */
    public function getHostedUserIdList()
    {
        return $this->hostedUserIdList;
    }

    /**
     * 
     */
    public function setTrunkGroupIdentity($trunkGroupIdentity = null)
    {
        if (!$trunkGroupIdentity) return $this;
        $this->trunkGroupIdentity = ($trunkGroupIdentity InstanceOf SIPURI)
             ? $trunkGroupIdentity
             : new SIPURI($trunkGroupIdentity);
        $this->trunkGroupIdentity->setName('trunkGroupIdentity');
        return $this;
    }

    /**
     * 
     * @return SIPURI $trunkGroupIdentity
     */
    public function getTrunkGroupIdentity()
    {
        return $this->trunkGroupIdentity->getValue();
    }

    /**
     * 
     */
    public function setOtgDtgIdentity($otgDtgIdentity = null)
    {
        if (!$otgDtgIdentity) return $this;
        $this->otgDtgIdentity = ($otgDtgIdentity InstanceOf OtgDtgIdentity)
             ? $otgDtgIdentity
             : new OtgDtgIdentity($otgDtgIdentity);
        $this->otgDtgIdentity->setName('otgDtgIdentity');
        return $this;
    }

    /**
     * 
     * @return OtgDtgIdentity $otgDtgIdentity
     */
    public function getOtgDtgIdentity()
    {
        return $this->otgDtgIdentity->getValue();
    }

    /**
     * 
     */
    public function setAllowTerminationToTrunkGroupIdentity($allowTerminationToTrunkGroupIdentity = null)
    {
        if (!$allowTerminationToTrunkGroupIdentity) return $this;
        $this->allowTerminationToTrunkGroupIdentity = new PrimitiveType($allowTerminationToTrunkGroupIdentity);
        $this->allowTerminationToTrunkGroupIdentity->setName('allowTerminationToTrunkGroupIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $allowTerminationToTrunkGroupIdentity
     */
    public function getAllowTerminationToTrunkGroupIdentity()
    {
        return $this->allowTerminationToTrunkGroupIdentity->getValue();
    }

    /**
     * 
     */
    public function setAllowTerminationToDtgIdentity($allowTerminationToDtgIdentity = null)
    {
        if (!$allowTerminationToDtgIdentity) return $this;
        $this->allowTerminationToDtgIdentity = new PrimitiveType($allowTerminationToDtgIdentity);
        $this->allowTerminationToDtgIdentity->setName('allowTerminationToDtgIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $allowTerminationToDtgIdentity
     */
    public function getAllowTerminationToDtgIdentity()
    {
        return $this->allowTerminationToDtgIdentity->getValue();
    }

    /**
     * 
     */
    public function setIncludeTrunkGroupIdentity($includeTrunkGroupIdentity = null)
    {
        if (!$includeTrunkGroupIdentity) return $this;
        $this->includeTrunkGroupIdentity = new PrimitiveType($includeTrunkGroupIdentity);
        $this->includeTrunkGroupIdentity->setName('includeTrunkGroupIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $includeTrunkGroupIdentity
     */
    public function getIncludeTrunkGroupIdentity()
    {
        return $this->includeTrunkGroupIdentity->getValue();
    }

    /**
     * 
     */
    public function setIncludeDtgIdentity($includeDtgIdentity = null)
    {
        if (!$includeDtgIdentity) return $this;
        $this->includeDtgIdentity = new PrimitiveType($includeDtgIdentity);
        $this->includeDtgIdentity->setName('includeDtgIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $includeDtgIdentity
     */
    public function getIncludeDtgIdentity()
    {
        return $this->includeDtgIdentity->getValue();
    }

    /**
     * 
     */
    public function setIncludeTrunkGroupIdentityForNetworkCalls($includeTrunkGroupIdentityForNetworkCalls = null)
    {
        if (!$includeTrunkGroupIdentityForNetworkCalls) return $this;
        $this->includeTrunkGroupIdentityForNetworkCalls = new PrimitiveType($includeTrunkGroupIdentityForNetworkCalls);
        $this->includeTrunkGroupIdentityForNetworkCalls->setName('includeTrunkGroupIdentityForNetworkCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $includeTrunkGroupIdentityForNetworkCalls
     */
    public function getIncludeTrunkGroupIdentityForNetworkCalls()
    {
        return $this->includeTrunkGroupIdentityForNetworkCalls->getValue();
    }

    /**
     * 
     */
    public function setIncludeOtgIdentityForNetworkCalls($includeOtgIdentityForNetworkCalls = null)
    {
        if (!$includeOtgIdentityForNetworkCalls) return $this;
        $this->includeOtgIdentityForNetworkCalls = new PrimitiveType($includeOtgIdentityForNetworkCalls);
        $this->includeOtgIdentityForNetworkCalls->setName('includeOtgIdentityForNetworkCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $includeOtgIdentityForNetworkCalls
     */
    public function getIncludeOtgIdentityForNetworkCalls()
    {
        return $this->includeOtgIdentityForNetworkCalls->getValue();
    }

    /**
     * 
     */
    public function setEnableNetworkAddressIdentity($enableNetworkAddressIdentity = null)
    {
        if (!$enableNetworkAddressIdentity) return $this;
        $this->enableNetworkAddressIdentity = new PrimitiveType($enableNetworkAddressIdentity);
        $this->enableNetworkAddressIdentity->setName('enableNetworkAddressIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $enableNetworkAddressIdentity
     */
    public function getEnableNetworkAddressIdentity()
    {
        return $this->enableNetworkAddressIdentity->getValue();
    }

    /**
     * 
     */
    public function setAllowUnscreenedCalls($allowUnscreenedCalls = null)
    {
        if (!$allowUnscreenedCalls) return $this;
        $this->allowUnscreenedCalls = new PrimitiveType($allowUnscreenedCalls);
        $this->allowUnscreenedCalls->setName('allowUnscreenedCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUnscreenedCalls
     */
    public function getAllowUnscreenedCalls()
    {
        return $this->allowUnscreenedCalls->getValue();
    }

    /**
     * 
     */
    public function setAllowUnscreenedEmergencyCalls($allowUnscreenedEmergencyCalls = null)
    {
        if (!$allowUnscreenedEmergencyCalls) return $this;
        $this->allowUnscreenedEmergencyCalls = new PrimitiveType($allowUnscreenedEmergencyCalls);
        $this->allowUnscreenedEmergencyCalls->setName('allowUnscreenedEmergencyCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUnscreenedEmergencyCalls
     */
    public function getAllowUnscreenedEmergencyCalls()
    {
        return $this->allowUnscreenedEmergencyCalls->getValue();
    }

    /**
     * 
     */
    public function setPilotUserCallingLineIdentityPolicy($pilotUserCallingLineIdentityPolicy = null)
    {
        if (!$pilotUserCallingLineIdentityPolicy) return $this;
        $this->pilotUserCallingLineIdentityPolicy = ($pilotUserCallingLineIdentityPolicy InstanceOf TrunkGroupPilotUserCallingLineIdentityUsagePolicy)
             ? $pilotUserCallingLineIdentityPolicy
             : new TrunkGroupPilotUserCallingLineIdentityUsagePolicy($pilotUserCallingLineIdentityPolicy);
        $this->pilotUserCallingLineIdentityPolicy->setName('pilotUserCallingLineIdentityPolicy');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupPilotUserCallingLineIdentityUsagePolicy $pilotUserCallingLineIdentityPolicy
     */
    public function getPilotUserCallingLineIdentityPolicy()
    {
        return $this->pilotUserCallingLineIdentityPolicy->getValue();
    }

    /**
     * 
     */
    public function setPilotUserChargeNumberPolicy($pilotUserChargeNumberPolicy = null)
    {
        if (!$pilotUserChargeNumberPolicy) return $this;
        $this->pilotUserChargeNumberPolicy = ($pilotUserChargeNumberPolicy InstanceOf TrunkGroupPilotUserChargeNumberUsagePolicy)
             ? $pilotUserChargeNumberPolicy
             : new TrunkGroupPilotUserChargeNumberUsagePolicy($pilotUserChargeNumberPolicy);
        $this->pilotUserChargeNumberPolicy->setName('pilotUserChargeNumberPolicy');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupPilotUserChargeNumberUsagePolicy $pilotUserChargeNumberPolicy
     */
    public function getPilotUserChargeNumberPolicy()
    {
        return $this->pilotUserChargeNumberPolicy->getValue();
    }

    /**
     * 
     */
    public function setCallForwardingAlwaysAction($callForwardingAlwaysAction = null)
    {
        if (!$callForwardingAlwaysAction) return $this;
        $this->callForwardingAlwaysAction = ($callForwardingAlwaysAction InstanceOf TrunkGroupCallForwardingAlwaysAction)
             ? $callForwardingAlwaysAction
             : new TrunkGroupCallForwardingAlwaysAction($callForwardingAlwaysAction);
        $this->callForwardingAlwaysAction->setName('callForwardingAlwaysAction');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupCallForwardingAlwaysAction $callForwardingAlwaysAction
     */
    public function getCallForwardingAlwaysAction()
    {
        return $this->callForwardingAlwaysAction->getValue();
    }

    /**
     * 
     */
    public function setCallForwardingAlwaysForwardAddress($callForwardingAlwaysForwardAddress = null)
    {
        if (!$callForwardingAlwaysForwardAddress) return $this;
        $this->callForwardingAlwaysForwardAddress = ($callForwardingAlwaysForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $callForwardingAlwaysForwardAddress
             : new OutgoingDNorSIPURI($callForwardingAlwaysForwardAddress);
        $this->callForwardingAlwaysForwardAddress->setName('callForwardingAlwaysForwardAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $callForwardingAlwaysForwardAddress
     */
    public function getCallForwardingAlwaysForwardAddress()
    {
        return $this->callForwardingAlwaysForwardAddress->getValue();
    }

    /**
     * 
     */
    public function setCallForwardingAlwaysRerouteTrunkGroupKey(TrunkGroupKey $callForwardingAlwaysRerouteTrunkGroupKey = null)
    {
        if (!$callForwardingAlwaysRerouteTrunkGroupKey) return $this;
        $this->callForwardingAlwaysRerouteTrunkGroupKey = $callForwardingAlwaysRerouteTrunkGroupKey;
        $this->callForwardingAlwaysRerouteTrunkGroupKey->setName('callForwardingAlwaysRerouteTrunkGroupKey');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupKey $callForwardingAlwaysRerouteTrunkGroupKey
     */
    public function getCallForwardingAlwaysRerouteTrunkGroupKey()
    {
        return $this->callForwardingAlwaysRerouteTrunkGroupKey;
    }

    /**
     * 
     */
    public function setPeeringDomain($peeringDomain = null)
    {
        if (!$peeringDomain) return $this;
        $this->peeringDomain = ($peeringDomain InstanceOf DomainName)
             ? $peeringDomain
             : new DomainName($peeringDomain);
        $this->peeringDomain->setName('peeringDomain');
        return $this;
    }

    /**
     * 
     * @return DomainName $peeringDomain
     */
    public function getPeeringDomain()
    {
        return $this->peeringDomain->getValue();
    }

    /**
     * 
     */
    public function setRouteToPeeringDomain($routeToPeeringDomain = null)
    {
        if (!$routeToPeeringDomain) return $this;
        $this->routeToPeeringDomain = new PrimitiveType($routeToPeeringDomain);
        $this->routeToPeeringDomain->setName('routeToPeeringDomain');
        return $this;
    }

    /**
     * 
     * @return boolean $routeToPeeringDomain
     */
    public function getRouteToPeeringDomain()
    {
        return $this->routeToPeeringDomain->getValue();
    }

    /**
     * 
     */
    public function setPrefixEnabled($prefixEnabled = null)
    {
        if (!$prefixEnabled) return $this;
        $this->prefixEnabled = new PrimitiveType($prefixEnabled);
        $this->prefixEnabled->setName('prefixEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $prefixEnabled
     */
    public function getPrefixEnabled()
    {
        return $this->prefixEnabled->getValue();
    }

    /**
     * 
     */
    public function setPrefix($prefix = null)
    {
        if (!$prefix) return $this;
        $this->prefix = ($prefix InstanceOf TrunkGroupPrefix)
             ? $prefix
             : new TrunkGroupPrefix($prefix);
        $this->prefix->setName('prefix');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupPrefix $prefix
     */
    public function getPrefix()
    {
        return $this->prefix->getValue();
    }

    /**
     * 
     */
    public function setStatefulReroutingEnabled($statefulReroutingEnabled = null)
    {
        if (!$statefulReroutingEnabled) return $this;
        $this->statefulReroutingEnabled = new PrimitiveType($statefulReroutingEnabled);
        $this->statefulReroutingEnabled->setName('statefulReroutingEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $statefulReroutingEnabled
     */
    public function getStatefulReroutingEnabled()
    {
        return $this->statefulReroutingEnabled->getValue();
    }

    /**
     * 
     */
    public function setSendContinuousOptionsMessage($sendContinuousOptionsMessage = null)
    {
        if (!$sendContinuousOptionsMessage) return $this;
        $this->sendContinuousOptionsMessage = new PrimitiveType($sendContinuousOptionsMessage);
        $this->sendContinuousOptionsMessage->setName('sendContinuousOptionsMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $sendContinuousOptionsMessage
     */
    public function getSendContinuousOptionsMessage()
    {
        return $this->sendContinuousOptionsMessage->getValue();
    }

    /**
     * 
     */
    public function setContinuousOptionsSendingIntervalSeconds($continuousOptionsSendingIntervalSeconds = null)
    {
        if (!$continuousOptionsSendingIntervalSeconds) return $this;
        $this->continuousOptionsSendingIntervalSeconds = ($continuousOptionsSendingIntervalSeconds InstanceOf TrunkGroupContinuousOptionsSendingIntervalSeconds)
             ? $continuousOptionsSendingIntervalSeconds
             : new TrunkGroupContinuousOptionsSendingIntervalSeconds($continuousOptionsSendingIntervalSeconds);
        $this->continuousOptionsSendingIntervalSeconds->setName('continuousOptionsSendingIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupContinuousOptionsSendingIntervalSeconds $continuousOptionsSendingIntervalSeconds
     */
    public function getContinuousOptionsSendingIntervalSeconds()
    {
        return $this->continuousOptionsSendingIntervalSeconds->getValue();
    }

    /**
     * 
     */
    public function setFailureOptionsSendingIntervalSeconds($failureOptionsSendingIntervalSeconds = null)
    {
        if (!$failureOptionsSendingIntervalSeconds) return $this;
        $this->failureOptionsSendingIntervalSeconds = ($failureOptionsSendingIntervalSeconds InstanceOf TrunkGroupFailureOptionsSendingIntervalSeconds)
             ? $failureOptionsSendingIntervalSeconds
             : new TrunkGroupFailureOptionsSendingIntervalSeconds($failureOptionsSendingIntervalSeconds);
        $this->failureOptionsSendingIntervalSeconds->setName('failureOptionsSendingIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupFailureOptionsSendingIntervalSeconds $failureOptionsSendingIntervalSeconds
     */
    public function getFailureOptionsSendingIntervalSeconds()
    {
        return $this->failureOptionsSendingIntervalSeconds->getValue();
    }

    /**
     * 
     */
    public function setFailureThresholdCounter($failureThresholdCounter = null)
    {
        if (!$failureThresholdCounter) return $this;
        $this->failureThresholdCounter = ($failureThresholdCounter InstanceOf TrunkGroupThresholdCounter)
             ? $failureThresholdCounter
             : new TrunkGroupThresholdCounter($failureThresholdCounter);
        $this->failureThresholdCounter->setName('failureThresholdCounter');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupThresholdCounter $failureThresholdCounter
     */
    public function getFailureThresholdCounter()
    {
        return $this->failureThresholdCounter->getValue();
    }

    /**
     * 
     */
    public function setSuccessThresholdCounter($successThresholdCounter = null)
    {
        if (!$successThresholdCounter) return $this;
        $this->successThresholdCounter = ($successThresholdCounter InstanceOf TrunkGroupThresholdCounter)
             ? $successThresholdCounter
             : new TrunkGroupThresholdCounter($successThresholdCounter);
        $this->successThresholdCounter->setName('successThresholdCounter');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupThresholdCounter $successThresholdCounter
     */
    public function getSuccessThresholdCounter()
    {
        return $this->successThresholdCounter->getValue();
    }

    /**
     * 
     */
    public function setInviteFailureThresholdCounter($inviteFailureThresholdCounter = null)
    {
        if (!$inviteFailureThresholdCounter) return $this;
        $this->inviteFailureThresholdCounter = ($inviteFailureThresholdCounter InstanceOf TrunkGroupThresholdCounter)
             ? $inviteFailureThresholdCounter
             : new TrunkGroupThresholdCounter($inviteFailureThresholdCounter);
        $this->inviteFailureThresholdCounter->setName('inviteFailureThresholdCounter');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupThresholdCounter $inviteFailureThresholdCounter
     */
    public function getInviteFailureThresholdCounter()
    {
        return $this->inviteFailureThresholdCounter->getValue();
    }

    /**
     * 
     */
    public function setInviteFailureThresholdWindowSeconds($inviteFailureThresholdWindowSeconds = null)
    {
        if (!$inviteFailureThresholdWindowSeconds) return $this;
        $this->inviteFailureThresholdWindowSeconds = ($inviteFailureThresholdWindowSeconds InstanceOf TrunkGroupFailureThresholdWindowSeconds)
             ? $inviteFailureThresholdWindowSeconds
             : new TrunkGroupFailureThresholdWindowSeconds($inviteFailureThresholdWindowSeconds);
        $this->inviteFailureThresholdWindowSeconds->setName('inviteFailureThresholdWindowSeconds');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupFailureThresholdWindowSeconds $inviteFailureThresholdWindowSeconds
     */
    public function getInviteFailureThresholdWindowSeconds()
    {
        return $this->inviteFailureThresholdWindowSeconds->getValue();
    }

    /**
     * 
     */
    public function setPilotUserCallingLineAssertedIdentityPolicy($pilotUserCallingLineAssertedIdentityPolicy = null)
    {
        if (!$pilotUserCallingLineAssertedIdentityPolicy) return $this;
        $this->pilotUserCallingLineAssertedIdentityPolicy = ($pilotUserCallingLineAssertedIdentityPolicy InstanceOf TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy)
             ? $pilotUserCallingLineAssertedIdentityPolicy
             : new TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy($pilotUserCallingLineAssertedIdentityPolicy);
        $this->pilotUserCallingLineAssertedIdentityPolicy->setName('pilotUserCallingLineAssertedIdentityPolicy');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy $pilotUserCallingLineAssertedIdentityPolicy
     */
    public function getPilotUserCallingLineAssertedIdentityPolicy()
    {
        return $this->pilotUserCallingLineAssertedIdentityPolicy->getValue();
    }

    /**
     * 
     */
    public function setUseSystemCallingLineAssertedIdentityPolicy($useSystemCallingLineAssertedIdentityPolicy = null)
    {
        if (!$useSystemCallingLineAssertedIdentityPolicy) return $this;
        $this->useSystemCallingLineAssertedIdentityPolicy = new PrimitiveType($useSystemCallingLineAssertedIdentityPolicy);
        $this->useSystemCallingLineAssertedIdentityPolicy->setName('useSystemCallingLineAssertedIdentityPolicy');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemCallingLineAssertedIdentityPolicy
     */
    public function getUseSystemCallingLineAssertedIdentityPolicy()
    {
        return $this->useSystemCallingLineAssertedIdentityPolicy->getValue();
    }
}
