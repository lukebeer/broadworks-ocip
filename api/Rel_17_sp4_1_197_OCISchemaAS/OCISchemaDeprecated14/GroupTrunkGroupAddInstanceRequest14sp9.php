<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUnreachableDestinationAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupCallForwardingAlwaysAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupInvitationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCapacityExceededAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\OtgDtgIdentity;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapInitialThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupPilotUser;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapOffsetThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Add a Trunk Group instance to a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupAddInstanceRequest14sp9 extends ComplexType implements ComplexInterface
{
    public    $name                                       = 'GroupTrunkGroupAddInstanceRequest14sp9';
    protected $serviceProviderId                          = null;
    protected $groupId                                    = null;
    protected $name                                       = null;
    protected $pilotUser                                  = null;
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
    protected $unreachableDestinationTrapInitialCalls     = null;
    protected $unreachableDestinationTrapOffsetCalls      = null;
    protected $invitationTimeout                          = null;
    protected $requireAuthentication                      = null;
    protected $sipAuthenticationUserName                  = null;
    protected $sipAuthenticationPassword                  = null;
    protected $hostedUserId                               = null;
    protected $trunkGroupIdentity                         = null;
    protected $otgDtgIdentity                             = null;
    protected $includeTrunkGroupIdentity                  = null;
    protected $includeDtgIdentity                         = null;
    protected $enableNetworkAddressIdentity               = null;
    protected $allowUnscreenedCalls                       = null;
    protected $allowUnscreenedEmergencyCalls              = null;
    protected $usePilotUserCallingLineIdentity            = null;
    protected $usePilotUserChargeNumber                   = null;
    protected $callForwardingAlwaysAction                 = null;
    protected $callForwardingAlwaysForwardAddress         = null;
    protected $callForwardingAlwaysRerouteTrunkGroupKey   = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $name,
         TrunkGroupPilotUser $pilotUser = null,
         DepartmentKey $department = null,
         AccessDevice $accessDevice = null,
         $maxActiveCalls,
         $maxIncomingCalls = null,
         $maxOutgoingCalls = null,
         $enableBursting,
         $burstingMaxActiveCalls = null,
         $burstingMaxIncomingCalls = null,
         $burstingMaxOutgoingCalls = null,
         $capacityExceededAction = null,
         $capacityExceededForwardAddress = null,
         TrunkGroupKey $capacityExceededRerouteTrunkGroupKey = null,
         $capacityExceededTrapInitialCalls,
         $capacityExceededTrapOffsetCalls,
         $unreachableDestinationAction = null,
         $unreachableDestinationForwardAddress = null,
         TrunkGroupKey $unreachableDestinationRerouteTrunkGroupKey = null,
         $unreachableDestinationTrapInitialCalls,
         $unreachableDestinationTrapOffsetCalls,
         $invitationTimeout,
         $requireAuthentication,
         $sipAuthenticationUserName = null,
         $sipAuthenticationPassword = null,
         $hostedUserId = null,
         $trunkGroupIdentity = null,
         $otgDtgIdentity = null,
         $includeTrunkGroupIdentity,
         $includeDtgIdentity,
         $enableNetworkAddressIdentity,
         $allowUnscreenedCalls,
         $allowUnscreenedEmergencyCalls,
         $usePilotUserCallingLineIdentity,
         $usePilotUserChargeNumber,
         $callForwardingAlwaysAction = null,
         $callForwardingAlwaysForwardAddress = null,
         TrunkGroupKey $callForwardingAlwaysRerouteTrunkGroupKey = null
    ) {
        $this->setServiceProviderId($serviceProviderId);
        $this->setGroupId($groupId);
        $this->setName($name);
        $this->setPilotUser($pilotUser);
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
        $this->setUnreachableDestinationTrapInitialCalls($unreachableDestinationTrapInitialCalls);
        $this->setUnreachableDestinationTrapOffsetCalls($unreachableDestinationTrapOffsetCalls);
        $this->setInvitationTimeout($invitationTimeout);
        $this->setRequireAuthentication($requireAuthentication);
        $this->setSipAuthenticationUserName($sipAuthenticationUserName);
        $this->setSipAuthenticationPassword($sipAuthenticationPassword);
        $this->setHostedUserId($hostedUserId);
        $this->setTrunkGroupIdentity($trunkGroupIdentity);
        $this->setOtgDtgIdentity($otgDtgIdentity);
        $this->setIncludeTrunkGroupIdentity($includeTrunkGroupIdentity);
        $this->setIncludeDtgIdentity($includeDtgIdentity);
        $this->setEnableNetworkAddressIdentity($enableNetworkAddressIdentity);
        $this->setAllowUnscreenedCalls($allowUnscreenedCalls);
        $this->setAllowUnscreenedEmergencyCalls($allowUnscreenedEmergencyCalls);
        $this->setUsePilotUserCallingLineIdentity($usePilotUserCallingLineIdentity);
        $this->setUsePilotUserChargeNumber($usePilotUserChargeNumber);
        $this->setCallForwardingAlwaysAction($callForwardingAlwaysAction);
        $this->setCallForwardingAlwaysForwardAddress($callForwardingAlwaysForwardAddress);
        $this->setCallForwardingAlwaysRerouteTrunkGroupKey($callForwardingAlwaysRerouteTrunkGroupKey);
    }

    /**
     * @return 
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId
     */
    public function getServiceProviderId()
    {
        return $this->serviceProviderId->getValue();
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        if (!$groupId) return $this;
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        if (!$name) return $this;
        $this->name = ($name InstanceOf TrunkGroupName)
             ? $name
             : new TrunkGroupName($name);
        $this->name->setName('name');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupName
     */
    public function getName()
    {
        return $this->name->getValue();
    }

    /**
     * 
     */
    public function setPilotUser(TrunkGroupPilotUser $pilotUser = null)
    {
        if (!$pilotUser) return $this;
        $this->pilotUser = $pilotUser;
        $this->pilotUser->setName('pilotUser');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupPilotUser
     */
    public function getPilotUser()
    {
        return $this->pilotUser;
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
     * @return DepartmentKey
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
     * @return AccessDevice
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
     * @return MaxActiveCalls
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
     * @return MaxIncomingCalls
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
     * @return MaxOutgoingCalls
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
     * @return xs:boolean
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
     * @return BurstingMaxActiveCalls
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
     * @return BurstingMaxIncomingCalls
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
     * @return BurstingMaxOutgoingCalls
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
     * @return TrunkGroupCapacityExceededAction
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
     * @return OutgoingDNorSIPURI
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
     * @return TrunkGroupKey
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
     * @return TrapInitialThreshold
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
     * @return TrapOffsetThreshold
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
     * @return TrunkGroupUnreachableDestinationAction
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
     * @return OutgoingDNorSIPURI
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
     * @return TrunkGroupKey
     */
    public function getUnreachableDestinationRerouteTrunkGroupKey()
    {
        return $this->unreachableDestinationRerouteTrunkGroupKey;
    }

    /**
     * 
     */
    public function setUnreachableDestinationTrapInitialCalls($unreachableDestinationTrapInitialCalls = null)
    {
        if (!$unreachableDestinationTrapInitialCalls) return $this;
        $this->unreachableDestinationTrapInitialCalls = ($unreachableDestinationTrapInitialCalls InstanceOf TrapInitialThreshold)
             ? $unreachableDestinationTrapInitialCalls
             : new TrapInitialThreshold($unreachableDestinationTrapInitialCalls);
        $this->unreachableDestinationTrapInitialCalls->setName('unreachableDestinationTrapInitialCalls');
        return $this;
    }

    /**
     * 
     * @return TrapInitialThreshold
     */
    public function getUnreachableDestinationTrapInitialCalls()
    {
        return $this->unreachableDestinationTrapInitialCalls->getValue();
    }

    /**
     * 
     */
    public function setUnreachableDestinationTrapOffsetCalls($unreachableDestinationTrapOffsetCalls = null)
    {
        if (!$unreachableDestinationTrapOffsetCalls) return $this;
        $this->unreachableDestinationTrapOffsetCalls = ($unreachableDestinationTrapOffsetCalls InstanceOf TrapOffsetThreshold)
             ? $unreachableDestinationTrapOffsetCalls
             : new TrapOffsetThreshold($unreachableDestinationTrapOffsetCalls);
        $this->unreachableDestinationTrapOffsetCalls->setName('unreachableDestinationTrapOffsetCalls');
        return $this;
    }

    /**
     * 
     * @return TrapOffsetThreshold
     */
    public function getUnreachableDestinationTrapOffsetCalls()
    {
        return $this->unreachableDestinationTrapOffsetCalls->getValue();
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
     * @return TrunkGroupInvitationTimeoutSeconds
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
     * @return xs:boolean
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
     * @return SIPAuthenticationUserName
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
        $this->sipAuthenticationPassword = ($sipAuthenticationPassword InstanceOf SIPAuthenticationPassword)
             ? $sipAuthenticationPassword
             : new SIPAuthenticationPassword($sipAuthenticationPassword);
        $this->sipAuthenticationPassword->setName('sipAuthenticationPassword');
        return $this;
    }

    /**
     * 
     * @return SIPAuthenticationPassword
     */
    public function getSipAuthenticationPassword()
    {
        return $this->sipAuthenticationPassword->getValue();
    }

    /**
     * 
     */
    public function setHostedUserId($hostedUserId = null)
    {
        if (!$hostedUserId) return $this;
        $this->hostedUserId = ($hostedUserId InstanceOf UserId)
             ? $hostedUserId
             : new UserId($hostedUserId);
        $this->hostedUserId->setName('hostedUserId');
        return $this;
    }

    /**
     * 
     * @return UserId
     */
    public function getHostedUserId()
    {
        return $this->hostedUserId->getValue();
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
     * @return SIPURI
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
     * @return OtgDtgIdentity
     */
    public function getOtgDtgIdentity()
    {
        return $this->otgDtgIdentity->getValue();
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
     * @return xs:boolean
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
     * @return xs:boolean
     */
    public function getIncludeDtgIdentity()
    {
        return $this->includeDtgIdentity->getValue();
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
     * @return xs:boolean
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
     * @return xs:boolean
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
     * @return xs:boolean
     */
    public function getAllowUnscreenedEmergencyCalls()
    {
        return $this->allowUnscreenedEmergencyCalls->getValue();
    }

    /**
     * 
     */
    public function setUsePilotUserCallingLineIdentity($usePilotUserCallingLineIdentity = null)
    {
        if (!$usePilotUserCallingLineIdentity) return $this;
        $this->usePilotUserCallingLineIdentity = new PrimitiveType($usePilotUserCallingLineIdentity);
        $this->usePilotUserCallingLineIdentity->setName('usePilotUserCallingLineIdentity');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUsePilotUserCallingLineIdentity()
    {
        return $this->usePilotUserCallingLineIdentity->getValue();
    }

    /**
     * 
     */
    public function setUsePilotUserChargeNumber($usePilotUserChargeNumber = null)
    {
        if (!$usePilotUserChargeNumber) return $this;
        $this->usePilotUserChargeNumber = new PrimitiveType($usePilotUserChargeNumber);
        $this->usePilotUserChargeNumber->setName('usePilotUserChargeNumber');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getUsePilotUserChargeNumber()
    {
        return $this->usePilotUserChargeNumber->getValue();
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
     * @return TrunkGroupCallForwardingAlwaysAction
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
     * @return OutgoingDNorSIPURI
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
     * @return TrunkGroupKey
     */
    public function getCallForwardingAlwaysRerouteTrunkGroupKey()
    {
        return $this->callForwardingAlwaysRerouteTrunkGroupKey;
    }
}
