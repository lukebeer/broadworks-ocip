<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceTrunkGroup\TrunkGroupUnreachableDestinationAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupInvitationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCapacityExceededAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated16\ServiceInstanceReadProfile;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointRead14;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapInitialThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapOffsetThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to GroupTrunkGroupGetInstanceRequest14sp1.
 *         The publicUserIdentity in the ServiceInstanceReadProfile is not used for trunk groups.
 *         Returns the profile information for the Trunk Group.
 */
class GroupTrunkGroupGetInstanceResponse14sp1 extends ComplexType implements ComplexInterface
{
    public    $name                                      = 'GroupTrunkGroupGetInstanceResponse14sp1';
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

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14\GroupTrunkGroupGetInstanceResponse14sp1 $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceInstanceProfile(ServiceInstanceReadProfile $serviceInstanceProfile = null)
    {
        if (!$serviceInstanceProfile) return $this;
        $this->serviceInstanceProfile = $serviceInstanceProfile;
        $this->serviceInstanceProfile->setName('serviceInstanceProfile');
        return $this;
    }

    /**
     * 
     * @return ServiceInstanceReadProfile $serviceInstanceProfile
     */
    public function getServiceInstanceProfile()
    {
        return $this->serviceInstanceProfile;
    }

    /**
     * 
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointRead14 $accessDeviceEndpoint = null)
    {
        if (!$accessDeviceEndpoint) return $this;
        $this->accessDeviceEndpoint = $accessDeviceEndpoint;
        $this->accessDeviceEndpoint->setName('accessDeviceEndpoint');
        return $this;
    }

    /**
     * 
     * @return AccessDeviceEndpointRead14 $accessDeviceEndpoint
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
}
