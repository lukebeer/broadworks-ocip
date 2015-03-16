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
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * Request to modify Call External Emergency Routing system parameters.
 *         The response is either SuccessResponse or ErrorResponse.
 */
class SystemExternalEmergencyRoutingParametersModifyRequest13mp13 extends ComplexType implements ComplexInterface
{
    public    $name = 'SystemExternalEmergencyRoutingParametersModifyRequest13mp13';
    protected $serviceURI;
    protected $defaultEmergencyNumber;
    protected $isActive;
    protected $supportsDNSSRV;
    protected $connectionTimeoutSeconds;

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
     * @return mixed $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setServiceURI($serviceURI = null)
    {
        $this->serviceURI = ($serviceURI InstanceOf NetAddress)
             ? $serviceURI
             : new NetAddress($serviceURI);
        $this->serviceURI->setName('serviceURI');
        return $this;
    }

    /**
     * 
     * @return NetAddress $serviceURI
     */
    public function getServiceURI()
    {
        return ($this->serviceURI) ? $this->serviceURI->getValue() : null;
    }

    /**
     * 
     */
    public function setDefaultEmergencyNumber($defaultEmergencyNumber = null)
    {
        $this->defaultEmergencyNumber = ($defaultEmergencyNumber InstanceOf OutgoingDN)
             ? $defaultEmergencyNumber
             : new OutgoingDN($defaultEmergencyNumber);
        $this->defaultEmergencyNumber->setName('defaultEmergencyNumber');
        return $this;
    }

    /**
     * 
     * @return OutgoingDN $defaultEmergencyNumber
     */
    public function getDefaultEmergencyNumber()
    {
        return ($this->defaultEmergencyNumber) ? $this->defaultEmergencyNumber->getValue() : null;
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        $this->isActive = new PrimitiveType($isActive);
        $this->isActive->setName('isActive');
        return $this;
    }

    /**
     * 
     * @return boolean $isActive
     */
    public function getIsActive()
    {
        return ($this->isActive) ? $this->isActive->getValue() : null;
    }

    /**
     * 
     */
    public function setSupportsDNSSRV($supportsDNSSRV = null)
    {
        $this->supportsDNSSRV = new PrimitiveType($supportsDNSSRV);
        $this->supportsDNSSRV->setName('supportsDNSSRV');
        return $this;
    }

    /**
     * 
     * @return boolean $supportsDNSSRV
     */
    public function getSupportsDNSSRV()
    {
        return ($this->supportsDNSSRV) ? $this->supportsDNSSRV->getValue() : null;
    }

    /**
     * 
     */
    public function setConnectionTimeoutSeconds($connectionTimeoutSeconds = null)
    {
        $this->connectionTimeoutSeconds = ($connectionTimeoutSeconds InstanceOf ExternalEmergencyRoutingConnectionTimeoutSeconds)
             ? $connectionTimeoutSeconds
             : new ExternalEmergencyRoutingConnectionTimeoutSeconds($connectionTimeoutSeconds);
        $this->connectionTimeoutSeconds->setName('connectionTimeoutSeconds');
        return $this;
    }

    /**
     * 
     * @return ExternalEmergencyRoutingConnectionTimeoutSeconds $connectionTimeoutSeconds
     */
    public function getConnectionTimeoutSeconds()
    {
        return ($this->connectionTimeoutSeconds) ? $this->connectionTimeoutSeconds->getValue() : null;
    }
}
