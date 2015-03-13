<?php
/**
 * This file is part of http://github.com/LukeBeer/Broadworks_OCIP
 * 
 * (c) 2013-2015 Luke Berezynskyj <eat.lemons@gmail.com>
 */

namespace Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility; 

use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\IMRNTimeoutMilliseconds;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\IPAddress;
use Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\OCISchemaDataTypes\Port;
use Broadworks_OCIP\core\Builder\Types\PrimitiveType;
use Broadworks_OCIP\core\Builder\Types\ComplexInterface;
use Broadworks_OCIP\core\Builder\Types\ComplexType;
use Broadworks_OCIP\core\Response\ResponseOutput;
use Broadworks_OCIP\core\Client\Client;


/**
 * The response to a SystemBroadWorksMobilityGetRequest.
 */
class SystemBroadWorksMobilityGetResponse extends ComplexType implements ComplexInterface
{
    public    $name                      = 'SystemBroadWorksMobilityGetResponse';
    protected $enableLocationServices    = null;
    protected $enableMSRNLookup          = null;
    protected $enableMobileStateChecking = null;
    protected $denyCallOriginations      = null;
    protected $denyCallTerminations      = null;
    protected $imrnTimeoutMillisecnds    = null;
    protected $scfSignalingIPAddress     = null;
    protected $scfSignalingPort          = null;

    /**
     * @return \Broadworks_OCIP\api\Rel_17_sp4_1_197_OCISchemaAS\Services\OCISchemaServiceBroadWorksMobility\SystemBroadWorksMobilityGetResponse $response
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
        if (!$enableLocationServices) return $this;
        $this->enableLocationServices = new PrimitiveType($enableLocationServices);
        $this->enableLocationServices->setName('enableLocationServices');
        return $this;
    }

    /**
     * 
     * @return boolean $enableLocationServices
     */
    public function getEnableLocationServices()
    {
        return $this->enableLocationServices->getValue();
    }

    /**
     * 
     */
    public function setEnableMSRNLookup($enableMSRNLookup = null)
    {
        if (!$enableMSRNLookup) return $this;
        $this->enableMSRNLookup = new PrimitiveType($enableMSRNLookup);
        $this->enableMSRNLookup->setName('enableMSRNLookup');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMSRNLookup
     */
    public function getEnableMSRNLookup()
    {
        return $this->enableMSRNLookup->getValue();
    }

    /**
     * 
     */
    public function setEnableMobileStateChecking($enableMobileStateChecking = null)
    {
        if (!$enableMobileStateChecking) return $this;
        $this->enableMobileStateChecking = new PrimitiveType($enableMobileStateChecking);
        $this->enableMobileStateChecking->setName('enableMobileStateChecking');
        return $this;
    }

    /**
     * 
     * @return boolean $enableMobileStateChecking
     */
    public function getEnableMobileStateChecking()
    {
        return $this->enableMobileStateChecking->getValue();
    }

    /**
     * 
     */
    public function setDenyCallOriginations($denyCallOriginations = null)
    {
        if (!$denyCallOriginations) return $this;
        $this->denyCallOriginations = new PrimitiveType($denyCallOriginations);
        $this->denyCallOriginations->setName('denyCallOriginations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallOriginations
     */
    public function getDenyCallOriginations()
    {
        return $this->denyCallOriginations->getValue();
    }

    /**
     * 
     */
    public function setDenyCallTerminations($denyCallTerminations = null)
    {
        if (!$denyCallTerminations) return $this;
        $this->denyCallTerminations = new PrimitiveType($denyCallTerminations);
        $this->denyCallTerminations->setName('denyCallTerminations');
        return $this;
    }

    /**
     * 
     * @return boolean $denyCallTerminations
     */
    public function getDenyCallTerminations()
    {
        return $this->denyCallTerminations->getValue();
    }

    /**
     * 
     */
    public function setImrnTimeoutMillisecnds($imrnTimeoutMillisecnds = null)
    {
        if (!$imrnTimeoutMillisecnds) return $this;
        $this->imrnTimeoutMillisecnds = ($imrnTimeoutMillisecnds InstanceOf IMRNTimeoutMilliseconds)
             ? $imrnTimeoutMillisecnds
             : new IMRNTimeoutMilliseconds($imrnTimeoutMillisecnds);
        $this->imrnTimeoutMillisecnds->setName('imrnTimeoutMillisecnds');
        return $this;
    }

    /**
     * 
     * @return IMRNTimeoutMilliseconds $imrnTimeoutMillisecnds
     */
    public function getImrnTimeoutMillisecnds()
    {
        return $this->imrnTimeoutMillisecnds->getValue();
    }

    /**
     * 
     */
    public function setScfSignalingIPAddress($scfSignalingIPAddress = null)
    {
        if (!$scfSignalingIPAddress) return $this;
        $this->scfSignalingIPAddress = ($scfSignalingIPAddress InstanceOf IPAddress)
             ? $scfSignalingIPAddress
             : new IPAddress($scfSignalingIPAddress);
        $this->scfSignalingIPAddress->setName('scfSignalingIPAddress');
        return $this;
    }

    /**
     * 
     * @return IPAddress $scfSignalingIPAddress
     */
    public function getScfSignalingIPAddress()
    {
        return $this->scfSignalingIPAddress->getValue();
    }

    /**
     * 
     */
    public function setScfSignalingPort($scfSignalingPort = null)
    {
        if (!$scfSignalingPort) return $this;
        $this->scfSignalingPort = ($scfSignalingPort InstanceOf Port)
             ? $scfSignalingPort
             : new Port($scfSignalingPort);
        $this->scfSignalingPort->setName('scfSignalingPort');
        return $this;
    }

    /**
     * 
     * @return Port $scfSignalingPort
     */
    public function getScfSignalingPort()
    {
        return $this->scfSignalingPort->getValue();
    }
}
