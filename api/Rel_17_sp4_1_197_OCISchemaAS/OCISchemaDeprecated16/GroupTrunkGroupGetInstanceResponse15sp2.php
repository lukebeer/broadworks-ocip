<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPilotUserCallingLineIdentityUsagePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPilotUserChargeNumberUsagePolicy;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUnreachableDestinationAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupCallForwardingAlwaysAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupInvitationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCapacityExceededAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\OtgDtgIdentity;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapInitialThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapOffsetThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\TableType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupTrunkGroupGetInstanceRequest15sp2.
 *         Returns the profile information for the Trunk Group.
 *         Contains a hosted user table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupTrunkGroupGetInstanceResponse15sp2 extends ComplexType implements ComplexInterface
{
    public    $name                                       = 'GroupTrunkGroupGetInstanceResponse15sp2';
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
    protected $hostedUserTable                            = null;
    protected $trunkGroupIdentity                         = null;
    protected $otgDtgIdentity                             = null;
    protected $includeTrunkGroupIdentity                  = null;
    protected $includeDtgIdentity                         = null;
    protected $enableNetworkAddressIdentity               = null;
    protected $allowUnscreenedCalls                       = null;
    protected $allowUnscreenedEmergencyCalls              = null;
    protected $pilotUserCallingLineIdentityPolicy         = null;
    protected $pilotUserChargeNumberPolicy                = null;
    protected $callForwardingAlwaysAction                 = null;
    protected $callForwardingAlwaysForwardAddress         = null;
    protected $callForwardingAlwaysRerouteTrunkGroupKey   = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\GroupTrunkGroupGetInstanceResponse15sp2 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
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
    public function setHostedUserTable(TableType $hostedUserTable = null)
    {
        if (!$hostedUserTable) return $this;
        $this->hostedUserTable = $hostedUserTable;
        $this->hostedUserTable->setName('hostedUserTable');
        return $this;
    }

    /**
     * 
     * @return TableType
     */
    public function getHostedUserTable()
    {
        return $this->hostedUserTable;
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
}
