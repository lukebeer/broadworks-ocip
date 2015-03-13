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
 * Response to SystemExternalEmergencyRoutingParametersGetRequest13mp13.
 *         Contains a list of system External Emergency Routing parameters.
 */
class SystemExternalEmergencyRoutingParametersGetResponse13mp13 extends ComplexType implements ComplexInterface
{
    public    $name                     = 'SystemExternalEmergencyRoutingParametersGetResponse13mp13';
    protected $serviceURI               = null;
    protected $defaultEmergencyNumber   = null;
    protected $isActive                 = null;
    protected $supportsDNSSRV           = null;
    protected $connectionTimeoutSeconds = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaSystem\SystemExternalEmergencyRoutingParametersGetResponse13mp13 $response
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
        if (!$serviceURI) return $this;
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
        return $this->serviceURI->getValue();
    }

    /**
     * 
     */
    public function setDefaultEmergencyNumber($defaultEmergencyNumber = null)
    {
        if (!$defaultEmergencyNumber) return $this;
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
        return $this->defaultEmergencyNumber->getValue();
    }

    /**
     * 
     */
    public function setIsActive($isActive = null)
    {
        if (!$isActive) return $this;
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
        return $this->isActive->getValue();
    }

    /**
     * 
     */
    public function setSupportsDNSSRV($supportsDNSSRV = null)
    {
        if (!$supportsDNSSRV) return $this;
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
        return $this->supportsDNSSRV->getValue();
    }

    /**
     * 
     */
    public function setConnectionTimeoutSeconds($connectionTimeoutSeconds = null)
    {
        if (!$connectionTimeoutSeconds) return $this;
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
        return $this->connectionTimeoutSeconds->getValue();
    }
}
