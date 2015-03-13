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
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
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
    public    $name                                      = 'GroupTrunkGroupAddInstanceRequest14sp1';
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
         ServiceInstanceAddProfileTrunkGroup $serviceInstanceProfile,
         AccessDeviceEndpointAdd $accessDeviceEndpoint = null,
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
        if (!$serviceProviderId) return $this;
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
        $this->serviceProviderId->setName('serviceProviderId');
        return $this;
    }

    /**
     * 
     * @return ServiceProviderId $serviceProviderId
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
     * @return GroupId $groupId
     */
    public function getGroupId()
    {
        return $this->groupId->getValue();
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        if (!$serviceUserId) return $this;
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return $this->serviceUserId->getValue();
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfileTrunkGroup $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceAddProfileTrunkGroup $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointAdd $accessDeviceEndpoint = null)
    {
        if (!$accessDeviceEndpoint) return $this;
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        $this->accessDeviceEndpoint->setName('accessDeviceEndpoint');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointAdd $accessDeviceEndpoint
     */
    public function getAccessDeviceEndpoint()
    {
        return $this->accessDeviceEndpoint;
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
    public function setCapacityExceededRerouteTrunkGroupId($capacityExceededRerouteTrunkGroupId = null)
    {
        if (!$capacityExceededRerouteTrunkGroupId) return $this;
        $this->capacityExceededRerouteTrunkGroupId = ($capacityExceededRerouteTrunkGroupId InstanceOf UserId)
             ? $capacityExceededRerouteTrunkGroupId
             : new UserId($capacityExceededRerouteTrunkGroupId);
        $this->capacityExceededRerouteTrunkGroupId->setName('capacityExceededRerouteTrunkGroupId');
        return $this;
    }

    /**
     * 
     * @return UserId $capacityExceededRerouteTrunkGroupId
     */
    public function getCapacityExceededRerouteTrunkGroupId()
    {
        return $this->capacityExceededRerouteTrunkGroupId->getValue();
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
    public function setUnreachableDestinationRerouteTrunkGroupId($unreachableDestinationRerouteTrunkGroupId = null)
    {
        if (!$unreachableDestinationRerouteTrunkGroupId) return $this;
        $this->unreachableDestinationRerouteTrunkGroupId = ($unreachableDestinationRerouteTrunkGroupId InstanceOf UserId)
             ? $unreachableDestinationRerouteTrunkGroupId
             : new UserId($unreachableDestinationRerouteTrunkGroupId);
        $this->unreachableDestinationRerouteTrunkGroupId->setName('unreachableDestinationRerouteTrunkGroupId');
        return $this;
    }

    /**
     * 
     * @return UserId $unreachableDestinationRerouteTrunkGroupId
     */
    public function getUnreachableDestinationRerouteTrunkGroupId()
    {
        return $this->unreachableDestinationRerouteTrunkGroupId->getValue();
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
     * @return TrapInitialThreshold $unreachableDestinationTrapInitialCalls
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
     * @return TrapOffsetThreshold $unreachableDestinationTrapOffsetCalls
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
        $this->sipAuthenticationPassword = ($sipAuthenticationPassword InstanceOf SIPAuthenticationPassword)
             ? $sipAuthenticationPassword
             : new SIPAuthenticationPassword($sipAuthenticationPassword);
        $this->sipAuthenticationPassword->setName('sipAuthenticationPassword');
        return $this;
    }

    /**
     * 
     * @return SIPAuthenticationPassword $sipAuthenticationPassword
     */
    public function getSipAuthenticationPassword()
    {
        return $this->sipAuthenticationPassword->getValue();
    }
}
