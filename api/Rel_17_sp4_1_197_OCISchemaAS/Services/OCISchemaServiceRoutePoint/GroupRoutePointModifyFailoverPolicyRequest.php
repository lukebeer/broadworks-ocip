<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\RoutePointCallFailureTimeout;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Modify the route point failover policy. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointModifyFailoverPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name                                     = __CLASS__;
    protected $serviceUserId                            = null;
    protected $enableFailoverSupport                    = null;
    protected $externalSystem                           = null;
    protected $failoverPhoneNumber                      = null;
    protected $perCallEnableFailoverSupport             = null;
    protected $perCallCallFailureTimeoutSeconds         = null;
    protected $perCallOutboundCallFailureTimeoutSeconds = null;
    protected $perCallFailoverPhoneNumber               = null;

    public function __construct(
         $serviceUserId,
         $enableFailoverSupport = null,
         $externalSystem = null,
         $failoverPhoneNumber = null,
         $perCallEnableFailoverSupport = null,
         $perCallCallFailureTimeoutSeconds = null,
         $perCallOutboundCallFailureTimeoutSeconds = null,
         $perCallFailoverPhoneNumber = null
    ) {
        $this->setServiceUserId($serviceUserId);
        $this->setEnableFailoverSupport($enableFailoverSupport);
        $this->setExternalSystem($externalSystem);
        $this->setFailoverPhoneNumber($failoverPhoneNumber);
        $this->setPerCallEnableFailoverSupport($perCallEnableFailoverSupport);
        $this->setPerCallCallFailureTimeoutSeconds($perCallCallFailureTimeoutSeconds);
        $this->setPerCallOutboundCallFailureTimeoutSeconds($perCallOutboundCallFailureTimeoutSeconds);
        $this->setPerCallFailoverPhoneNumber($perCallFailoverPhoneNumber);
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
     * 
     */
    public function setEnableFailoverSupport($enableFailoverSupport = null)
    {
        $this->enableFailoverSupport = (boolean) $enableFailoverSupport;
    }

    /**
     * 
     */
    public function getEnableFailoverSupport()
    {
        return (!$this->enableFailoverSupport) ?: $this->enableFailoverSupport->getValue();
    }

    /**
     * The Route Point External System's name.
     */
    public function setExternalSystem($externalSystem = null)
    {
        $this->externalSystem = ($externalSystem InstanceOf RoutePointExternalSystem)
             ? $externalSystem
             : new RoutePointExternalSystem($externalSystem);
    }

    /**
     * The Route Point External System's name.
     */
    public function getExternalSystem()
    {
        return (!$this->externalSystem) ?: $this->externalSystem->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setFailoverPhoneNumber($failoverPhoneNumber = null)
    {
        $this->failoverPhoneNumber = ($failoverPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $failoverPhoneNumber
             : new OutgoingDNorSIPURI($failoverPhoneNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getFailoverPhoneNumber()
    {
        return (!$this->failoverPhoneNumber) ?: $this->failoverPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setPerCallEnableFailoverSupport($perCallEnableFailoverSupport = null)
    {
        $this->perCallEnableFailoverSupport = (boolean) $perCallEnableFailoverSupport;
    }

    /**
     * 
     */
    public function getPerCallEnableFailoverSupport()
    {
        return (!$this->perCallEnableFailoverSupport) ?: $this->perCallEnableFailoverSupport->getValue();
    }

    /**
     * The call failure timeout.
     */
    public function setPerCallCallFailureTimeoutSeconds($perCallCallFailureTimeoutSeconds = null)
    {
        $this->perCallCallFailureTimeoutSeconds = ($perCallCallFailureTimeoutSeconds InstanceOf RoutePointCallFailureTimeout)
             ? $perCallCallFailureTimeoutSeconds
             : new RoutePointCallFailureTimeout($perCallCallFailureTimeoutSeconds);
    }

    /**
     * The call failure timeout.
     */
    public function getPerCallCallFailureTimeoutSeconds()
    {
        return (!$this->perCallCallFailureTimeoutSeconds) ?: $this->perCallCallFailureTimeoutSeconds->getValue();
    }

    /**
     * The call failure timeout.
     */
    public function setPerCallOutboundCallFailureTimeoutSeconds($perCallOutboundCallFailureTimeoutSeconds = null)
    {
        $this->perCallOutboundCallFailureTimeoutSeconds = ($perCallOutboundCallFailureTimeoutSeconds InstanceOf RoutePointCallFailureTimeout)
             ? $perCallOutboundCallFailureTimeoutSeconds
             : new RoutePointCallFailureTimeout($perCallOutboundCallFailureTimeoutSeconds);
    }

    /**
     * The call failure timeout.
     */
    public function getPerCallOutboundCallFailureTimeoutSeconds()
    {
        return (!$this->perCallOutboundCallFailureTimeoutSeconds) ?: $this->perCallOutboundCallFailureTimeoutSeconds->getValue();
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function setPerCallFailoverPhoneNumber($perCallFailoverPhoneNumber = null)
    {
        $this->perCallFailoverPhoneNumber = ($perCallFailoverPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $perCallFailoverPhoneNumber
             : new OutgoingDNorSIPURI($perCallFailoverPhoneNumber);
    }

    /**
     * Phone Number or SIP URI that can be used to dial.
     *         URI Validation:
     *         - must be of the format string@string where string is at least one valid character and there is one and only one @.
     *         - don't allow sip:
     *         - allow the following characters in the user portions:
     *           alphanumeric   -   _   .   !   ~   *   '   (   )
     *         - allow the following characters in the host portion:
     *           alphanumeric   -   .
     */
    public function getPerCallFailoverPhoneNumber()
    {
        return (!$this->perCallFailoverPhoneNumber) ?: $this->perCallFailoverPhoneNumber->getValue();
    }
}
