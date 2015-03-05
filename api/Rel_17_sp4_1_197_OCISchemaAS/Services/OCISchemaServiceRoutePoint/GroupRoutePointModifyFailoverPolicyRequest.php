<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\xs:boolean;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointCallFailureTimeout;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
 * Modify the route point failover policy. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointModifyFailoverPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $name = __CLASS__;

    public function __construct(
             $serviceUserId,
             $enableFailoverSupport=null,
             $externalSystem=null,
             $failoverPhoneNumber=null,
             $perCallEnableFailoverSupport=null,
             $perCallCallFailureTimeoutSeconds=null,
             $perCallOutboundCallFailureTimeoutSeconds=null,
             $perCallFailoverPhoneNumber=null
    ) {
        $this->serviceUserId                            = new UserId($serviceUserId);
        $this->enableFailoverSupport                    = $enableFailoverSupport;
        $this->externalSystem                           = new RoutePointExternalSystem($externalSystem);
        $this->failoverPhoneNumber                      = new OutgoingDNorSIPURI($failoverPhoneNumber);
        $this->perCallEnableFailoverSupport             = $perCallEnableFailoverSupport;
        $this->perCallCallFailureTimeoutSeconds         = $perCallCallFailureTimeoutSeconds;
        $this->perCallOutboundCallFailureTimeoutSeconds = $perCallOutboundCallFailureTimeoutSeconds;
        $this->perCallFailoverPhoneNumber               = new OutgoingDNorSIPURI($perCallFailoverPhoneNumber);
        $this->args                                     = func_get_args();
    }

    public function setServiceUserId($serviceUserId)
    {
        $serviceUserId and $this->serviceUserId = new UserId($serviceUserId);
    }

    public function getServiceUserId()
    {
        return (!$this->serviceUserId) ?: $this->serviceUserId->value();
    }

    public function setEnableFailoverSupport($enableFailoverSupport)
    {
        $enableFailoverSupport and $this->enableFailoverSupport = new xs:boolean($enableFailoverSupport);
    }

    public function getEnableFailoverSupport()
    {
        return (!$this->enableFailoverSupport) ?: $this->enableFailoverSupport->value();
    }

    public function setExternalSystem($externalSystem)
    {
        $externalSystem and $this->externalSystem = new RoutePointExternalSystem($externalSystem);
    }

    public function getExternalSystem()
    {
        return (!$this->externalSystem) ?: $this->externalSystem->value();
    }

    public function setFailoverPhoneNumber($failoverPhoneNumber)
    {
        $failoverPhoneNumber and $this->failoverPhoneNumber = new OutgoingDNorSIPURI($failoverPhoneNumber);
    }

    public function getFailoverPhoneNumber()
    {
        return (!$this->failoverPhoneNumber) ?: $this->failoverPhoneNumber->value();
    }

    public function setPerCallEnableFailoverSupport($perCallEnableFailoverSupport)
    {
        $perCallEnableFailoverSupport and $this->perCallEnableFailoverSupport = new xs:boolean($perCallEnableFailoverSupport);
    }

    public function getPerCallEnableFailoverSupport()
    {
        return (!$this->perCallEnableFailoverSupport) ?: $this->perCallEnableFailoverSupport->value();
    }

    public function setPerCallCallFailureTimeoutSeconds($perCallCallFailureTimeoutSeconds)
    {
        $perCallCallFailureTimeoutSeconds and $this->perCallCallFailureTimeoutSeconds = new RoutePointCallFailureTimeout($perCallCallFailureTimeoutSeconds);
    }

    public function getPerCallCallFailureTimeoutSeconds()
    {
        return (!$this->perCallCallFailureTimeoutSeconds) ?: $this->perCallCallFailureTimeoutSeconds->value();
    }

    public function setPerCallOutboundCallFailureTimeoutSeconds($perCallOutboundCallFailureTimeoutSeconds)
    {
        $perCallOutboundCallFailureTimeoutSeconds and $this->perCallOutboundCallFailureTimeoutSeconds = new RoutePointCallFailureTimeout($perCallOutboundCallFailureTimeoutSeconds);
    }

    public function getPerCallOutboundCallFailureTimeoutSeconds()
    {
        return (!$this->perCallOutboundCallFailureTimeoutSeconds) ?: $this->perCallOutboundCallFailureTimeoutSeconds->value();
    }

    public function setPerCallFailoverPhoneNumber($perCallFailoverPhoneNumber)
    {
        $perCallFailoverPhoneNumber and $this->perCallFailoverPhoneNumber = new OutgoingDNorSIPURI($perCallFailoverPhoneNumber);
    }

    public function getPerCallFailoverPhoneNumber()
    {
        return (!$this->perCallFailoverPhoneNumber) ?: $this->perCallFailoverPhoneNumber->value();
    }
}
