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
    public    $name                                      = __CLASS__;
    protected $enableFailoverSupport                     = null;
    protected $externalSystem                            = null;
    protected $failoverPhoneNumber                       = null;
    protected $failoverStatus                            = null;
    protected $perCallEnableFailoverSupport              = null;
    protected $perCallCallFailureTimeoutSeconds          = null;
    protected $perCallOutboundCallFailureTimeoutSeconds  = null;
    protected $perCallFailoverPhoneNumber                = null;


    public function setEnableFailoverSupport(xs:boolean $enableFailoverSupport = null)
    {
    }

    public function getEnableFailoverSupport()
    {
        return (!$this->enableFailoverSupport) ?: $this->enableFailoverSupport->value();
    }

    public function setExternalSystem($externalSystem = null)
    {
        $this->externalSystem = ($externalSystem InstanceOf RoutePointExternalSystem)
             ? $externalSystem
             : new RoutePointExternalSystem($externalSystem);
    }

    public function getExternalSystem()
    {
        return (!$this->externalSystem) ?: $this->externalSystem->value();
    }

    public function setFailoverPhoneNumber($failoverPhoneNumber = null)
    {
        $this->failoverPhoneNumber = ($failoverPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $failoverPhoneNumber
             : new OutgoingDNorSIPURI($failoverPhoneNumber);
    }

    public function getFailoverPhoneNumber()
    {
        return (!$this->failoverPhoneNumber) ?: $this->failoverPhoneNumber->value();
    }

    public function setFailoverStatus($failoverStatus = null)
    {
        $this->failoverStatus = ($failoverStatus InstanceOf RoutePointFailoverStatus)
             ? $failoverStatus
             : new RoutePointFailoverStatus($failoverStatus);
    }

    public function getFailoverStatus()
    {
        return (!$this->failoverStatus) ?: $this->failoverStatus->value();
    }

    public function setPerCallEnableFailoverSupport(xs:boolean $perCallEnableFailoverSupport = null)
    {
    }

    public function getPerCallEnableFailoverSupport()
    {
        return (!$this->perCallEnableFailoverSupport) ?: $this->perCallEnableFailoverSupport->value();
    }

    public function setPerCallCallFailureTimeoutSeconds($perCallCallFailureTimeoutSeconds = null)
    {
        $this->perCallCallFailureTimeoutSeconds = ($perCallCallFailureTimeoutSeconds InstanceOf RoutePointCallFailureTimeout)
             ? $perCallCallFailureTimeoutSeconds
             : new RoutePointCallFailureTimeout($perCallCallFailureTimeoutSeconds);
    }

    public function getPerCallCallFailureTimeoutSeconds()
    {
        return (!$this->perCallCallFailureTimeoutSeconds) ?: $this->perCallCallFailureTimeoutSeconds->value();
    }

    public function setPerCallOutboundCallFailureTimeoutSeconds($perCallOutboundCallFailureTimeoutSeconds = null)
    {
        $this->perCallOutboundCallFailureTimeoutSeconds = ($perCallOutboundCallFailureTimeoutSeconds InstanceOf RoutePointCallFailureTimeout)
             ? $perCallOutboundCallFailureTimeoutSeconds
             : new RoutePointCallFailureTimeout($perCallOutboundCallFailureTimeoutSeconds);
    }

    public function getPerCallOutboundCallFailureTimeoutSeconds()
    {
        return (!$this->perCallOutboundCallFailureTimeoutSeconds) ?: $this->perCallOutboundCallFailureTimeoutSeconds->value();
    }

    public function setPerCallFailoverPhoneNumber($perCallFailoverPhoneNumber = null)
    {
        $this->perCallFailoverPhoneNumber = ($perCallFailoverPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $perCallFailoverPhoneNumber
             : new OutgoingDNorSIPURI($perCallFailoverPhoneNumber);
    }

    public function getPerCallFailoverPhoneNumber()
    {
        return (!$this->perCallFailoverPhoneNumber) ?: $this->perCallFailoverPhoneNumber->value();
    }
}
