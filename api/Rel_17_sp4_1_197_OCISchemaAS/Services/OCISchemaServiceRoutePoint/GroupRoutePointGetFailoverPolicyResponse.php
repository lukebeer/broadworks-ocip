<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\RoutePointCallFailureTimeout;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\RoutePointFailoverStatus;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Response to the GroupRoutePointGetFailoverPolicyRequest.
 */
class GroupRoutePointGetFailoverPolicyResponse extends ComplexType implements ComplexInterface
{
    const     RESPONSE_TYPE                             = 'Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint\GroupRoutePointGetFailoverPolicyResponse';
    public    $name                                     = __CLASS__;
    protected $enableFailoverSupport                    = null;
    protected $externalSystem                           = null;
    protected $failoverPhoneNumber                      = null;
    protected $failoverStatus                           = null;
    protected $perCallEnableFailoverSupport             = null;
    protected $perCallCallFailureTimeoutSeconds         = null;
    protected $perCallOutboundCallFailureTimeoutSeconds = null;
    protected $perCallFailoverPhoneNumber               = null;


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
     * The Route Point failover status.
     */
    public function setFailoverStatus($failoverStatus = null)
    {
        $this->failoverStatus = ($failoverStatus InstanceOf RoutePointFailoverStatus)
             ? $failoverStatus
             : new RoutePointFailoverStatus($failoverStatus);
    }

    /**
     * The Route Point failover status.
     */
    public function getFailoverStatus()
    {
        return (!$this->failoverStatus) ?: $this->failoverStatus->getValue();
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
