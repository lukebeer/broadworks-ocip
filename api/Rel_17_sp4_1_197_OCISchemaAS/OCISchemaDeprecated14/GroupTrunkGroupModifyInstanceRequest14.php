<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceModifyProfileTrunkGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointModify;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\BurstingMaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupCapacityExceededAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapInitialThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrapOffsetThreshold;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupUnreachableDestinationAction;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\TrunkGroupInvitationTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationPassword;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify a Trunk Group Instance in a group.
 *         The publicUserIdentity in the ServiceInstanceModifyProfile is not allowed for trunk groups.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupModifyInstanceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $serviceInstanceProfile=null,
             AccessDeviceEndpointModify $accessDeviceEndpoint=null,
             $maxActiveCalls=null,
             $maxIncomingCalls=null,
             $maxOutgoingCalls=null,
             $enableBursting=null,
             $burstingMaxActiveCalls=null,
             $burstingMaxIncomingCalls=null,
             $burstingMaxOutgoingCalls=null,
             $capacityExceededAction=null,
             $capacityExceededForwardAddress=null,
             $capacityExceededRerouteTrunkGroupId=null,
             $capacityExceededTrapInitialCalls=null,
             $capacityExceededTrapOffsetCalls=null,
             $unreachableDestinationAction=null,
             $unreachableDestinationForwardAddress=null,
             $unreachableDestinationRerouteTrunkGroupId=null,
             $unreachableDestinationTrapInitialCalls=null,
             $unreachableDestinationTrapOffsetCalls=null,
             $invitationTimeout=null,
             $requireAuthentication=null,
             $sipAuthenticationUserName=null,
             $sipAuthenticationPassword=null
    ) {
        $this->serviceUserId                             = new UserId($serviceUserId);
        $this->serviceInstanceProfile                    = $serviceInstanceProfile;
        $this->accessDeviceEndpoint                      = $accessDeviceEndpoint;
        $this->maxActiveCalls                            = new MaxActiveCalls($maxActiveCalls);
        $this->maxIncomingCalls                          = new MaxIncomingCalls($maxIncomingCalls);
        $this->maxOutgoingCalls                          = new MaxOutgoingCalls($maxOutgoingCalls);
        $this->enableBursting                            = $enableBursting;
        $this->burstingMaxActiveCalls                    = new BurstingMaxActiveCalls($burstingMaxActiveCalls);
        $this->burstingMaxIncomingCalls                  = new BurstingMaxIncomingCalls($burstingMaxIncomingCalls);
        $this->burstingMaxOutgoingCalls                  = new BurstingMaxOutgoingCalls($burstingMaxOutgoingCalls);
        $this->capacityExceededAction                    = new TrunkGroupCapacityExceededAction($capacityExceededAction);
        $this->capacityExceededForwardAddress            = new OutgoingDNorSIPURI($capacityExceededForwardAddress);
        $this->capacityExceededRerouteTrunkGroupId       = new UserId($capacityExceededRerouteTrunkGroupId);
        $this->capacityExceededTrapInitialCalls          = new TrapInitialThreshold($capacityExceededTrapInitialCalls);
        $this->capacityExceededTrapOffsetCalls           = new TrapOffsetThreshold($capacityExceededTrapOffsetCalls);
        $this->unreachableDestinationAction              = $unreachableDestinationAction;
        $this->unreachableDestinationForwardAddress      = new OutgoingDNorSIPURI($unreachableDestinationForwardAddress);
        $this->unreachableDestinationRerouteTrunkGroupId = new UserId($unreachableDestinationRerouteTrunkGroupId);
        $this->unreachableDestinationTrapInitialCalls    = new TrapInitialThreshold($unreachableDestinationTrapInitialCalls);
        $this->unreachableDestinationTrapOffsetCalls     = new TrapOffsetThreshold($unreachableDestinationTrapOffsetCalls);
        $this->invitationTimeout                         = new TrunkGroupInvitationTimeoutSeconds($invitationTimeout);
        $this->requireAuthentication                     = $requireAuthentication;
        $this->sipAuthenticationUserName                 = new SIPAuthenticationUserName($sipAuthenticationUserName);
        $this->sipAuthenticationPassword                 = new SIPAuthenticationPassword($sipAuthenticationPassword);
        $this->args                                      = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setServiceInstanceProfile($serviceInstanceProfile)
    {
        $serviceInstanceProfile and $this->serviceInstanceProfile = new ServiceInstanceModifyProfileTrunkGroup($serviceInstanceProfile);
    }

    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->value();
    }

    public function setAccessDeviceEndpoint($accessDeviceEndpoint)
    {
        $accessDeviceEndpoint and $this->accessDeviceEndpoint = new AccessDeviceEndpointModify($accessDeviceEndpoint);
    }

    public function getAccessDeviceEndpoint()
    {
        return (!$this->accessDeviceEndpoint) ?: $this->accessDeviceEndpoint->value();
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

    public function setCapacityExceededRerouteTrunkGroupId($capacityExceededRerouteTrunkGroupId)
    {
        $capacityExceededRerouteTrunkGroupId and $this->capacityExceededRerouteTrunkGroupId = new UserId($capacityExceededRerouteTrunkGroupId);
    }

    public function getCapacityExceededRerouteTrunkGroupId()
    {
        return (!$this->capacityExceededRerouteTrunkGroupId) ?: $this->capacityExceededRerouteTrunkGroupId->value();
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

    public function setUnreachableDestinationRerouteTrunkGroupId($unreachableDestinationRerouteTrunkGroupId)
    {
        $unreachableDestinationRerouteTrunkGroupId and $this->unreachableDestinationRerouteTrunkGroupId = new UserId($unreachableDestinationRerouteTrunkGroupId);
    }

    public function getUnreachableDestinationRerouteTrunkGroupId()
    {
        return (!$this->unreachableDestinationRerouteTrunkGroupId) ?: $this->unreachableDestinationRerouteTrunkGroupId->value();
    }

    public function setUnreachableDestinationTrapInitialCalls($unreachableDestinationTrapInitialCalls)
    {
        $unreachableDestinationTrapInitialCalls and $this->unreachableDestinationTrapInitialCalls = new TrapInitialThreshold($unreachableDestinationTrapInitialCalls);
    }

    public function getUnreachableDestinationTrapInitialCalls()
    {
        return (!$this->unreachableDestinationTrapInitialCalls) ?: $this->unreachableDestinationTrapInitialCalls->value();
    }

    public function setUnreachableDestinationTrapOffsetCalls($unreachableDestinationTrapOffsetCalls)
    {
        $unreachableDestinationTrapOffsetCalls and $this->unreachableDestinationTrapOffsetCalls = new TrapOffsetThreshold($unreachableDestinationTrapOffsetCalls);
    }

    public function getUnreachableDestinationTrapOffsetCalls()
    {
        return (!$this->unreachableDestinationTrapOffsetCalls) ?: $this->unreachableDestinationTrapOffsetCalls->value();
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
        $sipAuthenticationPassword and $this->sipAuthenticationPassword = new SIPAuthenticationPassword($sipAuthenticationPassword);
    }

    public function getSipAuthenticationPassword()
    {
        return (!$this->sipAuthenticationPassword) ?: $this->sipAuthenticationPassword->value();
    }
}
