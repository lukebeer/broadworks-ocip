<?php
/**
 * This file is part of http://github.com/LukeBeer/BroadworksOCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\IMRNTimeoutMilliseconds;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use BroadworksOCIP\Builder\Types\PrimitiveType;
use BroadworksOCIP\Builder\Types\ComplexInterface;
use BroadworksOCIP\Builder\Types\ComplexType;
use BroadworksOCIP\Response\ResponseOutput;
use BroadworksOCIP\Client\Client;


/**
 * The response to a SystemBroadWorksMobilityGetRequest.
 */
class SystemBroadWorksMobilityGetResponse extends ComplexType implements ComplexInterface
{
    public    $elementName = 'SystemBroadWorksMobilityGetResponse';
    protected $enableLocationServices;
    protected $enableMSRNLookup;
    protected $enableMobileStateChecking;
    protected $denyCallOriginations;
    protected $denyCallTerminations;
    protected $imrnTimeoutMillisecnds;
    protected $scfSignalingIPAddress;
    protected $scfSignalingPort;

    /**
     * @return \BroadworksOCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\SystemBroadWorksMobilityGetResponse $response
     */
    public function get(Client $client, $responseOutput = ResponseOutput::STD)
    {
        return $this->send($client, $responseOutput);
    }

    /**
     * 
     */
    public function setEnableLocationServices($enableLocationServices = null)
    {
        $this->enableLocationServices = new PrimitiveType($enableLocationServices);
        $this->enableLocationServices->setElementName('enableLocationServices');
        return $this;
    }

    /**
     * 
     * @return boolean $enableLocationServices
     */
    public function getEnableLocationServices()
    {
        return ($this->enableLocationServices)
            ? $this->enableLocationServices->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableMSRNLookup($enableMSRNLookup = null)
    {
        $this->enableMSRNLookup = new PrimitiveType($enableMSRNLookup);
        $this->enableMSRNLookup->setElementName('enableMSRNLookup');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMSRNLookup
     */
    public function getEnableMSRNLookup()
    {
        return ($this->enableMSRNLookup)
            ? $this->enableMSRNLookup->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setEnableMobileStateChecking($enableMobileStateChecking = null)
    {
        $this->enableMobileStateChecking = new PrimitiveType($enableMobileStateChecking);
        $this->enableMobileStateChecking->setElementName('enableMobileStateChecking');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMobileStateChecking
     */
    public function getEnableMobileStateChecking()
    {
        return ($this->enableMobileStateChecking)
            ? $this->enableMobileStateChecking->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDenyCallOriginations($denyCallOriginations = null)
    {
        $this->denyCallOriginations = new PrimitiveType($denyCallOriginations);
        $this->denyCallOriginations->setElementName('denyCallOriginations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallOriginations
     */
    public function getDenyCallOriginations()
    {
        return ($this->denyCallOriginations)
            ? $this->denyCallOriginations->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setDenyCallTerminations($denyCallTerminations = null)
    {
        $this->denyCallTerminations = new PrimitiveType($denyCallTerminations);
        $this->denyCallTerminations->setElementName('denyCallTerminations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallTerminations
     */
    public function getDenyCallTerminations()
    {
        return ($this->denyCallTerminations)
            ? $this->denyCallTerminations->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setImrnTimeoutMillisecnds($imrnTimeoutMillisecnds = null)
    {
        $this->imrnTimeoutMillisecnds = ($imrnTimeoutMillisecnds InstanceOf IMRNTimeoutMilliseconds)
             ? $imrnTimeoutMillisecnds
             : new IMRNTimeoutMilliseconds($imrnTimeoutMillisecnds);
        $this->imrnTimeoutMillisecnds->setElementName('imrnTimeoutMillisecnds');
        return $this;
    }

    /**
     * 
     * @return IMRNTimeoutMilliseconds $imrnTimeoutMillisecnds
     */
    public function getImrnTimeoutMillisecnds()
    {
        return ($this->imrnTimeoutMillisecnds)
            ? $this->imrnTimeoutMillisecnds->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScfSignalingIPAddress($scfSignalingIPAddress = null)
    {
        $this->scfSignalingIPAddress = ($scfSignalingIPAddress InstanceOf IPAddress)
             ? $scfSignalingIPAddress
             : new IPAddress($scfSignalingIPAddress);
        $this->scfSignalingIPAddress->setElementName('scfSignalingIPAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress $scfSignalingIPAddress
     */
    public function getScfSignalingIPAddress()
    {
        return ($this->scfSignalingIPAddress)
            ? $this->scfSignalingIPAddress->getElementValue()
            : null;
    }

    /**
     * 
     */
    public function setScfSignalingPort($scfSignalingPort = null)
    {
        $this->scfSignalingPort = ($scfSignalingPort InstanceOf Port)
             ? $scfSignalingPort
             : new Port($scfSignalingPort);
        $this->scfSignalingPort->setElementName('scfSignalingPort');
        return $this;
    }

    /**
     * 
     * @return Port $scfSignalingPort
     */
    public function getScfSignalingPort()
    {
        return ($this->scfSignalingPort)
            ? $this->scfSignalingPort->getElementValue()
            : null;
    }
}
