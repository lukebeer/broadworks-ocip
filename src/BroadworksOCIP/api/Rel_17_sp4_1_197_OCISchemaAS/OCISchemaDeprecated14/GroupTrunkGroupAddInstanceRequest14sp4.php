<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUnreachableDestinationAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupInvitationTimeoutSeconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCapacityExceededAction;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationPassword;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxIncomingCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxOutgoingCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxActiveCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapInitialThreshold;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapOffsetThreshold;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupPilotUser;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupName;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\DepartmentKey;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDevice;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Add a Trunk Group instance to a group.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupAddInstanceRequest14sp4 extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupTrunkGroupAddInstanceRequest14sp4';
    protected $serviceProviderId;
    protected $groupId;
    protected $name;
    protected $pilotUser;
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
    protected $sipAuthenticationPassword;
    protected $hostedUserId;

    public function __construct(
         $serviceProviderId = '',
         $groupId = '',
         $name = '',
         $pilotUser = null,
         $department = null,
         $accessDevice = null,
         $maxActiveCalls = '',
         $maxIncomingCalls = null,
         $maxOutgoingCalls = null,
         $enableBursting = '',
         $burstingMaxActiveCalls = null,
         $burstingMaxIncomingCalls = null,
         $burstingMaxOutgoingCalls = null,
         $capacityExceededAction = null,
         $capacityExceededForwardAddress = null,
         $capacityExceededRerouteTrunkGroupKey = null,
         $capacityExceededTrapInitialCalls = '',
         $capacityExceededTrapOffsetCalls = '',
         $unreachableDestinationAction = null,
         $unreachableDestinationForwardAddress = null,
         $unreachableDestinationRerouteTrunkGroupKey = null,
         $unreachableDestinationTrapInitialCalls = '',
         $unreachableDestinationTrapOffsetCalls = '',
         $invitationTimeout = '',
         $requireAuthentication = '',
         $sipAuthenticationUserName = null,
         $sipAuthenticationPassword = null,
         $hostedUserId = null
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
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setElementName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
     */
    public function getServiceProviderId()
    {
        return ($this->serviceProviderId)
            ? $this->serviceProviderId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
        $this->groupId->setElementName('groupId');
        return $this;
    }

    /**
     * 
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return ($this->groupId)
            ? $this->groupId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setName($name = null)
    {
        $this->name = ($name InstanceOf TrunkGroupName)
             ? $name
             : new TrunkGroupName($name);
        $this->name->setElementName('name');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupName $name
     */
    public function getName()
    {
        return ($this->name)
            ? $this->name->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPilotUser(TrunkGroupPilotUser $pilotUser = null)
    {
        $this->pilotUser = ($pilotUser InstanceOf TrunkGroupPilotUser)
             ? $pilotUser
             : new TrunkGroupPilotUser($pilotUser);
        $this->pilotUser->setElementName('pilotUser');
        return $this;
    }

    /**
     * 
     * @return TrunkGroupPilotUser $pilotUser
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
    public function setSipAuthenticationPassword($sipAuthenticationPassword = null)
    {
        $this->sipAuthenticationPassword = ($sipAuthenticationPassword InstanceOf SIPAuthenticationPassword)
             ? $sipAuthenticationPassword
             : new SIPAuthenticationPassword($sipAuthenticationPassword);
        $this->sipAuthenticationPassword->setElementName('sipAuthenticationPassword');
        return $this;
    }

    /**
     * 
     * @return SIPAuthenticationPassword $sipAuthenticationPassword
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
    public function setHostedUserId($hostedUserId = null)
    {
        $this->hostedUserId = ($hostedUserId InstanceOf UserId)
             ? $hostedUserId
             : new UserId($hostedUserId);
        $this->hostedUserId->setElementName('hostedUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $hostedUserId
     */
    public function getHostedUserId()
    {
        return ($this->hostedUserId)
            ? $this->hostedUserId->getElementValue()
            : null;
    }
}
