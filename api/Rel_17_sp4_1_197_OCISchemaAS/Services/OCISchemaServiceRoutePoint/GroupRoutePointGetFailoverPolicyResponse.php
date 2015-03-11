<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\RoutePointCallFailureTimeout;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\RoutePointFailoverStatus;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Response to the GroupRoutePointGetFailoverPolicyRequest.
 */
class GroupRoutePointGetFailoverPolicyResponse extends ComplexType implements ComplexInterface
{
    public    $name                                     = 'GroupRoutePointGetFailoverPolicyResponse';
    protected $enableFailoverSupport                    = null;
    protected $externalSystem                           = null;
    protected $failoverPhoneNumber                      = null;
    protected $failoverStatus                           = null;
    protected $perCallEnableFailoverSupport             = null;
    protected $perCallCallFailureTimeoutSeconds         = null;
    protected $perCallOutboundCallFailureTimeoutSeconds = null;
    protected $perCallFailoverPhoneNumber               = null;

    /**
     * @return GroupRoutePointGetFailoverPolicyResponse
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableFailoverSupport($enableFailoverSupport = null)
    {
        if (!$enableFailoverSupport) return $this;
        $this->enableFailoverSupport = new PrimitiveType($enableFailoverSupport);
        $this->enableFailoverSupport->setName('enableFailoverSupport');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getEnableFailoverSupport()
    {
        return $this->enableFailoverSupport->getValue();
    }

    /**
     * 
     */
    public function setExternalSystem($externalSystem = null)
    {
        if (!$externalSystem) return $this;
        $this->externalSystem = ($externalSystem InstanceOf RoutePointExternalSystem)
             ? $externalSystem
             : new RoutePointExternalSystem($externalSystem);
        $this->externalSystem->setName('externalSystem');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem
     */
    public function getExternalSystem()
    {
        return $this->externalSystem->getValue();
    }

    /**
     * 
     */
    public function setFailoverPhoneNumber($failoverPhoneNumber = null)
    {
        if (!$failoverPhoneNumber) return $this;
        $this->failoverPhoneNumber = ($failoverPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $failoverPhoneNumber
             : new OutgoingDNorSIPURI($failoverPhoneNumber);
        $this->failoverPhoneNumber->setName('failoverPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getFailoverPhoneNumber()
    {
        return $this->failoverPhoneNumber->getValue();
    }

    /**
     * 
     */
    public function setFailoverStatus($failoverStatus = null)
    {
        if (!$failoverStatus) return $this;
        $this->failoverStatus = ($failoverStatus InstanceOf RoutePointFailoverStatus)
             ? $failoverStatus
             : new RoutePointFailoverStatus($failoverStatus);
        $this->failoverStatus->setName('failoverStatus');
        return $this;
    }

    /**
     * 
     * @return RoutePointFailoverStatus
     */
    public function getFailoverStatus()
    {
        return $this->failoverStatus->getValue();
    }

    /**
     * 
     */
    public function setPerCallEnableFailoverSupport($perCallEnableFailoverSupport = null)
    {
        if (!$perCallEnableFailoverSupport) return $this;
        $this->perCallEnableFailoverSupport = new PrimitiveType($perCallEnableFailoverSupport);
        $this->perCallEnableFailoverSupport->setName('perCallEnableFailoverSupport');
        return $this;
    }

    /**
     * 
     * @return xs:boolean
     */
    public function getPerCallEnableFailoverSupport()
    {
        return $this->perCallEnableFailoverSupport->getValue();
    }

    /**
     * 
     */
    public function setPerCallCallFailureTimeoutSeconds($perCallCallFailureTimeoutSeconds = null)
    {
        if (!$perCallCallFailureTimeoutSeconds) return $this;
        $this->perCallCallFailureTimeoutSeconds = ($perCallCallFailureTimeoutSeconds InstanceOf RoutePointCallFailureTimeout)
             ? $perCallCallFailureTimeoutSeconds
             : new RoutePointCallFailureTimeout($perCallCallFailureTimeoutSeconds);
        $this->perCallCallFailureTimeoutSeconds->setName('perCallCallFailureTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return RoutePointCallFailureTimeout
     */
    public function getPerCallCallFailureTimeoutSeconds()
    {
        return $this->perCallCallFailureTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setPerCallOutboundCallFailureTimeoutSeconds($perCallOutboundCallFailureTimeoutSeconds = null)
    {
        if (!$perCallOutboundCallFailureTimeoutSeconds) return $this;
        $this->perCallOutboundCallFailureTimeoutSeconds = ($perCallOutboundCallFailureTimeoutSeconds InstanceOf RoutePointCallFailureTimeout)
             ? $perCallOutboundCallFailureTimeoutSeconds
             : new RoutePointCallFailureTimeout($perCallOutboundCallFailureTimeoutSeconds);
        $this->perCallOutboundCallFailureTimeoutSeconds->setName('perCallOutboundCallFailureTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return RoutePointCallFailureTimeout
     */
    public function getPerCallOutboundCallFailureTimeoutSeconds()
    {
        return $this->perCallOutboundCallFailureTimeoutSeconds->getValue();
    }

    /**
     * 
     */
    public function setPerCallFailoverPhoneNumber($perCallFailoverPhoneNumber = null)
    {
        if (!$perCallFailoverPhoneNumber) return $this;
        $this->perCallFailoverPhoneNumber = ($perCallFailoverPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $perCallFailoverPhoneNumber
             : new OutgoingDNorSIPURI($perCallFailoverPhoneNumber);
        $this->perCallFailoverPhoneNumber->setName('perCallFailoverPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI
     */
    public function getPerCallFailoverPhoneNumber()
    {
        return $this->perCallFailoverPhoneNumber->getValue();
    }
}
