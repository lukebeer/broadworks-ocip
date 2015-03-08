<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDeprecated14; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceInstanceAddProfileTrunkGroup;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationUserName;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\SIPAuthenticationPassword;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\AccessDeviceEndpointAdd;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\ServiceProviderId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxOutgoingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxIncomingCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\MaxActiveCalls;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\GroupId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Add a Trunk Group instance to a group.
 *         The domain is required in the serviceUserId.
 *         The publicUserIdentity in the ServiceInstanceAddProfile is not allowed for trunk groups.
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupTrunkGroupAddInstanceRequest14 extends ComplexType implements ComplexInterface
{
    public    $name                      = __CLASS__;
    protected $serviceProviderId         = null;
    protected $groupId                   = null;
    protected $serviceUserId             = null;
    protected $serviceInstanceProfile    = null;
    protected $accessDeviceEndpoint      = null;
    protected $maxActiveCalls            = null;
    protected $maxIncomingCalls          = null;
    protected $maxOutgoingCalls          = null;
    protected $requireAuthentication     = null;
    protected $sipAuthenticationUserName = null;
    protected $sipAuthenticationPassword = null;

    public function __construct(
         $serviceProviderId,
         $groupId,
         $serviceUserId,
         ServiceInstanceAddProfileTrunkGroup $serviceInstanceProfile,
         AccessDeviceEndpointAdd $accessDeviceEndpoint = null,
         $maxActiveCalls,
         $maxIncomingCalls = null,
         $maxOutgoingCalls = null,
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
        $this->setRequireAuthentication($requireAuthentication);
        $this->setSipAuthenticationUserName($sipAuthenticationUserName);
        $this->setSipAuthenticationPassword($sipAuthenticationPassword);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function setServiceProviderId($serviceProviderId = null)
    {
        $this->serviceProviderId = ($serviceProviderId InstanceOf ServiceProviderId)
             ? $serviceProviderId
             : new ServiceProviderId($serviceProviderId);
    }

    /**
     * Service Provider Id uniquely identifies a service provider.
     *         NOTE: The service provider id has a maximum length of 30 bytes, not 30 characters.
     */
    public function getServiceProviderId()
    {
        return (!$this->serviceProviderId) ?: $this->serviceProviderId->getValue();
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function setGroupId($groupId = null)
    {
        $this->groupId = ($groupId InstanceOf GroupId)
             ? $groupId
             : new GroupId($groupId);
    }

    /**
     * Group Id identifies a group within a service provider or enterprise. The group id is not
     *         unique system wide. It must be combined with a service provider id to be unique across the system.
     */
    public function getGroupId()
    {
        return (!$this->groupId) ?: $this->groupId->getValue();
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
    }

    /**
     * A user id consists of a user-portion optionally followed by an @ sign and a domain name.
     *         If the domain is not specified, it is assumed to be the system default domain.
     *         The domain is required when adding normal users and virtual users, i.e. Auto Attendants,
     *         Hunt Groups, Call Centers....
     *         The domain must not be specified for system-level and service-provider-level administrators.
     */
    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->getValue();
    }

    /**
     * Service Profile Information for a trunk group.
     *         The publicUserIdentity element is not part of ServiceInstanceAddProfileTrunkGroup.
     */
    public function setServiceInstanceProfile(ServiceInstanceAddProfileTrunkGroup $serviceInstanceProfile = null)
    {
        $this->serviceInstanceProfile = ServiceInstanceAddProfileTrunkGroup $serviceInstanceProfile;
    }

    /**
     * Service Profile Information for a trunk group.
     *         The publicUserIdentity element is not part of ServiceInstanceAddProfileTrunkGroup.
     */
    public function getServiceInstanceProfile()
    {
        return (!$this->serviceInstanceProfile) ?: $this->serviceInstanceProfile->getValue();
    }

    /**
     * Access device end point used in the context of add.
     */
    public function setAccessDeviceEndpoint(AccessDeviceEndpointAdd $accessDeviceEndpoint = null)
    {
        $this->accessDeviceEndpoint = AccessDeviceEndpointAdd $accessDeviceEndpoint;
    }

    /**
     * Access device end point used in the context of add.
     */
    public function getAccessDeviceEndpoint()
    {
        return (!$this->accessDeviceEndpoint) ?: $this->accessDeviceEndpoint->getValue();
    }

    /**
     * Maximum Number of Active Calls
     */
    public function setMaxActiveCalls($maxActiveCalls = null)
    {
        $this->maxActiveCalls = ($maxActiveCalls InstanceOf MaxActiveCalls)
             ? $maxActiveCalls
             : new MaxActiveCalls($maxActiveCalls);
    }

    /**
     * Maximum Number of Active Calls
     */
    public function getMaxActiveCalls()
    {
        return (!$this->maxActiveCalls) ?: $this->maxActiveCalls->getValue();
    }

    /**
     * Maximum Number of Incoming Calls
     */
    public function setMaxIncomingCalls($maxIncomingCalls = null)
    {
        $this->maxIncomingCalls = ($maxIncomingCalls InstanceOf MaxIncomingCalls)
             ? $maxIncomingCalls
             : new MaxIncomingCalls($maxIncomingCalls);
    }

    /**
     * Maximum Number of Incoming Calls
     */
    public function getMaxIncomingCalls()
    {
        return (!$this->maxIncomingCalls) ?: $this->maxIncomingCalls->getValue();
    }

    /**
     * Maximum Number of Outgoing Calls
     */
    public function setMaxOutgoingCalls($maxOutgoingCalls = null)
    {
        $this->maxOutgoingCalls = ($maxOutgoingCalls InstanceOf MaxOutgoingCalls)
             ? $maxOutgoingCalls
             : new MaxOutgoingCalls($maxOutgoingCalls);
    }

    /**
     * Maximum Number of Outgoing Calls
     */
    public function getMaxOutgoingCalls()
    {
        return (!$this->maxOutgoingCalls) ?: $this->maxOutgoingCalls->getValue();
    }

    /**
     * 
     */
    public function setRequireAuthentication($requireAuthentication = null)
    {
        $this->requireAuthentication = (boolean) $requireAuthentication;
    }

    /**
     * 
     */
    public function getRequireAuthentication()
    {
        return (!$this->requireAuthentication) ?: $this->requireAuthentication->getValue();
    }

    /**
     * SIP Authentication User Name.
     */
    public function setSipAuthenticationUserName($sipAuthenticationUserName = null)
    {
        $this->sipAuthenticationUserName = ($sipAuthenticationUserName InstanceOf SIPAuthenticationUserName)
             ? $sipAuthenticationUserName
             : new SIPAuthenticationUserName($sipAuthenticationUserName);
    }

    /**
     * SIP Authentication User Name.
     */
    public function getSipAuthenticationUserName()
    {
        return (!$this->sipAuthenticationUserName) ?: $this->sipAuthenticationUserName->getValue();
    }

    /**
     * SIP Authentication Password
     */
    public function setSipAuthenticationPassword($sipAuthenticationPassword = null)
    {
        $this->sipAuthenticationPassword = ($sipAuthenticationPassword InstanceOf SIPAuthenticationPassword)
             ? $sipAuthenticationPassword
             : new SIPAuthenticationPassword($sipAuthenticationPassword);
    }

    /**
     * SIP Authentication Password
     */
    public function getSipAuthenticationPassword()
    {
        return (!$this->sipAuthenticationPassword) ?: $this->sipAuthenticationPassword->getValue();
    }
}
