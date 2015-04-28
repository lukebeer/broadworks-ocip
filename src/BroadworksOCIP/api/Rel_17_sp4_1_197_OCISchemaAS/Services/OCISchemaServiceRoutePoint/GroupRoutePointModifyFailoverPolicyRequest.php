<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceRoutePoint\RoutePointCallFailureTimeout;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\RoutePointExternalSystem;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDNorSIPURI;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\UserId;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * Modify the route point failover policy. 
 *         The response is either a SuccessResponse or an ErrorResponse.
 */
class GroupRoutePointModifyFailoverPolicyRequest extends ComplexType implements ComplexInterface
{
    public    $elementName = 'GroupRoutePointModifyFailoverPolicyRequest';
    protected $serviceUserId;
    protected $enableFailoverSupport;
    protected $externalSystem;
    protected $failoverPhoneNumber;
    protected $perCallEnableFailoverSupport;
    protected $perCallCallFailureTimeoutSeconds;
    protected $perCallOutboundCallFailureTimeoutSeconds;
    protected $perCallFailoverPhoneNumber;

    public function __construct(
         $serviceUserId = '',
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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceUserId($serviceUserId = null)
    {
        $this->serviceUserId = ($serviceUserId InstanceOf UserId)
             ? $serviceUserId
             : new UserId($serviceUserId);
        $this->serviceUserId->setElementName('serviceUserId');
        return $this;
    }

    /**
     * 
     * @return UserId $serviceUserId
     */
    public function getServiceUserId()
    {
        return ($this->serviceUserId)
            ? $this->serviceUserId->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableFailoverSupport($enableFailoverSupport = null)
    {
        $this->enableFailoverSupport = new PrimitiveType($enableFailoverSupport);
        $this->enableFailoverSupport->setElementName('enableFailoverSupport');
        return $this;
    }

    /**
     * 
     * @return boolean $enableFailoverSupport
     */
    public function getEnableFailoverSupport()
    {
        return ($this->enableFailoverSupport)
            ? $this->enableFailoverSupport->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setExternalSystem($externalSystem = null)
    {
        $this->externalSystem = ($externalSystem InstanceOf RoutePointExternalSystem)
             ? $externalSystem
             : new RoutePointExternalSystem($externalSystem);
        $this->externalSystem->setElementName('externalSystem');
        return $this;
    }

    /**
     * 
     * @return RoutePointExternalSystem $externalSystem
     */
    public function getExternalSystem()
    {
        return ($this->externalSystem)
            ? $this->externalSystem->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setFailoverPhoneNumber($failoverPhoneNumber = null)
    {
        $this->failoverPhoneNumber = ($failoverPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $failoverPhoneNumber
             : new OutgoingDNorSIPURI($failoverPhoneNumber);
        $this->failoverPhoneNumber->setElementName('failoverPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $failoverPhoneNumber
     */
    public function getFailoverPhoneNumber()
    {
        return ($this->failoverPhoneNumber)
            ? $this->failoverPhoneNumber->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPerCallEnableFailoverSupport($perCallEnableFailoverSupport = null)
    {
        $this->perCallEnableFailoverSupport = new PrimitiveType($perCallEnableFailoverSupport);
        $this->perCallEnableFailoverSupport->setElementName('perCallEnableFailoverSupport');
        return $this;
    }

    /**
     * 
     * @return boolean $perCallEnableFailoverSupport
     */
    public function getPerCallEnableFailoverSupport()
    {
        return ($this->perCallEnableFailoverSupport)
            ? $this->perCallEnableFailoverSupport->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPerCallCallFailureTimeoutSeconds($perCallCallFailureTimeoutSeconds = null)
    {
        $this->perCallCallFailureTimeoutSeconds = ($perCallCallFailureTimeoutSeconds InstanceOf RoutePointCallFailureTimeout)
             ? $perCallCallFailureTimeoutSeconds
             : new RoutePointCallFailureTimeout($perCallCallFailureTimeoutSeconds);
        $this->perCallCallFailureTimeoutSeconds->setElementName('perCallCallFailureTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return RoutePointCallFailureTimeout $perCallCallFailureTimeoutSeconds
     */
    public function getPerCallCallFailureTimeoutSeconds()
    {
        return ($this->perCallCallFailureTimeoutSeconds)
            ? $this->perCallCallFailureTimeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPerCallOutboundCallFailureTimeoutSeconds($perCallOutboundCallFailureTimeoutSeconds = null)
    {
        $this->perCallOutboundCallFailureTimeoutSeconds = ($perCallOutboundCallFailureTimeoutSeconds InstanceOf RoutePointCallFailureTimeout)
             ? $perCallOutboundCallFailureTimeoutSeconds
             : new RoutePointCallFailureTimeout($perCallOutboundCallFailureTimeoutSeconds);
        $this->perCallOutboundCallFailureTimeoutSeconds->setElementName('perCallOutboundCallFailureTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return RoutePointCallFailureTimeout $perCallOutboundCallFailureTimeoutSeconds
     */
    public function getPerCallOutboundCallFailureTimeoutSeconds()
    {
        return ($this->perCallOutboundCallFailureTimeoutSeconds)
            ? $this->perCallOutboundCallFailureTimeoutSeconds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setPerCallFailoverPhoneNumber($perCallFailoverPhoneNumber = null)
    {
        $this->perCallFailoverPhoneNumber = ($perCallFailoverPhoneNumber InstanceOf OutgoingDNorSIPURI)
             ? $perCallFailoverPhoneNumber
             : new OutgoingDNorSIPURI($perCallFailoverPhoneNumber);
        $this->perCallFailoverPhoneNumber->setElementName('perCallFailoverPhoneNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDNorSIPURI $perCallFailoverPhoneNumber
     */
    public function getPerCallFailoverPhoneNumber()
    {
        return ($this->perCallFailoverPhoneNumber)
            ? $this->perCallFailoverPhoneNumber->getElementValue()
            : null;
    }
}
