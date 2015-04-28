<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPilotUserCallingLineIdentityUsagePolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupPilotUserChargeNumberUsagePolicy;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUnreachableDestinationAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupCallForwardingAlwaysAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupInvitationTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCapacityExceededAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\OtgDtgIdentity;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxOutgoingCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxIncomingCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxActiveCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapInitialThreshold;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapOffsetThreshold;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\TableType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Response to GroupTrunkGroupGetInstanceRequest14sp9A.
 *         Returns the profile information for the Trunk Group.
 *         Contains a hosted user table with column headings: "User Id", "Last Name",
 *         "First Name", "Hiragana Last Name", "Hiragana First Name".
 */
class GroupTrunkGroupGetInstanceResponse14sp9A extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupTrunkGroupGetInstanceResponse14sp9A';
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
    protected $unreachableDestinationTrapInitialCalls;
    protected $unreachableDestinationTrapOffsetCalls;
    protected $invitationTimeout;
    protected $requireAuthentication;
    protected $sipAuthenticationUserName;
    protected $hostedUserTable;
    protected $trunkGroupIdentity;
    protected $otgDtgIdentity;
    protected $includeTrunkGroupIdentity;
    protected $includeDtgIdentity;
    protected $enableNetworkAddressIdentity;
    protected $allowUnscreenedCalls;
    protected $allowUnscreenedEmergencyCalls;
    protected $pilotUserCallingLineIdentityPolicy;
    protected $pilotUserChargeNumberPolicy;
    protected $callForwardingAlwaysAction;
    protected $callForwardingAlwaysForwardAddress;
    protected $callForwardingAlwaysRerouteTrunkGroupKey;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupTrunkGroupGetInstanceResponse14sp9A $response
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
    public function setUnreachableDestinationTrapInitialCalls($unreachableDestinationTrapInitialCalls = null)
    {
        $this->unreachableDestinationTrapInitialCalls = ($unreachableDestinationTrapInitialCalls InstanceOf TrapInitialThreshold)
             ? $unreachableDestinationTrapInitialCalls
             : new TrapInitialThreshold($unreachableDestinationTrapInitialCalls);
        $this->unreachableDestinationTrapInitialCalls->setElementName('unreachableDestinationTrapInitialCalls');
        return $this;
    }

    /**
     * 
     * @return TrapInitialThreshold $unreachableDestinationTrapInitialCalls
     */
    public function getUnreachableDestinationTrapInitialCalls()
    {
        return ($this->unreachableDestinationTrapInitialCalls)
            ? $this->unreachableDestinationTrapInitialCalls->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setUnreachableDestinationTrapOffsetCalls($unreachableDestinationTrapOffsetCalls = null)
    {
        $this->unreachableDestinationTrapOffsetCalls = ($unreachableDestinationTrapOffsetCalls InstanceOf TrapOffsetThreshold)
             ? $unreachableDestinationTrapOffsetCalls
             : new TrapOffsetThreshold($unreachableDestinationTrapOffsetCalls);
        $this->unreachableDestinationTrapOffsetCalls->setElementName('unreachableDestinationTrapOffsetCalls');
        return $this;
    }

    /**
     * 
     * @return TrapOffsetThreshold $unreachableDestinationTrapOffsetCalls
     */
    public function getUnreachableDestinationTrapOffsetCalls()
    {
        return ($this->unreachableDestinationTrapOffsetCalls)
            ? $this->unreachableDestinationTrapOffsetCalls->getElementValue()
            : null;
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
    public function setHostedUserTable(TableType $hostedUserTable = null)
    {
        $this->hostedUserTable = $hostedUserTable;
        $this->hostedUserTable->setElementName('hostedUserTable');
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
}
