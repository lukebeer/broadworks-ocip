<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPilotUserCallingLineIdentityUsagePolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupContinuousOptionsSendingIntervalSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupFailureOptionsSendingIntervalSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPilotUserChargeNumberUsagePolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupFailureThresholdWindowSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUnreachableDestinationAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupCallForwardingAlwaysAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupThresholdCounter;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupInvitationTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPrefix;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCapacityExceededAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\OtgDtgIdentity;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxIncomingCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxOutgoingCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxActiveCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ReplacementUserIdList;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapInitialThreshold;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapOffsetThreshold;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DomainName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Password;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify a Trunk Group Instance in a group.
 *         The access device cannot be modified or cleared if there are any users assigned to the Trunk Group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupModifyInstanceRequest15 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupTrunkGroupModifyInstanceRequest15';
    protected $trunkGroupKey;
    protected $newName;
    protected $pilotUserId;
    protected $department;
    protected $accessDevice;
    protected $maxActiveCalls;
    protected $maxIncomingCalls;
    protected $maxOutgoingCalls;
    protected $enableBursting;
    protected $burstingMaxActiveCalls;
    protected $burstingMaxIncomingCalls;
    protected $burstingMaxOutgoingCalls;
    protected $capacityExceededAction;
    protected $capacityExceededForwardAddress;
    protected $capacityExceededRerouteTrunkGroupKey;
    protected $capacityExceededTrapInitialCalls;
    protected $capacityExceededTrapOffsetCalls;
    protected $unreachableDestinationAction;
    protected $unreachableDestinationForwardAddress;
    protected $unreachableDestinationRerouteTrunkGroupKey;
    protected $invitationTimeout;
    protected $requireAuthentication;
    protected $sipAuthenticationUserName;
    protected $sipAuthenticationPassword;
    protected $hostedUserIdList;
    protected $trunkGroupIdentity;
    protected $otgDtgIdentity;
    protected $allowTerminationToTrunkGroupIdentity;
    protected $allowTerminationToDtgIdentity;
    protected $includeTrunkGroupIdentity;
    protected $includeDtgIdentity;
    protected $includeTrunkGroupIdentityForNetworkCalls;
    protected $includeOtgIdentityForNetworkCalls;
    protected $enableNetworkAddressIdentity;
    protected $allowUnscreenedCalls;
    protected $allowUnscreenedEmergencyCalls;
    protected $pilotUserCallingLineIdentityPolicy;
    protected $pilotUserChargeNumberPolicy;
    protected $callForwardingAlwaysAction;
    protected $callForwardingAlwaysForwardAddress;
    protected $callForwardingAlwaysRerouteTrunkGroupKey;
    protected $peeringDomain;
    protected $routeToPeeringDomain;
    protected $prefixEnabled;
    protected $prefix;
    protected $statefulReroutingEnabled;
    protected $sendContinuousOptionsMessage;
    protected $continuousOptionsSendingIntervalSeconds;
    protected $failureOptionsSendingIntervalSeconds;
    protected $failureThresholdCounter;
    protected $successThresholdCounter;
    protected $inviteFailureThresholdCounter;
    protected $inviteFailureThresholdWindowSeconds;
    protected $pilotUserCallingLineAssertedIdentityPolicy;
    protected $useSystemCallingLineAssertedIdentityPolicy;

    public function __construct(
         $trunkGroupKey = '',
         $newName = null,
         $pilotUserId = null,
         $department = null,
         $accessDevice = null,
         $maxActiveCalls = null,
         $maxIncomingCalls = null,
         $maxOutgoingCalls = null,
         $enableBursting = null,
         $burstingMaxActiveCalls = null,
         $burstingMaxIncomingCalls = null,
         $burstingMaxOutgoingCalls = null,
         $capacityExceededAction = null,
         $capacityExceededForwardAddress = null,
         $capacityExceededRerouteTrunkGroupKey = null,
         $capacityExceededTrapInitialCalls = null,
         $capacityExceededTrapOffsetCalls = null,
         $unreachableDestinationAction = null,
         $unreachableDestinationForwardAddress = null,
         $unreachableDestinationRerouteTrunkGroupKey = null,
         $invitationTimeout = null,
         $requireAuthentication = null,
         $sipAuthenticationUserName = null,
         $sipAuthenticationPassword = null,
         $hostedUserIdList = null,
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
         $callForwardingAlwaysRerouteTrunkGroupKey = null,
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
        $this->trunkGroupKey = ($trunkGroupKey InstanceOf TrunkGroupKey)
             ? $trunkGroupKey
             : new TrunkGroupKey($trunkGroupKey);
        $this->trunkGroupKey->setElementName('trunkGroupKey');
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
        $this->newName = ($newName InstanceOf TrunkGroupName)
             ? $newName
             : new TrunkGroupName($newName);
        $this->newName->setElementName('newName');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupName $newName
     */
    public function getNewName()
    {
        return ($this->newName)
            ? $this->newName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPilotUserId($pilotUserId = null)
    {
        $this->pilotUserId = ($pilotUserId InstanceOf UserId)
             ? $pilotUserId
             : new UserId($pilotUserId);
        $this->pilotUserId->setElementName('pilotUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $pilotUserId
     */
    public function getPilotUserId()
    {
        return ($this->pilotUserId)
            ? $this->pilotUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDepartment(DepartmentKey $department = null)
    {
        $this->department = ($department InstanceOf DepartmentKey)
             ? $department
             : new DepartmentKey($department);
        $this->department->setElementName('department');
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
        $this->accessDevice = ($accessDevice InstanceOf AccessDevice)
             ? $accessDevice
             : new AccessDevice($accessDevice);
        $this->accessDevice->setElementName('accessDevice');
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
        $this->maxActiveCalls = ($maxActiveCalls InstanceOf MaxActiveCalls)
             ? $maxActiveCalls
             : new MaxActiveCalls($maxActiveCalls);
        $this->maxActiveCalls->setElementName('maxActiveCalls');
        return $this;
    }

    /**
     * 
     * @return MaxActiveCalls $maxActiveCalls
     */
    public function getMaxActiveCalls()
    {
        return ($this->maxActiveCalls)
            ? $this->maxActiveCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxIncomingCalls($maxIncomingCalls = null)
    {
        $this->maxIncomingCalls = ($maxIncomingCalls InstanceOf MaxIncomingCalls)
             ? $maxIncomingCalls
             : new MaxIncomingCalls($maxIncomingCalls);
        $this->maxIncomingCalls->setElementName('maxIncomingCalls');
        return $this;
    }

    /**
     * 
     * @return MaxIncomingCalls $maxIncomingCalls
     */
    public function getMaxIncomingCalls()
    {
        return ($this->maxIncomingCalls)
            ? $this->maxIncomingCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setMaxOutgoingCalls($maxOutgoingCalls = null)
    {
        $this->maxOutgoingCalls = ($maxOutgoingCalls InstanceOf MaxOutgoingCalls)
             ? $maxOutgoingCalls
             : new MaxOutgoingCalls($maxOutgoingCalls);
        $this->maxOutgoingCalls->setElementName('maxOutgoingCalls');
        return $this;
    }

    /**
     * 
     * @return MaxOutgoingCalls $maxOutgoingCalls
     */
    public function getMaxOutgoingCalls()
    {
        return ($this->maxOutgoingCalls)
            ? $this->maxOutgoingCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableBursting($enableBursting = null)
    {
        $this->enableBursting = new PrimitiveType($enableBursting);
        $this->enableBursting->setElementName('enableBursting');
        return $this;
    }

    /**
     * 
     * @return boolean $enableBursting
     */
    public function getEnableBursting()
    {
        return ($this->enableBursting)
            ? $this->enableBursting->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBurstingMaxActiveCalls($burstingMaxActiveCalls = null)
    {
        $this->burstingMaxActiveCalls = ($burstingMaxActiveCalls InstanceOf BurstingMaxActiveCalls)
             ? $burstingMaxActiveCalls
             : new BurstingMaxActiveCalls($burstingMaxActiveCalls);
        $this->burstingMaxActiveCalls->setElementName('burstingMaxActiveCalls');
        return $this;
    }

    /**
     * 
     * @return BurstingMaxActiveCalls $burstingMaxActiveCalls
     */
    public function getBurstingMaxActiveCalls()
    {
        return ($this->burstingMaxActiveCalls)
            ? $this->burstingMaxActiveCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBurstingMaxIncomingCalls($burstingMaxIncomingCalls = null)
    {
        $this->burstingMaxIncomingCalls = ($burstingMaxIncomingCalls InstanceOf BurstingMaxIncomingCalls)
             ? $burstingMaxIncomingCalls
             : new BurstingMaxIncomingCalls($burstingMaxIncomingCalls);
        $this->burstingMaxIncomingCalls->setElementName('burstingMaxIncomingCalls');
        return $this;
    }

    /**
     * 
     * @return BurstingMaxIncomingCalls $burstingMaxIncomingCalls
     */
    public function getBurstingMaxIncomingCalls()
    {
        return ($this->burstingMaxIncomingCalls)
            ? $this->burstingMaxIncomingCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setBurstingMaxOutgoingCalls($burstingMaxOutgoingCalls = null)
    {
        $this->burstingMaxOutgoingCalls = ($burstingMaxOutgoingCalls InstanceOf BurstingMaxOutgoingCalls)
             ? $burstingMaxOutgoingCalls
             : new BurstingMaxOutgoingCalls($burstingMaxOutgoingCalls);
        $this->burstingMaxOutgoingCalls->setElementName('burstingMaxOutgoingCalls');
        return $this;
    }

    /**
     * 
     * @return BurstingMaxOutgoingCalls $burstingMaxOutgoingCalls
     */
    public function getBurstingMaxOutgoingCalls()
    {
        return ($this->burstingMaxOutgoingCalls)
            ? $this->burstingMaxOutgoingCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCapacityExceededAction($capacityExceededAction = null)
    {
        $this->capacityExceededAction = ($capacityExceededAction InstanceOf TrunkGroupCapacityExceededAction)
             ? $capacityExceededAction
             : new TrunkGroupCapacityExceededAction($capacityExceededAction);
        $this->capacityExceededAction->setElementName('capacityExceededAction');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupCapacityExceededAction $capacityExceededAction
     */
    public function getCapacityExceededAction()
    {
        return ($this->capacityExceededAction)
            ? $this->capacityExceededAction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCapacityExceededForwardAddress($capacityExceededForwardAddress = null)
    {
        $this->capacityExceededForwardAddress = ($capacityExceededForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $capacityExceededForwardAddress
             : new OutgoingDNorSIPURI($capacityExceededForwardAddress);
        $this->capacityExceededForwardAddress->setElementName('capacityExceededForwardAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $capacityExceededForwardAddress
     */
    public function getCapacityExceededForwardAddress()
    {
        return ($this->capacityExceededForwardAddress)
            ? $this->capacityExceededForwardAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCapacityExceededRerouteTrunkGroupKey(TrunkGroupKey $capacityExceededRerouteTrunkGroupKey = null)
    {
        $this->capacityExceededRerouteTrunkGroupKey = ($capacityExceededRerouteTrunkGroupKey InstanceOf TrunkGroupKey)
             ? $capacityExceededRerouteTrunkGroupKey
             : new TrunkGroupKey($capacityExceededRerouteTrunkGroupKey);
        $this->capacityExceededRerouteTrunkGroupKey->setElementName('capacityExceededRerouteTrunkGroupKey');
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
        $this->capacityExceededTrapInitialCalls = ($capacityExceededTrapInitialCalls InstanceOf TrapInitialThreshold)
             ? $capacityExceededTrapInitialCalls
             : new TrapInitialThreshold($capacityExceededTrapInitialCalls);
        $this->capacityExceededTrapInitialCalls->setElementName('capacityExceededTrapInitialCalls');
        return $this;
    }

    /**
     * 
     * @return TrapInitialThreshold $capacityExceededTrapInitialCalls
     */
    public function getCapacityExceededTrapInitialCalls()
    {
        return ($this->capacityExceededTrapInitialCalls)
            ? $this->capacityExceededTrapInitialCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCapacityExceededTrapOffsetCalls($capacityExceededTrapOffsetCalls = null)
    {
        $this->capacityExceededTrapOffsetCalls = ($capacityExceededTrapOffsetCalls InstanceOf TrapOffsetThreshold)
             ? $capacityExceededTrapOffsetCalls
             : new TrapOffsetThreshold($capacityExceededTrapOffsetCalls);
        $this->capacityExceededTrapOffsetCalls->setElementName('capacityExceededTrapOffsetCalls');
        return $this;
    }

    /**
     * 
     * @return TrapOffsetThreshold $capacityExceededTrapOffsetCalls
     */
    public function getCapacityExceededTrapOffsetCalls()
    {
        return ($this->capacityExceededTrapOffsetCalls)
            ? $this->capacityExceededTrapOffsetCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUnreachableDestinationAction($unreachableDestinationAction = null)
    {
        $this->unreachableDestinationAction = ($unreachableDestinationAction InstanceOf TrunkGroupUnreachableDestinationAction)
             ? $unreachableDestinationAction
             : new TrunkGroupUnreachableDestinationAction($unreachableDestinationAction);
        $this->unreachableDestinationAction->setElementName('unreachableDestinationAction');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupUnreachableDestinationAction $unreachableDestinationAction
     */
    public function getUnreachableDestinationAction()
    {
        return ($this->unreachableDestinationAction)
            ? $this->unreachableDestinationAction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUnreachableDestinationForwardAddress($unreachableDestinationForwardAddress = null)
    {
        $this->unreachableDestinationForwardAddress = ($unreachableDestinationForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $unreachableDestinationForwardAddress
             : new OutgoingDNorSIPURI($unreachableDestinationForwardAddress);
        $this->unreachableDestinationForwardAddress->setElementName('unreachableDestinationForwardAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $unreachableDestinationForwardAddress
     */
    public function getUnreachableDestinationForwardAddress()
    {
        return ($this->unreachableDestinationForwardAddress)
            ? $this->unreachableDestinationForwardAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUnreachableDestinationRerouteTrunkGroupKey(TrunkGroupKey $unreachableDestinationRerouteTrunkGroupKey = null)
    {
        $this->unreachableDestinationRerouteTrunkGroupKey = ($unreachableDestinationRerouteTrunkGroupKey InstanceOf TrunkGroupKey)
             ? $unreachableDestinationRerouteTrunkGroupKey
             : new TrunkGroupKey($unreachableDestinationRerouteTrunkGroupKey);
        $this->unreachableDestinationRerouteTrunkGroupKey->setElementName('unreachableDestinationRerouteTrunkGroupKey');
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
        $this->invitationTimeout = ($invitationTimeout InstanceOf TrunkGroupInvitationTimeoutSeconds)
             ? $invitationTimeout
             : new TrunkGroupInvitationTimeoutSeconds($invitationTimeout);
        $this->invitationTimeout->setElementName('invitationTimeout');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupInvitationTimeoutSeconds $invitationTimeout
     */
    public function getInvitationTimeout()
    {
        return ($this->invitationTimeout)
            ? $this->invitationTimeout->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRequireAuthentication($requireAuthentication = null)
    {
        $this->requireAuthentication = new PrimitiveType($requireAuthentication);
        $this->requireAuthentication->setElementName('requireAuthentication');
        return $this;
    }

    /**
     * 
     * @return boolean $requireAuthentication
     */
    public function getRequireAuthentication()
    {
        return ($this->requireAuthentication)
            ? $this->requireAuthentication->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName = null)
    {
        $this->sipAuthenticationUserName = ($sipAuthenticationUserName InstanceOf SIPAuthenticationUserName)
             ? $sipAuthenticationUserName
             : new SIPAuthenticationUserName($sipAuthenticationUserName);
        $this->sipAuthenticationUserName->setElementName('sipAuthenticationUserName');
        return $this;
    }

    /**
     * 
     * @return SIPAuthenticationUserName $sipAuthenticationUserName
     */
    public function getSipAuthenticationUserName()
    {
        return ($this->sipAuthenticationUserName)
            ? $this->sipAuthenticationUserName->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSipAuthenticationPassword($sipAuthenticationPassword = null)
    {
        $this->sipAuthenticationPassword = ($sipAuthenticationPassword InstanceOf Password)
             ? $sipAuthenticationPassword
             : new Password($sipAuthenticationPassword);
        $this->sipAuthenticationPassword->setElementName('sipAuthenticationPassword');
        return $this;
    }

    /**
     * 
     * @return Password $sipAuthenticationPassword
     */
    public function getSipAuthenticationPassword()
    {
        return ($this->sipAuthenticationPassword)
            ? $this->sipAuthenticationPassword->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setHostedUserIdList(ReplacementUserIdList $hostedUserIdList = null)
    {
        $this->hostedUserIdList = ($hostedUserIdList InstanceOf ReplacementUserIdList)
             ? $hostedUserIdList
             : new ReplacementUserIdList($hostedUserIdList);
        $this->hostedUserIdList->setElementName('hostedUserIdList');
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
        $this->trunkGroupIdentity = ($trunkGroupIdentity InstanceOf SIPURI)
             ? $trunkGroupIdentity
             : new SIPURI($trunkGroupIdentity);
        $this->trunkGroupIdentity->setElementName('trunkGroupIdentity');
        return $this;
    }

    /**
     * 
     * @return SIPURI $trunkGroupIdentity
     */
    public function getTrunkGroupIdentity()
    {
        return ($this->trunkGroupIdentity)
            ? $this->trunkGroupIdentity->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setOtgDtgIdentity($otgDtgIdentity = null)
    {
        $this->otgDtgIdentity = ($otgDtgIdentity InstanceOf OtgDtgIdentity)
             ? $otgDtgIdentity
             : new OtgDtgIdentity($otgDtgIdentity);
        $this->otgDtgIdentity->setElementName('otgDtgIdentity');
        return $this;
    }

    /**
     * 
     * @return OtgDtgIdentity $otgDtgIdentity
     */
    public function getOtgDtgIdentity()
    {
        return ($this->otgDtgIdentity)
            ? $this->otgDtgIdentity->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowTerminationToTrunkGroupIdentity($allowTerminationToTrunkGroupIdentity = null)
    {
        $this->allowTerminationToTrunkGroupIdentity = new PrimitiveType($allowTerminationToTrunkGroupIdentity);
        $this->allowTerminationToTrunkGroupIdentity->setElementName('allowTerminationToTrunkGroupIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $allowTerminationToTrunkGroupIdentity
     */
    public function getAllowTerminationToTrunkGroupIdentity()
    {
        return ($this->allowTerminationToTrunkGroupIdentity)
            ? $this->allowTerminationToTrunkGroupIdentity->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowTerminationToDtgIdentity($allowTerminationToDtgIdentity = null)
    {
        $this->allowTerminationToDtgIdentity = new PrimitiveType($allowTerminationToDtgIdentity);
        $this->allowTerminationToDtgIdentity->setElementName('allowTerminationToDtgIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $allowTerminationToDtgIdentity
     */
    public function getAllowTerminationToDtgIdentity()
    {
        return ($this->allowTerminationToDtgIdentity)
            ? $this->allowTerminationToDtgIdentity->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeTrunkGroupIdentity($includeTrunkGroupIdentity = null)
    {
        $this->includeTrunkGroupIdentity = new PrimitiveType($includeTrunkGroupIdentity);
        $this->includeTrunkGroupIdentity->setElementName('includeTrunkGroupIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $includeTrunkGroupIdentity
     */
    public function getIncludeTrunkGroupIdentity()
    {
        return ($this->includeTrunkGroupIdentity)
            ? $this->includeTrunkGroupIdentity->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeDtgIdentity($includeDtgIdentity = null)
    {
        $this->includeDtgIdentity = new PrimitiveType($includeDtgIdentity);
        $this->includeDtgIdentity->setElementName('includeDtgIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $includeDtgIdentity
     */
    public function getIncludeDtgIdentity()
    {
        return ($this->includeDtgIdentity)
            ? $this->includeDtgIdentity->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeTrunkGroupIdentityForNetworkCalls($includeTrunkGroupIdentityForNetworkCalls = null)
    {
        $this->includeTrunkGroupIdentityForNetworkCalls = new PrimitiveType($includeTrunkGroupIdentityForNetworkCalls);
        $this->includeTrunkGroupIdentityForNetworkCalls->setElementName('includeTrunkGroupIdentityForNetworkCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $includeTrunkGroupIdentityForNetworkCalls
     */
    public function getIncludeTrunkGroupIdentityForNetworkCalls()
    {
        return ($this->includeTrunkGroupIdentityForNetworkCalls)
            ? $this->includeTrunkGroupIdentityForNetworkCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setIncludeOtgIdentityForNetworkCalls($includeOtgIdentityForNetworkCalls = null)
    {
        $this->includeOtgIdentityForNetworkCalls = new PrimitiveType($includeOtgIdentityForNetworkCalls);
        $this->includeOtgIdentityForNetworkCalls->setElementName('includeOtgIdentityForNetworkCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $includeOtgIdentityForNetworkCalls
     */
    public function getIncludeOtgIdentityForNetworkCalls()
    {
        return ($this->includeOtgIdentityForNetworkCalls)
            ? $this->includeOtgIdentityForNetworkCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableNetworkAddressIdentity($enableNetworkAddressIdentity = null)
    {
        $this->enableNetworkAddressIdentity = new PrimitiveType($enableNetworkAddressIdentity);
        $this->enableNetworkAddressIdentity->setElementName('enableNetworkAddressIdentity');
        return $this;
    }

    /**
     * 
     * @return boolean $enableNetworkAddressIdentity
     */
    public function getEnableNetworkAddressIdentity()
    {
        return ($this->enableNetworkAddressIdentity)
            ? $this->enableNetworkAddressIdentity->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowUnscreenedCalls($allowUnscreenedCalls = null)
    {
        $this->allowUnscreenedCalls = new PrimitiveType($allowUnscreenedCalls);
        $this->allowUnscreenedCalls->setElementName('allowUnscreenedCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUnscreenedCalls
     */
    public function getAllowUnscreenedCalls()
    {
        return ($this->allowUnscreenedCalls)
            ? $this->allowUnscreenedCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setAllowUnscreenedEmergencyCalls($allowUnscreenedEmergencyCalls = null)
    {
        $this->allowUnscreenedEmergencyCalls = new PrimitiveType($allowUnscreenedEmergencyCalls);
        $this->allowUnscreenedEmergencyCalls->setElementName('allowUnscreenedEmergencyCalls');
        return $this;
    }

    /**
     * 
     * @return boolean $allowUnscreenedEmergencyCalls
     */
    public function getAllowUnscreenedEmergencyCalls()
    {
        return ($this->allowUnscreenedEmergencyCalls)
            ? $this->allowUnscreenedEmergencyCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPilotUserCallingLineIdentityPolicy($pilotUserCallingLineIdentityPolicy = null)
    {
        $this->pilotUserCallingLineIdentityPolicy = ($pilotUserCallingLineIdentityPolicy InstanceOf TrunkGroupPilotUserCallingLineIdentityUsagePolicy)
             ? $pilotUserCallingLineIdentityPolicy
             : new TrunkGroupPilotUserCallingLineIdentityUsagePolicy($pilotUserCallingLineIdentityPolicy);
        $this->pilotUserCallingLineIdentityPolicy->setElementName('pilotUserCallingLineIdentityPolicy');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupPilotUserCallingLineIdentityUsagePolicy $pilotUserCallingLineIdentityPolicy
     */
    public function getPilotUserCallingLineIdentityPolicy()
    {
        return ($this->pilotUserCallingLineIdentityPolicy)
            ? $this->pilotUserCallingLineIdentityPolicy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPilotUserChargeNumberPolicy($pilotUserChargeNumberPolicy = null)
    {
        $this->pilotUserChargeNumberPolicy = ($pilotUserChargeNumberPolicy InstanceOf TrunkGroupPilotUserChargeNumberUsagePolicy)
             ? $pilotUserChargeNumberPolicy
             : new TrunkGroupPilotUserChargeNumberUsagePolicy($pilotUserChargeNumberPolicy);
        $this->pilotUserChargeNumberPolicy->setElementName('pilotUserChargeNumberPolicy');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupPilotUserChargeNumberUsagePolicy $pilotUserChargeNumberPolicy
     */
    public function getPilotUserChargeNumberPolicy()
    {
        return ($this->pilotUserChargeNumberPolicy)
            ? $this->pilotUserChargeNumberPolicy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallForwardingAlwaysAction($callForwardingAlwaysAction = null)
    {
        $this->callForwardingAlwaysAction = ($callForwardingAlwaysAction InstanceOf TrunkGroupCallForwardingAlwaysAction)
             ? $callForwardingAlwaysAction
             : new TrunkGroupCallForwardingAlwaysAction($callForwardingAlwaysAction);
        $this->callForwardingAlwaysAction->setElementName('callForwardingAlwaysAction');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupCallForwardingAlwaysAction $callForwardingAlwaysAction
     */
    public function getCallForwardingAlwaysAction()
    {
        return ($this->callForwardingAlwaysAction)
            ? $this->callForwardingAlwaysAction->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallForwardingAlwaysForwardAddress($callForwardingAlwaysForwardAddress = null)
    {
        $this->callForwardingAlwaysForwardAddress = ($callForwardingAlwaysForwardAddress InstanceOf OutgoingDNorSIPURI)
             ? $callForwardingAlwaysForwardAddress
             : new OutgoingDNorSIPURI($callForwardingAlwaysForwardAddress);
        $this->callForwardingAlwaysForwardAddress->setElementName('callForwardingAlwaysForwardAddress');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $callForwardingAlwaysForwardAddress
     */
    public function getCallForwardingAlwaysForwardAddress()
    {
        return ($this->callForwardingAlwaysForwardAddress)
            ? $this->callForwardingAlwaysForwardAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setCallForwardingAlwaysRerouteTrunkGroupKey(TrunkGroupKey $callForwardingAlwaysRerouteTrunkGroupKey = null)
    {
        $this->callForwardingAlwaysRerouteTrunkGroupKey = ($callForwardingAlwaysRerouteTrunkGroupKey InstanceOf TrunkGroupKey)
             ? $callForwardingAlwaysRerouteTrunkGroupKey
             : new TrunkGroupKey($callForwardingAlwaysRerouteTrunkGroupKey);
        $this->callForwardingAlwaysRerouteTrunkGroupKey->setElementName('callForwardingAlwaysRerouteTrunkGroupKey');
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
        $this->peeringDomain = ($peeringDomain InstanceOf DomainName)
             ? $peeringDomain
             : new DomainName($peeringDomain);
        $this->peeringDomain->setElementName('peeringDomain');
        return $this;
    }

    /**
     * 
     * @return DomainName $peeringDomain
     */
    public function getPeeringDomain()
    {
        return ($this->peeringDomain)
            ? $this->peeringDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setRouteToPeeringDomain($routeToPeeringDomain = null)
    {
        $this->routeToPeeringDomain = new PrimitiveType($routeToPeeringDomain);
        $this->routeToPeeringDomain->setElementName('routeToPeeringDomain');
        return $this;
    }

    /**
     * 
     * @return boolean $routeToPeeringDomain
     */
    public function getRouteToPeeringDomain()
    {
        return ($this->routeToPeeringDomain)
            ? $this->routeToPeeringDomain->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPrefixEnabled($prefixEnabled = null)
    {
        $this->prefixEnabled = new PrimitiveType($prefixEnabled);
        $this->prefixEnabled->setElementName('prefixEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $prefixEnabled
     */
    public function getPrefixEnabled()
    {
        return ($this->prefixEnabled)
            ? $this->prefixEnabled->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPrefix($prefix = null)
    {
        $this->prefix = ($prefix InstanceOf TrunkGroupPrefix)
             ? $prefix
             : new TrunkGroupPrefix($prefix);
        $this->prefix->setElementName('prefix');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupPrefix $prefix
     */
    public function getPrefix()
    {
        return ($this->prefix)
            ? $this->prefix->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setStatefulReroutingEnabled($statefulReroutingEnabled = null)
    {
        $this->statefulReroutingEnabled = new PrimitiveType($statefulReroutingEnabled);
        $this->statefulReroutingEnabled->setElementName('statefulReroutingEnabled');
        return $this;
    }

    /**
     * 
     * @return boolean $statefulReroutingEnabled
     */
    public function getStatefulReroutingEnabled()
    {
        return ($this->statefulReroutingEnabled)
            ? $this->statefulReroutingEnabled->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSendContinuousOptionsMessage($sendContinuousOptionsMessage = null)
    {
        $this->sendContinuousOptionsMessage = new PrimitiveType($sendContinuousOptionsMessage);
        $this->sendContinuousOptionsMessage->setElementName('sendContinuousOptionsMessage');
        return $this;
    }

    /**
     * 
     * @return boolean $sendContinuousOptionsMessage
     */
    public function getSendContinuousOptionsMessage()
    {
        return ($this->sendContinuousOptionsMessage)
            ? $this->sendContinuousOptionsMessage->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setContinuousOptionsSendingIntervalSeconds($continuousOptionsSendingIntervalSeconds = null)
    {
        $this->continuousOptionsSendingIntervalSeconds = ($continuousOptionsSendingIntervalSeconds InstanceOf TrunkGroupContinuousOptionsSendingIntervalSeconds)
             ? $continuousOptionsSendingIntervalSeconds
             : new TrunkGroupContinuousOptionsSendingIntervalSeconds($continuousOptionsSendingIntervalSeconds);
        $this->continuousOptionsSendingIntervalSeconds->setElementName('continuousOptionsSendingIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupContinuousOptionsSendingIntervalSeconds $continuousOptionsSendingIntervalSeconds
     */
    public function getContinuousOptionsSendingIntervalSeconds()
    {
        return ($this->continuousOptionsSendingIntervalSeconds)
            ? $this->continuousOptionsSendingIntervalSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFailureOptionsSendingIntervalSeconds($failureOptionsSendingIntervalSeconds = null)
    {
        $this->failureOptionsSendingIntervalSeconds = ($failureOptionsSendingIntervalSeconds InstanceOf TrunkGroupFailureOptionsSendingIntervalSeconds)
             ? $failureOptionsSendingIntervalSeconds
             : new TrunkGroupFailureOptionsSendingIntervalSeconds($failureOptionsSendingIntervalSeconds);
        $this->failureOptionsSendingIntervalSeconds->setElementName('failureOptionsSendingIntervalSeconds');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupFailureOptionsSendingIntervalSeconds $failureOptionsSendingIntervalSeconds
     */
    public function getFailureOptionsSendingIntervalSeconds()
    {
        return ($this->failureOptionsSendingIntervalSeconds)
            ? $this->failureOptionsSendingIntervalSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFailureThresholdCounter($failureThresholdCounter = null)
    {
        $this->failureThresholdCounter = ($failureThresholdCounter InstanceOf TrunkGroupThresholdCounter)
             ? $failureThresholdCounter
             : new TrunkGroupThresholdCounter($failureThresholdCounter);
        $this->failureThresholdCounter->setElementName('failureThresholdCounter');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupThresholdCounter $failureThresholdCounter
     */
    public function getFailureThresholdCounter()
    {
        return ($this->failureThresholdCounter)
            ? $this->failureThresholdCounter->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setSuccessThresholdCounter($successThresholdCounter = null)
    {
        $this->successThresholdCounter = ($successThresholdCounter InstanceOf TrunkGroupThresholdCounter)
             ? $successThresholdCounter
             : new TrunkGroupThresholdCounter($successThresholdCounter);
        $this->successThresholdCounter->setElementName('successThresholdCounter');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupThresholdCounter $successThresholdCounter
     */
    public function getSuccessThresholdCounter()
    {
        return ($this->successThresholdCounter)
            ? $this->successThresholdCounter->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInviteFailureThresholdCounter($inviteFailureThresholdCounter = null)
    {
        $this->inviteFailureThresholdCounter = ($inviteFailureThresholdCounter InstanceOf TrunkGroupThresholdCounter)
             ? $inviteFailureThresholdCounter
             : new TrunkGroupThresholdCounter($inviteFailureThresholdCounter);
        $this->inviteFailureThresholdCounter->setElementName('inviteFailureThresholdCounter');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupThresholdCounter $inviteFailureThresholdCounter
     */
    public function getInviteFailureThresholdCounter()
    {
        return ($this->inviteFailureThresholdCounter)
            ? $this->inviteFailureThresholdCounter->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setInviteFailureThresholdWindowSeconds($inviteFailureThresholdWindowSeconds = null)
    {
        $this->inviteFailureThresholdWindowSeconds = ($inviteFailureThresholdWindowSeconds InstanceOf TrunkGroupFailureThresholdWindowSeconds)
             ? $inviteFailureThresholdWindowSeconds
             : new TrunkGroupFailureThresholdWindowSeconds($inviteFailureThresholdWindowSeconds);
        $this->inviteFailureThresholdWindowSeconds->setElementName('inviteFailureThresholdWindowSeconds');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupFailureThresholdWindowSeconds $inviteFailureThresholdWindowSeconds
     */
    public function getInviteFailureThresholdWindowSeconds()
    {
        return ($this->inviteFailureThresholdWindowSeconds)
            ? $this->inviteFailureThresholdWindowSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPilotUserCallingLineAssertedIdentityPolicy($pilotUserCallingLineAssertedIdentityPolicy = null)
    {
        $this->pilotUserCallingLineAssertedIdentityPolicy = ($pilotUserCallingLineAssertedIdentityPolicy InstanceOf TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy)
             ? $pilotUserCallingLineAssertedIdentityPolicy
             : new TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy($pilotUserCallingLineAssertedIdentityPolicy);
        $this->pilotUserCallingLineAssertedIdentityPolicy->setElementName('pilotUserCallingLineAssertedIdentityPolicy');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupPilotUserCallingLineAssertedIdentityUsagePolicy $pilotUserCallingLineAssertedIdentityPolicy
     */
    public function getPilotUserCallingLineAssertedIdentityPolicy()
    {
        return ($this->pilotUserCallingLineAssertedIdentityPolicy)
            ? $this->pilotUserCallingLineAssertedIdentityPolicy->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUseSystemCallingLineAssertedIdentityPolicy($useSystemCallingLineAssertedIdentityPolicy = null)
    {
        $this->useSystemCallingLineAssertedIdentityPolicy = new PrimitiveType($useSystemCallingLineAssertedIdentityPolicy);
        $this->useSystemCallingLineAssertedIdentityPolicy->setElementName('useSystemCallingLineAssertedIdentityPolicy');
        return $this;
    }

    /**
     * 
     * @return boolean $useSystemCallingLineAssertedIdentityPolicy
     */
    public function getUseSystemCallingLineAssertedIdentityPolicy()
    {
        return ($this->useSystemCallingLineAssertedIdentityPolicy)
            ? $this->useSystemCallingLineAssertedIdentityPolicy->getElementValue()
            : null;
    }
}
