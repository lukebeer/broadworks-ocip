<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\ExternalEmergencyRoutingConnectionTimeoutSeconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\OutgoingDN;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\NetAddress;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;


/**
     * Request to modify Call External Emergency Routing system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemExternalEmergencyRoutingParametersModifyRequest13mp13 extends ComplexType implements ComplexInterface
{
    public    $name                     = __CLASS__;
    protected $serviceURI               = null;
    protected $defaultEmergencyNumber   = null;
    protected $isActive                 = null;
    protected $supportsDNSSRV           = null;
    protected $connectionTimeoutSeconds = null;

    public function __construct(
         $serviceURI = null,
         $defaultEmergencyNumber = null,
         $isActive = null,
         $supportsDNSSRV = null,
         $connectionTimeoutSeconds = null
    ) {
        $this->setServiceURI($serviceURI);
        $this->setDefaultEmergencyNumber($defaultEmergencyNumber);
        $this->setIsActive($isActive);
        $this->setSupportsDNSSRV($supportsDNSSRV);
        $this->setConnectionTimeoutSeconds($connectionTimeoutSeconds);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function setServiceURI($serviceURI = null)
    {
        $this->serviceURI = ($serviceURI InstanceOf NetAddress)
             ? $serviceURI
             : new NetAddress($serviceURI);
    }

    /**
     * IP Address, hostname, or domain.
     */
    public function getServiceURI()
    {
        return (!$this->serviceURI) ?: $this->serviceURI->getValue();
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function setDefaultEmergencyNumber($defaultEmergencyNumber = null)
    {
        $this->defaultEmergencyNumber = ($defaultEmergencyNumber InstanceOf OutgoingDN)
             ? $defaultEmergencyNumber
             : new OutgoingDN($defaultEmergencyNumber);
    }

    /**
     * An outgoing phone number or a number meant to be dialed. It is longer
     *         than a DN so that equal access digits or access code digits may be
     *         be included.  It cannot be a SIP URL.
     */
    public function getDefaultEmergencyNumber()
    {
        return (!$this->defaultEmergencyNumber) ?: $this->defaultEmergencyNumber->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = (boolean) $isActive;
    }

    /**
     * 
     */
    public function getIsActive()
    {
        return (!$this->isActive) ?: $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setSupportsDNSSRV($supportsDNSSRV = null)
    {
        $this->supportsDNSSRV = (boolean) $supportsDNSSRV;
    }

    /**
     * 
     */
    public function getSupportsDNSSRV()
    {
        return (!$this->supportsDNSSRV) ?: $this->supportsDNSSRV->getValue();
    }

    /**
     * Connection Timer seconds.
     */
    public function setConnectionTimeoutSeconds($connectionTimeoutSeconds = null)
    {
        $this->connectionTimeoutSeconds = ($connectionTimeoutSeconds InstanceOf ExternalEmergencyRoutingConnectionTimeoutSeconds)
             ? $connectionTimeoutSeconds
             : new ExternalEmergencyRoutingConnectionTimeoutSeconds($connectionTimeoutSeconds);
    }

    /**
     * Connection Timer seconds.
     */
    public function getConnectionTimeoutSeconds()
    {
        return (!$this->connectionTimeoutSeconds) ?: $this->connectionTimeoutSeconds->getValue();
    }
}
